<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | MathNest</title>
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

    <!-- Background -->
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,#6C9B7A,transparent_60%),radial-gradient(circle_at_90%_60%,#2F5A47,transparent_65%),radial-gradient(circle_at_50%_90%,#123A2D,transparent_75%)] backdrop-blur-xl opacity-95"></div>
    
    <!-- Base Background Color -->
    <div class="absolute inset-0 bg-[#1a3a2e] -z-10"></div>
<!-- Crad-->
<div class="relative z-10 w-[900px] grid grid-cols-2 rounded-2xl overflow-hidden shadow-2xl animate-content animate-fade-zoom">

    <!-- LEFT -->
<div class="bg-[#123A2D]/95 backdrop-blur-md text-white p-10 flex flex-col justify-center">
  
  <div class="flex items-center gap-2">
    <img src="img/logo.png" alt="Logo" class="w-30 h-28 object-contain">
    <div>
      <h1 class="text-4xl font-black leading-none">Mathify</h1>
      <p class="mt-2 text-white/80 ">Belajar matematika jadi lebih seru dan interaktif!</p>
    </div>
  </div>

</div>

    <!-- RIGHT -->
    <div class="relative bg-[#f5e2c9]/30 backdrop-blur-md p-10">
        <h2 class="text-white 4xl font-bold mb-5 ">Login Akun</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mb-4 bg-red-500 text-white px-3 py-2 rounded-lg shadow-md animate-content animate-fade-zoom delay-200">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="font-semibold text-sm">Login Gagal!</span>
                    </div>
                </div>
            @endif
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
            </div>

            <button type="submit" class="w-full bg-[#1e4233] hover:bg-[#0F2922] text-white py-2 rounded-lg font-bold transition">
                Login
            </button>

            <p class="text-sm mt-4 text-white">
                Belum punya akun?
                <a href="/register" class="text-[#f0da9f] hover:text-white font-bold transition">Register</a>
            </p>
        </form>
    </div>

</div>

</body>
</html>
