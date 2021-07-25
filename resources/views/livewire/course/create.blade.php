<form wire:submit.prevent="save">
    {{-- TODO[mr]: make responsive (18.11.20 mr) --}}
    {{-- TODO[mr]: add error styling and messages (18.11.20 mr) --}}
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
            <div class="grid grid-cols-4 gap-6">
                <div class="col-span-4">
                    <label for="title" class="block text-sm font-medium leading-5 text-gray-700">Title</label>
                    <input autofocus
                           class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                           id="title"
                           required
                           type="text"
                           wire:model="title"
                    >
                </div>

                <div class="col-span-4">
                    <label for="description"
                           class="block text-sm font-medium leading-5 text-gray-700">Description</label>
                    <div class="rounded-md shadow-sm">
                        <textarea id="description"
                                  rows="3"
                                  class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                  wire:model="description"
                        ></textarea>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="beginning" class="block text-sm font-medium leading-5 text-gray-700">Beginning</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="beginning"
                        required
                        type="date"
                        wire:model="beginning"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="end" class="block text-sm font-medium leading-5 text-gray-700">End</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="end"
                        required
                        type="date"
                        wire:model="end"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="min_participants" class="block text-sm font-medium leading-5 text-gray-700">Min
                        Participants</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="min_participants"
                        required
                        type="number"
                        min="1"
                        step="1"
                        wire:model="min_participants"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="max_participants" class="block text-sm font-medium leading-5 text-gray-700">Max
                        Participants</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="max_participants"
                        required
                        type="number"
                        min="1"
                        step="1"
                        wire:model="max_participants"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="grade_group"
                           class="block text-sm font-medium leading-5 text-gray-700">Grade Group</label>
                    <select id="grade_group"
                            class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                            wire:model="grade_group"
                    >
                        @foreach(\App\Enums\GradeGroup::getConstants() as $grade_group)
                            <option value="{{ $grade_group }}">{{ $grade_group }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- TODO[rw]: add other fields of course  (25.07.21 rw) -->

            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 sm:px-6 flex justify-between">
            <span class="inline-flex rounded-md shadow-sm">
                <a href="{{route('dashboard.index')}}"
                   class="bg-gray-800 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring-gray active:bg-gray-900 transition duration-150 ease-in-out">
                    Cancel
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
