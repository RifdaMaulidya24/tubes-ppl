<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Dashboard Matematika
        </h2>
    </x-slot>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');

        .welcome-section .feature-head {
            text-align: center;
            max-width: 760px;
            margin: 26px auto 18px;
        }
        #materi { scroll-margin-top: 90px; }
        #quiz { scroll-margin-top: 90px; }

        .welcome-section .feature-heading {
            font-size: 30px;
            font-weight: 900;
            letter-spacing: -0.4px;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #ffffff, #e8f5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-section .feature-subtitle {
            font-size: 13.5px;
            line-height: 1.75;
            color: rgba(255, 255, 255, .78);
            margin: 0;
        }

        .get-started-btn{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            margin-top: 14px;
            padding: 12px 18px;
            border-radius: 999px;

            font-weight: 900;
            font-size: 14px;
            letter-spacing: .2px;
            text-decoration: none;

            color: #1a3d2e;
            background: rgba(255,255,255,.92);
            border: 1px solid rgba(255,255,255,.22);
            box-shadow: 0 16px 40px rgba(0,0,0,.18);

            transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
        }

        .get-started-btn::after{
            content: "↓";
            font-weight: 900;
            opacity: .9;
        }

        .get-started-btn:hover{
            transform: translateY(-2px);
            box-shadow: 0 22px 56px rgba(0,0,0,.22);
            background: rgba(255,255,255,.98);
        }

        .get-started-btn:active{
            transform: translateY(0px);
        }

        /* Heading khusus section materi */
        .welcome-section .materi-head2 {
            text-align: center;
            max-width: 760px;
            margin: 34px auto 18px;
        }

        .welcome-section .materi-heading2 {
            font-size: 26px;
            font-weight: 900;
            letter-spacing: -0.6px;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #ffffff, #e8f5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-section .materi-subtitle2 {
            font-size: 14px;
            line-height: 1.8;
            color: rgba(255, 255, 255, .78);
            margin: 0;
        }

        /* Heading khusus section quiz (cards-grid) */
        .quiz-section .quiz-head {
            text-align: center;
            max-width: 760px;
            margin: 10px auto 22px;
        }

        .quiz-section .quiz-heading {
            font-size: 26px;
            font-weight: 900;
            letter-spacing: -0.6px;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #ffffff, #e8f5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .quiz-section .quiz-subtitle {
            font-size: 14px;
            line-height: 1.8;
            color: rgba(255, 255, 255, .78);
            margin: 0;
        }

        body {
            background: linear-gradient(to bottom right, #123A2D, #123A2D, #123A2D);
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
                radial-gradient(circle at 18% 40%, rgba(255, 255, 255, 0.07) 0%, transparent 55%),
                radial-gradient(circle at 85% 75%, rgba(255, 255, 255, 0.06) 0%, transparent 60%),
                radial-gradient(circle at 55% 18%, rgba(255, 255, 255, 0.04) 0%, transparent 55%);
            animation: bgFloat1 18s ease-in-out infinite;
            will-change: transform;
        }

        body::after {
            background:
                radial-gradient(circle at 10% 85%, rgba(255, 255, 255, 0.05) 0%, transparent 58%),
                radial-gradient(circle at 92% 22%, rgba(255, 255, 255, 0.045) 0%, transparent 60%),
                radial-gradient(circle at 55% 60%, rgba(255, 255, 255, 0.035) 0%, transparent 55%);
            animation: bgFloat2 26s ease-in-out infinite;
            opacity: .9;
            will-change: transform;
        }

        @keyframes bgFloat1 {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-40px) scale(1.02); }
        }

        @keyframes bgFloat2 {
            0%, 100% { transform: translateX(0) scale(1); }
            50% { transform: translateX(-55px) scale(1.02); }
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
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-left { text-align: left; }

        .hero-right {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .hero-logo {
            width: 320px;
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 18px 50px rgba(0, 0, 0, .25));
            transform: translate(-50px, -5px);
        }

        .hero-title {
            font-size: 54px;
            line-height: 1.06;
            font-weight: 900;
            letter-spacing: -2px;
            margin-bottom: 14px;
            color: #fff;
            text-shadow: 0 18px 50px rgba(0, 0, 0, .20);
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
            color: rgba(255, 255, 255, .78);
            max-width: 520px;
            margin-bottom: 22px;
            animation: fadeInUp 0.9s ease-out 0.22s both;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(22px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ===== Feature Highlights (bukan card) ===== */
        .features-grid {
            margin-top: 34px;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 22px;

            max-width: 860px;
            margin-left: auto;
            margin-right: auto;

            animation: fadeInUp 0.9s ease-out 0.38s both;
        }

        .feature-item {
            text-align: center;
            padding: 0;
            border: 0;
            background: transparent;
            backdrop-filter: none;
            min-height: auto;
            transition: transform .22s ease, filter .22s ease;
        }

        .feature-item:hover {
            transform: translateY(-4px);
            filter: drop-shadow(0 10px 24px rgba(0,0,0,.14));
        }

        .feature-icon {
            font-size: 38px;
            line-height: 1;
            margin-bottom: 10px;
            filter: drop-shadow(0 10px 28px rgba(0, 0, 0, .18));
        }

        .feature-title {
            font-weight: 900;
            font-size: 14px;
            letter-spacing: -0.2px;
            margin-bottom: 4px;
            color: rgba(255, 255, 255, .95);
        }

        .feature-desc {
            font-size: 12.5px;
            line-height: 1.6;
            color: rgba(255, 255, 255, .72);
            margin: 0 auto;
            max-width: 220px;
        }

        @media (max-width: 980px) {
            .features-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 768px) {
            .features-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; }
            .feature-icon { font-size: 34px; }
        }

        .features-divider {
            height: 1px;
            width: 100%;
            max-width: 980px;
            margin: 34px auto 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .18), transparent);
        }

        /* ===== Materi Section ===== */
        .materi-wrap { margin-top: 26px; padding-top: 6px; }

        .materi-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
        }

        .materi-card {
            position: relative;
            display: block;
            text-decoration: none;
            color: #fff;

            border-radius: 22px;
            padding: 18px 18px 16px;

            background: rgba(255, 255, 255, .07);
            border: 1px solid rgba(255, 255, 255, .14);
            backdrop-filter: blur(16px);
            min-height: 142px;

            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            overflow: hidden;
        }

        /* ✅ Tambahan efek hover seperti quiz */
        .materi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            transform: scaleX(0);
            transition: transform 0.4s ease;
            z-index: 2;
        }

        .materi-card:hover::before { transform: scaleX(1); }

        .materi-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 22px;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .35), transparent);
            transform: translateX(-120%);
            transition: transform .6s ease;
            pointer-events: none;
            opacity: .9;
        }

        .materi-card:hover::after { transform: translateX(120%); }

        .materi-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            border-color: rgba(255,255,255,.20);
            background: rgba(255, 255, 255, .09);
        }

        .materi-top {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            z-index: 3;
            margin-bottom: 12px;
        }

        .materi-pill {
            font-size: 11px;
            font-weight: 900;
            letter-spacing: .9px;
            text-transform: uppercase;
            padding: 7px 10px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .10);
            border: 1px solid rgba(255, 255, 255, .14);
            color: rgba(255, 255, 255, .88);
        }

        .materi-symbol {
            width: 52px;
            height: 52px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255, 255, 255, .92);
            color: #1b5e20;
            font-weight: 900;
            font-size: 22px;

            box-shadow: 0 14px 40px rgba(0, 0, 0, .18);
            transition: all 0.3s ease;
            z-index: 3;
        }

        .materi-card:hover .materi-symbol{
            transform: scale(1.1) rotate(5deg);
        }

        .materi-name {
            position: relative;
            z-index: 3;
            font-weight: 900;
            font-size: 15px;
            margin-bottom: 6px;
            letter-spacing: -0.2px;
        }

        .materi-desc {
            position: relative;
            z-index: 3;
            font-size: 12.5px;
            line-height: 1.65;
            color: rgba(255, 255, 255, .74);
        }

        /* ✅ Garis warna kayak quiz */
        .materi-card.blue::before   { background: linear-gradient(90deg, #1565c0, #42a5f5, #64b5f6); }
        .materi-card.green::before  { background: linear-gradient(90deg, #2e7d32, #4caf50, #66bb6a); }
        .materi-card.purple::before { background: linear-gradient(90deg, #6a1b9a, #ab47bc, #ba68c8); }
        .materi-card.orange::before { background: linear-gradient(90deg, #e65100, #ff9800, #ffb74d); }

        .materi-card.blue .materi-symbol { color: #0f4aa8; }
        .materi-card.green .materi-symbol { color: #1b5e20; }
        .materi-card.purple .materi-symbol { color: #6a1b9a; }
        .materi-card.orange .materi-symbol { color: #e65100; }

        @media (max-width: 1100px) {
            .materi-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 768px) {
            .materi-grid { grid-template-columns: 1fr; }
        }

        /* ===== SISANYA TETAP (DARI KODE KAMU) ===== */

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

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .points-content {
            position: relative;
            display: flex;
            align-items: center;
            gap: 18px;
            z-index: 1;
        }

        .points-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 28px rgba(255, 215, 0, 0.34);
            font-size: 28px;
            animation: floatIcon 3s ease-in-out infinite;
        }

        @keyframes floatIcon {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .points-label {
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 1px;
            text-transform: uppercase;
            opacity: .9;
            margin-bottom: 6px;
        }

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

        @keyframes pulse {
            0%, 100% { transform: scale(1) }
            50% { transform: scale(1.05) }
        }

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
            background: rgba(255, 255, 255, .09);
            border: 2px solid rgba(255, 255, 255, .15);
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            backdrop-filter: blur(14px);
            transition: all 0.3s ease;
        }

        .badge-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255, 215, 0, 0.5);
            box-shadow: 0 12px 32px rgba(255, 215, 0, 0.25);
        }

        .badge-icon {
            font-size: 48px;
            margin-bottom: 8px;
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.2));
        }

        .badge-name {
            font-size: 14px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 4px;
        }

        .badge-desc {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.7);
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
            top: 0;
            left: 0;
            right: 0;
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
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .35), transparent);
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

        .topic-card:hover .topic-icon { transform: scale(1.1) rotate(5deg); }

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

        @keyframes shimmer {
            0% { transform: translateX(-100%) }
            100% { transform: translateX(100%) }
        }

        .progress-text { font-size: 12px; color: #666; margin-top: 8px; }

        .topic-footer {
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px solid #e8f5e9;
            font-size: 13px;
            font-weight: 800;
        }

        .topic-card.blue .topic-icon { background: linear-gradient(135deg, #e3f2fd, #bbdefb); color: #1565c0; }
        .topic-card.blue:hover .topic-icon { background: linear-gradient(135deg, #42a5f5, #2196f3); color: #fff; }
        .topic-card.blue::before { background: linear-gradient(90deg, #1565c0, #42a5f5, #64b5f6); }
        .topic-card.blue .topic-title { color: #1565c0; }
        .topic-card.blue .topic-level { color: #42a5f5; }
        .topic-card.blue .topic-footer { color: #1976d2; }
        .topic-card.blue .progress-fill { background: linear-gradient(90deg, #1565c0, #42a5f5); }

        .topic-card.green .topic-icon { background: linear-gradient(135deg, #e8f5e9, #c8e6c9); color: #2e7d32; }
        .topic-card.green:hover .topic-icon { background: linear-gradient(135deg, #4caf50, #66bb6a); color: #fff; }
        .topic-card.green::before { background: linear-gradient(90deg, #2e7d32, #4caf50, #66bb6a); }
        .topic-card.green .topic-title { color: #1b5e20; }
        .topic-card.green .topic-level { color: #4caf50; }
        .topic-card.green .topic-footer { color: #388e3c; }
        .topic-card.green .progress-fill { background: linear-gradient(90deg, #2e7d32, #4caf50); }

        .topic-card.purple .topic-icon { background: linear-gradient(135deg, #f3e5f5, #e1bee7); color: #6a1b9a; }
        .topic-card.purple:hover .topic-icon { background: linear-gradient(135deg, #ab47bc, #ba68c8); color: #fff; }
        .topic-card.purple::before { background: linear-gradient(90deg, #6a1b9a, #ab47bc, #ba68c8); }
        .topic-card.purple .topic-title { color: #6a1b9a; }
        .topic-card.purple .topic-level { color: #ab47bc; }
        .topic-card.purple .topic-footer { color: #8e24aa; }
        .topic-card.purple .progress-fill { background: linear-gradient(90deg, #6a1b9a, #ab47bc); }

        .topic-card.orange .topic-icon { background: linear-gradient(135deg, #fff3e0, #ffe0b2); color: #e65100; }
        .topic-card.orange:hover .topic-icon { background: linear-gradient(135deg, #ff9800, #ffb74d); color: #fff; }
        .topic-card.orange::before { background: linear-gradient(90deg, #e65100, #ff9800, #ffb74d); }
        .topic-card.orange .topic-title { color: #e65100; }
        .topic-card.orange .topic-level { color: #ff9800; }
        .topic-card.orange .topic-footer { color: #f57c00; }
        .topic-card.orange .progress-fill { background: linear-gradient(90deg, #e65100, #ff9800); }

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
            .hero-split { grid-template-columns: 1fr; text-align: center; }
            .hero-right { justify-content: center; }
        }

        @media (max-width: 768px) {
            .section-container { padding: 46px 18px; }
            .hero-title { font-size: 38px; letter-spacing: -1px; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .cards-grid { grid-template-columns: 1fr; }
            .floating-quote { display: none; }
        }

        /* ===== Big Footer ===== */
        .big-footer{
            position: relative;
            z-index: 2;
            margin-top: 70px;
            padding: 44px 0 22px;
        }

        .big-footer::before{
            content:"";
            position:absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0,0,0,0), rgba(0,0,0,.18));
            pointer-events:none;
        }

        .big-footer .footer-inner{
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 28px;
        }

        .footer-surface{
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.14);
            backdrop-filter: blur(18px);
            border-radius: 28px;
            padding: 28px 26px;
            box-shadow: 0 18px 60px rgba(0,0,0,.22);
        }

        .footer-top{
            display: grid;
            grid-template-columns: 1.25fr 1fr 1fr 1fr;
            gap: 22px;
        }

        .footer-brandrow{ display:flex; gap: 12px; align-items:flex-start; }

        .footer-logo-badge{
            width: 54px;
            height: 54px;
            border-radius: 18px;
            display:flex;
            align-items:center;
            justify-content:center;
            background: rgba(255,255,255,.92);
            color:#1b5e20;
            font-weight: 900;
            font-size: 22px;
            box-shadow: 0 12px 36px rgba(0,0,0,.18);
        }

        .footer-brand{
            margin:0;
            font-weight: 900;
            font-size: 18px;
            letter-spacing: -.2px;
            color: rgba(255,255,255,.96);
        }

        .footer-tagline{
            margin: 6px 0 0;
            font-size: 13px;
            line-height: 1.7;
            color: rgba(255,255,255,.74);
            max-width: 320px;
        }

        .footer-col-title{
            margin: 4px 0 12px;
            font-weight: 900;
            font-size: 13px;
            letter-spacing: .8px;
            text-transform: uppercase;
            color: rgba(255,255,255,.9);
        }

        .footer-links{ display:flex; flex-direction: column; gap: 10px; }

        .footer-links a{
            color: rgba(255,255,255,.76);
            text-decoration:none;
            font-weight: 800;
            font-size: 13px;
            display:inline-flex;
            align-items:center;
            gap: 10px;
            transition: .18s ease;
        }

        .footer-links a:hover{
            color: rgba(255,255,255,.98);
            transform: translateX(2px);
        }

        .footer-icon{
            width: 34px;
            height: 34px;
            border-radius: 14px;
            display:flex;
            align-items:center;
            justify-content:center;
            background: rgba(255,255,255,.10);
            border: 1px solid rgba(255,255,255,.14);
            color: rgba(255,255,255,.92);
            font-size: 14px;
        }

        .footer-contact-item{
            display:flex;
            gap: 10px;
            align-items:flex-start;
            color: rgba(255,255,255,.76);
            font-size: 13px;
            line-height: 1.6;
            font-weight: 700;
        }

        .footer-contact-item strong{
            color: rgba(255,255,255,.92);
            font-weight: 900;
        }

        .footer-divider{
            height: 1px;
            width: 100%;
            margin: 22px 0 14px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,.18), transparent);
        }

        .footer-bottom{
            display:flex;
            align-items:center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .footer-copy{
            margin:0;
            color: rgba(255,255,255,.70);
            font-size: 12.5px;
            font-weight: 700;
        }

        .footer-mini{
            display:flex;
            align-items:center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .footer-pill{
            font-size: 12px;
            font-weight: 900;
            color: rgba(255,255,255,.78);
            text-decoration:none;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.14);
            transition: .18s ease;
        }

        .footer-pill:hover{
            color: rgba(255,255,255,.96);
            background: rgba(255,255,255,.12);
        }

        @media (max-width: 980px){
            .footer-top{ grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 640px){
            .footer-top{ grid-template-columns: 1fr; }
            .footer-surface{ padding: 22px 18px; }
        }

        .reveal{
            opacity: 0;
            transform: translateY(18px);
            filter: blur(6px);
            transition:
                opacity .7s ease,
                transform .7s ease,
                filter .7s ease;
            transition-delay: var(--d, 0ms);
            will-change: opacity, transform, filter;
        }
        .reveal--left{ transform: translateX(-18px); }
        .reveal--right{ transform: translateX(18px); }
        .reveal--zoom{ transform: scale(.96); }

        .reveal.is-visible{
            opacity: 1;
            transform: none;
            filter: blur(0);
        }

        @media (prefers-reduced-motion: reduce){
            .reveal{
                opacity: 1 !important;
                transform: none !important;
                filter: none !important;
                transition: none !important;
            }
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
                    <a href="#quiz" class="get-started-btn">Get Started</a>
                </div>
                <div class="hero-right">
                    <img src="{{ asset('img/logo.png') }}" alt="Mathify" class="hero-logo">
                </div>
            </div>

            <div class="feature-head reveal reveal--up">
                <h2 class="feature-heading">Kenapa Mathify?</h2>
                <p class="feature-subtitle">
                    Semua dibuat biar belajar matematika jadi lebih gampang, terarah, dan tetap seru tiap hari.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-item reveal reveal--up" style="--d: 80ms;">
                    <div class="feature-icon">📚</div>
                    <div class="feature-title">Materi Lengkap</div>
                    <div class="feature-desc">Topik dari dasar hingga lanjutan</div>
                </div>

                <div class="feature-item reveal reveal--up" style="--d: 160ms;">
                    <div class="feature-icon">⚡</div>
                    <div class="feature-title">Level Bertahap</div>
                    <div class="feature-desc">Belajar sistematis dengan 5 level</div>
                </div>

                <div class="feature-item reveal reveal--up" style="--d: 240ms;">
                    <div class="feature-icon">✨</div>
                    <div class="feature-title">Sistem Poin</div>
                    <div class="feature-desc">Kumpulkan poin setiap quiz</div>
                </div>

                <div class="feature-item reveal reveal--up" style="--d: 320ms;">
                    <div class="feature-icon">🏆</div>
                    <div class="feature-title">Pencapaian</div>
                    <div class="feature-desc">Raih badge dan milestone</div>
                </div>
            </div>

            <div class="features-divider reveal" style="--d: 120ms;"></div>

            <div class="materi-wrap"></div>

            <div id="materi" class="materi-head2 reveal reveal--up">
                <h2 class="materi-heading2">Pilih Materi</h2>
                <p class="materi-subtitle2">
                    Mulai dari materi dulu biar paham konsepnya. Setelah itu baru lanjut quiz biar makin lancar.
                </p>
            </div>

            <div class="materi-grid">
                <a href="{{ route('materi.penambahan') }}" class="materi-card blue reveal reveal--up" style="--d: 80ms;">
                    <div class="materi-top">
                        <div class="materi-pill">Materi</div>
                        <div class="materi-symbol">+</div>
                    </div>
                    <div class="materi-name">Penambahan</div>
                    <div class="materi-desc">Konsep, contoh soal, dan latihan singkat untuk pemanasan.</div>
                </a>

                <a href="{{ route('materi.pengurangan') }}" class="materi-card green reveal reveal--up" style="--d: 160ms;">
                    <div class="materi-top">
                        <div class="materi-pill">Materi</div>
                        <div class="materi-symbol">−</div>
                    </div>
                    <div class="materi-name">Pengurangan</div>
                    <div class="materi-desc">Belajar langkah pengurangan dari mudah sampai paham.</div>
                </a>

                <a href="{{ route('materi.perkalian') }}" class="materi-card purple reveal reveal--up" style="--d: 240ms;">
                    <div class="materi-top">
                        <div class="materi-pill">Materi</div>
                        <div class="materi-symbol">×</div>
                    </div>
                    <div class="materi-name">Perkalian</div>
                    <div class="materi-desc">Pola, tabel, dan latihan supaya makin cepat menghitung.</div>
                </a>

                <a href="{{ route('materi.pembagian') }}" class="materi-card orange reveal reveal--up" style="--d: 320ms;">
                    <div class="materi-top">
                        <div class="materi-pill">Materi</div>
                        <div class="materi-symbol">÷</div>
                    </div>
                    <div class="materi-name">Pembagian</div>
                    <div class="materi-desc">Konsep pembagian dan contoh soal yang gampang diikuti.</div>
                </a>
            </div>
        </div>
    </section>

    <section id="quiz" class="section quiz-section">
        <div class="section-container">
            <div class="hero">
                <h1 class="hero2-title">Pencapaian Kamu</h1>
                <p class="hero2-subtitle">Lihat total poin, badge yang sudah kamu kumpulkan, dan lanjutkan quiz.</p>
            </div>

            <div class="stats-container">
                <div class="points-card reveal reveal--zoom">
                    <div class="points-glow"></div>
                    <div class="points-content">
                        <div class="points-icon">⭐</div>
                        <div>
                            <div class="points-label">Total Poin</div>
                            <div>
                                <span class="points-number">{{ number_format($totalPoints) }}</span>
                                @if ($recentPoints > 0)
                                    <span class="points-badge">+{{ $recentPoints }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (count($badges) > 0)
                <div class="badges-section reveal reveal--up">
                    <h2 class="badges-title">🏆 Badge yang Kamu Miliki</h2>
                    <div class="badges-grid">
                        @foreach ($badges as $badge)
                            <div class="badge-card reveal reveal--up" style="--d: 90ms;">
                                <div class="badge-icon">{{ $badge['icon'] }}</div>
                                <div class="badge-name">{{ $badge['name'] }}</div>
                                <div class="badge-desc">{{ $badge['description'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="quiz-head reveal reveal--up">
                <h2 class="quiz-heading">Pilih Quiz</h2>
                <p class="quiz-subtitle">
                    Tes pemahaman kamu lewat quiz. Naik level, kumpulin poin, dan selesaikan progres di setiap topik.
                </p>
            </div>

            <div class="cards-grid">
                @foreach ($topicsProgress as $i => $topic)
                    @php
                        $colors = [
                            'penambahan' => 'blue',
                            'pengurangan' => 'green',
                            'perkalian' => 'purple',
                            'pembagian' => 'orange',
                        ];
                        $icons = [
                            'penambahan' => '+',
                            'pengurangan' => '−',
                            'perkalian' => '×',
                            'pembagian' => '÷',
                        ];
                        $color = $colors[$topic['operation']];
                        $icon = $icons[$topic['operation']];
                        $delay = ($i % 4) * 90 + 80;
                    @endphp

                    <a href="/quiz/{{ $topic['operation'] }}" class="topic-card {{ $color }} reveal reveal--up" style="--d: {{ $delay }}ms;">
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
                            @if ($topic['completed'] > 0)
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
        "Belajar matematika itu seperti petualangan! Tetap semangat!"
    </div>

    <footer class="big-footer reveal reveal--up" id="footer">
        <div class="footer-inner">
            <div class="footer-surface">
                <div class="footer-top">
                    <div>
                        <div class="footer-brandrow">
                            <div class="footer-logo-badge">∑</div>
                            <div>
                                <p class="footer-brand">Mathify</p>
                                <p class="footer-tagline">
                                    Platform belajar matematika yang simpel, terarah, dan seru.
                                    Mulai dari materi, lanjut quiz, kumpulkan poin dan badge!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="footer-col-title">Quick Links</div>
                        <div class="footer-links">
                            <a href="#welcome"><span class="footer-icon">🏠</span> Home</a>
                            <a href="#materi"><span class="footer-icon">📘</span> Materi</a>
                            <a href="#quiz"><span class="footer-icon">🧠</span> Quiz</a>
                            <a href="{{ route('quiz.result') }}"><span class="footer-icon">📊</span> Result</a>
                        </div>
                    </div>

                    <div>
                        <div class="footer-col-title">Social Media</div>
                        <div class="footer-links">
                            <a href="#" target="_blank" rel="noopener">
                                <span class="footer-icon">📸</span> Instagram
                            </a>
                            <a href="#" target="_blank" rel="noopener">
                                <span class="footer-icon">🎵</span> TikTok
                            </a>
                            <a href="#" target="_blank" rel="noopener">
                                <span class="footer-icon">💬</span> WhatsApp
                            </a>
                            <a href="#" target="_blank" rel="noopener">
                                <span class="footer-icon">▶️</span> YouTube
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="footer-col-title">Contact</div>

                        <div class="footer-contact-item">
                            <span class="footer-icon">✉️</span>
                            <div>
                                <strong>Email</strong><br>
                                support@mathify.id
                            </div>
                        </div>

                        <div style="height:10px"></div>

                        <div class="footer-contact-item">
                            <span class="footer-icon">📍</span>
                            <div>
                                <strong>Alamat</strong><br>
                                Jagir, Surabaya
                            </div>
                        </div>

                        <div style="height:10px"></div>

                        <div class="footer-contact-item">
                            <span class="footer-icon">📞</span>
                            <div>
                                <strong>Phone</strong><br>
                                +62 812-1788-3105
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-divider"></div>

                <div class="footer-bottom">
                    <p class="footer-copy">
                        © {{ date('Y') }} Mathify. All rights reserved.
                    </p>

                    <div class="footer-mini">
                        <a class="footer-pill" href="{{ route('profile.edit') }}">Profile</a>
                        <a class="footer-pill" href="#welcome">Back to Top ↑</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        (function () {
            const els = document.querySelectorAll('.reveal');
            if (!('IntersectionObserver' in window) || !els.length) {
                els.forEach(el => el.classList.add('is-visible'));
                return;
            }

            const io = new IntersectionObserver((entries) => {
                entries.forEach((e) => {
                    if (e.isIntersecting) {
                        e.target.classList.add('is-visible');
                        io.unobserve(e.target);
                    }
                });
            }, {
                threshold: 0.14,
                rootMargin: '0px 0px -10% 0px'
            });

            els.forEach(el => io.observe(el));
        })();
    </script>

</x-app-layout>
