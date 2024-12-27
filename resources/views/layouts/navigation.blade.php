<nav x-data="{ open: false }"
    class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 relative top-0 z-50">
    <div class="relative bg-cover bg-center h-80" style="background-image: url('{{ asset('img/core/dashboard/background-login.jpg') }}')">
        <div class="flex flex-col bd-highlight mb-3" style="padding: 30px; height: 100%; justify-self: center; justify-content: space-between;">
            <div class="p-2 bd-highlight" style="padding: 20px">
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6 justify-end">
                    <div x-data="{ open: false }" class="relative">
                        <!-- Trigger -->
                        <button @click="open = !open"
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>

                        <!-- Dropdown Content -->
                        <div x-show="open" @click.outside="open = false"
                            class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg z-50"
                            style="display: none;" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95">
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                {{ __('Profile') }}
                            </a>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">
                                @csrf
                                <button type="submit"
                                    class="text-left w-full text-sm text-gray-700 dark:text-gray-300">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 bd-highlight bg-white rounded-xl">
                <div class="flex ml-5 mr-5" style="justify-content: space-around;">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-6 w-auto fill-current text-gray-800 dark:text-gray-200" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex uppercase">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="dark:text-gray-400">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('portofolio')" :active="request()->routeIs('portofolio')" class="dark:text-gray-400">
                            {{ __('Portofolio') }}
                        </x-nav-link>
                        <x-nav-link :href="route('dashumkm')" :active="request()->routeIs('dashumkm', 'umkm.profil')" class="dark:text-gray-400">
                            {{ __('Database UMKM') }}
                        </x-nav-link>
                        <x-nav-link :href="route('profilebuyer')" :active="request()->routeIs('profilebuyer', 'umkm.profil')" class="dark:text-gray-400">
                            {{ __('Profile Buyer') }}
                        </x-nav-link>
                        <x-nav-link :href="route('advisory')" :active="request()->routeIs('advisory', 'umkm.profil')" class="dark:text-gray-400">
                            {{ __('Advisory') }}
                        </x-nav-link>
                        <x-nav-link :href="route('bizmatch')" :active="request()->routeIs('bizmatch', 'umkm.profil')" class="dark:text-gray-400">
                            {{ __('BizMatch') }}
                        </x-nav-link>
                        <x-nav-link :href="route('event')" :active="request()->routeIs('event', 'umkm.profil')" class="dark:text-gray-400">
                            {{ __('Event') }}
                        </x-nav-link>
                        <x-nav-link :href="route('marcom')" :active="request()->routeIs('marcom', 'umkm.profil')" class="dark:text-gray-400">
                            {{ __('Marcom') }}
                        </x-nav-link>
                        <x-nav-link :href="route('release')" :active="request()->routeIs('release', 'umkm.profil')" class="dark:text-gray-400">
                            {{ __('Data Publikasi') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 flex flex-col">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link :href="route('portofolio')" :active="request()->routeIs('portofolio')">
                {{ __('Portofolio') }}
            </x-nav-link>
            <x-nav-link :href="route('dashumkm')" :active="request()->routeIs('dashumkm', 'umkm.profil')">
                {{ __('Profile UMKM') }}
            </x-nav-link>
            <x-nav-link :href="route('profilebuyer')" :active="request()->routeIs('profilebuyer', 'umkm.profil')">
                {{ __('Profile Buyer') }}
            </x-nav-link>
            <x-nav-link :href="route('advisory')" :active="request()->routeIs('advisory', 'umkm.profil')">
                {{ __('Advisory') }}
            </x-nav-link>
            <x-nav-link :href="route('bizmatch')" :active="request()->routeIs('bizmatch', 'umkm.profil')">
                {{ __('BizMatch') }}
            </x-nav-link>
            <x-nav-link :href="route('event')" :active="request()->routeIs('event', 'umkm.profil')">
                {{ __('Event') }}
            </x-nav-link>
            <x-nav-link :href="route('marcom')" :active="request()->routeIs('marcom', 'umkm.profil')">
                {{ __('Marcom') }}
            </x-nav-link>
            <x-nav-link :href="route('release')" :active="request()->routeIs('release', 'umkm.profil')">
                {{ __('Release') }}
            </x-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
