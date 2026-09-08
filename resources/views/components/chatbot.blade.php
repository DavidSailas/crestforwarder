{{--
    Floating Chat Widget — front-end only for now.
    No backend/API wired up yet: messages typed by the visitor are pushed into
    local Alpine state and get a canned auto-reply after a short delay, purely
    to demonstrate the interaction. Replace `sendMessage()` with a real
    fetch()/API call once a chat backend exists.

    Because this is a traditional multi-page app (full page reload on every
    navigation), the widget's open/closed state and message history are
    persisted to localStorage — otherwise the chat would visually "reset"
    and flicker every time the visitor moves to a different page.

    USAGE: include this once in your shared layout (e.g. resources/views/components/layouts/app.blade.php),
    right before the closing </body> tag, so it appears on every page:

        <x-chatbot />
--}}
<style>
    /* Guarantees x-cloak works even if the project's global CSS doesn't define it,
       preventing the open/closed icon from flashing on page load before Alpine boots. */
    [x-cloak] { display: none !important; }
</style>
<div x-data="{
        open: false,
        messages: [
            { from: 'bot', text: 'Hi! 👋 How can we help you with your shipment today?' }
        ],
        draft: '',
        sending: false,
        storageKey: 'crest_chat_state',

        init() {
            // Restore open/closed state + conversation from localStorage so
            // switching pages doesn't reset (or visually glitch) the widget.
            try {
                const saved = JSON.parse(localStorage.getItem(this.storageKey));
                if (saved) {
                    this.open = !!saved.open;
                    if (Array.isArray(saved.messages) && saved.messages.length) {
                        this.messages = saved.messages;
                    }
                }
            } catch (e) {
                // Corrupt/old data — ignore and start fresh.
            }

            this.$watch('open', () => this.persist());
            this.$watch('messages', () => this.persist());

            this.$nextTick(() => this.scrollToBottom());
        },

        persist() {
            try {
                localStorage.setItem(this.storageKey, JSON.stringify({
                    open: this.open,
                    messages: this.messages
                }));
            } catch (e) {
                // localStorage unavailable (private mode, quota, etc.) — fail silently.
            }
        },

        sendMessage() {
            const text = this.draft.trim();
            if (!text) return;

            this.messages.push({ from: 'user', text });
            this.draft = '';
            this.sending = true;

            // Front-end only placeholder — no backend yet.
            // Replace this timeout with a real API call, e.g.:
            // fetch('/api/chat', { method: 'POST', body: JSON.stringify({ message: text }) })
            //     .then(res => res.json())
            //     .then(data => this.messages.push({ from: 'bot', text: data.reply }));
            setTimeout(() => {
                this.messages.push({
                    from: 'bot',
                    text: 'Thanks for reaching out! This chat is still front-end only for now — a member of our team will follow up with you shortly.'
                });
                this.sending = false;
                this.$nextTick(() => this.scrollToBottom());
            }, 900);

            this.$nextTick(() => this.scrollToBottom());
        },
        scrollToBottom() {
            const el = this.$refs.messageList;
            if (el) el.scrollTop = el.scrollHeight;
        }
     }"
     x-init="init()"
     class="fixed bottom-5 right-5 z-[70]">

    {{-- Floating toggle button --}}
    <button @click="open = !open"
            type="button"
            aria-label="Open chat"
            class="relative w-14 h-14 rounded-full bg-crest-primary text-white shadow-lg flex items-center justify-center hover:bg-crest-primary-dark hover:shadow-xl active:scale-95 transition-all duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-accent focus-visible:ring-offset-2">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8-1.06 0-2.08-.16-3.02-.46L3 21l1.5-4.5C3.55 15.1 3 13.6 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8Z"/>
        </svg>
        <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>

        {{-- Small "online" indicator dot, purely decorative for now --}}
        <span x-show="!open" class="absolute top-0.5 right-0.5 w-3 h-3 rounded-full bg-crest-accent ring-2 ring-white"></span>
    </button>

    {{-- Chat panel --}}
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-3 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-3 scale-95"
         @click.outside="open = false"
         class="absolute bottom-[68px] right-0 w-[340px] sm:w-[380px] max-h-[520px] bg-white rounded-2xl shadow-2xl ring-1 ring-black/5 flex flex-col overflow-hidden origin-bottom-right">

        {{-- Header --}}
        <div class="bg-crest-primary-dark text-white px-5 py-4 flex items-center gap-3 shrink-0">
            <div class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-crest-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8-1.06 0-2.08-.16-3.02-.46L3 21l1.5-4.5C3.55 15.1 3 13.6 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8Z"/>
                </svg>
            </div>
            <div class="min-w-0 flex-1">
                <p class="font-semibold text-sm leading-tight">Crest Forwarder Support</p>
                <p class="text-white/60 text-xs flex items-center gap-1.5 mt-0.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-crest-accent shrink-0"></span>
                    Typically replies within a few minutes
                </p>
            </div>
            <button @click="open = false" type="button" aria-label="Close chat" class="text-white/60 hover:text-white transition-colors shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Message list --}}
        <div x-ref="messageList" class="flex-1 overflow-y-auto px-4 py-4 space-y-3 bg-gray-50" style="scrollbar-width: thin;">
            <template x-for="(msg, i) in messages" :key="i">
                <div class="flex" :class="msg.from === 'user' ? 'justify-end' : 'justify-start'">
                    <div
                        class="max-w-[80%] px-3.5 py-2.5 rounded-2xl text-sm leading-relaxed"
                        :class="msg.from === 'user'
                            ? 'bg-crest-primary text-white rounded-br-md'
                            : 'bg-white text-gray-700 border border-gray-100 rounded-bl-md shadow-sm'"
                        x-text="msg.text">
                    </div>
                </div>
            </template>

            {{-- Typing indicator while waiting for canned reply --}}
            <div x-show="sending" class="flex justify-start">
                <div class="bg-white border border-gray-100 rounded-2xl rounded-bl-md shadow-sm px-4 py-3 flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300 animate-bounce" style="animation-delay: 0ms"></span>
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300 animate-bounce" style="animation-delay: 150ms"></span>
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300 animate-bounce" style="animation-delay: 300ms"></span>
                </div>
            </div>
        </div>

        {{-- Input --}}
        <form @submit.prevent="sendMessage()" class="border-t border-gray-100 p-3 flex items-center gap-2 shrink-0 bg-white">
            <input
                type="text"
                x-model="draft"
                placeholder="Type your message..."
                class="flex-1 text-sm px-3.5 py-2.5 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent transition-shadow duration-200">
            <button type="submit"
                    :disabled="!draft.trim()"
                    class="shrink-0 w-10 h-10 rounded-lg bg-crest-primary text-white flex items-center justify-center hover:bg-crest-primary-dark disabled:opacity-40 disabled:cursor-not-allowed transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-crest-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/>
                </svg>
            </button>
        </form>

    </div>
</div>
