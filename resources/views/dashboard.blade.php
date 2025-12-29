<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Dashboard Matematika
        </h2>
    </x-slot>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');

        body {
            background: linear-gradient(to bottom right, #2F5A47, #234738, #1a3d2e);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            position: relative;
            overflow-x: hidden;
            color: #fff;
            scroll-behavior: smooth;
        }

        body::before,
        body::after {
            content: '';
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
        }

        body::before {
            background:
                radial-gradient(circle at 18% 40%, rgba(255,255,255,0.07) 0%, transparent 55%),
                radial-gradient(circle at 85% 75%, rgba(255,255,255,0.06) 0%, transparent 60%),
                radial-gradient(circle at 55% 18%, rgba(255,255,255,0.04) 0%, transparent 55%);
            animation: bgFloat1 18s ease-in-out infinite;
            will-change: transform;
        }

        body::after {
            background:
                radial-gradient(circle at 10% 85%, rgba(255,255,255,0.05) 0%, transparent 58%),
                radial-gradient(circle at 92% 22%, rgba(255,255,255,0.045) 0%, transparent 60%),
                radial-gradient(circle at 55% 60%, rgba(255,255,255,0.035) 0%, transparent 55%);
            animation: bgFloat2 26s ease-in-out infinite;
            opacity: .9;
            will-change: transform;
        }

        @keyframes bgFloat1 {
            0%, 100% { transform: translateY(0) scale(1); }
            50%      { transform: translateY(-40px) scale(1.02); }
        }

        @keyframes bgFloat2 {
            0%, 100% { transform: translateX(0) scale(1); }
            50%      { transform: translateX(-55px) scale(1.02); }
        }

        .section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .section-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 56px 28px;
            width: 100%;
        }

       .hero-split {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 44px;
            animation: fadeInDown 0.9s ease-out;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-26px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .hero-left { text-align: left; }
        .hero-right{
            display:flex;
            justify-content:flex-end;
            align-items:center;
        }

        .hero-logo{
            width: 320px;
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 18px 50px rgba(0,0,0,.25));
            transform: translate(-150px, -40px);
        }

        .hero-title {
            font-size: 54px;
            line-height: 1.06;
            font-weight: 900;
            letter-spacing: -2px;
            margin-bottom: 14px;
            color: #fff;
            text-shadow: 0 18px 50px rgba(0,0,0,.20);
            animation: fadeInUp 0.9s ease-out 0.15s both;
        }

        .hero-title .accent {
            background: linear-gradient(135deg, #ffffff, #e8f5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 16px;
            line-height: 1.8;
            color: rgba(255,255,255,.78);
            max-width: 520px;
            margin-bottom: 22px;
            animation: fadeInUp 0.9s ease-out 0.22s both;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(22px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-top: 28px;
            animation: fadeInUp 0.9s ease-out 0.38s both;
        }

        .feature-item {
            text-align: left;
            padding: 16px;
            border-radius: 18px;
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(255,255,255,.12);
            backdrop-filter: blur(14px);
            transition: .25s ease;
        }

        .feature-item:hover { transform: translateY(-6px); background: rgba(255,255,255,.10); }
        .feature-icon { font-size: 22px; margin-bottom: 10px; }
        .feature-title { font-weight: 900; font-size: 14px; margin-bottom: 6px; }
        .feature-desc { font-size: 12px; color: rgba(255,255,255,.65); line-height: 1.55; }

        .quiz-section { padding-top: 18px; }

        .hero {
            text-align: center;
            margin: 22px 0 34px;
            animation: fadeInDown 0.9s ease-out;
        }

        .hero2-title {
            font-size: 40px;
            font-weight: 900;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #fff, #e8f5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -1px;
        }

        .hero2-subtitle {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
            margin-bottom: 0;
        }

        .stats-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
            animation: fadeInUp 0.9s ease-out 0.2s both;
        }

        .points-card {
            position: relative;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.12), rgba(255, 165, 0, 0.12));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 215, 0, 0.25);
            border-radius: 28px;
            padding: 26px 36px;
            max-width: 520px;
            width: 100%;
            box-shadow: 0 10px 36px rgba(255, 215, 0, 0.18);
            overflow: hidden;
        }

        .points-glow {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 215, 0, 0.18) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
            pointer-events: none;
        }

        @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

        .points-content { position: relative; display: flex; align-items: center; gap: 18px; z-index: 1; }
        .points-icon {
            width: 70px; height: 70px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 10px 28px rgba(255, 215, 0, 0.34);
            font-size: 28px;
            animation: floatIcon 3s ease-in-out infinite;
        }

        @keyframes floatIcon {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .points-label { font-size: 12px; font-weight: 900; letter-spacing: 1px; text-transform: uppercase; opacity: .9; margin-bottom: 6px; }
        .points-number {
            font-size: 42px;
            font-weight: 900;
            background: linear-gradient(135deg, #FFD700, #FFA500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .points-badge {
            background: linear-gradient(135deg, #4caf50, #66bb6a);
            color: white;
            padding: 6px 12px;
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 900;
            margin-left: 10px;
            display: inline-block;
            animation: pulse 2s ease-in-out infinite;
        }
        @keyframes pulse { 0%,100%{transform:scale(1)} 50%{transform:scale(1.05)} }

        /* Badge Section */
        .badges-section {
            margin-bottom: 40px;
            animation: fadeInUp 0.9s ease-out 0.3s both;
        }

        .badges-title {
            font-size: 24px;
            font-weight: 900;
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        .badges-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 16px;
            max-width: 900px;
            margin: 0 auto;
        }

        .badge-card {
            background: rgba(255,255,255,.09);
            border: 2px solid rgba(255,255,255,.15);
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            backdrop-filter: blur(14px);
            transition: all 0.3s ease;
        }

        .badge-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255,215,0,0.5);
            box-shadow: 0 12px 32px rgba(255,215,0,0.25);
        }

        .badge-icon {
            font-size: 48px;
            margin-bottom: 8px;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.2));
        }

        .badge-name {
            font-size: 14px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 4px;
        }

        .badge-desc {
            font-size: 11px;
            color: rgba(255,255,255,0.7);
            line-height: 1.4;
        }

        .badge-locked {
            opacity: 0.4;
            filter: grayscale(1);
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 22px;
            margin-bottom: 40px;
            animation: fadeInUp 0.9s ease-out 0.35s both;
        }

        .topic-card {
            background: #E8F5E9;
            border-radius: 24px;
            padding: 26px;
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
            top: 0; left: 0; right: 0;
            height: 4px;
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }
        .topic-card:hover::before { transform: scaleX(1); }

        .topic-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .topic-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent, rgba(255,255,255,.35), transparent);
            transform: translateX(-120%);
            transition: transform .6s ease;
        }
        .topic-card:hover::after { transform: translateX(120%); }

        .topic-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 18px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            transition: all 0.3s ease;
        }
        .topic-card:hover .topic-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .topic-title { font-size: 20px; font-weight: 900; margin-bottom: 8px; }
        .topic-level { font-size: 13px; margin-bottom: 18px; font-weight: 800; }

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

        @keyframes shimmer { 0%{transform:translateX(-100%)} 100%{transform:translateX(100%)} }
        .progress-text { font-size: 12px; color: #666; margin-top: 8px; }

        .topic-footer {
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px solid #e8f5e9;
            font-size: 13px;
            font-weight: 800;
        }

        /* WARNA UNTUK SETIAP TOPIK */
        
        .topic-card.blue .topic-icon {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            color: #1565c0;
        }
        .topic-card.blue:hover .topic-icon {
            background: linear-gradient(135deg, #42a5f5, #2196f3);
            color: #fff;
        }
        .topic-card.blue::before {
            background: linear-gradient(90deg, #1565c0, #42a5f5, #64b5f6);
        }
        .topic-card.blue .topic-title { color: #1565c0; }
        .topic-card.blue .topic-level { color: #42a5f5; }
        .topic-card.blue .topic-footer { color: #1976d2; }
        .topic-card.blue .progress-fill {
            background: linear-gradient(90deg, #1565c0, #42a5f5);
        }

        .topic-card.green .topic-icon {
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            color: #2e7d32;
        }
        .topic-card.green:hover .topic-icon {
            background: linear-gradient(135deg, #4caf50, #66bb6a);
            color: #fff;
        }
        .topic-card.green::before {
            background: linear-gradient(90deg, #2e7d32, #4caf50, #66bb6a);
        }
        .topic-card.green .topic-title { color: #1b5e20; }
        .topic-card.green .topic-level { color: #4caf50; }
        .topic-card.green .topic-footer { color: #388e3c; }
        .topic-card.green .progress-fill {
            background: linear-gradient(90deg, #2e7d32, #4caf50);
        }

        .topic-card.purple .topic-icon {
            background: linear-gradient(135deg, #f3e5f5, #e1bee7);
            color: #6a1b9a;
        }
        .topic-card.purple:hover .topic-icon {
            background: linear-gradient(135deg, #ab47bc, #ba68c8);
            color: #fff;
        }
        .topic-card.purple::before {
            background: linear-gradient(90deg, #6a1b9a, #ab47bc, #ba68c8);
        }
        .topic-card.purple .topic-title { color: #6a1b9a; }
        .topic-card.purple .topic-level { color: #ab47bc; }
        .topic-card.purple .topic-footer { color: #8e24aa; }
        .topic-card.purple .progress-fill {
            background: linear-gradient(90deg, #6a1b9a, #ab47bc);
        }

        .topic-card.orange .topic-icon {
            background: linear-gradient(135deg, #fff3e0, #ffe0b2);
            color: #e65100;
        }
        .topic-card.orange:hover .topic-icon {
            background: linear-gradient(135deg, #ff9800, #ffb74d);
            color: #fff;
        }
        .topic-card.orange::before {
            background: linear-gradient(90deg, #e65100, #ff9800, #ffb74d);
        }
        .topic-card.orange .topic-title { color: #e65100; }
        .topic-card.orange .topic-level { color: #ff9800; }
        .topic-card.orange .topic-footer { color: #f57c00; }
        .topic-card.orange .progress-fill {
            background: linear-gradient(90deg, #e65100, #ff9800);
        }

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
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        @media (max-width: 1100px) {
            .cards-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 980px) {
            .hero-left { text-align: center; }
            .hero-subtitle { margin-left: auto; margin-right: auto; }
            .hero-split{
                grid-template-columns: 1fr;
                text-align:center;
            }
            .hero-right{
                justify-content:center;
            }
        }

        @media (max-width: 768px) {
            .section-container { padding: 46px 18px; }
            .hero-title { font-size: 38px; letter-spacing: -1px; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .cards-grid { grid-template-columns: 1fr; }
            .floating-quote { display: none; }
        }
    </style>

    <section id="welcome" class="section welcome-section">
        <div class="section-container">
            <div class="hero-split">
                <div class="hero-left">
                    <h1 class="hero-title">
                        We help you to <span class="accent">learn</span><br>
                        and <span class="accent">enjoy</span> math.
                    </h1>
                    <p class="hero-subtitle">
                        Belajar matematika dengan cara yang lebih mudah dan menyenangkan. Jelajahi quiz interaktif,
                        naik level, dan kumpulkan poin di setiap langkah.
                    </p>
                </div>
                <div class="hero-right">
                    <img src="{{ asset('img/logo.png') }}" alt="Mathify" class="hero-logo">
                </div>
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

    <section id="quiz" class="section quiz-section">
        <div class="section-container">
            <div class="hero">
                <h1 class="hero2-title">Pilih Topik Belajar</h1>
                <p class="hero2-subtitle">Eksplorasi dunia matematika dengan cara yang menyenangkan!</p>
            </div>

            <div class="stats-container">
                <div class="points-card">
                    <div class="points-glow"></div>
                    <div class="points-content">
                        <div class="points-icon">⭐</div>
                        <div>
                            <div class="points-label">Total Poin</div>
                            <div>
                                <span class="points-number">{{ number_format($totalPoints) }}</span>
                                @if($recentPoints > 0)
                                    <span class="points-badge">+{{ $recentPoints }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Badge Section -->
            @if(count($badges) > 0)
            <div class="badges-section">
                <h2 class="badges-title">🏆 Badge yang Kamu Miliki</h2>
                <div class="badges-grid">
                    @foreach($badges as $badge)
                        <div class="badge-card">
                            <div class="badge-icon">{{ $badge['icon'] }}</div>
                            <div class="badge-name">{{ $badge['name'] }}</div>
                            <div class="badge-desc">{{ $badge['description'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="cards-grid">
                @foreach($topicsProgress as $topic)
                    @php
                        $colors = [
                            'penambahan' => 'blue',
                            'pengurangan' => 'green',
                            'perkalian' => 'purple',
                            'pembagian' => 'orange'
                        ];
                        $icons = [
                            'penambahan' => '+',
                            'pengurangan' => '−',
                            'perkalian' => '×',
                            'pembagian' => '÷'
                        ];
                        $color = $colors[$topic['operation']];
                        $icon = $icons[$topic['operation']];
                    @endphp
                    
                    <a href="/quiz/{{ $topic['operation'] }}" class="topic-card {{ $color }}">
                        <div class="topic-icon">{{ $icon }}</div>
                        <div class="topic-title">{{ ucfirst($topic['operation']) }}</div>
                        <div class="topic-level">Level 1–5 | Poin: 100</div>
                        <div class="progress-container">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: {{ $topic['progress'] }}%"></div>
                            </div>
                            <div class="progress-text">{{ $topic['progress'] }}% Selesai</div>
                        </div>
                        <div class="topic-footer">
                            @if($topic['completed'] > 0)
                                Lanjutkan dari Level {{ $topic['completed'] + 1 }}!
                            @else
                                Mulai dari Level 1!
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <div class="floating-quote">
        💡 "Belajar matematika itu seperti petualangan! Tetap semangat!"
    </div>
</x-app-layout>