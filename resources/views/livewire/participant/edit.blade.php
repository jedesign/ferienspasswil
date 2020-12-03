<form wire:submit.prevent="update">
    {{-- TODO[mr]: make responsive (18.11.20 mr) --}}
    {{-- TODO[mr]: add error styling and messages (18.11.20 mr) --}}
    {{-- TODO[mr]: add allergies (18.11.20 mr) --}}

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
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="birthdate" class="block text-sm font-medium leading-5 text-gray-700">Birthdate</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="birthdate"
                        required
                        type="date"
                        wire:model="birthdate"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="gender" class="block text-sm font-medium leading-5 text-gray-700">Gender</label>
                    <select id="gender"
                            class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            wire:model="gender"
                    >
                        <option value="m">männlich</option>
                        <option value="f">weiblich</option>
                    </select>
                </div>
                <div class="col-span-4 sm:col-span-2">
                    <label for="school_grade" class="block text-sm font-medium leading-5 text-gray-700">School grade</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="school_grade"
                        required
                        type="number"
                        min="1"
                        max="6"
                        step="1"
                        wire:model="school_grade"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <div class="mt-6">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input id="photos_allowed" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" wire:model="photos_allowed">
                            </div>
                            <div class="ml-3 text-sm leading-5">
                                <label for="photos_allowed" class="font-medium text-gray-700">Photos allowed</label>
                                <p class="text-gray-500">It is allowed to take pictures of {{$firstname}}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <label for="note" class="block text-sm font-medium leading-5 text-gray-700">Note</label>
                    <div class="rounded-md shadow-sm">
                        <textarea id="note"
                                  rows="3"
                                  class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                  wire:model="note"
                        ></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <span class="inline-flex rounded-md shadow-sm">
                  <button type="submit"
                          class="bg-gray-800 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring-gray active:bg-gray-900 transition duration-150 ease-in-out">
                    Save
                  </button>
                </span>
        </div>
    </div>
</form>
