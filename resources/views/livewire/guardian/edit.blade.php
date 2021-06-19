<form wire:submit.prevent="update">
    {{-- TODO[mr]: make responsive (18.11.20 mr) --}}
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
            <div class="grid grid-cols-4 gap-6">
                <div class="col-span-4 sm:col-span-2">
                    <label for="firstname" class="block text-sm font-medium leading-5 text-gray-700">Firstname</label>
                    <input autofocus
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="firstname"
                           required
                           type="text"
                           wire:model="firstname"
                    >
                    @error('firstname')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="lastname" class="block text-sm font-medium leading-5 text-gray-700">Lastname</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="lastname"
                        required
                        type="text"
                        wire:model="lastname"
                    >
                    @error('lastname')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="street" class="block text-sm font-medium leading-5 text-gray-700">Street</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="street"
                        required
                        type="text"
                        wire:model="street"
                    >
                    @error('street')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="street_number" class="block text-sm font-medium leading-5 text-gray-700">Street
                        Number</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="street_number"
                        type="text"
                        wire:model="street_number"
                    >
                    @error('street_number')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="postcode" class="block text-sm font-medium leading-5 text-gray-700">Postcode</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="postcode"
                        required
                        type="text"
                        wire:model="postcode"
                    >
                    @error('postcode')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="city" class="block text-sm font-medium leading-5 text-gray-700">City</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="city"
                        required
                        type="text"
                        wire:model="city"
                    >
                    @error('city')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email address</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="email"
                        required
                        type="text"
                        wire:model="email"
                    >
                    @error('email')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="phone" class="block text-sm font-medium leading-5 text-gray-700">Phone</label>
                    <input id="phone"
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           wire:model="phone"
                           type="text"
                    >
                    @error('phone')<p class="mt-2 text-sm text-red-600" id="email-error">{{$message}}</p>@enderror
                </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 sm:px-6 flex justify-between">
            <span class="inline-flex rounded-md shadow-sm">
                <a href="{{route('dashboard.socialservice')}}"
                   class="bg-gray-800 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring-gray active:bg-gray-900 transition duration-150 ease-in-out">
                    Antrag auf Soziale Dienste Status
                </a>
            </span>
            <span class="inline-flex rounded-md shadow-sm">
                <button type="submit"
                        class="bg-gray-800 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring-gray active:bg-gray-900 transition duration-150 ease-in-out">
                    Save
                </button>
            </span>
        </div>
    </div>
</form>
