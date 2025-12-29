<x-app-layout>
    <x-slot name="header">
        <div class="relative overflow-hidden bg-white dark:bg-gray-800 shadow-sm">
            <h2 class="relative font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight py-4 px-6">
                {{ __('Profile Settings') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 min-h-screen relative overflow-hidden profile-page">
        <!-- BACKGROUND HIJAU (lebih nendang) -->
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-700 via-green-700 to-lime-700 opacity-90"></div>
        <div
            class="absolute top-[-160px] left-[-140px] w-[520px] h-[520px] bg-emerald-400/35 blur-[120px] rounded-full">
        </div>
        <div
            class="absolute bottom-[-180px] right-[-140px] w-[520px] h-[520px] bg-lime-300/25 blur-[140px] rounded-full">
        </div>

        <!-- Background hijau gelap ala dashboard -->
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.08),transparent_55%),radial-gradient(circle_at_80%_70%,rgba(16,185,129,0.22),transparent_60%),radial-gradient(circle_at_50%_100%,rgba(34,197,94,0.14),transparent_65%),linear-gradient(135deg,#1a3d2e,#234738,#2F5A47)]">
        </div>

        <!-- Ornamen matematika basic (soft) -->
        <div class="absolute inset-0 opacity-[0.10] pointer-events-none">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="math-basic-dark" x="0" y="0" width="240" height="240" patternUnits="userSpaceOnUse">
                        <text x="16" y="46" font-family="Inter, system-ui, sans-serif" font-size="28"
                            fill="white">+</text>
                        <text x="170" y="64" font-family="Inter, system-ui, sans-serif" font-size="28"
                            fill="white">−</text>
                        <text x="34" y="176" font-family="Inter, system-ui, sans-serif" font-size="28"
                            fill="white">×</text>
                        <text x="182" y="192" font-family="Inter, system-ui, sans-serif" font-size="26"
                            fill="white">÷</text>

                        <text x="78" y="108" font-family="Inter, system-ui, sans-serif" font-size="18"
                            fill="white">2+3</text>
                        <text x="132" y="138" font-family="Inter, system-ui, sans-serif" font-size="18"
                            fill="white">10−4</text>
                        <text x="92" y="200" font-family="Inter, system-ui, sans-serif" font-size="16"
                            fill="white">6÷2</text>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#math-basic-dark)" />
            </svg>
        </div>

        <!-- Floating symbols (lebih halus) -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-24 left-10 text-white/10 text-7xl font-serif animate-float">+</div>
            <div class="absolute top-44 right-16 text-white/10 text-6xl font-serif animate-float-delayed">−</div>
            <div class="absolute bottom-32 left-1/4 text-white/10 text-8xl font-serif animate-float-slow">×</div>
            <div class="absolute top-1/3 right-1/3 text-white/10 text-5xl font-serif animate-float">÷</div>
        </div>

        <!-- Floating Symbols -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-24 left-10 text-white/15 text-7xl font-serif animate-float">+</div>
            <div class="absolute top-44 right-16 text-white/15 text-6xl font-serif animate-float-delayed">−</div>
            <div class="absolute bottom-32 left-1/4 text-white/15 text-8xl font-serif animate-float-slow">×</div>
            <div class="absolute top-1/3 right-1/3 text-white/10 text-5xl font-serif animate-float">÷</div>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 relative z-10">

            <!-- Success Notifications -->
            @if (session('status') === 'profile-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                    class="mb-6 bg-white/90 border-l-4 border-emerald-500 p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-emerald-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-900">
                            {{ __('Profile updated successfully!') }}
                        </p>
                    </div>
                </div>
            @endif

            @if (session('status') === 'password-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                    class="mb-6 bg-white/90 border-l-4 border-emerald-500 p-4 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-emerald-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-sm font-medium text-gray-900">
                            {{ __('Password changed successfully!') }}
                        </p>
                    </div>
                </div>
            @endif

            <!-- Header Card -->
            <div
                class="mb-8 bg-white/90 backdrop-blur-md backdrop-blur-sm shadow-2xl sm:rounded-3xl overflow-hidden border border-white/30">
                <div class="h-48 bg-gradient-to-r from-emerald-600 via-green-600 to-lime-600 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center opacity-15">
                        <div class="text-white text-7xl font-serif">
                            <span>2 + 3 = 5</span>
                        </div>
                    </div>
                    <div class="absolute top-6 right-6 text-white/25 text-9xl font-serif">×</div>
                    <div class="absolute bottom-6 left-6 text-white/25 text-8xl font-serif">+</div>
                    <div class="absolute top-1/2 left-1/3 text-white/15 text-6xl font-serif">÷</div>
                </div>

                <div class="px-8 pb-6 -mt-20 relative">
                    <div class="flex items-end space-x-6">
                        <div class="flex-shrink-0">
                            <div
                                class="h-36 w-36 rounded-3xl bg-gradient-to-br from-emerald-600 to-green-700 shadow-2xl border-4 border-white flex items-center justify-center relative overflow-hidden">
                                @if(Auth::user()->profile_photo_path)
                                    <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                        alt="Profile Photo" class="h-full w-full object-cover rounded-3xl">
                                @else
                                    <div class="absolute inset-0 opacity-15">
                                        <svg class="w-full h-full" viewBox="0 0 100 100">
                                            <text x="18" y="36" font-size="22" fill="white">+</text>
                                            <text x="62" y="70" font-size="20" fill="white">×</text>
                                            <text x="35" y="86" font-size="18" fill="white">÷</text>
                                        </svg>
                                    </div>
                                    <svg class="h-20 w-20 text-white relative z-10" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                @endif
                            </div>
                        </div>

                        <div class="flex-1 min-w-0 pb-3">
                            <h1 class="text-3xl font-extrabold tracking-tight text-emerald-950 drop-shadow-[0_1px_0_rgba(255,255,255,0.55)]">
                                {{ Auth::user()->name }}
                            </h1>
                            <p class="text-sm text-gray-600 flex items-center mt-2">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                {{ Auth::user()->email }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Left -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Profile Info -->
                    <div
                        class="bg-white/95 backdrop-blur-sm shadow-xl sm:rounded-2xl overflow-hidden border border-white/30 hover:shadow-2xl transition-all duration-300">
                        <div class="bg-white/70 px-6 py-4 border-b border-white/40 relative overflow-hidden">
                            <div class="absolute right-0 top-0 text-emerald-700/10 text-7xl font-serif">+</div>
                            <div class="flex items-center space-x-3 relative z-10">
                                <div class="p-2 bg-emerald-100 rounded-xl">
                                    <svg class="h-6 w-6 text-emerald-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">Profile Information</h3>
                            </div>
                        </div>

                        <div class="p-6">
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data"
                                x-data="{ photoPreview: null, photoName: '' }">
                                @csrf
                                @method('PATCH')

                                <!-- Photo -->
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-3">
                                        {{ __('Profile Photo') }}
                                    </label>

                                    <div class="flex items-center space-x-6">
                                        <div class="shrink-0">
                                            <div
                                                class="h-28 w-28 rounded-2xl overflow-hidden bg-gray-100 border-2 border-gray-200 shadow-lg">
                                                <template x-if="photoPreview">
                                                    <img :src="photoPreview" class="h-full w-full object-cover" />
                                                </template>

                                                @if(Auth::user()->profile_photo_path)
                                                    <template x-if="!photoPreview">
                                                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                                            class="h-full w-full object-cover" />
                                                    </template>
                                                @else
                                                    <template x-if="!photoPreview">
                                                        <div
                                                            class="h-full w-full flex items-center justify-center bg-gradient-to-br from-emerald-600 to-green-700">
                                                            <svg class="h-14 w-14 text-white" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                            </svg>
                                                        </div>
                                                    </template>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <input type="file" name="profile_photo" id="profile_photo" accept="image/*"
                                                class="hidden" @change="
                                                        const file = $event.target.files[0];
                                                        if (file) {
                                                            photoName = file.name;
                                                            const reader = new FileReader();
                                                            reader.onload = (e) => photoPreview = e.target.result;
                                                            reader.readAsDataURL(file);
                                                        }
                                                    ">
                                            <label for="profile_photo"
                                                class="inline-flex items-center px-5 py-2.5 bg-white border border-gray-300 rounded-xl font-semibold text-sm text-gray-700 uppercase tracking-wider shadow-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition ease-in-out duration-150 cursor-pointer">
                                                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ __('Select Photo') }}
                                            </label>

                                            <p class="mt-2 text-xs text-gray-500" x-show="!photoName">
                                                JPG, PNG or GIF. Max 2MB.
                                            </p>
                                            <p class="mt-2 text-xs text-emerald-700 font-medium" x-show="photoName"
                                                x-text="photoName"></p>
                                        </div>
                                    </div>

                                    @error('profile_photo')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Name -->
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                        {{ __('Name') }}
                                    </label>
                                    <input type="text" name="name" id="name"
                                        value="{{ old('name', Auth::user()->name) }}" required
                                        class="profile-input w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition duration-150 shadow-sm">
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                        {{ __('Email Address') }}
                                    </label>
                                    <input type="email" name="email" id="email"
                                        value="{{ old('email', Auth::user()->email) }}" required
                                        class="profile-input w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition duration-150 shadow-sm">
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror

                                    @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !Auth::user()->hasVerifiedEmail())
                                        <p class="mt-2 text-sm text-yellow-700">
                                            {{ __('Your email address is unverified.') }}
                                        </p>
                                    @endif
                                </div>

                                <!-- Buttons -->
                                <div class="flex items-center justify-end space-x-3">
                                    <a href="{{ route('dashboard') }}"
                                        class="inline-flex items-center px-5 py-2.5 bg-gray-200 border border-transparent rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 transition ease-in-out duration-150">
                                        {{ __('Cancel') }}
                                    </a>

                                    <button type="submit"
                                        class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-emerald-600 to-green-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:from-emerald-700 hover:to-green-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 transition ease-in-out duration-150 shadow-lg">
                                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{ __('Save Changes') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Password -->
                    <div
                        class="bg-white/95 backdrop-blur-sm shadow-xl sm:rounded-2xl overflow-hidden border border-white/30 hover:shadow-2xl transition-all duration-300">
                        <div class="bg-white/70 px-6 py-4 border-b border-white/40 relative overflow-hidden">
                            <div class="absolute right-4 top-0 text-green-700/10 text-7xl font-serif">×</div>
                            <div class="flex items-center space-x-3 relative z-10">
                                <div class="p-2 bg-green-100 rounded-xl">
                                    <svg class="h-6 w-6 text-green-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">Change Password</h3>
                            </div>
                        </div>

                        <div class="p-6">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-4">
                                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">
                                        {{ __('Current Password') }}
                                    </label>
                                    <input type="password" name="current_password" id="current_password" required
                                        autocomplete="current-password"
                                        class="profile-input w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-150 shadow-sm">
                                    @error('current_password')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                        {{ __('New Password') }}
                                    </label>
                                    <input type="password" name="password" id="password" required
                                        autocomplete="new-password"
                                        class="profile-input w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-150 shadow-sm">
                                    @error('password')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="password_confirmation"
                                        class="block text-sm font-medium text-gray-700 mb-2">
                                        {{ __('Confirm New Password') }}
                                    </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        required autocomplete="new-password"
                                        class="profile-input w-full px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-150 shadow-sm">
                                </div>

                                <div class="flex items-center justify-end space-x-3">
                                    <button type="button" onclick="this.form.reset()"
                                        class="inline-flex items-center px-5 py-2.5 bg-gray-200 border border-transparent rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 transition ease-in-out duration-150">
                                        {{ __('Cancel') }}
                                    </button>

                                    <button type="submit"
                                        class="inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-green-600 to-lime-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:from-green-700 hover:to-lime-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition ease-in-out duration-150 shadow-lg">
                                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                        {{ __('Update Password') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right -->
                <div class="space-y-6">

                    <!-- Account Status -->
                    <div
                        class="bg-white/95 backdrop-blur-sm shadow-xl sm:rounded-2xl overflow-hidden border border-white/30">
                        <div
                            class="bg-gradient-to-r from-emerald-600 to-green-700 px-6 py-4 text-white relative overflow-hidden">
                            <div class="absolute right-3 top-0 text-white/20 text-7xl font-serif">∑</div>
                            <h3 class="text-sm font-semibold uppercase tracking-wider flex items-center gap-2">
                                <span class="text-xl font-serif">∑</span> Account Status
                            </h3>
                        </div>

                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Member Since</span>
                                <span
                                    class="text-sm font-semibold text-gray-900">{{ Auth::user()->created_at->format('M Y') }}</span>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Status</span>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                    Active
                                </span>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Last Updated</span>
                                <span
                                    class="text-sm font-semibold text-gray-900">{{ Auth::user()->updated_at->diffForHumans() }}</span>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Email Verified</span>
                                @if(Auth::user()->hasVerifiedEmail())
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                        Verified
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Danger Zone -->
                    <div
                        class="bg-white/95 backdrop-blur-sm shadow-xl sm:rounded-2xl overflow-hidden border-2 border-red-200 hover:shadow-2xl transition-all duration-300">
                        <div
                            class="bg-gradient-to-r from-red-100 to-rose-100 px-6 py-4 border-b border-red-200 relative overflow-hidden">
                            <div class="absolute right-4 top-0 text-red-500/10 text-7xl font-serif">!</div>
                            <div class="flex items-center space-x-3 relative z-10">
                                <div class="p-2 bg-red-200 rounded-xl">
                                    <svg class="h-6 w-6 text-red-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800">Danger Zone</h3>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                                Once you delete your account, all of your resources and data will be permanently
                                deleted.
                            </p>

                            <button type="button" x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                class="w-full inline-flex items-center justify-center px-5 py-3 bg-red-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition ease-in-out duration-150 shadow-lg">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                {{ __('Delete Account') }}
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm.') }}
                </p>

                <div class="mt-6">
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input type="password" name="password" id="password"
                        class="profile-input mt-1 block w-3/4 px-4 py-3 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent shadow-sm"
                        placeholder="{{ __('Password') }}" />

                    @if($errors->userDeletion->has('password'))
                        <p class="mt-2 text-sm text-red-600">{{ $errors->userDeletion->first('password') }}</p>
                    @endif
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" x-on:click="$dispatch('close')"
                        class="inline-flex items-center px-5 py-2.5 bg-gray-200 border border-transparent rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 transition ease-in-out duration-150">
                        {{ __('Cancel') }}
                    </button>

                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 bg-red-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition ease-in-out duration-150">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </form>
        </x-modal>
    </div>

    <style>
        /* Animasi float */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-20px)
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-15px)
            }
        }

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-25px)
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 7s ease-in-out infinite;
            animation-delay: 1s;
        }

        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
            animation-delay: 2s;
        }

        /* FIX WAJIB: ketikan input terlihat (kalau ada CSS global yang nimpuk) */
        .profile-page .profile-input,
        .profile-page input,
        .profile-page textarea,
        .profile-page select {
            color: #111827 !important;
            /* gray-900 */
            caret-color: #111827 !important;
        }

        .profile-page input::placeholder,
        .profile-page textarea::placeholder {
            color: #6b7280 !important;
            /* gray-500 */
        }
    </style>
</x-app-layout>