<div x-data="{modalOpen:false}">
            <span @click="modalOpen = true"
                  class="absolute top-0 right-0 w-8 h-8 mr-3 mt-14 text-gray-900 p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors duration-150 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                </svg>
            </span>
    <x-participant.delete-modal :participant="$participant"/>
</div>
