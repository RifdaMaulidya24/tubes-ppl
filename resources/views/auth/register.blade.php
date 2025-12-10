<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | Mathify</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
    @keyframes fadeZoomIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-fade-zoom {
        animation: fadeZoomIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }

    .animate-content {
        opacity: 0;
        transform: scale(0.95);
    }
    button {
        transition-delay: 0s !important;
    }
</style>
</head>

<body class="min-h-screen flex items-center justify-center relative">

    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,#6C9B7A,transparent_60%),radial-gradient(circle_at_90%_60%,#2F5A47,transparent_65%),radial-gradient(circle_at_50%_90%,#123A2D,transparent_75%)] backdrop-blur-xl opacity-95"></div>
    
    <!-- Base Background Color -->
    <div class="absolute inset-0 bg-[#1a3a2e] -z-10"></div>

    <!-- card -->
    <div class="relative bg-[#f5e2c9]/20 backdrop-blur-md shadow-2xl rounded-2xl p-10 w-[450px] animate-content animate-fade-zoom">

        <h2 class="text-4xl font-bold mb-4 text-center text-white">
            Daftar Akun Mathify
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mb-4 bg-red-500 text-white px-3 py-2 rounded-lg shadow-md animate-content animate-fade-zoom delay-200">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="font-semibold text-sm">Registrasi Gagal </span>
                    </div>
                </div>
            @endif

            <div class="mb-3">
                <label class="text-sm font-semibold text-white">Nama</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full mt-1 px-3 py-2 rounded-lg border 
                        @error('name') border-red-500 @else border-gray-300 @enderror
                        focus:outline-none focus:ring-2 focus:ring-blue-500
                        transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
                @error('name')
                    <p class="text-red-300 text-xs mt-1 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="text-sm font-semibold text-white">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full mt-1 px-3 py-2 rounded-lg border 
                        @error('email') border-red-500 @else border-gray-300 @enderror
                        focus:outline-none focus:ring-2 focus:ring-blue-500
                        transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
                @error('email')
                    <p class="text-red-300 text-xs mt-1 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label class="text-sm font-semibold text-white">Password</label>
                <input type="password" name="password"
                    class="w-full mt-1 px-3 py-2 rounded-lg border 
                        @error('password') border-red-500 @else border-gray-300 @enderror
                        focus:outline-none focus:ring-2 focus:ring-blue-500
                        transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
                @error('password')
                    <p class="text-red-300 text-xs mt-1 font-semibold">{{ $message }}</p>
                @enderror
                <p class="text-xs text-gray-300 mt-1">Minimal 8 karakter</p>
            </div>

            <div class="mb-4">
                <label class="text-sm font-semibold text-white">Konfirmasi Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full mt-1 px-3 py-2 rounded-lg border 
                        @error('password_confirmation') border-red-500 @else border-gray-300 @enderror
                        focus:outline-none focus:ring-2 focus:ring-blue-500
                        transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
                @error('password_confirmation')
                    <p class="text-red-300 text-xs mt-1 font-semibold">{{ $message }}</p>
                @enderror
            </div>

            <button 
                class="w-full bg-[#1e4233] hover:bg-[#0F2922] text-white py-2 rounded-lg font-bold transition">
                Register
            </button>

            <p class="text-sm mt-4 text-center text-white">
                Sudah punya akun?
                <a href="/login"  class="text-[#f0da9f] hover:text-white font-bold transition">Login
            </p>
        </form>

    </div>

</body>
</html>