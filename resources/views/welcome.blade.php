<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathify</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="text-white">

    <!-- NAVBAR -->
    <nav class="w-full fixed top-0 left-0 z-50 bg-black/30 backdrop-blur-md py-3">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-5">

            <h1 class="text-4xl font-bold">🐣 Mathify</h1>

            <div class="flex gap-6 text-sm">
                <a href="#about" class="text-white hover:!text-[#8FB79A] transition no-underline">About Us</a>
                <a href="#contact" class="text-white hover:!text-[#8FB79A] transition no-underline">Contact</a>
                <a href="/login" class="text-white hover:!text-[#8FB79A] transition font-semibold no-underline">Login</a>
                <a href="/register" class="text-white hover:!text-[#8FB79A] transition font-semibold no-underline">Register</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="min-h-screen flex flex-col items-center justify-center 
                    bg-cover bg-center relative"
             style="background-image: url('/img/bg10.png');">

        <div class="absolute inset-0 bg-black/30"></div>

        <div class="relative z-10 text-center px-6">
            <h1 class="text-6xl font-bold drop-shadow-lg">Welcome</h1>
            <p class="mt-3 text-lg text-gray-200 max-w-xl mx-auto drop-shadow">
                Platform belajar matematika interaktif dan menyenangkan.
            </p>

            <!-- BUTTON LOGIN & REGISTER -->
            <div class="mt-8 flex justify-center gap-4">
                <a href="/login"
                   class="w-32 px-6 py-2 bg-white rounded-full 
                         text-black hover:!bg-[#f0da9f] transition no-underline">
                    Login
                </a>

                <a href="/register"
                    class="w-32 px-6 py-2 bg-white rounded-full 
                         text-black hover:!bg-[#f0da9f] transition no-underline">
                    Register
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT US -->
    <section id="about" class="py-24 bg-[#2F5A47] text-[#f0da9f] text-center px-6">
        <img src="/logo.png" alt="Logo" class="w-24 mx-auto mb-4">

        <h2 class="text-4xl font-bold mb-4">About Us</h2>
        <p class="text-xl text-white max-w-3xl mx-auto">
                Platform pembelajaran matematika yang dirancang khusus untuk membantu 
                siswa Sekolah Dasar menguasai konsep dasar matematika dengan cara yang menyenangkan.
        </p>
    </section>

    <!-- CONTACT US -->
    <section id="contact" class="py-24 bg-[#123A2D] text-white text-center px-6">
        <h2 class="text-4xl font-bold mb-4">Contact Us</h2>

        <p class="max-w-xl text-white mx-auto text-lg">
            Punya saran atau pertanyaan? Hubungi kami:
        </p>

        <!-- Contact Buttons -->
    <div class="flex justify-center gap-6 mt-6">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/6281217883105?text=Halo%20Mathify,%20saya%20ingin%20bertanya" 
           target="_blank"
           class="flex items-center gap-3 px-6 py-3 bg-green-500 text-white rounded-full 
                  hover:bg-green-600 transition no-underline shadow-lg">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
            WhatsApp
        </a>
    </section>

</body>
</html>
