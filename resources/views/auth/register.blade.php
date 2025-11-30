<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | MathNest</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-green-500 to-blue-500 min-h-screen flex items-center justify-center">

<div class="bg-white shadow-2xl rounded-2xl p-10 w-[450px]">

    <h2 class="text-3xl font-bold mb-5 text-center">Daftar Akun MathNest</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-4">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button class="btn btn-success w-full">Register</button>

        <p class="text-sm mt-4 text-center">
            Sudah punya akun?
            <a href="/login" class="text-green-600 font-bold">Login</a>
        </p>
    </form>

</div>
</body>
</html>
