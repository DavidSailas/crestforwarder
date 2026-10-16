<x-layouts.dashboard title="Dashboard | Crest Forwarder Inc.">

    {{-- Hero: quick track --}}
    <div class="rounded-lg bg-crest-primary px-6 py-8 sm:px-10 sm:py-9 border-b-2 border-crest-accent">
        <div class="max-w-2xl">
            <p class="text-white/60 text-xs font-semibold uppercase tracking-wide mb-3">Track a shipment</p>
            <h2 class="text-2xl sm:text-[26px] font-bold text-white mb-6 leading-snug">
                Where's your cargo right now?
            </h2>
            <div class="flex flex-col sm:flex-row gap-3">
                <input type="text" placeholder="Enter tracking number, e.g. CFI-2026-08841"
                       class="w-full sm:flex-1 px-4 py-3 rounded-md border-0 text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent">
                <button type="button"
                        class="shrink-0 bg-crest-accent text-crest-primary-dark font-semibold px-6 py-3 rounded-md hover:brightness-95 transition-all duration-200">
                    Track
                </button>
            </div>
        </div>
    </div>

    {{-- Stat tiles --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg border border-gray-200 px-5 py-4">
            <p class="text-xs font-medium text-gray-500 mb-1">In Transit</p>
            <p class="text-2xl font-bold text-gray-900">4</p>
        </div>
        <div class="bg-white rounded-lg border border-gray-200 px-5 py-4">
            <p class="text-xs font-medium text-gray-500 mb-1">Awaiting Pickup</p>
            <p class="text-2xl font-bold text-gray-900">1</p>
        </div>
        <div class="bg-white rounded-lg border border-gray-200 px-5 py-4">
            <p class="text-xs font-medium text-gray-500 mb-1">Delivered (30 days)</p>
            <p class="text-2xl font-bold text-gray-900">12</p>
        </div>
        <div class="bg-white rounded-lg border border-gray-200 px-5 py-4">
            <p class="text-xs font-medium text-gray-500 mb-1">Open Quotes</p>
            <p class="text-2xl font-bold text-gray-900">2</p>
        </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">

        {{-- Recent shipments --}}
        <div class="lg:col-span-2 bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="flex items-center justify-between px-5 py-4 border-b border-gray-200">
                <h3 class="font-semibold text-gray-900">Recent shipments</h3>
                <a href="#" class="text-sm text-crest-primary font-semibold hover:underline">View all</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-gray-500 border-b border-gray-100">
                            <th class="px-5 py-3 font-medium">Tracking No.</th>
                            <th class="px-5 py-3 font-medium">Route</th>
                            <th class="px-5 py-3 font-medium">ETA</th>
                            <th class="px-5 py-3 font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <td class="px-5 py-3.5 font-medium text-gray-900">CFI-2026-08841</td>
                            <td class="px-5 py-3.5 text-gray-600">Manila &rarr; Cebu</td>
                            <td class="px-5 py-3.5 text-gray-600">Sep 10, 2026</td>
                            <td class="px-5 py-3.5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700">In Transit</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-3.5 font-medium text-gray-900">CFI-2026-08790</td>
                            <td class="px-5 py-3.5 text-gray-600">Davao &rarr; Manila</td>
                            <td class="px-5 py-3.5 text-gray-600">Sep 9, 2026</td>
                            <td class="px-5 py-3.5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700">Awaiting Pickup</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-3.5 font-medium text-gray-900">CFI-2026-08655</td>
                            <td class="px-5 py-3.5 text-gray-600">CDO &rarr; Cebu</td>
                            <td class="px-5 py-3.5 text-gray-600">Sep 6, 2026</td>
                            <td class="px-5 py-3.5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-700">Delivered</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-3.5 font-medium text-gray-900">CFI-2026-08602</td>
                            <td class="px-5 py-3.5 text-gray-600">Manila &rarr; Davao</td>
                            <td class="px-5 py-3.5 text-gray-600">Sep 3, 2026</td>
                            <td class="px-5 py-3.5">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-700">Delivered</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Side column: quote CTA + activity --}}
        <div class="flex flex-col gap-6">
            <div class="bg-crest-tint rounded-lg border border-crest-primary/10 px-5 py-5">
                <h3 class="font-semibold text-gray-900 mb-1.5">Need to ship something new?</h3>
                <p class="text-sm text-gray-600 mb-4">Get a quote for your next shipment in a few minutes.</p>
                <a href="{{ route('customer.quote') }}" class="inline-flex items-center justify-center w-full bg-crest-primary text-white font-semibold py-2.5 rounded-md hover:bg-crest-primary-dark transition-colors duration-200 text-sm">
                    Request a quote
                </a>
            </div>

            <div class="bg-white rounded-lg border border-gray-200 px-5 py-5">
                <h3 class="font-semibold text-gray-900 mb-4">Recent activity</h3>
                <ul class="flex flex-col gap-4">
                    <li class="flex gap-3">
                        <div class="mt-1 h-2 w-2 rounded-full bg-crest-accent shrink-0"></div>
                        <div>
                            <p class="text-sm text-gray-800">CFI-2026-08841 left Manila hub</p>
                            <p class="text-xs text-gray-400">2 hours ago</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-1 h-2 w-2 rounded-full bg-gray-300 shrink-0"></div>
                        <div>
                            <p class="text-sm text-gray-800">Quote #Q-1042 was sent to you</p>
                            <p class="text-xs text-gray-400">Yesterday</p>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-1 h-2 w-2 rounded-full bg-gray-300 shrink-0"></div>
                        <div>
                            <p class="text-sm text-gray-800">CFI-2026-08655 delivered</p>
                            <p class="text-xs text-gray-400">2 days ago</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</x-layouts.dashboard>
