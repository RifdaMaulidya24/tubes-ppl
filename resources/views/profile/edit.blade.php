<x-app-layout>
    <x-slot name="header">
        <div class="relative overflow-hidden bg-white dark:bg-gray-800 shadow-sm">
            <h2 class="relative font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight py-4 px-6">
                {{ __('Profile Settings') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 min-h-screen relative overflow-hidden">
        <!-- Mathematical Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-50 via-teal-50 to-green-50 dark:from-gray-900 dark:via-emerald-950/20 dark:to-gray-900"></div>
        
        <!-- Mathematical Symbols Pattern -->
        <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="math-pattern" x="0" y="0" width="200" height="200" patternUnits="userSpaceOnUse">
                        <!-- Pi Symbol -->
                        <text x="20" y="40" font-family="serif" font-size="32" fill="currentColor" class="text-emerald-600">π</text>
                        <!-- Sigma Symbol -->
                        <text x="120" y="80" font-family="serif" font-size="36" fill="currentColor" class="text-teal-600">∑</text>
                        <!-- Integral -->
                        <text x="160" y="140" font-family="serif" font-size="40" fill="currentColor" class="text-green-600">∫</text>
                        <!-- Square Root -->
                        <text x="40" y="160" font-family="serif" font-size="34" fill="currentColor" class="text-emerald-600">√</text>
                        <!-- Infinity -->
                        <text x="100" y="180" font-family="serif" font-size="30" fill="currentColor" class="text-teal-600">∞</text>
                        <!-- Delta -->
                        <text x="60" y="100" font-family="serif" font-size="32" fill="currentColor" class="text-green-600">Δ</text>
                        <!-- Alpha -->
                        <text x="150" y="50" font-family="serif" font-size="28" fill="currentColor" class="text-emerald-600">α</text>
                        <!-- Theta -->
                        <text x="10" y="120" font-family="serif" font-size="30" fill="currentColor" class="text-teal-600">θ</text>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#math-pattern)"/>
            </svg>
        </div>

        <!-- Grid Lines (Mathematical Graph) -->
        <div class="absolute inset-0 opacity-[0.02] dark:opacity-[0.03]">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="0.5" class="text-emerald-500"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative z-10">
            <!-- Profile Header Card -->
            <div class="mb-8 bg-white/95 dark:bg-gray-800/95 backdrop-blur-sm shadow-xl sm:rounded-2xl overflow-hidden border border-emerald-100 dark:border-emerald-900/50">
                <div class="h-40 bg-gradient-to-r from-emerald-500/90 via-teal-500/90 to-green-500/90 dark:from-emerald-600/90 dark:via-teal-600/90 dark:to-green-600/90 relative overflow-hidden">
                    <!-- Mathematical Formula Background -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-10">
                        <div class="text-white text-6xl font-serif transform -rotate-12">
                            <span>e^(iπ) + 1 = 0</span>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 text-white/20 text-8xl font-serif">∫</div>
                    <div class="absolute bottom-4 left-4 text-white/20 text-7xl font-serif">∑</div>
                    <div class="absolute top-1/2 left-1/4 text-white/15 text-5xl font-serif">π</div>
                </div>
                <div class="px-6 pb-6 -mt-20 relative">
                    <div class="flex items-end space-x-5">
                        <div class="flex-shrink-0">
                            <div class="h-32 w-32 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 dark:from-emerald-600 dark:to-teal-700 shadow-2xl border-4 border-white dark:border-gray-800 flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 opacity-10">
                                    <svg class="w-full h-full" viewBox="0 0 100 100">
                                        <text x="10" y="30" font-size="20" fill="white">∑</text>
                                        <text x="60" y="70" font-size="18" fill="white">π</text>
                                        <text x="30" y="80" font-size="16" fill="white">∞</text>
                                    </svg>
                                </div>
                                <svg class="h-16 w-16 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0 pb-2">
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-white truncate">
                                {{ Auth::user()->name ?? 'User Name' }}
                            </h1>
                            <p class="text-sm text-gray-600 dark:text-gray-400 flex items-center mt-1">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ Auth::user()->email ?? 'user@example.com' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column - Main Settings -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Profile Information Card -->
                    <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-sm shadow-lg sm:rounded-2xl overflow-hidden border border-emerald-100 dark:border-emerald-900/50 hover:shadow-xl transition-all duration-300">
                        <div class="bg-gradient-to-r from-emerald-50/80 to-teal-50/80 dark:from-emerald-950/30 dark:to-teal-950/30 px-6 py-4 border-b border-emerald-100 dark:border-emerald-900/30 relative overflow-hidden">
                            <div class="absolute right-0 top-0 text-emerald-200/40 dark:text-emerald-800/40 text-6xl font-serif">∂</div>
                            <div class="flex items-center space-x-3 relative z-10">
                                <div class="p-2 bg-emerald-100 dark:bg-emerald-900/50 rounded-lg">
                                    <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Profile Information</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <!-- Update Password Card -->
                    <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-sm shadow-lg sm:rounded-2xl overflow-hidden border border-emerald-100 dark:border-emerald-900/50 hover:shadow-xl transition-all duration-300">
                        <div class="bg-gradient-to-r from-teal-50/80 to-emerald-50/80 dark:from-teal-950/30 dark:to-emerald-950/30 px-6 py-4 border-b border-teal-100 dark:border-teal-900/30 relative overflow-hidden">
                            <div class="absolute right-4 top-0 text-teal-200/40 dark:text-teal-800/40 text-6xl font-serif">∫</div>
                            <div class="flex items-center space-x-3 relative z-10">
                                <div class="p-2 bg-teal-100 dark:bg-teal-900/50 rounded-lg">
                                    <svg class="h-5 w-5 text-teal-600 dark:text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Security Settings</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <!-- Right Column - Stats & Danger Zone -->
                <div class="space-y-6">
                    <!-- Quick Stats Card -->
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-600 dark:from-emerald-600 dark:to-teal-700 shadow-lg sm:rounded-2xl overflow-hidden text-white relative">
                        <div class="absolute inset-0 opacity-10">
                            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                <text x="50%" y="40" text-anchor="middle" font-size="48" fill="white" font-family="serif">Σ</text>
                                <text x="20" y="80%" font-size="36" fill="white" font-family="serif">π</text>
                                <text x="80%" y="70%" font-size="32" fill="white" font-family="serif">∞</text>
                            </svg>
                        </div>
                        <div class="p-6 relative z-10">
                            <h3 class="text-sm font-medium text-white uppercase tracking-wider mb-4 flex items-center">
                                <span class="text-2xl mr-2 font-serif">∑</span> Account Status
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/90">Member Since</span>
                                    <span class="text-sm font-semibold text-white">{{ Auth::user()->created_at->format('M Y') ?? 'Jan 2024' }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/90">Status</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-white/90 text-emerald-700">
                                        Active
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/90">Last Updated</span>
                                    <span class="text-sm font-semibold text-white">{{ Auth::user()->updated_at->diffForHumans() ?? 'Recently' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions Card -->
                    <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-sm shadow-lg sm:rounded-2xl overflow-hidden border border-emerald-100 dark:border-emerald-900/50">
                        <div class="bg-gradient-to-r from-gray-50/80 to-emerald-50/80 dark:from-gray-900 dark:to-emerald-950/30 px-6 py-4 border-b border-gray-200 dark:border-gray-700 relative overflow-hidden">
                            <div class="absolute right-2 top-0 text-emerald-200/30 dark:text-emerald-800/30 text-5xl font-serif">≈</div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white relative z-10">Quick Actions</h3>
                        </div>
                        <div class="p-6 space-y-3">
                            <button class="w-full flex items-center justify-between px-4 py-3 bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-950/30 dark:to-teal-950/30 hover:from-emerald-100 hover:to-teal-100 dark:hover:from-emerald-900/50 dark:hover:to-teal-900/50 rounded-xl transition-all duration-200 group border border-emerald-100 dark:border-emerald-900/30">
                                <span class="text-sm font-medium text-gray-800 dark:text-gray-200">View Activity Log</span>
                                <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                            <button class="w-full flex items-center justify-between px-4 py-3 bg-gradient-to-r from-teal-50 to-emerald-50 dark:from-teal-950/30 dark:to-emerald-950/30 hover:from-teal-100 hover:to-emerald-100 dark:hover:from-teal-900/50 dark:hover:to-emerald-900/50 rounded-xl transition-all duration-200 group border border-teal-100 dark:border-teal-900/30">
                                <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Export Data</span>
                                <svg class="h-5 w-5 text-teal-600 dark:text-teal-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Danger Zone Card -->
                    <div class="bg-white/95 dark:bg-gray-800/95 backdrop-blur-sm shadow-lg sm:rounded-2xl overflow-hidden border-2 border-red-200 dark:border-red-800/50 hover:shadow-xl transition-all duration-300">
                        <div class="bg-gradient-to-r from-red-100/80 to-rose-100/80 dark:from-red-900/30 dark:to-rose-900/30 px-6 py-4 border-b border-red-200 dark:border-red-800/50 relative overflow-hidden">
                            <div class="absolute right-4 top-0 text-red-200/40 dark:text-red-800/30 text-6xl font-serif">!</div>
                            <div class="flex items-center space-x-3 relative z-10">
                                <div class="p-2 bg-red-200 dark:bg-red-800/50 rounded-lg">
                                    <svg class="h-5 w-5 text-red-700 dark:text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Danger Zone</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .group:hover {
            animation: float 2s ease-in-out infinite;
        }
    </style>
</x-app-layout>