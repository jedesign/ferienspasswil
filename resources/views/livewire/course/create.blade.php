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

                <div class="col-span-2 sm:col-span-1">
                    <label for="beginning_date" class="block text-sm font-medium leading-5 text-gray-700">
                        Beginning Date
                    </label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="beginning_date"
                        required
                        type="date"
                        wire:model="beginning_date"
                    >
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="beginning_time" class="block text-sm font-medium leading-5 text-gray-700">
                        Beginning Time
                    </label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="beginning_time"
                        required
                        type="time"
                        wire:model="beginning_time"
                    >
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <label for="end_date" class="block text-sm font-medium leading-5 text-gray-700">End
                        Date</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="end_date"
                        required
                        type="date"
                        wire:model="end_date"
                    >
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="end_time" class="block text-sm font-medium leading-5 text-gray-700">End Time</label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="end_time"
                        required
                        type="time"
                        wire:model="end_time"
                    >
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <label for="min_participants" class="block text-sm font-medium leading-5 text-gray-700">
                        Min Participants
                    </label>
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

                <div class="col-span-2 sm:col-span-1">
                    <label for="max_participants" class="block text-sm font-medium leading-5 text-gray-700">
                        Max Participants
                    </label>
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

                <div class="col-span-4 sm:col-span-2">
                    <label for="meeting_point" class="block text-sm font-medium leading-5 text-gray-700">
                        Meeting Point
                    </label>
                    <input
                        id="meeting_point"
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        required
                        type="text"
                        wire:model="meeting_point"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="clothes" class="block text-sm font-medium leading-5 text-gray-700">
                        Clothes
                    </label>
                    <input
                        id="clothes"
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        type="text"
                        wire:model="clothes"
                    >
                </div>

                <div class="col-span-4 sm:col-span-2">
                    <label for="bring_alongs" class="block text-sm font-medium leading-5 text-gray-700">
                        Bring Alongs
                    </label>
                    <input
                        id="bring_alongs"
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        type="text"
                        wire:model="bring_alongs"
                    >
                </div>


                <div class="col-span-4 sm:col-span-2">
                    <label for="price" class="block text-sm font-medium leading-5 text-gray-700">
                        Price
                    </label>
                    <input
                        class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                        id="price"
                        required
                        type="number"
                        min="0.00"
                        step="0.05"
                        wire:model="price"
                    >
                </div>

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
