<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Menu Quiz
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
            pointer-events: none; /* ✅ biar nav & link bisa diklik */
            animation: float 20s ease-in-out infinite;
        }

        @@keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
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
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 32px;
            width: 100%;
        }

        .hero {
            text-align: center;
            margin-bottom: 48px;
            animation: fadeInDown 0.8s ease-out;
        }

        @@keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
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
            margin-bottom: 0;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 24px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        @@keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
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

        .topic-card:hover::before { transform: scaleX(1); }

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
            margin-bottom: 12px;
            font-weight: 600;
        }

        .topic-footer {
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid #e8f5e9;
            font-size: 13px;
            color: #388e3c;
            font-weight: 600;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease-out 0.35s both;
        }

        .action-btn {
            background: rgba(255, 255, 255, 0.20);
            border: 1px solid rgba(255, 255, 255, 0.20);
            color: #fff;
            padding: 12px 18px;
            border-radius: 16px;
            font-weight: 800;
            text-decoration: none;
            transition: 0.25s ease;
            backdrop-filter: blur(14px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        }

        .action-btn:hover {
            background: rgba(255, 255, 255, 0.28);
            transform: translateY(-2px);
        }

        @@media (max-width: 768px) {
            .section-container { padding: 40px 20px; }
            .hero-title { font-size: 32px; }
            .cards-grid { grid-template-columns: 1fr; gap: 16px; }
        }
    </style>

    <section class="section">
        <div class="section-container">
            <div class="hero">
                <h1 class="hero-title">Pilih Quiz</h1>
                <p class="hero-subtitle">Pilih operasi yang mau kamu latihan.</p>
            </div>

            <div class="cards-grid">
                <a href="{{ route('quiz.levels', ['operation' => 'penambahan']) }}" class="topic-card">
                    <div class="topic-icon">+</div>
                    <div class="topic-title">Penambahan</div>
                    <div class="topic-level">Level 1–5</div>
                    <div class="topic-footer">Mulai latihan penambahan</div>
                </a>

                <a href="{{ route('quiz.levels', ['operation' => 'pengurangan']) }}" class="topic-card">
                    <div class="topic-icon">−</div>
                    <div class="topic-title">Pengurangan</div>
                    <div class="topic-level">Level 1–5</div>
                    <div class="topic-footer">Mulai latihan pengurangan</div>
                </a>

                <a href="{{ route('quiz.levels', ['operation' => 'perkalian']) }}" class="topic-card">
                    <div class="topic-icon">×</div>
                    <div class="topic-title">Perkalian</div>
                    <div class="topic-level">Level 1–5</div>
                    <div class="topic-footer">Mulai latihan perkalian</div>
                </a>

                <a href="{{ route('quiz.levels', ['operation' => 'pembagian']) }}" class="topic-card">
                    <div class="topic-icon">÷</div>
                    <div class="topic-title">Pembagian</div>
                    <div class="topic-level">Level 1–5</div>
                    <div class="topic-footer">Mulai latihan pembagian</div>
                </a>
            </div>

            <div class="actions">
                <a class="action-btn" href="{{ route('dashboard') }}">🏠 Dashboard</a>
                <a class="action-btn" href="{{ route('quiz.result') }}">📊 Result / Statistik</a>
            </div>
        </div>
    </section>
</x-app-layout>
