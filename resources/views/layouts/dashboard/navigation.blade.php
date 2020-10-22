<nav x-data="{ open: false }" class="bg-cool-gray-50 border-b shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-12">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block h-8 w-auto"
                         src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow logo">

                </div>
                <div class="hidden sm:-my-px sm:ml-6 space-x-8 sm:flex">


                    <a href="#"
                       class="inline-flex items-center px-1 pt-1 border-b-4 border-yellow-300 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
                        Dashboard
                    </a>

                </div>
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <!-- Mobile menu button -->
                <button @click="open = !open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                        x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open"
                        aria-label="Main menu">
                    <svg x-state:on="Menu open" x-state:off="Menu closed"
                         :class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6" stroke="currentColor"
                         fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-state:on="Menu open" x-state:off="Menu closed"
                         :class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6"
                         stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Open" x-state:off="closed"
         :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">


            <a href="#"
               class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">
                Dashboard
            </a>


            <a href="#"
               class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Team
            </a>


            <a href="#"
               class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Projects
            </a>


            <a href="#"
               class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Calendar
            </a>

        </div>
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-4 space-x-3">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                         alt="">
                </div>
                <div>
                    <div class="text-base font-medium leading-6 text-gray-800">Tom Cook</div>
                    <div class="text-sm font-medium leading-5 text-gray-500">tom@example.com</div>
                </div>
            </div>
            <div class="mt-3 space-y-1" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                <a href="#"
                   class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">
                    Your Profile
                </a>

                <a href="#"
                   class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">
                    Settings
                </a>

                <a href="#"
                   class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">
                    Sign out
                </a>

            </div>
        </div>
    </div>
</nav>
