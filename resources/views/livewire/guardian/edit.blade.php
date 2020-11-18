<form wire:submit.prevent="update">
    <div>
        <input type="text" wire:model="lastname">
        <input type="text" wire:model="street">
        <input type="text" wire:model="street_number">
        <input type="text" wire:model="postcode">
        <input type="text" wire:model="city">
        <input type="text" wire:model="phone">
        <input type="text" wire:model="email">

        <input type="submit" value="Speichern">
    </div>
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
            <div class="grid grid-cols-4 gap-6">
                <div class="col-span-4 sm:col-span-2">
                    <label for="firstname" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                    <input id="firstname"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           wire:model="firstname"
                           type="text"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                    <input id="last_name"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="email_address" class="block text-sm font-medium leading-5 text-gray-700">Email
                        address</label>
                    <input id="email_address"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>

                <div class="col-span-4 sm:col-span-1">
                    <label for="expiration_date" class="block text-sm font-medium leading-5 text-gray-700">Expration
                        date</label>
                    <input id="expiration_date"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           placeholder="MM / YY">
                </div>

                <div class="col-span-4 sm:col-span-1">
                    <label for="security_code"
                           class="flex items-center space-x-1 text-sm font-medium leading-5 text-gray-700">
                        <span>Security code</span>
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-300" aria-hidden="true"
                             x-description="Heroicon name: question-mark-circle" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </label>
                    <input id="security_code"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Country /
                        Region</label>
                    <select id="country"
                            class="form-select mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                    </select>
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="postal_code" class="block text-sm font-medium leading-5 text-gray-700">ZIP /
                        Postal</label>
                    <input id="postal_code"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <span class="inline-flex rounded-md shadow-sm">
                  <button type="submit"
                          class="bg-gray-800 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray active:bg-gray-900 transition duration-150 ease-in-out">
                    Save
                  </button>
                </span>
        </div>
    </div>
</form>
