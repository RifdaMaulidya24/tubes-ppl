<nav x-data="{ open: false }" 
     class="backdrop-blur-xl bg-[#0f1a2bb3]/40 border-b border-gray-700 text-white shadow-lg">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Left Section -->
            <div class="flex items-center space-x-10">
                
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <x-application-logo class="block h-9 w-auto" />
                    <span class="font-semibold text-lg tracking-wide text-white">Dashboard</span>
                </a>

                <!-- Desktop Navigation Links -->
                <div class="hidden sm:flex space-x-6 text-sm font-medium">
                    <x-nav-link :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        class="text-gray-300 hover:text-white duration-200 hover:tracking-wide">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- User Dropdown -->
            <div class="hidden sm:flex sm:items-center">

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="rounded-md px-4 py-2 bg-[#1a253a] border border-gray-600 hover:border-[#0ef] hover:text-[#0ef] transition duration-300 flex items-center gap-2">
                            <span>{{ Auth::user()->name }}</span> 
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" 
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                                      clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="hover:text-[#0ef] transition">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" 
                                onclick="event.preventDefault(); this.closest('form').submit();" 
                                class="hover:text-red-400 transition">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile Menu Toggle -->
            <button @click="open = ! open" 
                class="sm:hidden text-gray-300 hover:text-white transition">
                <svg class="h-7 w-7" stroke="currentColor" viewBox="0 0 24 24" fill="none">
                    <path :class="{'hidden': open, 'block': ! open}" class="block"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'block': open}" class="hidden"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}" 
         class="hidden sm:hidden bg-[#162233] border-t border-gray-700">

        <!-- Links -->
        <div class="py-3 space-y-2 text-sm">
            <x-responsive-nav-link :href="route('dashboard')" 
                :active="request()->routeIs('dashboard')"
                class="text-white hover:text-[#0ef] transition">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Profile + Logout -->
        <div class="border-t border-gray-700 py-4 px-4">
            <div class="text-white font-semibold">{{ Auth::user()->name }}</div>
            <div class="text-gray-400 text-sm">{{ Auth::user()->email }}</div>

            <div class="mt-3 space-y-2">
                <x-responsive-nav-link :href="route('profile.edit')" 
                    class="text-white hover:text-[#0ef] transition">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" 
                        onclick="event.preventDefault(); this.closest('form').submit();" 
                        class="text-white hover:text-red-400 transition">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
