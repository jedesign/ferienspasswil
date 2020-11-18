<form wire:submit.prevent="update">
    {{-- TODO[mr]: make responsive (18.11.20 mr) --}}
    {{-- TODO[mr]: add error styling and messages (18.11.20 mr) --}}
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
            <div class="grid grid-cols-4 gap-6">
                <div class="col-span-4 sm:col-span-2">
                    <label for="firstname" class="block text-sm font-medium leading-5 text-gray-700">Firstname</label>
                    <input autofocus
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="firstname"
                           required
                           type="text"
                           wire:model="firstname"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="lastname" class="block text-sm font-medium leading-5 text-gray-700">Lastname</label>
                    <input class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="lastname"
                           required
                           type="text"
                           wire:model="lastname"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="street" class="block text-sm font-medium leading-5 text-gray-700">Street</label>
                    <input class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="street"
                           required
                           type="text"
                           wire:model="street"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="street_number" class="block text-sm font-medium leading-5 text-gray-700">Street
                        Number</label>
                    <input class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="street_number"
                           type="text"
                           wire:model="street_number"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="postcode" class="block text-sm font-medium leading-5 text-gray-700">Postcode</label>
                    <input class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="postcode"
                           required
                           type="text"
                           wire:model="postcode"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="city" class="block text-sm font-medium leading-5 text-gray-700">City</label>
                    <input class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="city"
                           required
                           type="text"
                           wire:model="city"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email address</label>
                    <input class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="email"
                           required
                           type="text"
                           wire:model="email"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">Phone</label>
                    <input id="phone"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           wire:model="phone"
                           type="text"
                    >
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
