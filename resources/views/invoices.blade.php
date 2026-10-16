<x-layouts.dashboard title="Invoices | Crest Forwarder Inc.">

    <div x-data="{
            search: '',
            filter: 'all',
            invoices: [
                { id: 'INV-2026-1042', shipment: 'CFI-2026-08841', issued: 'Sep 3, 2026', due: 'Sep 17, 2026', amount: 18500, status: 'unpaid' },
                { id: 'INV-2026-1038', shipment: 'CFI-2026-08790', issued: 'Aug 28, 2026', due: 'Sep 11, 2026', amount: 24750, status: 'overdue' },
                { id: 'INV-2026-1031', shipment: 'CFI-2026-08655', issued: 'Aug 20, 2026', due: 'Sep 3, 2026',  amount: 9200,  status: 'paid' },
                { id: 'INV-2026-1027', shipment: 'CFI-2026-08602', issued: 'Aug 15, 2026', due: 'Aug 29, 2026', amount: 31400, status: 'paid' },
                { id: 'INV-2026-1019', shipment: 'CFI-2026-08571', issued: 'Aug 5, 2026',  due: 'Aug 19, 2026', amount: 12300, status: 'paid' },
                { id: 'INV-2026-1012', shipment: 'CFI-2026-08519', issued: 'Jul 30, 2026', due: 'Aug 13, 2026', amount: 7600,  status: 'paid' },
            ],
            get filtered() {
                return this.invoices.filter(i => {
                    const matchesFilter = this.filter === 'all' || i.status === this.filter;
                    const q = this.search.trim().toLowerCase();
                    const matchesSearch = !q || i.id.toLowerCase().includes(q) || i.shipment.toLowerCase().includes(q);
                    return matchesFilter && matchesSearch;
                });
            },
            get totalDue() {
                return this.invoices.filter(i => i.status !== 'paid').reduce((sum, i) => sum + i.amount, 0);
            },
            get overdueCount() {
                return this.invoices.filter(i => i.status === 'overdue').length;
            },
            get paidThisMonth() {
                return this.invoices.filter(i => i.status === 'paid').reduce((sum, i) => sum + i.amount, 0);
            },
            formatCurrency(n) {
                return '\u20b1' + n.toLocaleString('en-PH');
            },
            statusLabel(status) {
                return { paid: 'Paid', unpaid: 'Unpaid', overdue: 'Overdue' }[status];
            },
            statusClasses(status) {
                return {
                    paid: 'bg-green-50 text-green-700',
                    unpaid: 'bg-amber-50 text-amber-700',
                    overdue: 'bg-red-50 text-red-700',
                }[status];
            }
         }"
         class="flex flex-col gap-6">

        {{-- Page header --}}
        <div>
            <h2 class="text-xl font-bold text-gray-900">Invoices</h2>
            <p class="text-sm text-gray-500 mt-0.5">View and manage your billing history with Crest Forwarder.</p>
        </div>

        {{-- Balance summary --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-white rounded-lg border border-gray-200 px-5 py-4">
                <p class="text-xs font-medium text-gray-500 mb-1">Total Balance Due</p>
                <p class="text-2xl font-bold text-gray-900" x-text="formatCurrency(totalDue)"></p>
            </div>
            <div class="bg-white rounded-lg border border-gray-200 px-5 py-4">
                <p class="text-xs font-medium text-gray-500 mb-1">Overdue Invoices</p>
                <p class="text-2xl font-bold text-gray-900" x-text="overdueCount"></p>
            </div>
            <div class="bg-white rounded-lg border border-gray-200 px-5 py-4">
                <p class="text-xs font-medium text-gray-500 mb-1">Paid to Date</p>
                <p class="text-2xl font-bold text-gray-900" x-text="formatCurrency(paidThisMonth)"></p>
            </div>
        </div>

        {{-- Controls: search + status filter --}}
        <div class="flex flex-col sm:flex-row sm:items-center gap-3 bg-white rounded-lg border border-gray-200 p-3">
            <div class="relative flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.3-4.3M19 11a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z"/>
                </svg>
                <input type="text" x-model="search" placeholder="Search by invoice or shipment number"
                       class="w-full pl-9 pr-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
            </div>
            <div class="flex items-center gap-1.5 flex-wrap">
                <button type="button" @click="filter = 'all'"
                        :class="filter === 'all' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    All
                </button>
                <button type="button" @click="filter = 'unpaid'"
                        :class="filter === 'unpaid' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    Unpaid
                </button>
                <button type="button" @click="filter = 'overdue'"
                        :class="filter === 'overdue' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    Overdue
                </button>
                <button type="button" @click="filter = 'paid'"
                        :class="filter === 'paid' ? 'bg-crest-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                        class="px-3.5 py-2 rounded-md text-sm font-semibold transition-colors">
                    Paid
                </button>
            </div>
        </div>

        {{-- Invoices table --}}
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-gray-500 border-b border-gray-100">
                            <th class="px-5 py-3 font-medium">Invoice No.</th>
                            <th class="px-5 py-3 font-medium">Shipment</th>
                            <th class="px-5 py-3 font-medium">Issued</th>
                            <th class="px-5 py-3 font-medium">Due</th>
                            <th class="px-5 py-3 font-medium">Amount</th>
                            <th class="px-5 py-3 font-medium">Status</th>
                            <th class="px-5 py-3 font-medium text-right">Invoice</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <template x-for="i in filtered" :key="i.id">
                            <tr>
                                <td class="px-5 py-3.5 font-medium text-gray-900" x-text="i.id"></td>
                                <td class="px-5 py-3.5 text-gray-600" x-text="i.shipment"></td>
                                <td class="px-5 py-3.5 text-gray-600" x-text="i.issued"></td>
                                <td class="px-5 py-3.5 text-gray-600" x-text="i.due"></td>
                                <td class="px-5 py-3.5 text-gray-900 font-medium" x-text="formatCurrency(i.amount)"></td>
                                <td class="px-5 py-3.5">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold"
                                          :class="statusClasses(i.status)"
                                          x-text="statusLabel(i.status)"></span>
                                </td>
                                <td class="px-5 py-3.5 text-right">
                                    <a href="#" class="text-crest-primary font-semibold hover:underline">Download</a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>

            {{-- Empty state --}}
            <div x-show="filtered.length === 0" x-cloak class="px-5 py-12 text-center">
                <p class="text-sm text-gray-500">No invoices match your search or filter.</p>
            </div>
        </div>

    </div>

</x-layouts.dashboard>
