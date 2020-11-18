<nav x-data="{ open: false }" class="bg-cool-gray-50 border-b shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-12">
            <div class="flex sm:flex-1">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block h-8 w-auto"
                         src="https://tailwindui.com/img/logos/v1/workflow-logo-on-white.svg" alt="{{config('app.name')}}">

                </div>
                <div class="hidden sm:-my-px sm:ml-6 space-x-8 sm:flex sm:justify-between sm:flex-1">


                    <div class="flex space-x-8">
                        <a href="{{route('dashboard.index')}}"
                           class="inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-gray-900 focus:outline-none hover:border-yellow-300 focus:border-yellow-300 transition duration-150 ease-in-out">
                            {{__('Dashboard')}}
                        </a>
                    </div>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-gray-900 focus:outline-none hover:border-yellow-300 focus:border-yellow-300 transition duration-150 ease-in-out">
                        {{ __('Log out') }}
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
        <div class="py-3 border-t border-gray-200">
            <div role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                <a href="{{route('dashboard.index')}}"
                   class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">
                    {{__('Dashboard')}}
                </a>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100 focus:outline-none focus:text-gray-800 focus:bg-gray-100 transition duration-150 ease-in-out"
                   role="menuitem">
                    {{ __('Log out') }}
                </a>

            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
