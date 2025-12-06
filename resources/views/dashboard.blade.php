<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Dashboard Matematika
        </h2>
    </x-slot>

    <style>
        body {
            background: linear-gradient(135deg, #1b5e20, #2e7d32, #388e3c);
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow-x: hidden;
            color: #fff;
        }

        /* Modern subtle patterns */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23ffffff" stroke-width="0.5" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            z-index: -1;
        }

        .dashboard-header {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .dashboard-title {
            font-size: 34px;
            color: #fff;
            font-weight: 700;
            text-shadow: 0 2px 6px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .streak-section {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 25px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .streak-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 12px 24px;
            border-radius: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            font-size: 16px;
            color: #fff;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideInLeft 0.8s ease-out;
        }

        @keyframes slideInLeft {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .dashboard-subtitle {
            text-align: center;
            font-size: 18px;
            color: #e8f5e8;
            margin-bottom: 40px;
            font-weight: 400;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            margin-bottom: 60px;
        }

        .menu-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 16px;
            padding: 30px;
            text-align: center;
            color: #1b5e20;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease;
            cursor: pointer;
            position: relative;
            border: 1px solid rgba(46, 125, 50, 0.2);
        }

        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        }

        .menu-icon {
            font-size: 48px;
            margin-bottom: 20px;
            color: #2e7d32;
            transition: color 0.3s ease;
        }

        .menu-card:hover .menu-icon {
            color: #1b5e20;
        }

        .menu-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1b5e20;
        }

        .menu-level {
            font-size: 14px;
            color: #4caf50;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e8f5e8;
            border-radius: 10px;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
        }

        .progress-fill {
            width: 45%;
            height: 100%;
            background: linear-gradient(90deg, #2e7d32, #4caf50);
            border-radius: 10px;
            transition: width 0.5s ease;
        }

        .card-footer {
            margin-top: 15px;
            font-size: 12px;
            color: #388e3c;
            font-weight: 500;
        }

        @media (max-width: 1050px) {
            .card-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
            .menu-card {
                padding: 20px;
            }
        }

        .cta-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .cta-text {
            color: #e8f5e8;
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: 400;
        }

        .cta-button {
            background: linear-gradient(135deg, #ffd93d, #ffb74d);
            color: #1b5e20;
            padding: 14px 32px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-block;
            border: none;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.3);
        }

        .motivation-quote {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 12px 18px;
            border-radius: 15px;
            font-size: 14px;
            color: #e8f5e8;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>

    <div class="dashboard-header">
        <div class="streak-section">
            <div class="streak-item">🔥 Streak: 5 Hari</div>
            <div class="streak-item">💎 Poin Harian: 150</div>
        </div>
        <div class="dashboard-title">Selamat Datang di Mathify</div>
    </div>
    <div class="card-container">

    <a href="/materi/penambahan" class="menu-card">
        <div class="menu-icon">+</div>
        <div class="menu-title">Penambahan</div>
        <div class="menu-level">Level 1–5 | Poin: 100</div>
        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>
        <div class="card-footer">Lanjutkan dari Level 3!</div>
    </a>

    <a href="/materi/pengurangan" class="menu-card">
        <div class="menu-icon">−</div>
        <div class="menu-title">Pengurangan</div>
        <div class="menu-level">Level 1–5 | Poin: 100</div>
        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>
        <div class="card-footer">Lanjutkan dari Level 2!</div>
    </a>

    <a href="/materi/perkalian" class="menu-card">
        <div class="menu-icon">×</div>
        <div class="menu-title">Perkalian</div>
        <div class="menu-level">Level 1–5 | Poin: 100</div>
        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>
        <div class="card-footer">Lanjutkan dari Level 4!</div>
    </a>

    <a href="/materi/pembagian" class="menu-card">
        <div class="menu-icon">÷</div>
        <div class="menu-title">Pembagian</div>
        <div class="menu-level">Level 1–5 | Poin: 100</div>
        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>
        <div class="card-footer">Lanjutkan dari Level 1!</div>
    </a>

</div>


    <div class="cta-section">
        <p class="cta-text">Siap eksplorasi dunia matematika yang seru? Klik kartu untuk mulai!</p>
        <a href="#" class="cta-button">Lihat Progress Lengkap</a>
    </div>

    <div class="motivation-quote">"Belajar matematika itu seperti petualangan! Tetap semangat!"</div>
</x-app-layout>
