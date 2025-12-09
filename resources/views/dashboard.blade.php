<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Dashboard Matematika
        </h2>
    </x-slot>

    <style>
        body {
            background: linear-gradient(135deg, #0d4d2a 0%, #1b5e20 25%, #2e7d32 50%, #388e3c 75%, #4caf50 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            position: relative;
            overflow-x: hidden;
            color: #fff;
            scroll-behavior: smooth;
        }

        /* Animated background pattern */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(255, 255, 255, 0.03) 0%, transparent 50%);
            z-index: 0;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Section Styles */
        .section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .section-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 32px;
            width: 100%;
        }

        /* Welcome Section - Modern Minimalist */
        .welcome-section {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .welcome-hero {
            margin-bottom: 80px;
            animation: fadeInDown 1.2s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-logo {
            font-size: 80px;
            margin-bottom: 32px;
            animation: float-icon 3s ease-in-out infinite;
        }

        .welcome-title {
            font-size: 72px;
            font-weight: 900;
            margin-bottom: 24px;
            background: linear-gradient(135deg, #ffffff, #e8f5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -3px;
            line-height: 1.1;
        }

        .welcome-subtitle {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 400;
            letter-spacing: 0.5px;
            max-width: 600px;
            margin: 0 auto 48px;
        }

        .welcome-content {
            max-width: 700px;
            margin: 0 auto 80px;
            animation: fadeInUp 1.2s ease-out 0.3s both;
        }

        .welcome-description {
            font-size: 18px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 48px;
            font-weight: 300;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 32px;
            margin-top: 64px;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .feature-item {
            text-align: center;
            transition: all 0.3s ease;
            padding: 16px;
        }

        .feature-item:hover {
            transform: translateY(-8px);
        }

        .feature-item:hover .feature-icon {
            transform: scale(1.1);
        }

        .feature-icon {
            font-size: 56px;
            margin-bottom: 20px;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .feature-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #fff;
        }

        .feature-desc {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.6;
            font-weight: 300;
        }

        .cta-primary {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: rgba(255, 255, 255, 0.95);
            color: #1b5e20;
            padding: 18px 48px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .cta-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            background: #fff;
        }



        /* Quiz Section */
        .quiz-section {
            padding-top: 60px;
        }

        .hero {
            text-align: center;
            margin-bottom: 48px;
            animation: fadeInDown 0.8s ease-out;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 16px;
            background: linear-gradient(135deg, #fff, #e8f5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -1px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 400;
            margin-bottom: 32px;
        }

        /* Stats Section */
        .stats-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 48px;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Points Card - Modern Design */
        .points-card {
            position: relative;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.15), rgba(255, 165, 0, 0.15));
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 215, 0, 0.3);
            border-radius: 28px;
            padding: 32px 48px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow:
                0 8px 32px rgba(255, 215, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .points-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow:
                0 16px 48px rgba(255, 215, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
            border-color: rgba(255, 215, 0, 0.5);
        }

        .points-glow {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 215, 0, 0.2) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
            pointer-events: none;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .points-content {
            position: relative;
            display: flex;
            align-items: center;
            gap: 24px;
            z-index: 1;
        }

        .points-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(255, 215, 0, 0.4);
            animation: float-icon 3s ease-in-out infinite;
        }

        @keyframes float-icon {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .points-info {
            flex: 1;
            text-align: left;
        }

        .points-label {
            font-size: 14px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .points-value {
            display: flex;
            align-items: baseline;
            gap: 12px;
        }

        .points-number {
            font-size: 48px;
            font-weight: 900;
            background: linear-gradient(135deg, #FFD700, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 12px rgba(255, 215, 0, 0.3);
            line-height: 1;
        }

        .points-badge {
            background: linear-gradient(135deg, #4caf50, #66bb6a);
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 16px;
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(76, 175, 80, 0.4);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .points-sparkles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .sparkle {
            position: absolute;
            font-size: 20px;
            animation: sparkle-float 3s ease-in-out infinite;
            opacity: 0;
        }

        @keyframes sparkle-float {
            0%, 100% {
                opacity: 0;
                transform: translateY(0) scale(0.8);
            }
            50% {
                opacity: 1;
                transform: translateY(-20px) scale(1.2);
            }
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 48px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .topic-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            padding: 32px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            text-decoration: none;
            display: block;
        }

        .topic-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2e7d32, #4caf50, #66bb6a);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .topic-card:hover::before {
            transform: scaleX(1);
        }

        .topic-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .topic-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: #2e7d32;
            transition: all 0.3s ease;
        }

        .topic-card:hover .topic-icon {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(135deg, #4caf50, #66bb6a);
            color: #fff;
        }

        .topic-title {
            font-size: 24px;
            font-weight: 700;
            color: #1b5e20;
            margin-bottom: 8px;
        }

        .topic-level {
            font-size: 14px;
            color: #4caf50;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .progress-container {
            margin: 20px 0;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e8f5e9;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #2e7d32, #4caf50);
            border-radius: 10px;
            transition: width 0.6s ease;
            position: relative;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .progress-text {
            font-size: 12px;
            color: #666;
            margin-top: 8px;
        }

        .topic-footer {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid #e8f5e9;
            font-size: 13px;
            color: #388e3c;
            font-weight: 600;
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .cta-button {
            background: linear-gradient(135deg, #ffd93d, #ffb74d);
            color: #1b5e20;
            padding: 16px 48px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            box-shadow: 0 8px 24px rgba(255, 183, 77, 0.4);
            transition: all 0.3s ease;
            display: inline-block;
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(255, 183, 77, 0.5);
            background: linear-gradient(135deg, #ffe066, #ffc166);
        }

        /* Floating Quote */
        .floating-quote {
            position: fixed;
            bottom: 32px;
            right: 32px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 16px 24px;
            max-width: 320px;
            font-size: 14px;
            color: #fff;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-out 1s both;
            z-index: 100;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .welcome-logo {
                font-size: 60px;
            }

            .welcome-title {
                font-size: 40px;
                letter-spacing: -1px;
            }

            .welcome-subtitle {
                font-size: 16px;
            }

            .welcome-description {
                font-size: 16px;
            }

            .features-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }

            .hero-title {
                font-size: 32px;
            }

            .section-container {
                padding: 40px 20px;
            }

            .cards-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .points-card {
                padding: 24px 32px;
            }

            .points-content {
                gap: 16px;
            }

            .points-icon {
                width: 60px;
                height: 60px;
            }

            .points-number {
                font-size: 36px;
            }

            .floating-quote {
                display: none;
            }
        }
    </style>

    <!-- Section 1: Welcome/Introduction - Modern Minimalist -->
    <section id="welcome" class="section welcome-section">
        <div class="section-container">
            <div class="welcome-hero">
                <div class="welcome-logo">📐</div>
                <h1 class="welcome-title">Mathify</h1>
                <p class="welcome-subtitle">Platform pembelajaran matematika yang menyenangkan dan interaktif</p>
            </div>

            <div class="welcome-content">
                <p class="welcome-description">
                    Belajar matematika dengan cara yang lebih mudah dan menyenangkan. 
                    Tingkatkan kemampuan Anda melalui latihan interaktif, sistem level bertahap, 
                    dan raih pencapaian di setiap langkah perjalanan belajar Anda.
                </p>

                <a href="#quiz" class="cta-primary" onclick="event.preventDefault(); document.getElementById('quiz').scrollIntoView({behavior: 'smooth'})">
                    <span>Mulai Belajar</span>
                    <span>→</span>
                </a>
            </div>

            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <div class="feature-title">Materi Lengkap</div>
                    <div class="feature-desc">
                        Topik dari dasar hingga lanjutan
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <div class="feature-title">Level Bertahap</div>
                    <div class="feature-desc">
                        Belajar sistematis dengan 5 level
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                        </svg>
                    </div>
                    <div class="feature-title">Sistem Poin</div>
                    <div class="feature-desc">
                        Kumpulkan poin setiap quiz
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                        </svg>
                    </div>
                    <div class="feature-title">Pencapaian</div>
                    <div class="feature-desc">
                        Raih badge dan milestone
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Quiz Dashboard -->
    <section id="quiz" class="section quiz-section">
        <div class="section-container">
            <!-- Hero Section -->
            <div class="hero">
                <h1 class="hero-title">Pilih Topik Belajar</h1>
                <p class="hero-subtitle">Eksplorasi dunia matematika dengan cara yang menyenangkan!</p>
            </div>

            <!-- Points Section -->
            <div class="stats-container">
                <div class="points-card">
                    <div class="points-glow"></div>
                    <div class="points-content">
                        <div class="points-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                                    fill="url(#gold-gradient)" stroke="#FFD700" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="gold-gradient" x1="12" y1="2" x2="12" y2="21.02"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#FFD700" />
                                        <stop offset="100%" stop-color="#FFA500" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="points-info">
                            <div class="points-label">Total Poin</div>
                            <div class="points-value">
                                <span class="points-number">1,250</span>
                                <span class="points-badge">+150</span>
                            </div>
                        </div>
                    </div>
                    <div class="points-sparkles">
                        <span class="sparkle" style="left: 10%; top: 20%; animation-delay: 0s;">✨</span>
                        <span class="sparkle" style="left: 80%; top: 30%; animation-delay: 0.5s;">✨</span>
                        <span class="sparkle" style="left: 60%; top: 70%; animation-delay: 1s;">✨</span>
                    </div>
                </div>
            </div>

            <!-- Topic Cards -->
            <div class="cards-grid">
                <a href="/quiz/penambahan" class="topic-card">
                    <div class="topic-icon">+</div>
                    <div class="topic-title">Penambahan</div>
                    <div class="topic-level">Level 1–5 | Poin: 100</div>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 60%"></div>
                        </div>
                        <div class="progress-text">60% Selesai</div>
                    </div>
                    <div class="topic-footer">Lanjutkan dari Level 3!</div>
                </a>

                <a href="/quiz/pengurangan" class="topic-card">
                    <div class="topic-icon">−</div>
                    <div class="topic-title">Pengurangan</div>
                    <div class="topic-level">Level 1–5 | Poin: 100</div>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 40%"></div>
                        </div>
                        <div class="progress-text">40% Selesai</div>
                    </div>
                    <div class="topic-footer">Lanjutkan dari Level 2!</div>
                </a>

                <a href="/quiz/perkalian" class="topic-card">
                    <div class="topic-icon">×</div>
                    <div class="topic-title">Perkalian</div>
                    <div class="topic-level">Level 1–5 | Poin: 100</div>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 80%"></div>
                        </div>
                        <div class="progress-text">80% Selesai</div>
                    </div>
                    <div class="topic-footer">Lanjutkan dari Level 4!</div>
                </a>

                <a href="/quiz/pembagian" class="topic-card">
                    <div class="topic-icon">÷</div>
                    <div class="topic-title">Pembagian</div>
                    <div class="topic-level">Level 1–5 | Poin: 100</div>
                    <div class="progress-container">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 20%"></div>
                        </div>
                        <div class="progress-text">20% Selesai</div>
                    </div>
                    <div class="topic-footer">Lanjutkan dari Level 1!</div>
                </a>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <a href="#" class="cta-button">Lihat Progress Lengkap</a>
            </div>
        </div>
    </section>

    <!-- Floating Quote -->
    <div class="floating-quote">
        💡 "Belajar matematika itu seperti petualangan! Tetap semangat!"
    </div>
</x-app-layout>