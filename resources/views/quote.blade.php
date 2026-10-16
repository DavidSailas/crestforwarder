<x-layouts.dashboard title="Request a Quote | Crest Forwarder Inc.">

    <div x-data="{
            submitted: false,
            refNumber: '',
            submit() {
                this.refNumber = 'Q-' + Math.floor(1000 + Math.random() * 9000);
                this.submitted = true;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
         }">

        {{-- Page header --}}
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-900">Request a Quote</h2>
            <p class="text-sm text-gray-500 mt-0.5">Tell us about your shipment and we'll get back to you with pricing.</p>
        </div>

        {{-- Confirmation state --}}
        <div x-show="submitted" x-cloak class="bg-white rounded-lg border border-gray-200 px-6 py-10 text-center">
            <div class="mx-auto mb-4 h-12 w-12 rounded-full bg-green-50 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-1.5">Quote request sent</h3>
            <p class="text-sm text-gray-500 max-w-sm mx-auto mb-1">
                Your reference number is <span class="font-semibold text-gray-900" x-text="refNumber"></span>.
            </p>
            <p class="text-sm text-gray-500 max-w-sm mx-auto mb-6">
                Our team will review your request and send a quote to your email within 24 hours.
            </p>
            <div class="flex items-center justify-center gap-3">
                <button type="button" @click="submitted = false"
                        class="px-5 py-2.5 rounded-md border border-gray-300 text-sm font-semibold text-gray-700 hover:bg-gray-50 transition-colors">
                    Submit another request
                </button>
                <a href="{{ route('customer.dashboard') }}"
                   class="px-5 py-2.5 rounded-md bg-crest-primary text-white text-sm font-semibold hover:bg-crest-primary-dark transition-colors">
                    Back to Dashboard
                </a>
            </div>
        </div>

        {{-- Form + info panel --}}
        <div x-show="!submitted" class="grid lg:grid-cols-3 gap-6 items-start">

            <form @submit.prevent="submit" novalidate class="lg:col-span-2 bg-white rounded-lg border border-gray-200 p-6 flex flex-col gap-6">

                {{-- Shipment type --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Shipment type</label>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="shipment_type" value="air" class="peer sr-only" checked>
                            <div class="border border-gray-300 rounded-md px-3 py-3 text-center text-sm font-semibold text-gray-600 peer-checked:border-crest-primary peer-checked:bg-crest-tint peer-checked:text-crest-primary transition-colors">
                                Air Freight
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="shipment_type" value="sea" class="peer sr-only">
                            <div class="border border-gray-300 rounded-md px-3 py-3 text-center text-sm font-semibold text-gray-600 peer-checked:border-crest-primary peer-checked:bg-crest-tint peer-checked:text-crest-primary transition-colors">
                                Sea Freight
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="shipment_type" value="land" class="peer sr-only">
                            <div class="border border-gray-300 rounded-md px-3 py-3 text-center text-sm font-semibold text-gray-600 peer-checked:border-crest-primary peer-checked:bg-crest-tint peer-checked:text-crest-primary transition-colors">
                                Land Transport
                            </div>
                        </label>
                    </div>
                </div>

                {{-- Origin / Destination --}}
                <div class="grid sm:grid-cols-2 gap-5">
                    <div>
                        <label for="origin" class="block text-sm font-medium text-gray-700 mb-1.5">Origin</label>
                        <input id="origin" type="text" name="origin" placeholder="e.g. Cebu City"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="destination" class="block text-sm font-medium text-gray-700 mb-1.5">Destination</label>
                        <input id="destination" type="text" name="destination" placeholder="e.g. Manila"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                    </div>
                </div>

                {{-- Cargo details --}}
                <div>
                    <label for="commodity" class="block text-sm font-medium text-gray-700 mb-1.5">Commodity / description of goods</label>
                    <input id="commodity" type="text" name="commodity" placeholder="e.g. Electronics, furniture, dry goods"
                           class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                </div>

                <div class="grid sm:grid-cols-3 gap-5">
                    <div>
                        <label for="weight" class="block text-sm font-medium text-gray-700 mb-1.5">Weight (kg)</label>
                        <input id="weight" type="number" min="0" step="0.1" name="weight" placeholder="0.0"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="volume" class="block text-sm font-medium text-gray-700 mb-1.5">Volume (CBM)</label>
                        <input id="volume" type="number" min="0" step="0.1" name="volume" placeholder="0.0"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                    </div>
                    <div>
                        <label for="pieces" class="block text-sm font-medium text-gray-700 mb-1.5">No. of pieces</label>
                        <input id="pieces" type="number" min="0" name="pieces" placeholder="0"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label for="pickup_date" class="block text-sm font-medium text-gray-700 mb-1.5">Preferred pickup date</label>
                    <input id="pickup_date" type="date" name="pickup_date"
                           class="w-full sm:w-1/2 px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                </div>

                <div class="h-px bg-gray-100"></div>

                {{-- Contact details --}}
                <div>
                    <p class="text-sm font-semibold text-gray-900 mb-4">Contact details</p>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="contact_name" class="block text-sm font-medium text-gray-700 mb-1.5">Full name</label>
                            <input id="contact_name" type="text" name="contact_name" value="David Sailas Villondo"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                        </div>
                        <div>
                            <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone number</label>
                            <input id="contact_phone" type="tel" name="contact_phone" placeholder="09XX XXX XXXX"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-1.5">Email address</label>
                        <input id="contact_email" type="email" name="contact_email" placeholder="you@company.com"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                    </div>
                    <div class="mt-5">
                        <label for="notes" class="block text-sm font-medium text-gray-700 mb-1.5">Additional notes <span class="text-gray-400 font-normal">(optional)</span></label>
                        <textarea id="notes" name="notes" rows="3" placeholder="Special handling, packaging, or delivery instructions"
                                  class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent resize-none"></textarea>
                    </div>
                </div>

                <button type="submit"
                        class="w-full sm:w-auto self-start bg-crest-primary text-white font-semibold px-8 py-3 rounded-md hover:bg-crest-primary-dark transition-colors duration-200">
                    Submit Request
                </button>
            </form>

            {{-- Side info panel --}}
            <div class="flex flex-col gap-6">
                <div class="bg-white rounded-lg border border-gray-200 px-5 py-5">
                    <h3 class="font-semibold text-gray-900 mb-4">What happens next</h3>
                    <ol class="flex flex-col gap-4">
                        <li class="flex gap-3">
                            <span class="h-6 w-6 rounded-full bg-crest-tint text-crest-primary text-xs font-bold flex items-center justify-center shrink-0">1</span>
                            <p class="text-sm text-gray-600">Our team reviews your shipment details.</p>
                        </li>
                        <li class="flex gap-3">
                            <span class="h-6 w-6 rounded-full bg-crest-tint text-crest-primary text-xs font-bold flex items-center justify-center shrink-0">2</span>
                            <p class="text-sm text-gray-600">We prepare a quote based on route and cargo type.</p>
                        </li>
                        <li class="flex gap-3">
                            <span class="h-6 w-6 rounded-full bg-crest-tint text-crest-primary text-xs font-bold flex items-center justify-center shrink-0">3</span>
                            <p class="text-sm text-gray-600">You'll receive it by email within 24 hours.</p>
                        </li>
                    </ol>
                </div>

                <div class="bg-crest-tint rounded-lg border border-crest-primary/10 px-5 py-5">
                    <h3 class="font-semibold text-gray-900 mb-1.5">Need it sooner?</h3>
                    <p class="text-sm text-gray-600 mb-4">Call our Cebu office and we'll walk you through pricing directly.</p>
                    <p class="text-sm font-semibold text-crest-primary">(032) 266-0685</p>
                </div>
            </div>
        </div>

    </div>

</x-layouts.dashboard>
