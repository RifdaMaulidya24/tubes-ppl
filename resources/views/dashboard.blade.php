<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Matematika</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: #fff;
            overflow-x: hidden;
            scroll-behavior: smooth;
            min-height: 100vh;
            position: relative;
        }

        /* Enhanced Background with Radial Gradients */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: 
                radial-gradient(circle at 30% 20%, #6C9B7A, transparent 60%),
                radial-gradient(circle at 90% 60%, #2F5A47, transparent 65%),
                radial-gradient(circle at 50% 90%, #123A2D, transparent 75%);
            backdrop-filter: blur(60px);
            opacity: 0.95;
            z-index: -2;
        }

        /* Animated subtle pattern overlay */
        body::after {
            content: '';
            position: fixed;
            inset: 0;
            background: 
                radial-gradient(circle at 15% 50%, rgba(143, 183, 154, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 85% 30%, rgba(85, 123, 99, 0.06) 0%, transparent 45%),
                radial-gradient(circle at 60% 80%, rgba(26, 58, 46, 0.1) 0%, transparent 50%);
            animation: float 25s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-30px) scale(1.05);
            }
        }

        /* Header */
        header {
            padding: 24px 32px;
            position: relative;
            z-index: 10;
        }

        .header-title {
            font-size: 20px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            letter-spacing: 0.5px;
        }

        /* Section Styles */
        .section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 40px 32px;
        }

        .section-container {
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        /* Welcome Section */
        .welcome-section {
            text-align: center;
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
            filter: drop-shadow(0 8px 24px rgba(108, 155, 122, 0.4));
        }

        @keyframes float-icon {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        .welcome-title {
            font-size: 72px;
            font-weight: 900;
            margin-bottom: 24px;
            background: linear-gradient(135deg, #ffffff, #8FB79A);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -3px;
            line-height: 1.1;
        }

        .welcome-subtitle {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.75);
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

        .welcome-description {
            font-size: 18px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 48px;
            font-weight: 300;
        }

        .cta-primary {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #6C9B7A, #557B63);
            color: #fff;
            padding: 18px 48px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 8px 32px rgba(108, 155, 122, 0.3);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .cta-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(108, 155, 122, 0.5);
            background: linear-gradient(135deg, #8FB79A, #6C9B7A);
        }

        /* Features Grid */
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
            padding: 24px;
            background: rgba(26, 58, 46, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(143, 183, 154, 0.2);
        }

        .feature-item:hover {
            transform: translateY(-8px);
            background: rgba(108, 155, 122, 0.2);
            border-color: rgba(143, 183, 154, 0.4);
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: inline-block;
            transition: transform 0.3s ease;
            filter: drop-shadow(0 4px 12px rgba(108, 155, 122, 0.3));
        }

        .feature-item:hover .feature-icon {
            transform: scale(1.15);
        }

        .feature-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #8FB79A;
        }

        .feature-desc {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.6;
            font-weight: 300;
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
            background: linear-gradient(135deg, #fff, #8FB79A);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -1px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.75);
            font-weight: 400;
            margin-bottom: 32px;
        }

        /* Points Card */
        .stats-container {
            display: flex;
            justify-content: center;
            margin-bottom: 48px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .points-card {
            position: relative;
            background: linear-gradient(135deg, rgba(108, 155, 122, 0.25), rgba(85, 123, 99, 0.2));
            backdrop-filter: blur(20px);
            border: 2px solid rgba(143, 183, 154, 0.3);
            border-radius: 28px;
            padding: 32px 48px;
            max-width: 500px;
            box-shadow:
                0 8px 32px rgba(15, 41, 34, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .points-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow:
                0 16px 48px rgba(15, 41, 34, 0.6),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            border-color: rgba(143, 183, 154, 0.5);
        }

        .points-glow {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(108, 155, 122, 0.3) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
            pointer-events: none;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
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
            background: linear-gradient(135deg, #6C9B7A, #557B63);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(108, 155, 122, 0.4);
            animation: float-icon 3s ease-in-out infinite;
        }

        .points-info {
            flex: 1;
            text-align: left;
        }

        .points-label {
            font-size: 14px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
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
            background: linear-gradient(135deg, #8FB79A, #6C9B7A);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
        }

        .points-badge {
            background: linear-gradient(135deg, #557B63, #6C9B7A);
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 16px;
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(85, 123, 99, 0.4);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .points-sparkles {
            position: absolute;
            inset: 0;
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

        /* Topic Cards */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 48px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .topic-card {
            background: rgba(26, 58, 46, 0.4);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(143, 183, 154, 0.2);
            border-radius: 24px;
            padding: 32px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(15, 41, 34, 0.3);
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
            background: linear-gradient(90deg, #6C9B7A, #8FB79A, #557B63);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .topic-card:hover::before {
            transform: scaleX(1);
        }

        .topic-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(15, 41, 34, 0.5);
            background: rgba(47, 90, 71, 0.5);
            border-color: rgba(143, 183, 154, 0.4);
        }

        .topic-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, rgba(108, 155, 122, 0.3), rgba(85, 123, 99, 0.3));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: #8FB79A;
            transition: all 0.3s ease;
            border: 1px solid rgba(143, 183, 154, 0.2);
        }

        .topic-card:hover .topic-icon {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(135deg, #6C9B7A, #557B63);
            color: #fff;
            border-color: rgba(143, 183, 154, 0.4);
        }

        .topic-title {
            font-size: 24px;
            font-weight: 700;
            color: #8FB79A;
            margin-bottom: 8px;
        }

        .topic-level {
            font-size: 14px;
            color: rgba(143, 183, 154, 0.8);
            margin-bottom: 20px;
            font-weight: 600;
        }

        .progress-container {
            margin: 20px 0;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(26, 58, 46, 0.5);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #6C9B7A, #8FB79A);
            border-radius: 10px;
            transition: width 0.6s ease;
            position: relative;
        }

        .progress-fill::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .progress-text {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            margin-top: 8px;
        }

        .topic-footer {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid rgba(143, 183, 154, 0.2);
            font-size: 13px;
            color: #8FB79A;
            font-weight: 600;
        }

        /* CTA Button */
        .cta-section {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .cta-button {
            background: linear-gradient(135deg, #6C9B7A, #557B63);
            color: #fff;
            padding: 16px 48px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            box-shadow: 0 8px 24px rgba(108, 155, 122, 0.3);
            transition: all 0.3s ease;
            display: inline-block;
            border: 1px solid rgba(255, 255, 255, 0.1);
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(108, 155, 122, 0.5);
            background: linear-gradient(135deg, #8FB79A, #6C9B7A);
        }

        /* Floating Quote */
        .floating-quote {
            position: fixed;
            bottom: 32px;
            right: 32px;
            background: rgba(26, 58, 46, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(143, 183, 154, 0.3);
            border-radius: 16px;
            padding: 16px 24px;
            max-width: 320px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 32px rgba(15, 41, 34, 0.4);
            animation: fadeIn 1s ease-out 1s both;
            z-index: 100;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Responsive */
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
                gap: 16px;
            }

            .feature-item {
                padding: 16px;
            }

            .hero-title {
                font-size: 32px;
            }

            .section {
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
</head>
<body>
    <!-- Header -->
    <header>
        <h2 class="header-title">Dashboard Matematika</h2>
    </header>

    <!-- Section 1: Welcome -->
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
                    <div class="feature-icon">📚</div>
                    <div class="feature-title">Materi Lengkap</div>
                    <div class="feature-desc">Topik dari dasar hingga lanjutan</div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <div class="feature-title">Level Bertahap</div>
                    <div class="feature-desc">Belajar sistematis dengan 5 level</div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">✨</div>
                    <div class="feature-title">Sistem Poin</div>
                    <div class="feature-desc">Kumpulkan poin setiap quiz</div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🏆</div>
                    <div class="feature-title">Pencapaian</div>
                    <div class="feature-desc">Raih badge dan milestone</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Quiz Dashboard -->
    <section id="quiz" class="section quiz-section">
        <div class="section-container">
            <div class="hero">
                <h1 class="hero-title">Pilih Topik Belajar</h1>
                <p class="hero-subtitle">Eksplorasi dunia matematika dengan cara yang menyenangkan!</p>
            </div>

            <div class="stats-container">
                <div class="points-card">
                    <div class="points-glow"></div>
                    <div class="points-content">
                        <div class="points-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" 
                                    fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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

            <div class="cards-grid">
                <a href="#" class="topic-card">
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

                <a href="#" class="topic-card">
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

                <a href="#" class="topic-card">
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

                <a href="#" class="topic-card">
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

            <div class="cta-section">
                <a href="#" class="cta-button">Lihat Progress Lengkap</a>
            </div>
        </div>
    </section>

    <div class="floating-quote">
        💡 "Belajar matematika itu seperti petualangan! Tetap semangat!"
    </div>
</body>
</html>