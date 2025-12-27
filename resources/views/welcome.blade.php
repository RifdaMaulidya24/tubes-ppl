<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathify</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
        
        /* Navbar slide down animation */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-100%);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        nav {
            animation: slideDown 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }
                    
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
            animation: fadeZoomIn 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }

        .animate-content {
            opacity: 0;
            transform: scale(0.95);
        }
        
        /* Scroll-triggered fade in */
        .scroll-fade {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .scroll-fade.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        button {
            transition-delay: 0s !important;
        }
        
    section[style*="background-image"] {
        animation: none !important;
    }

     @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-fade-zoom {
            animation: fadeZoomIn 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }

        .animate-content {
            opacity: 0;
            transform: scale(0.95);
        }
        
        .scroll-fade {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .scroll-fade.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        button {
            transition-delay: 0s !important;
        }
        
        section[style*="background-image"] {
            animation: none !important;
        }

        .gradient-text {
            background: linear-gradient(135deg, #f0da9f 0%, #ffeb3b 50%, #ffc107 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

    </style>
</head>

<body class="text-white">

    <!-- NAVBAR -->
    <nav class="w-full fixed top-0 left-0 z-50 bg-black/30 backdrop-blur-md py-3">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-5">

            <div class="flex items-center gap-3">
                <img src="img/logo.png" alt="Logo" class="w-14 h-auto">
                <h1 class="text-3xl font-black">Mathify</h1>
            </div>

            <div class="flex gap-6 text-sm">
                <a href="#about" class="text-white hover:!text-[#f0da9f] transition no-underline">About Us</a>
                <a href="#contact" class="text-white hover:!text-[#f0da9f] transition no-underline">Contact</a>
                <a href="/login" class="text-white hover:!text-[#f0da9f] transition font-bold no-underline">Login</a>
                <a href="/register" class="text-white hover:!text-[#f0da9f] transition font-bold no-underline">Register</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="min-h-screen flex flex-col items-center justify-center 
                    bg-cover bg-center relative overflow-hidden">
            <div class="absolute inset-0 bg-[#123A2D]"></div>


        <div class="absolute inset-0 bg-black/0"></div>
        

        <div class="relative z-10 text-center px-6 w-full">

            
    <!-- Card -->
    <div class="bg-[#E8F5E9] backdrop-blur-sm rounded-3xl p-12 shadow-2xl border border-white/20  max-w-5xl mx-auto animate-content animate-fade-zoom delay-100">
        <img src="img/logo.png" alt="Logo" class="w-36 mx-auto mb-4 animate-content animate-fade-zoom delay-100">
        <h1 class="text-7xl text-[#2F5A47] font-black drop-shadow-lg animate-content animate-fade-zoom">Welcome</h1>
        <p class="mt-3 text-xl font-semibold text-black max-w-xl mx-auto drop-shadow animate-content animate-fade-zoom delay-100">
            Halo, Jagoan Matematika!
        </p>
        <p class="mt-3 text-lg text-black/50 max-w-xl mx-auto drop-shadow animate-content animate-fade-zoom delay-100">
            Bersiaplah untuk petualangan seru belajar matematika yang menyenangkan! Raih prestasi terbaik!
        </p>
        
        <div class="mt-8 flex justify-center gap-4 animate-content animate-fade-zoom delay-100">
            <a href="/login" class="w-40 px-6 py-3 bg-[#1a3d2e] rounded-full text-lg text-[#E8F5E9] font-bold hover:!bg-white hover:!text-[#1a3d2e] transition no-underlinet">
                Login
            </a>
            <a href="/register" class="w-40 px-6 py-3 bg-[#1a3d2e] rounded-full text-lg text-[#E8F5E9] font-bold hover:!bg-white hover:!text-[#1a3d2e] transition no-underline">
                Register
            </a>
        </div>

                <!-- Icon highlights -->
        <div class="mt-12 grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-2xl mx-auto animate-content animate-fade-zoom delay-100">
        <div class="text-center">
            <div class="text-4xl mb-2">🎯</div>
            <p class="text-sm text-[#2F5A47] font-semibold">Fokus</p>
        </div>

        <div class="text-center">
            <div class="text-4xl mb-2">⚡</div>
            <p class="text-sm text-[#2F5A47] font-semibold">Cepat</p>
        </div>

        <div class="text-center">
            <div class="text-4xl mb-2">🏆</div>
            <p class="text-sm text-[#2F5A47] font-semibold">Juara</p>
        </div>

        <div class="text-center">
            <div class="text-4xl mb-2">🌈</div>
            <p class="text-sm text-[#2F5A47] font-semibold">Seru</p>
        </div>
        </div>

    </div>
</div>
        </div>
    </section>

    <!-- ABOUT US -->
    <section id="about" class="py-40 bg-[#123A2D] text-[#f0da9f] text-center px-6 relative overflow-hidden">
        <div class="scroll-fade">
            <h2 class="text-5xl font-black mb-6">About Us</h2>
            <div class="max-w-4xl mx-auto">
            <p class="text-2xl text-white leading-relaxed font-regular mb-8">
                Platform pembelajaran matematika yang dirancang khusus untuk membantu 
                siswa Sekolah Dasar menguasai konsep dasar matematika dengan cara yang menyenangkan.
            </p>
        </div>
    </section>

    <!-- CONTACT US -->
    <section id="contact" class="py-24 bg-[#E8F5E9] text-[#2F5A47] text-center px-6">
        <div class="scroll-fade">
            <h2 class="text-4xl font-bold mb-4">Contact Us</h2>

            <p class="max-w-xl text-[#2F5A47] mx-auto text-lg">
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
            </div>
        </div>
    </section>

    <script>
       
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); 
                }
            });
        }, observerOptions);

        
        document.querySelectorAll('.scroll-fade').forEach(el => {
            observer.observe(el);
        });
    </script>

</body>
</html>