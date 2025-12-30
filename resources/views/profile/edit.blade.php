<x-app-layout>
    <x-slot name="header">
        <div class="relative overflow-hidden bg-white/80 dark:bg-gray-900/60 backdrop-blur border-b border-white/30 dark:border-white/10">
            <div class="max-w-6xl mx-auto px-6 py-5 flex items-center justify-between">
                <div>
                    <h2 class="font-extrabold text-xl text-gray-900 dark:text-white leading-tight tracking-tight">
                        {{ __('Profile Settings') }}
                    </h2>
                    <p class="text-xs text-gray-500 dark:text-gray-300 mt-1">
                        Kelola profil, foto, dan keamanan akun kamu.
                    </p>
                </div>

                <div class="hidden sm:flex items-center gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                        ● Online
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/70 text-gray-700 border border-gray-200">
                        {{ Auth::user()->created_at->format('M Y') }}
                    </span>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen relative overflow-hidden profile-page">
        <!-- Modern Green Background -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_15%_15%,rgba(16,185,129,0.45),transparent_45%),radial-gradient(circle_at_85%_20%,rgba(34,197,94,0.35),transparent_50%),radial-gradient(circle_at_50%_100%,rgba(132,204,22,0.22),transparent_55%),linear-gradient(135deg,#0b2a20,#124232,#1c5a44)]"></div>

        <!-- Soft grid -->
        <div class="absolute inset-0 opacity-[0.07] pointer-events-none">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="48" height="48" patternUnits="userSpaceOnUse">
                        <path d="M 48 0 L 0 0 0 48" fill="none" stroke="white" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>

        <!-- Floating symbols -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-24 left-10 text-white/10 text-7xl font-serif animate-float">+</div>
            <div class="absolute top-40 right-16 text-white/10 text-6xl font-serif animate-float-delayed">−</div>
            <div class="absolute bottom-28 left-1/4 text-white/10 text-8xl font-serif animate-float-slow">×</div>
            <div class="absolute top-1/3 right-1/3 text-white/10 text-5xl font-serif animate-float">÷</div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <!-- Notifications -->
            @if (session('status') === 'profile-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2800)"
                    class="mb-6 rounded-2xl bg-white/90 backdrop-blur border border-white/40 shadow-xl">
                    <div class="p-4 flex items-center gap-3">
                        <div class="h-10 w-10 rounded-xl bg-emerald-100 flex items-center justify-center">
                            <svg class="h-6 w-6 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-gray-900">{{ __('Profile updated successfully!') }}</p>
                            <p class="text-xs text-gray-600">Perubahan profil kamu sudah tersimpan.</p>
                        </div>
                    </div>
                </div>
            @endif

            @if (session('status') === 'password-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2800)"
                    class="mb-6 rounded-2xl bg-white/90 backdrop-blur border border-white/40 shadow-xl">
                    <div class="p-4 flex items-center gap-3">
                        <div class="h-10 w-10 rounded-xl bg-emerald-100 flex items-center justify-center">
                            <svg class="h-6 w-6 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-gray-900">{{ __('Password changed successfully!') }}</p>
                            <p class="text-xs text-gray-600">Keamanan akun kamu sudah diperbarui.</p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Hero Profile Card -->
            <div class="mb-8 rounded-3xl overflow-hidden border border-white/25 bg-white/10 backdrop-blur-xl shadow-[0_20px_60px_rgba(0,0,0,0.35)]">
                <div class="relative p-6 sm:p-8">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_10%,rgba(255,255,255,0.14),transparent_45%),radial-gradient(circle_at_85%_30%,rgba(16,185,129,0.25),transparent_50%)]"></div>
                    <div class="relative flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="h-20 w-20 sm:h-24 sm:w-24 rounded-2xl overflow-hidden ring-2 ring-white/40 shadow-xl bg-emerald-700/60">
                                @if(Auth::user()->profile_photo_path)
                                    <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="Profile Photo" class="h-full w-full object-cover">
                                @else
                                    <div class="h-full w-full flex items-center justify-center">
                                        <svg class="h-12 w-12 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            <div class="min-w-0">
                                <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white truncate">
                                    {{ Auth::user()->name }}
                                </h1>
                                <p class="mt-1 text-sm text-white/70 flex items-center gap-2 truncate">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    {{ Auth::user()->email }}
                                </p>

                                <div class="mt-3 flex flex-wrap gap-2">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/15 text-white border border-white/20">
                                        Member sejak {{ Auth::user()->created_at->format('M Y') }}
                                    </span>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-50 border border-emerald-300/30">
                                        Active
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <a href="{{ route('dashboard') }}"
                                class="inline-flex items-center justify-center px-4 py-2.5 rounded-xl text-xs font-bold uppercase tracking-widest bg-white/10 text-white border border-white/20 hover:bg-white/15 transition">
                                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Profile Information -->
                    <div class="rounded-3xl overflow-hidden bg-white/90 backdrop-blur-xl border border-white/40 shadow-2xl hover:shadow-[0_18px_50px_rgba(0,0,0,0.25)] transition">
                        <div class="px-6 py-4 border-b border-white/50 bg-gradient-to-r from-emerald-50 to-white">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-2xl bg-emerald-100 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-base font-extrabold text-gray-900">Profile Information</h3>
                                    <p class="text-xs text-gray-600">Update nama, email, dan foto profil.</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data"
                                x-data="{ photoPreview: null, photoName: '' }">
                                @csrf
                                @method('PATCH')

                                <!-- Photo -->
                                <div class="mb-6">
                                    <label class="block text-sm font-bold text-gray-800 mb-3">
                                        {{ __('Profile Photo') }}
                                    </label>

                                    <div class="flex flex-col sm:flex-row sm:items-center gap-5">
                                        <div class="shrink-0">
                                            <div class="h-28 w-28 rounded-2xl overflow-hidden bg-gray-100 border border-gray-200 shadow-lg">
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
                                                        <div class="h-full w-full flex items-center justify-center bg-gradient-to-br from-emerald-600 to-green-700">
                                                            <svg class="h-14 w-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                            </svg>
                                                        </div>
                                                    </template>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <input type="file" name="profile_photo" id="profile_photo" accept="image/*" class="hidden"
                                                @change="
                                                    const file = $event.target.files[0];
                                                    if (file) {
                                                        photoName = file.name;
                                                        const reader = new FileReader();
                                                        reader.onload = (e) => photoPreview = e.target.result;
                                                        reader.readAsDataURL(file);
                                                    }
                                                ">

                                            <div class="flex flex-wrap items-center gap-3">
                                                <label for="profile_photo"
                                                    class="inline-flex items-center px-5 py-2.5 rounded-xl font-extrabold text-xs uppercase tracking-widest
                                                    bg-white border border-gray-200 text-gray-800 shadow-sm
                                                    hover:shadow-md hover:bg-gray-50 transition cursor-pointer">
                                                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                    {{ __('Select Photo') }}
                                                </label>

                                                <span class="text-xs text-gray-500" x-show="!photoName">JPG/PNG/GIF • Max 2MB</span>
                                                <span class="text-xs text-emerald-700 font-semibold" x-show="photoName" x-text="photoName"></span>
                                            </div>
                                        </div>
                                    </div>

                                    @error('profile_photo')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Name -->
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-bold text-gray-800 mb-2">
                                        {{ __('Name') }}
                                    </label>
                                    <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name) }}" required
                                        class="profile-input w-full px-4 py-3 rounded-xl bg-white border border-gray-200 shadow-sm
                                        focus:ring-4 focus:ring-emerald-200 focus:border-emerald-400 transition">
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-bold text-gray-800 mb-2">
                                        {{ __('Email Address') }}
                                    </label>
                                    <input type="email" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" required
                                        class="profile-input w-full px-4 py-3 rounded-xl bg-white border border-gray-200 shadow-sm
                                        focus:ring-4 focus:ring-emerald-200 focus:border-emerald-400 transition">
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror

                                    @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !Auth::user()->hasVerifiedEmail())
                                        <p class="mt-3 text-sm text-yellow-800 bg-yellow-50 border border-yellow-200 rounded-xl p-3">
                                            {{ __('Your email address is unverified.') }}
                                        </p>
                                    @endif
                                </div>

                                <!-- Buttons -->
                                <div class="flex items-center justify-end gap-3">
                                    <a href="{{ route('dashboard') }}"
                                        class="inline-flex items-center px-5 py-2.5 rounded-xl font-extrabold text-xs uppercase tracking-widest
                                        bg-gray-100 text-gray-800 border border-gray-200 hover:bg-gray-200 transition">
                                        {{ __('Cancel') }}
                                    </a>

                                    <button type="submit"
                                        class="inline-flex items-center px-5 py-2.5 rounded-xl font-extrabold text-xs uppercase tracking-widest
                                        bg-gradient-to-r from-emerald-600 to-green-600 text-white shadow-lg
                                        hover:from-emerald-700 hover:to-green-700 focus:outline-none focus:ring-4 focus:ring-emerald-200 transition">
                                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{ __('Save Changes') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="rounded-3xl overflow-hidden bg-white/90 backdrop-blur-xl border border-white/40 shadow-2xl hover:shadow-[0_18px_50px_rgba(0,0,0,0.25)] transition">
                        <div class="px-6 py-4 border-b border-white/50 bg-gradient-to-r from-emerald-50 to-white">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-2xl bg-green-100 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-base font-extrabold text-gray-900">Change Password</h3>
                                    <p class="text-xs text-gray-600">Pakai password kuat biar akun aman.</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <form method="POST" action="{{ route('profile.password.update') }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-4">
                                    <label for="current_password" class="block text-sm font-bold text-gray-800 mb-2">
                                        {{ __('Current Password') }}
                                    </label>
                                    <input type="password" name="current_password" id="current_password" required autocomplete="current-password"
                                        class="profile-input w-full px-4 py-3 rounded-xl bg-white border border-gray-200 shadow-sm
                                        focus:ring-4 focus:ring-emerald-200 focus:border-emerald-400 transition">
                                    @error('current_password')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-bold text-gray-800 mb-2">
                                        {{ __('New Password') }}
                                    </label>
                                    <input type="password" name="password" id="password" required autocomplete="new-password"
                                        class="profile-input w-full px-4 py-3 rounded-xl bg-white border border-gray-200 shadow-sm
                                        focus:ring-4 focus:ring-emerald-200 focus:border-emerald-400 transition">
                                    @error('password')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-6">
                                    <label for="password_confirmation" class="block text-sm font-bold text-gray-800 mb-2">
                                        {{ __('Confirm New Password') }}
                                    </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password"
                                        class="profile-input w-full px-4 py-3 rounded-xl bg-white border border-gray-200 shadow-sm
                                        focus:ring-4 focus:ring-emerald-200 focus:border-emerald-400 transition">
                                </div>

                                <div class="flex items-center justify-end gap-3">
                                    <button type="button" onclick="this.form.reset()"
                                        class="inline-flex items-center px-5 py-2.5 rounded-xl font-extrabold text-xs uppercase tracking-widest
                                        bg-gray-100 text-gray-800 border border-gray-200 hover:bg-gray-200 transition">
                                        {{ __('Cancel') }}
                                    </button>

                                    <button type="submit"
                                        class="inline-flex items-center px-5 py-2.5 rounded-xl font-extrabold text-xs uppercase tracking-widest
                                        bg-gradient-to-r from-green-600 to-lime-600 text-white shadow-lg
                                        hover:from-green-700 hover:to-lime-700 focus:outline-none focus:ring-4 focus:ring-emerald-200 transition">
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
                    <div class="rounded-3xl overflow-hidden bg-white/90 backdrop-blur-xl border border-white/40 shadow-2xl">
                        <div class="px-6 py-4 text-white bg-gradient-to-r from-emerald-700 to-green-700 relative">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(255,255,255,0.14),transparent_60%)]"></div>
                            <div class="relative flex items-center gap-2">
                                <div class="h-9 w-9 rounded-2xl bg-white/15 border border-white/20 flex items-center justify-center">
                                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                                    </svg>
                                </div>
                                <h3 class="text-sm font-extrabold uppercase tracking-wider">Account Status</h3>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Member Since</span>
                                <span class="text-sm font-extrabold text-gray-900">{{ Auth::user()->created_at->format('M Y') }}</span>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Status</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-extrabold bg-emerald-100 text-emerald-800 border border-emerald-200">
                                    Active
                                </span>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Last Updated</span>
                                <span class="text-sm font-extrabold text-gray-900">{{ Auth::user()->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Danger Zone -->
                    <div class="rounded-3xl overflow-hidden bg-white/90 backdrop-blur-xl border border-red-200 shadow-2xl hover:shadow-[0_18px_50px_rgba(0,0,0,0.25)] transition">
                        <div class="px-6 py-4 bg-gradient-to-r from-red-50 to-rose-50 border-b border-red-200">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-2xl bg-red-200 flex items-center justify-center">
                                    <svg class="h-6 w-6 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-base font-extrabold text-gray-900">Danger Zone</h3>
                                    <p class="text-xs text-gray-600">Aksi ini permanen dan tidak bisa dibatalkan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <p class="text-sm text-gray-700 mb-4 leading-relaxed">
                                Once you delete your account, all of your resources and data will be permanently deleted.
                            </p>

                            <button type="button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                class="w-full inline-flex items-center justify-center px-5 py-3 rounded-xl font-extrabold text-xs uppercase tracking-widest
                                bg-red-600 text-white shadow-lg hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-200 transition">
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

            <!-- Modal Delete -->
            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-extrabold text-gray-900">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm.') }}
                    </p>

                    <div class="mt-6">
                        <label for="password" class="sr-only">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password"
                            class="profile-input mt-1 block w-full sm:w-3/4 px-4 py-3 rounded-xl bg-white border border-gray-200 shadow-sm
                            focus:ring-4 focus:ring-red-200 focus:border-red-400 transition"
                            placeholder="{{ __('Password') }}" />

                        @if($errors->userDeletion->has('password'))
                            <p class="mt-2 text-sm text-red-600">{{ $errors->userDeletion->first('password') }}</p>
                        @endif
                    </div>

                    <div class="mt-6 flex justify-end gap-3">
                        <button type="button" x-on:click="$dispatch('close')"
                            class="inline-flex items-center px-5 py-2.5 rounded-xl font-extrabold text-xs uppercase tracking-widest
                            bg-gray-100 text-gray-800 border border-gray-200 hover:bg-gray-200 transition">
                            {{ __('Cancel') }}
                        </button>

                        <button type="submit"
                            class="inline-flex items-center px-5 py-2.5 rounded-xl font-extrabold text-xs uppercase tracking-widest
                            bg-red-600 text-white shadow-lg hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-200 transition">
                            {{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </x-modal>
        </div>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');

            .profile-page { font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, sans-serif; }

            /* Animasi float */
            @keyframes float {
                0%, 100% { transform: translateY(0) }
                50% { transform: translateY(-18px) }
            }
            @keyframes float-delayed {
                0%, 100% { transform: translateY(0) }
                50% { transform: translateY(-14px) }
            }
            @keyframes float-slow {
                0%, 100% { transform: translateY(0) }
                50% { transform: translateY(-22px) }
            }
            .animate-float { animation: float 6s ease-in-out infinite; }
            .animate-float-delayed { animation: float-delayed 7s ease-in-out infinite; animation-delay: 1s; }
            .animate-float-slow { animation: float-slow 8s ease-in-out infinite; animation-delay: 2s; }

            /* FIX WAJIB: ketikan input terlihat */
            .profile-page .profile-input,
            .profile-page input,
            .profile-page textarea,
            .profile-page select {
                color: #111827 !important; /* gray-900 */
                caret-color: #111827 !important;
            }
            .profile-page input::placeholder,
            .profile-page textarea::placeholder {
                color: #6b7280 !important; /* gray-500 */
            }
        </style>
    </div>
</x-app-layout>
