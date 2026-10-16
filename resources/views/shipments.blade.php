<x-layouts.dashboard title="My Shipments | Crest Forwarder Inc.">

    <div x-data="{
            search: '',
            filter: 'all',
            shipments: [
                { id: 'CFI-2026-08841', origin: 'Manila', destination: 'Cebu',  mode: 'Sea Freight',  eta: 'Sep 10, 2026', status: 'in_transit' },
                { id: 'CFI-2026-08790', origin: 'Davao',  destination: 'Manila', mode: 'Air Freight',  eta: 'Sep 9, 2026',  status: 'awaiting'   },
                { id: 'CFI-2026-08761', origin: 'Cebu',   destination: 'Manila', mode: 'Land Transport', eta: 'Sep 8, 2026', status: 'in_transit' },
                { id: 'CFI-2026-08655', origin: 'CDO',    destination: 'Cebu',   mode: 'Sea Freight',  eta: 'Sep 6, 2026',  status: 'delivered'  },
                { id: 'CFI-2026-08602', origin: 'Manila', destination: 'Davao',  mode: 'Air Freight',  eta: 'Sep 3, 2026',  status: 'delivered'  },
                { id: 'CFI-2026-08571', origin: 'Cebu',   destination: 'CDO',    mode: 'Sea Freight',  eta: 'Aug 30, 2026', status: 'delivered'  },
                { id: 'CFI-2026-08519', origin: 'Manila', destination: 'Cebu',   mode: 'Land Transport', eta: 'Aug 27, 2026', status: 'delivered' },
                { id: 'CFI-2026-08488', origin: 'Davao',  destination: 'Cebu',   mode: 'Air Freight',  eta: 'Aug 24, 2026', status: 'delivered'  },
            ],
            get filtered() {
                return this.shipments.filter(s => {
                    const matchesFilter = this.filter === 'all' || s.status === this.filter;
                    const q = this.search.trim().toLowerCase();
                    const matchesSearch = !q || s.id.toLowerCase().includes(q)
                        || s.origin.toLowerCase().includes(q)
                        || s.destination.toLowerCase().includes(q);
                    return matchesFilter && matchesSearch;
                });
            },
            statusLabel(status) {
                return { in_transit: 'In Transit', awaiting: 'Awaiting Pickup', delivered: 'Delivered' }[status];
            },
            statusClasses(status) {
                return {
                    in_transit: 'bg-blue-50 text-blue-700',
                    awaiting: 'bg-amber-50 text-amber-700',
                    delivered: 'bg-green-50 text-green-700',
                }[status];
            }
         }"
         class="flex flex-col gap-6">

        {{-- Page header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-xl font-bold text-gray-900">My Shipments</h2>
                <p class="text-sm text-gray-500 mt-0.5">Track and manage every shipment on your account.</p>
            </div>
            <a href="{{ route('customer.quote') }}" class="inline-flex items-center justify-center gap-2 bg-crest-primary text-white font-semibold px-5 py-2.5 rounded-md hover:bg-crest-primary-dark transition-colors duration-200 text-sm shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>
                Request a Quote
            </a>
        </div>

        {{-- Controls: search + status filter --}}
        <div class="flex flex-col sm:flex-row sm:items-center gap-3 bg-white rounded-lg border border-gray-200 p-3">
            <div class="relative flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.3-4.3M19 11a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"/>
                </svg>
                <input type="text" x-model="search" placeholder="Search by tracking number or route"
                       class="w-full pl-9 pr-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
            </div>
            <div class="flex items-center gap-1.5 flex-wrap">
                <button type="button" @click="filter = 'all'"
                        :class="filter === 'all' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    All
                </button>
                <button type="button" @click="filter = 'in_transit'"
                        :class="filter === 'in_transit' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    In Transit
                </button>
                <button type="button" @click="filter = 'awaiting'"
                        :class="filter === 'awaiting' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    Awaiting Pickup
                </button>
                <button type="button" @click="filter = 'delivered'"
                        :class="filter === 'delivered' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    Delivered
                </button>
            </div>
        </div>

        {{-- Shipments table --}}
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-gray-500 border-b border-gray-100">
                            <th class="px-5 py-3 font-medium">Tracking No.</th>
                            <th class="px-5 py-3 font-medium">Route</th>
                            <th class="px-5 py-3 font-medium">Mode</th>
                            <th class="px-5 py-3 font-medium">ETA</th>
                            <th class="px-5 py-3 font-medium">Status</th>
                            <th class="px-5 py-3 font-medium text-right">Details</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <template x-for="s in filtered" :key="s.id">
                            <tr>
                                <td class="px-5 py-3.5 font-medium text-gray-900" x-text="s.id"></td>
                                <td class="px-5 py-3.5 text-gray-600" x-text="s.origin + ' \u2192 ' + s.destination"></td>
                                <td class="px-5 py-3.5 text-gray-600" x-text="s.mode"></td>
                                <td class="px-5 py-3.5 text-gray-600" x-text="s.eta"></td>
                                <td class="px-5 py-3.5">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold"
                                          :class="statusClasses(s.status)"
                                          x-text="statusLabel(s.status)"></span>
                                </td>
                                <td class="px-5 py-3.5 text-right">
                                    <a href="#" class="text-crest-primary font-semibold hover:underline">View</a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>

            {{-- Empty state --}}
            <div x-show="filtered.length === 0" x-cloak class="px-5 py-12 text-center">
                <p class="text-sm text-gray-500">No shipments match your search or filter.</p>
            </div>
        </div>

    </div>

</x-layouts.dashboard>
