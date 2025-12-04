<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | Mathify</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center relative">

  
    <div class="absolute inset-0 bg-cover bg-center"
     style="background-image: url('/img/regist.png'); filter: blur(1px);">
    </div>

   
    <div class="absolute inset-0 bg-white/10"></div>

 
    <div class="relative bg-[#f5e2c9]/55 backdrop-blur-md shadow-2xl rounded-2xl p-10 w-[450px]">

        <h2 class="text-4xl font-bold mb-4 text-center text-[#20474a]">
            Daftar Akun Mathify
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label class="text-sm font-semibold">Nama</label>
                <input type="text" name="name"
                    class="w-full mt-1 px-3 py-2 rounded-lg border border-gray-300 
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
            </div>

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
                <input type="password" name="password"
                    class="w-full mt-1 px-3 py-2 rounded-lg border border-gray-300
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
            </div>

            <div class="mb-4">
                <label class="text-sm font-semibold">Konfirmasi Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full mt-1 px-3 py-2 rounded-lg border border-gray-300
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           transition-all duration-150 ease-out focus:scale-[1.02]"
                    required>
            </div>

            <button 
                class="w-full bg-[#2e5e62] hover:bg-[#20474a] text-white py-2 rounded-lg font-bold transition">
                Register
            </button>

            <p class="text-sm mt-4 text-center text-gray-600">
                Sudah punya akun?
                <a href="/login" class="text-[#2e5e62] font-bold hover:underline">Login</a>
            </p>
        </form>

    </div>

</body>
</html>
