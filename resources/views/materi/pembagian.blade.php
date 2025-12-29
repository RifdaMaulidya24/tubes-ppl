<x-app-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');
        body { font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; }

        .materi-page{position:relative;overflow:hidden;min-height:100vh;padding:42px 0;color:#0f172a;}
        .materi-bg{position:absolute;inset:0;background:linear-gradient(to bottom right,#ffb74d,#ff9800,#ef6c00);}
        .blob1{position:absolute;top:-160px;left:-140px;width:520px;height:520px;background:rgba(255,255,255,.22);filter:blur(120px);border-radius:999px;}
        .blob2{position:absolute;bottom:-170px;right:-140px;width:520px;height:520px;background:rgba(255,255,255,.16);filter:blur(140px);border-radius:999px;}
        .floaty{position:absolute;inset:0;pointer-events:none;opacity:.55;}
        .cloud{position:absolute;background:rgba(255,255,255,.18);border-radius:999px;filter:blur(10px);}
        .cloud.c1{top:40px;left:40px;width:150px;height:70px;animation:f1 8s ease-in-out infinite;}
        .cloud.c2{top:90px;right:60px;width:190px;height:90px;animation:f2 9s ease-in-out infinite;}
        .cloud.c3{bottom:90px;left:18%;width:160px;height:75px;animation:f3 10s ease-in-out infinite;}
        .cloud.c4{bottom:140px;right:20%;width:130px;height:62px;animation:f4 11s ease-in-out infinite;}
        @keyframes f1{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
        @keyframes f2{0%,100%{transform:translateY(0)}50%{transform:translateY(12px)}}
        @keyframes f3{0%,100%{transform:translateX(0)}50%{transform:translateX(14px)}}
        @keyframes f4{0%,100%{transform:translateX(0)}50%{transform:translateX(-16px)}}

        .container-materi{position:relative;z-index:2;max-width:1040px;margin:0 auto;padding:0 18px;}

        .hero{display:grid;grid-template-columns:1.25fr .75fr;gap:18px;align-items:center;margin-bottom:18px;}
        .hero-card{border-radius:28px;padding:22px;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);backdrop-filter:blur(18px);
            box-shadow:0 18px 60px rgba(0,0,0,.18);overflow:hidden;position:relative;}
        .hero-card::after{content:"";position:absolute;inset:0;background:radial-gradient(circle at 20% 20%,rgba(255,255,255,.22),transparent 55%);pointer-events:none;}
        .chip-row{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:10px;position:relative;z-index:1;}
        .chip{display:inline-flex;align-items:center;gap:8px;font-weight:900;font-size:12px;padding:8px 12px;border-radius:999px;background:rgba(255,255,255,.18);
            border:1px solid rgba(255,255,255,.22);color:rgba(255,255,255,.92);}
        .hero-title{position:relative;z-index:1;font-size:34px;line-height:1.12;font-weight:900;letter-spacing:-1px;color:#fff;margin:0 0 8px;
            text-shadow:0 10px 30px rgba(0,0,0,.20);}
        .hero-desc{position:relative;z-index:1;margin:0;font-size:14.5px;line-height:1.8;color:rgba(255,255,255,.86);max-width:680px;}
        .hero-actions{position:relative;z-index:1;margin-top:14px;display:flex;gap:10px;flex-wrap:wrap;}
        .btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;font-weight:900;border-radius:999px;padding:12px 16px;text-decoration:none;border:1px solid transparent;
            transition:transform .18s ease,box-shadow .18s ease,background .18s ease,border-color .18s ease;cursor:pointer;}
        .btn:hover{transform:translateY(-2px)} .btn:active{transform:translateY(0)}
        .btn-light{background:rgba(255,255,255,.92);color:#14532d;border-color:rgba(255,255,255,.22);box-shadow:0 14px 40px rgba(0,0,0,.18);}
        .btn-ghost{background:rgba(255,255,255,.16);color:#fff;border-color:rgba(255,255,255,.22);}

        .hero-mascot{border-radius:28px;padding:18px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.22);backdrop-filter:blur(18px);
            box-shadow:0 18px 60px rgba(0,0,0,.16);text-align:center;position:relative;overflow:hidden;}
        .hero-mascot::after{content:"";position:absolute;inset:0;background:linear-gradient(120deg,transparent,rgba(255,255,255,.22),transparent);
            transform:translateX(-120%);animation:shine 3.2s ease-in-out infinite;pointer-events:none;}
        @keyframes shine{0%{transform:translateX(-120%)}55%{transform:translateX(120%)}100%{transform:translateX(120%)}}
        .big-emoji{font-size:56px;filter:drop-shadow(0 12px 30px rgba(0,0,0,.18));margin-bottom:6px;}
        .mascot-title{font-weight:900;color:rgba(255,255,255,.95);margin:0 0 6px;letter-spacing:-.2px;}
        .mascot-mini{margin:0;color:rgba(255,255,255,.82);font-weight:700;font-size:13px;line-height:1.6;}

        .grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:16px;}
        .card{border-radius:26px;padding:18px;background:rgba(255,255,255,.92);border:1px solid rgba(255,255,255,.22);box-shadow:0 16px 55px rgba(0,0,0,.14);overflow:hidden;position:relative;}
        .card.soft{background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);backdrop-filter:blur(18px);color:#fff;}
        .card-title{font-weight:900;letter-spacing:-.3px;font-size:18px;margin:0 0 10px;}
        .card-title.light{color:#fff;}
        .card-sub{margin:0;color:rgba(15,23,42,.75);font-weight:700;line-height:1.75;font-size:13.5px;}
        .card-sub.light{color:rgba(255,255,255,.86);}

        .video-wrap{margin-top:12px;border-radius:20px;overflow:hidden;border:1px solid rgba(255,255,255,.22);background:rgba(0,0,0,.12);box-shadow:0 18px 55px rgba(0,0,0,.18);}
        .video-wrap iframe{width:100%;height:280px;border:0;display:block;}

        .sum-row{display:flex;gap:10px;flex-wrap:wrap;align-items:center;margin-top:10px;}
        .num-box{width:86px;padding:12px;border-radius:18px;border:1px solid rgba(15,23,42,.12);background:#fff;font-weight:900;font-size:16px;outline:none;box-shadow:0 10px 26px rgba(0,0,0,.08);}
        .op{font-weight:900;font-size:22px;color:#14532d;}
        .result-pill{display:inline-flex;align-items:center;gap:10px;padding:10px 14px;border-radius:999px;background:rgba(34,197,94,.12);border:1px solid rgba(34,197,94,.18);font-weight:900;color:#14532d;}
        .spark{display:inline-flex;width:34px;height:34px;border-radius:14px;align-items:center;justify-content:center;background:rgba(34,197,94,.18);}

        .mini-quiz{margin-top:10px;display:flex;flex-direction:column;gap:10px;}
        .quiz-q{font-weight:900;font-size:14px;color:rgba(255,255,255,.92);}
        .quiz-choices{display:grid;grid-template-columns:1fr 1fr;gap:10px;}
        .choice{background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.22);backdrop-filter:blur(18px);color:#fff;font-weight:900;border-radius:18px;padding:12px;text-align:center;cursor:pointer;
            transition:transform .18s ease,background .18s ease,border-color .18s ease;user-select:none;}
        .choice:hover{transform:translateY(-2px);background:rgba(255,255,255,.18);}
        .choice.correct{background:rgba(34,197,94,.22);border-color:rgba(34,197,94,.35);}
        .choice.wrong{background:rgba(239,68,68,.18);border-color:rgba(239,68,68,.32);}
        .feedback{font-weight:900;font-size:13px;color:rgba(255,255,255,.92);}

        .bottom-actions{margin-top:18px;display:flex;gap:10px;flex-wrap:wrap;justify-content:space-between;align-items:center;}

        @media (max-width: 900px){
            .hero{grid-template-columns:1fr;}
            .grid{grid-template-columns:1fr;}
            .video-wrap iframe{height:240px;}
        }
    </style>

    <div class="materi-page">
        <div class="materi-bg"></div>
        <div class="blob1"></div>
        <div class="blob2"></div>

        <div class="floaty">
            <div class="cloud c1"></div><div class="cloud c2"></div><div class="cloud c3"></div><div class="cloud c4"></div>
        </div>

        <div class="container-materi">

            <div class="hero">
                <div class="hero-card">
                    <div class="chip-row">
                        <div class="chip">📘 Materi</div>
                        <div class="chip">⭐ Level Dasar</div>
                        <div class="chip">➗ Pembagian</div>
                    </div>

                    <h1 class="hero-title">Materi Pembagian ➗</h1>
                    <p class="hero-desc">
                        Pembagian itu artinya <b>membagi rata</b>.
                        Misal 12 permen dibagi 3 anak, tiap anak dapat berapa? 😄
                    </p>

                    <div class="hero-actions">
                        <a href="#video" class="btn btn-ghost">🎥 Lihat Video</a>
                        <a href="#latihan" class="btn btn-light">🧩 Coba Latihan</a>
                    </div>
                </div>

                <div class="hero-mascot">
                    <div class="big-emoji">🧁👧🧒</div>
                    <p class="mascot-title">Tips Cepat!</p>
                    <p class="mascot-mini">
                        Pembagian adalah kebalikan dari perkalian.
                        Kalau 3 × 4 = 12, maka 12 ÷ 3 = 4.
                    </p>
                </div>
            </div>

            <div class="grid">
                <div class="card">
                    <div class="card-title">📌 Konsep Singkat</div>
                    <p class="card-sub">
                        Pembagian itu membagi suatu jumlah jadi beberapa bagian yang sama.
                        Hasilnya disebut <b>hasil bagi</b>.
                    </p>

                    <div style="height:12px"></div>

                    <div class="card-title">✅ Contoh</div>
                    <ul style="margin:0;padding-left:18px;color:rgba(15,23,42,.75);font-weight:800;line-height:1.8;font-size:13.5px;">
                        <li>12 ÷ 3 = 4</li>
                        <li>20 ÷ 5 = 4</li>
                        <li>15 ÷ 3 = 5</li>
                    </ul>

                    <div style="height:14px"></div>

                    <div class="card-title">🎮 Coba Interaktif</div>
                    <p class="card-sub">Ubah angkanya, hasilnya langsung keluar!</p>

                    <div class="sum-row" id="latihan">
                        <input id="a" class="num-box" type="number" value="12" min="0" />
                        <div class="op">÷</div>
                        <input id="b" class="num-box" type="number" value="3" min="1" />
                        <div class="op">=</div>

                        <div class="result-pill">
                            <span class="spark">⭐</span>
                            <span>Hasil: <span id="hasil">4</span></span>
                        </div>
                    </div>
                    <p class="card-sub" style="margin-top:10px;">
                        *Biar gampang, coba bagi angka yang habis dibagi ya 😄
                    </p>
                </div>

                <div class="card soft" id="video">
                    <div class="card-title light">🎥 Video Penjelasan</div>
                    <p class="card-sub light">Tonton dulu ya, habis itu mini quiz 😄</p>

                    <div class="video-wrap">
                        <iframe
                            src="https://www.youtube.com/embed/hHsfqYcdMKw?si=h8mp1tmp-gJofosy"
                            title="Video Materi Pembagian"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div style="height:12px"></div>

                    <div class="card-title light">🧠 Mini Quiz</div>
                    <p class="card-sub light">Berapa hasilnya?</p>

                    <div class="mini-quiz" id="miniQuiz">
                        <div class="quiz-q">Berapa hasil dari <b>18 ÷ 6</b> ?</div>
                        <div class="quiz-choices">
                            <div class="choice" data-answer="2">2</div>
                            <div class="choice" data-answer="3">3</div>
                            <div class="choice" data-answer="4">4</div>
                            <div class="choice" data-answer="5">5</div>
                        </div>
                        <div class="feedback" id="feedback">Pilih salah satu jawaban ya!</div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:16px;">
                <div class="card-title">⚡ Tips Cepat Anak Pintar</div>
                <ul style="margin:0;padding-left:18px;color:rgba(15,23,42,.75);font-weight:800;line-height:1.9;font-size:13.5px;">
                    <li>Cek pakai perkalian: hasil × pembagi = angka awal.</li>
                    <li>Mulai dari tabel 2, 3, 5, 10 biar cepat.</li>
                    <li>Kalau ada sisa, itu namanya <b>remainders/sisa</b> (nanti belajar lagi).</li>
                </ul>
            </div>

            <div class="bottom-actions">
                <a href="{{ route('materi.index') }}" class="btn btn-ghost">⬅ Kembali</a>
                <a href="{{ url('/quiz/pembagian') }}" class="btn btn-light">🚀 Mulai Quiz Pembagian</a>
            </div>
        </div>
    </div>

    <script>
        // Interaktif pembagian (a / b)
        const a = document.getElementById('a');
        const b = document.getElementById('b');
        const hasil = document.getElementById('hasil');

        function updateDiv(){
            const va = parseInt(a.value || 0, 10);
            const vb = Math.max(parseInt(b.value || 1, 10), 1);

            // tampilkan integer kalau pas, kalau tidak pas tampilkan 2 desimal
            const res = va / vb;
            hasil.textContent = Number.isInteger(res) ? res : res.toFixed(2);
        }

        a.addEventListener('input', updateDiv);
        b.addEventListener('input', updateDiv);
        updateDiv();

        // Mini quiz
        const choices = document.querySelectorAll('.choice');
        const feedback = document.getElementById('feedback');
        const correct = "3";

        choices.forEach(btn => {
            btn.addEventListener('click', () => {
                choices.forEach(x => x.classList.remove('correct','wrong'));
                const pick = btn.getAttribute('data-answer');
                if(pick === correct){
                    btn.classList.add('correct');
                    feedback.textContent = "✅ Benar! Hebat 😄";
                } else {
                    btn.classList.add('wrong');
                    feedback.textContent = "❌ Masih salah. Coba lagi ya!";
                }
            });
        });
    </script>
</x-app-layout>
