<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | MathNest</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center relative">

    <!-- Background -->
    <div class="absolute inset-0 bg-cover bg-center" 
         style="background-image: url('/img/regist.png'); filter: blur(1px);">
    </div>
    <div class="absolute inset-0 bg-white/10"></div>

<div class="relative z-10 w-[900px] grid grid-cols-2 rounded-2xl overflow-hidden shadow-2xl">

    <!-- LEFT -->
    <div class="bg-[#20474a] text-white p-10 flex flex-col justify-center">
        <h1 class="text-5xl font-bold mb-4">🐣 Mathify</h1>
        <p>Belajar matematika jadi lebih seru dan interaktif!</p>
    </div>

    <!-- RIGHT -->
    <div class="relative bg-[#f5e2c9]/50 backdrop-blur-md p-10">
        <h2 class="text-[#244b4e] 4xl font-bold mb-5">Login Akun</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

             <div class="mb-3">
                <label class="text-sm font-semibold">Email</label>
                <input type="email" name="email"
                    class="w-full mt-1 px-3 py-2 rounded-lg border border-gray-300
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
            </div>

             <div class="mb-3">
                <label class="text-sm font-semibold">Password</label>
                <input type="password" name="pasword"
                    class="w-full mt-1 px-3 py-2 rounded-lg border border-gray-300
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
            </div>

            <button class="w-full bg-[#2e5e62] hover:bg-[#20474a] text-white py-2 rounded-lg font-bold transition">Login</button>

            <p class="text-sm mt-4">
                Belum punya akun?
                <a href="/register" class="text-[#2e5e62] font-bold">Register</a>
            </p>
        </form>
    </div>

</div>

</body>
</html>
