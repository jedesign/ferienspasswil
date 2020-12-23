<form wire:submit.prevent="delete">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Would you like to delete the entry for {{$participant->firstname}} {{$participant->lastname}}?
            </h3>
            <div class="mt-2 max-w-xl text-sm text-gray-500">
                <p>
                    Once you delete the entry for {{$participant->firstname}} {{$participant->lastname}}, you will not be able to restore it.
                </p>
            </div>
            <div class="mt-5 flex justify-between">
                <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">
                    Delete {{$participant->firstname}} {{$participant->lastname}}
                </button>
                <a href="{{route('dashboard.index')}}"
                   class="bg-gray-800 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring-gray active:bg-gray-900 transition duration-150 ease-in-out">
                    Cancel
                </a>
            </div>
        </div>
    </div>
</form>
