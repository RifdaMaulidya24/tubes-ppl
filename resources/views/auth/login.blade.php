<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | MathNest</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-indigo-500 to-purple-600 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-2xl rounded-2xl overflow-hidden w-[900px] grid grid-cols-2">

    <!-- LEFT -->
    <div class="bg-indigo-600 text-white p-10 flex flex-col justify-center">
        <h1 class="text-4xl font-bold mb-4">🐣 MathNest</h1>
        <p>Belajar matematika jadi lebih seru dan interaktif!</p>
    </div>

    <!-- RIGHT -->
    <div class="p-10">
        <h2 class="text-2xl font-bold mb-5">Login Akun</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-full">Login</button>

            <p class="text-sm mt-4">
                Belum punya akun?
                <a href="/register" class="text-indigo-600 font-bold">Register</a>
            </p>
        </form>
    </div>

</div>

</body>
</html>
