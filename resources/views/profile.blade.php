<x-layouts.dashboard title="Profile | Crest Forwarder Inc.">

    <div x-data="{ savedInfo: false, savedPassword: false }" class="flex flex-col gap-6">

        {{-- Page header --}}
        <div>
            <h2 class="text-xl font-bold text-gray-900">Profile</h2>
            <p class="text-sm text-gray-500 mt-0.5">Manage your account details and preferences.</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-6 items-start">

            {{-- Left: profile summary card --}}
            <div class="bg-white rounded-lg border border-gray-200 px-5 py-6 flex flex-col items-center text-center">
                <div class="h-20 w-20 rounded-full bg-crest-tint text-crest-primary font-bold flex items-center justify-center text-2xl mb-4">
                    DV
                </div>
                <p class="font-semibold text-gray-900">David Sailas Villondo</p>
                <p class="text-sm text-gray-500 mb-4">Cebu Client</p>
                <div class="w-full h-px bg-gray-100 my-2"></div>
                <div class="w-full flex flex-col gap-3 text-left mt-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Client since</span>
                        <span class="text-gray-900 font-medium">Jan 2024</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Home branch</span>
                        <span class="text-gray-900 font-medium">Cebu</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-500">Account type</span>
                        <span class="text-gray-900 font-medium">Individual</span>
                    </div>
                </div>
            </div>

            {{-- Right: forms --}}
            <div class="lg:col-span-2 flex flex-col gap-6">

                {{-- Account information --}}
                <form @submit.prevent="savedInfo = true" novalidate class="bg-white rounded-lg border border-gray-200 p-6 flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-gray-900">Account information</h3>
                        <span x-show="savedInfo" x-cloak x-transition.opacity
                              class="text-xs font-semibold text-green-700 bg-green-50 px-2.5 py-1 rounded-full">Saved</span>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1.5">Full name</label>
                            <input id="full_name" type="text" name="full_name" value="David Sailas Villondo"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-1.5">Company <span class="text-gray-400 font-normal">(optional)</span></label>
                            <input id="company" type="text" name="company" placeholder="Company name"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email address</label>
                            <input id="email" type="email" name="email" value="david.villondo@example.com"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone number</label>
                            <input id="phone" type="tel" name="phone" value="0917 123 4567"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                        </div>
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1.5">Address</label>
                        <input id="address" type="text" name="address" placeholder="Street, Barangay, City"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent">
                    </div>

                    <div>
                        <label for="branch" class="block text-sm font-medium text-gray-700 mb-1.5">Preferred branch</label>
                        <select id="branch" name="branch"
                                class="w-full sm:w-1/2 px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent bg-white">
                            <option>Cebu</option>
                            <option>Manila</option>
                            <option>Davao</option>
                            <option>Cagayan de Oro</option>
                        </select>
                    </div>

                    <div class="flex justify-end pt-1">
                        <button type="submit"
                                class="bg-crest-primary text-white font-semibold px-6 py-2.5 rounded-md hover:bg-crest-primary-dark transition-colors duration-200 text-sm">
                            Save changes
                        </button>
                    </div>
                </form>

                {{-- Security --}}
                <form @submit.prevent="savedPassword = true" novalidate class="bg-white rounded-lg border border-gray-200 p-6 flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-gray-900">Password</h3>
                        <span x-show="savedPassword" x-cloak x-transition.opacity
                              class="text-xs font-semibold text-green-700 bg-green-50 px-2.5 py-1 rounded-full">Updated</span>
                    </div>

                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1.5">Current password</label>
                        <input id="current_password" type="password" name="current_password" autocomplete="current-password"
                               class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent"
                               placeholder="••••••••">
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1.5">New password</label>
                            <input id="new_password" type="password" name="new_password" autocomplete="new-password"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent"
                                   placeholder="••••••••">
                        </div>
                        <div>
                            <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1.5">Confirm new password</label>
                            <input id="confirm_password" type="password" name="confirm_password" autocomplete="new-password"
                                   class="w-full px-4 py-2.5 rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none focus:ring-2 focus:ring-crest-accent focus:border-transparent"
                                   placeholder="••••••••">
                        </div>
                    </div>

                    <div class="flex justify-end pt-1">
                        <button type="submit"
                                class="bg-crest-primary text-white font-semibold px-6 py-2.5 rounded-md hover:bg-crest-primary-dark transition-colors duration-200 text-sm">
                            Update password
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</x-layouts.dashboard>
