<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Dashboard Matematika
        </h2>
    </x-slot>

    <style>
        body {
            background: linear-gradient(to bottom right, #7fb0c9, #6094b6);
            font-family: 'Poppins', sans-serif;
        }

        .dashboard-title {
            text-align: center;
            font-size: 34px;
            color: white;
            font-weight: 700;
            margin-top: 40px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .dashboard-subtitle {
            text-align: center;
            font-size: 18px;
            color: #e8f6ff;
            margin-bottom: 40px;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: nowrap;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 60px;
        }

        .menu-card {
            width: 260px;
            height: 290px;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(8px);
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            color: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            cursor: pointer;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.28);
        }

        .menu-icon {
            font-size: 46px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .menu-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .menu-level {
            font-size: 14px;
            color: #e7f4ff;
            margin-bottom: 12px;
        }

        .progress-bar {
            width: 100%;
            height: 7px;
            background: rgba(255,255,255,0.35);
            border-radius: 5px;
            overflow: hidden;
            margin: 0 auto;
        }

        .progress-fill {
            width: 45%;
            height: 100%;
            background: #274b76;
        }

        @media (max-width: 1050px) {
            .card-container {
                flex-wrap: wrap;
            }
        }
    </style>

    <div class="dashboard-title">Selamat Datang di Mathify</div>
    <div class="dashboard-subtitle">Pilih jenis operasi untuk mulai belajar dan berlatih!</div>

    <div class="card-container">

        <div class="menu-card">
            <div class="menu-icon">+</div>
            <div class="menu-title">Penambahan</div>
            <div class="menu-level">Level 1–5 | Poin: 100</div>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>

        <div class="menu-card">
            <div class="menu-icon">−</div>
            <div class="menu-title">Pengurangan</div>
            <div class="menu-level">Level 1–5 | Poin: 100</div>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>

        <div class="menu-card">
            <div class="menu-icon">×</div>
            <div class="menu-title">Perkalian</div>
            <div class="menu-level">Level 1–5 | Poin: 100</div>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>

        <div class="menu-card">
            <div class="menu-icon">÷</div>
            <div class="menu-title">Pembagian</div>
            <div class="menu-level">Level 1–5 | Poin: 100</div>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>

    </div>

    <div style="text-align:center; margin-bottom: 50px;">
        <p style="color:white; font-size:16px; margin-bottom:14px;">Siap eksplorasi? Klik kartu untuk mulai!</p>
        <a href="#" style="
            background:#1e3f66;
            color:white;
            padding:12px 30px;
            border-radius:18px;
            text-decoration:none;
            font-weight:600;
            box-shadow:0 5px 15px rgba(0,0,0,0.3);
            transition:0.2s;">
            Lihat Progress
        </a>
    </div>

</x-app-layout>
