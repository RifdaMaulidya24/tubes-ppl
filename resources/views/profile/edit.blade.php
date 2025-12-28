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
                        <text x="20" y="40" font-family="serif" font-size="32" fill="currentColor" class="text-emerald-600">π</text>
                        <text x="120" y="80" font-family="serif" font-size="36" fill="currentColor" class="text-teal-600">∑</text>
                        <text x="160" y="140" font-family="serif" font-size="40" fill="currentColor" class="text-green-600">∫</text>
                        <text x="40" y="160" font-family="serif" font-size="34" fill="currentColor" class="text-emerald-600">√</text>
                        <text x="100" y="180" font-family="serif" font-size="30" fill="currentColor" class="text-teal-600">∞</text>
                        <text x="60" y="100" font-family="serif" font-size="32" fill="currentColor" class="text-green-600">Δ</text>
                        <text x="150" y="50" font-family="serif" font-size="28" fill="currentColor" class="text-emerald-600">α</text>
                        <text x="10" y="120" font-family="serif" font-size="30" fill="currentColor" class="text-teal-600">θ</text>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#math-pattern)"/>
            </svg>
        </div>

        <!-- Grid Lines -->
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
            <!-- Success Notification -->
            @if (session('status') === 'profile-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="mb-6 bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm font-medium text-emerald-800 dark:text-emerald-200">
                            {{ __('Profile updated successfully!') }}
                        </p>
                    </div>
                </div>
            @endif

            @if (session('status') === 'password-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="mb-6 bg-emerald-50 dark:bg-emerald-900/20 border-l-4 border-emerald-500 p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm font-medium text-emerald-800 dark:text-emerald-200">
                            {{ __('Password changed successfully!') }}
                        </p>
                    </div>
                </div>
            @endif

            <!-- Profile Header Card -->
            <div class="mb-8 bg-white/95 dark:bg-gray-800/95 backdrop-blur-sm shadow-xl sm:rounded-2xl overflow-hidden border border-emerald-100 dark:border-emerald-900/50">
                <div class="h-40 bg-gradient-to-r from-emerald-500/90 via-teal-500/90 to-green-500/90 dark:from-emerald-600/90 dark:via-teal-600/90 dark:to-green-600/90 relative overflow-hidden">
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
                                @if(Auth::user()->profile_photo_path)
                                    <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" alt="Profile Photo" class="h-full w-full object-cover">
                                @else
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
                                @endif
                            </div>
                        </div>
                        <div class="flex-1 min-w-0 pb-2">
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-white truncate">
                                {{ Auth::user()->name }}
                            </h1>
                            <p class="text-sm text-gray-600 dark:text-gray-400 flex items-center mt-1">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ Auth::user()->email }}
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
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" x-data="{ photoPreview: null }">
                                @csrf
                                @method('PATCH')

                                <!-- Profile Photo Upload -->
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                                        {{ __('Profile Photo') }}
                                    </label>
                                    
                                    <div class="flex items-center space-x-6">
                                        <!-- Current/Preview Photo -->
                                        <div class="shrink-0">
                                            <div class="h-24 w-24 rounded-xl overflow-hidden bg-gray-100 dark:bg-gray-700 border-2 border-gray-200 dark:border-gray-600">
                                                <img x-show="photoPreview" :src="photoPreview" class="h-full w-full object-cover" />
                                                @if(Auth::user()->profile_photo_path)
                                                    <img x-show="!photoPreview" src="{{ Storage::url(Auth::user()->profile_photo_path) }}" class="h-full w-full object-cover" />
                                                @else
                                                    <div x-show="!photoPreview" class="h-full w-full flex items-center justify-center bg-gradient-to-br from-emerald-500 to-teal-600">
                                                        <svg class="h-12 w-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                        </svg>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Upload Button -->
                                        <div class="flex-1">
                                            <input type="file" name="profile_photo" id="profile_photo" accept="image/*" class="hidden"
                                                @change="
                                                    const file = $event.target.files[0];
                                                    if (file) {
                                                        const reader = new FileReader();
                                                        reader.onload = (e) => photoPreview = e.target.result;
                                                        reader.readAsDataURL(file);
                                                    }
                                                ">
                                            <label for="profile_photo" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 cursor-pointer">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                                {{ __('Select New Photo') }}
                                            </label>
                                            <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                                                JPG, PNG or GIF. Max 2MB.
                                            </p>
                                        </div>
                                    </div>

                                    @error('profile_photo')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Name -->
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('Name') }}
                                    </label>
                                    <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" required
                                        class="w-full px-4 py-2.5 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition duration-150">
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('Email Address') }}
                                    </label>
                                    <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" required
                                        class="w-full px-4 py-2.5 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition duration-150">
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                    @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! Auth::user()->hasVerifiedEmail())
                                        <p class="mt-2 text-sm text-yellow-600 dark:text-yellow-400">
                                            {{ __('Your email address is unverified.') }}
                                        </p>
                                    @endif
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex items-center justify-end space-x-3">
                                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-lg font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        {{ __('Cancel') }}
                                    </a>
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-emerald-600 to-teal-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:from-emerald-700 hover:to-teal-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        {{ __('Save Changes') }}
                                    </button>
                                </div>
                            </form>
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
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Change Password</h3>
                            </div>
                        </div>
                        <div class="p-6">
                            <form method="POST" action="{{ route('password.update') }}" x-data="{ 
                                currentPassword: '',
                                newPassword: '',
                                passwordStrength: 0,
                                getStrength() {
                                    let strength = 0;
                                    if (this.newPassword.length >= 8) strength++;
                                    if (/[a-z]/.test(this.newPassword) && /[A-Z]/.test(this.newPassword)) strength++;
                                    if (/[0-9]/.test(this.newPassword)) strength++;
                                    if (/[^a-zA-Z0-9]/.test(this.newPassword)) strength++;
                                    this.passwordStrength = strength;
                                }
                            }">
                                @csrf
                                @method('PUT')

                                <!-- Current Password -->
                                <div class="mb-4">
                                    <label for="current_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('Current Password') }}
                                    </label>
                                    <input type="password" name="current_password" id="current_password" x-model="currentPassword" required autocomplete="current-password"
                                        class="w-full px-4 py-2.5 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-teal-500 focus:border-transparent transition duration-150">
                                    @error('current_password')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- New Password -->
                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('New Password') }}
                                    </label>
                                    <input type="password" name="password" id="password" x-model="newPassword" @input="getStrength()" required autocomplete="new-password"
                                        class="w-full px-4 py-2.5 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-teal-500 focus:border-transparent transition duration-150">
                                    
                                    <!-- Password Strength Indicator -->
                                    <div class="mt-3" x-show="newPassword.length > 0">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-xs font-medium text-gray-600 dark:text-gray-400">Password Strength:</span>
                                            <span class="text-xs font-semibold" 
                                                :class="{
                                                    'text-red-600': passwordStrength <= 1,
                                                    'text-yellow-600': passwordStrength === 2,
                                                    'text-emerald-600': passwordStrength >= 3
                                                }">
                                                <span x-show="passwordStrength <= 1">Weak</span>
                                                <span x-show="passwordStrength === 2">Medium</span>
                                                <span x-show="passwordStrength === 3">Good</span>
                                                <span x-show="passwordStrength === 4">Strong</span>
                                            </span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="h-2 rounded-full transition-all duration-300"
                                                :style="`width: ${passwordStrength * 25}%`"
                                                :class="{
                                                    'bg-red-500': passwordStrength <= 1,
                                                    'bg-yellow-500': passwordStrength === 2,
                                                    'bg-emerald-500': passwordStrength >= 3
                                                }">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Password Requirements -->
                                    <div class="mt-3 space-y-2">
                                        <p class="text-xs text-gray-600 dark:text-gray-400 font-medium">Password must contain:</p>
                                        <ul class="text-xs space-y-1">
                                            <li class="flex items-center" :class="newPassword.length >= 8 ? 'text-emerald-600 dark:text-emerald-400' : 'text-gray-500 dark:text-gray-500'">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                At least 8 characters
                                            </li>
                                            <li class="flex items-center" :class="/[a-z]/.test(newPassword) && /[A-Z]/.test(newPassword) ? 'text-emerald-600 dark:text-emerald-400' : 'text-gray-500 dark:text-gray-500'">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                Uppercase and lowercase letters
                                            </li>
                                            <li class="flex items-center" :class="/[0-9]/.test(newPassword) ? 'text-emerald-600 dark:text-emerald-400' : 'text-gray-500 dark:text-gray-500'">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                At least one number
                                            </li>
                                            <li class="flex items-center" :class="/[^a-zA-Z0-9]/.test(newPassword) ? 'text-emerald-600 dark:text-emerald-400' : 'text-gray-500 dark:text-gray-500'">
                                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                At least one special character
                                            </li>
                                        </ul>
                                    </div>

                                    @error('password')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-6">
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('Confirm New Password') }}
                                    </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password"
                                        class="w-full px-4 py-2.5 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-teal-500 focus:border-transparent transition duration-150">
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex items-center justify-end space-x-3">
                                    <button type="button" onclick="this.form.reset()" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-lg font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        {{ __('Cancel') }}
                                    </button>
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-teal-600 to-emerald-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:from-teal-700 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                        </svg>
                                        {{ __('Update Password') }}
                                    </button>
                                </div>
                            </form>
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
                                    <span class="text-sm font-semibold text-white">{{ Auth::user()->created_at->format('M Y') }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/90">Status</span>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-white/90 text-emerald-700">
                                        Active
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/90">Last Updated</span>
                                    <span class="text-sm font-semibold text-white">{{ Auth::user()->updated_at->diffForHumans() }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/90">Email Verified</span>
                                    @if(Auth::user()->hasVerifiedEmail())
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-white/90 text-emerald-700">
                                            <svg class="h-3 w-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            Verified
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    @endif
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
                            <a href="#" class="w-full flex items-center justify-between px-4 py-3 bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-950/30 dark:to-teal-950/30 hover:from-emerald-100 hover:to-teal-100 dark:hover:from-emerald-900/50 dark:hover:to-teal-900/50 rounded-xl transition-all duration-200 group border border-emerald-100 dark:border-emerald-900/30">
                                <span class="text-sm font-medium text-gray-800 dark:text-gray-200">View Activity Log</span>
                                <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <a href="#" class="w-full flex items-center justify-between px-4 py-3 bg-gradient-to-r from-teal-50 to-emerald-50 dark:from-teal-950/30 dark:to-emerald-950/30 hover:from-teal-100 hover:to-emerald-100 dark:hover:from-teal-900/50 dark:hover:to-emerald-900/50 rounded-xl transition-all duration-200 group border border-teal-100 dark:border-teal-900/30">
                                <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Export Data</span>
                                <svg class="h-5 w-5 text-teal-600 dark:text-teal-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            @if(!Auth::user()->hasVerifiedEmail())
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center justify-between px-4 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-950/30 dark:to-indigo-950/30 hover:from-blue-100 hover:to-indigo-100 dark:hover:from-blue-900/50 dark:hover:to-indigo-900/50 rounded-xl transition-all duration-200 group border border-blue-100 dark:border-blue-900/30">
                                    <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Verify Email</span>
                                    <svg class="h-5 w-5 text-blue-600 dark:text-blue-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </button>
                            </form>
                            @endif
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
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                Once you delete your account, all of your resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
                            </p>
                            <button type="button" 
                                x-data="" 
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                class="w-full inline-flex items-center justify-center px-4 py-2.5 bg-red-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                {{ __('Delete Account') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Account Confirmation Modal -->
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <label for="password" class="sr-only">{{ __('Password') }}</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="mt-1 block w-3/4 px-4 py-2.5 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-500 focus:border-transparent"
                    placeholder="{{ __('Password') }}"
                />

                @if($errors->userDeletion->has('password'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $errors->userDeletion->first('password') }}</p>
                @endif
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" x-on:click="$dispatch('close')" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-lg font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-600 transition ease-in-out duration-150">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>

    <script>
        // Alpine.js auto-hide notifications
        document.addEventListener('alpine:init', () => {
            Alpine.data('notification', () => ({
                show: true,
                init() {
                    setTimeout(() => {
                        this.show = false
                    }, 3000)
                }
            }))
        })
    </script>
</x-app-layout>