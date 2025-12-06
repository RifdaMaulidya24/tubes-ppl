<x-app-layout>

<div class="min-h-screen w-full relative overflow-hidden py-12">

    <!-- Gradient dasar -->
    <div class="absolute inset-0 bg-gradient-to-br from-green-400 via-green-500 to-green-700"></div>

    <!-- Glow kiri atas -->
    <div class="absolute top-[-150px] left-[-120px] w-[420px] h-[420px] bg-green-300 opacity-40 blur-[120px] rounded-full"></div>

    <!-- Glow kanan bawah -->
    <div class="absolute bottom-[-160px] right-[-120px] w-[380px] h-[380px] bg-green-200 opacity-30 blur-[140px] rounded-full"></div>

    <!-- Efek Awan/Smoke -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Awan 1 -->
        <div class="absolute top-10 left-10 w-32 h-16 bg-white/20 rounded-full blur-sm animate-float1"></div>
        <!-- Awan 2 -->
        <div class="absolute top-20 right-20 w-40 h-20 bg-white/15 rounded-full blur-md animate-float2"></div>
        <!-- Awan 3 -->
        <div class="absolute bottom-20 left-1/4 w-28 h-14 bg-white/25 rounded-full blur-sm animate-float3"></div>
        <!-- Smoke 1 -->
        <div class="absolute top-1/3 right-10 w-20 h-20 bg-gray-200/10 rounded-full blur-lg animate-smoke1"></div>
        <!-- Smoke 2 -->
        <div class="absolute bottom-1/3 left-10 w-24 h-24 bg-gray-300/15 rounded-full blur-xl animate-smoke2"></div>
        <!-- Smoke 3 -->
        <div class="absolute top-1/2 left-1/2 w-16 h-16 bg-white/20 rounded-full blur-md animate-smoke3"></div>
    </div>

    <!-- Elemen Animasi Simbol Matematika -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Simbol + 1 -->
        <div class="absolute top-1/4 left-1/5 text-white text-6xl font-bold opacity-30 animate-symbol1">+</div>
        <!-- Simbol - 1 -->
        <div class="absolute top-1/3 right-1/4 text-white text-5xl font-bold opacity-25 animate-symbol2">-</div>
        <!-- Simbol × 1 -->
        <div class="absolute bottom-1/4 left-1/3 text-white text-6xl font-bold opacity-35 animate-symbol3">×</div>
        <!-- Simbol ÷ 1 -->
        <div class="absolute bottom-1/3 right-1/5 text-white text-5xl font-bold opacity-30 animate-symbol4">÷</div>
        <!-- Simbol + 2 -->
        <div class="absolute top-1/2 left-1/6 text-white text-5xl font-bold opacity-20 animate-symbol5">+</div>
        <!-- Simbol - 2 -->
        <div class="absolute top-2/3 right-1/6 text-white text-6xl font-bold opacity-25 animate-symbol6">-</div>
        <!-- Simbol × 2 -->
        <div class="absolute top-1/5 right-1/3 text-white text-5xl font-bold opacity-30 animate-symbol7">×</div>
        <!-- Simbol ÷ 2 -->
        <div class="absolute bottom-1/5 left-1/2 text-white text-6xl font-bold opacity-35 animate-symbol8">÷</div>
        <!-- Simbol + 3 -->
        <div class="absolute top-3/4 left-1/4 text-white text-5xl font-bold opacity-25 animate-symbol9">+</div>
        <!-- Simbol - 3 -->
        <div class="absolute top-1/6 right-1/5 text-white text-6xl font-bold opacity-30 animate-symbol10">-</div>
        <!-- Simbol × 3 -->
        <div class="absolute bottom-2/3 right-1/2 text-white text-5xl font-bold opacity-20 animate-symbol11">×</div>
        <!-- Simbol ÷ 3 -->
        <div class="absolute top-2/5 left-2/3 text-white text-6xl font-bold opacity-35 animate-symbol12">÷</div>
    </div>

    <!-- Texture grain -->
    <div class="absolute inset-0 bg-[url('/img/grain.png')] opacity-[0.12] mix-blend-overlay pointer-events-none"></div>

    <!-- Shadow halus -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/20"></div>


    <!-- ============================== -->
    <!--           CONTENT              -->
    <!-- ============================== -->

    <div id="quiz-container" class="relative max-w-xl mx-auto text-center text-white">

        {{-- ============================
             1. BAGIAN TUTOR 
        ============================= --}}
        <div id="section-tutor">

            <h1 class="text-3xl font-bold mb-3 drop-shadow-lg">Belajar Penambahan</h1>
            <p class="mb-4">Pahami cara cepat menambah angka sebelum mulai latihan!</p>

            <img src="/images/penambahan.png" class="mx-auto w-64 mb-4">

            <div class="bg-white text-black p-4 rounded-2xl shadow-xl mb-6">
                <h2 class="font-bold mb-2">Cara Cepat:</h2>
                <p>Penambahan adalah menjumlahkan 2 angka untuk mendapatkan totalnya.</p>
                <p>Contoh: 3 + 5 = 8</p>
            </div>

            <button onclick="startQuiz()"
                    class="bg-green-700 hover:bg-green-800 w-full p-3 rounded-xl font-bold transition">
                Mulai Quiz
            </button>
        </div>



        {{-- ============================
             2. BAGIAN QUIZ 
        ============================= --}}
        <div id="section-quiz" class="hidden text-black">

            <div class="bg-white p-4 rounded-2xl shadow-xl">

                <h2 id="quiz-title" class="font-bold mb-4"></h2>

                <p id="quiz-question" class="text-lg mb-4"></p>
                <img id="quiz-image" class="mx-auto w-60 mb-4">

                <input id="quiz-answer" type="number"
                    class="border w-full p-2 rounded mb-4"
                    placeholder="Jawaban kamu...">

                <button onclick="nextQuestion()"
                        class="bg-blue-600 hover:bg-blue-700 text-white w-full p-3 rounded-xl font-bold transition">
                    Lanjut
                </button>
            </div>

        </div>



        {{-- ============================
             3. BAGIAN HASIL 
        ============================= --}}
        <div id="section-result" class="hidden text-black">

            <div class="bg-white p-4 rounded-2xl shadow-xl">

                <h2 class="text-xl font-bold mb-4">Hasil Latihan</h2>
                <p class="text-xl mb-4">Nilai Kamu: <span id="result-score"></span></p>

                <h3 class="font-bold mb-2">Review:</h3>
                <div id="review-list"></div>

                <a href="" class="mt-4 block bg-green-700 hover:bg-green-800 text-white p-3 rounded-xl font-bold transition text-center">
                    Ulangi Latihan
                </a>
            </div>

        </div>

    </div> 
</div> <!-- END BACKGROUND WRAPPER -->



{{-- ============================
     JAVASCRIPT LOGIC
============================ --}}
<script>
    const questions = [
        { 
            text: "Berapa jumlah apel di bawah ini?", 
            answer: 4, 
            image: "/img/quiz/apel2plus2.png" 
        },
        { 
            text: "4 + 1 = ?", 
            answer: 5, 
            image: "/images/buah-4.png" 
        },
        { 
            text: "2 + 5 = ?", 
            answer: 7, 
            image: "/images/kucing-2.png" 
        },
    ];

    let index = 0;
    let userAnswers = [];

    function startQuiz() {
        document.getElementById('section-tutor').classList.add('hidden');
        document.getElementById('section-quiz').classList.remove('hidden');
        loadQuestion();
    }

    function loadQuestion() {
        document.getElementById('quiz-title').innerText = 
            `Soal ${index + 1} dari ${questions.length}`;
        
        document.getElementById('quiz-question').innerText = questions[index].text;
        document.getElementById('quiz-answer').value = "";
        document.getElementById('quiz-image').src = questions[index].image;
    }

    function nextQuestion() {
        let ans = document.getElementById('quiz-answer').value;

        if (ans === "") {
            alert("Jawaban tidak boleh kosong");
            return;
        }

        userAnswers[index] = Number(ans);

        if (index + 1 === questions.length) {
            showResult();
        } else {
            index++;
            loadQuestion();
        }
    }

    function showResult() {
        document.getElementById('section-quiz').classList.add('hidden');
        document.getElementById('section-result').classList.remove('hidden');

        let correct = 0;
        let reviewHTML = "";

        questions.forEach((q, i) => {
            if (userAnswers[i] === q.answer) correct++;

            reviewHTML += `
                <p class="mb-3">
                    <b>${q.text}</b><br>
                    Jawaban Kamu: ${userAnswers[i]} <br>
                    Kunci Jawaban: ${q.answer}
                </p>
            `;
        });

        document.getElementById('result-score').innerText = 
            `${(correct / questions.length) * 100}`;

        document.getElementById('review-list').innerHTML = reviewHTML;
    }
</script>

{{-- ============================
     CUSTOM CSS FOR ANIMATIONS
============================ --}}
<style>
    @keyframes float1 {
        0%, 100% { transform: translateY(0px) translateX(0px); }
        50% { transform: translateY(-10px) translateX(5px); }
    }
    @keyframes float2 {
        0%, 100% { transform: translateY(0px) translateX(0px); }
        50% { transform: translateY(-15px) translateX(-5px); }
    }
    @keyframes float3 {
        0%, 100% { transform: translateY(0px) translateX(0px); }
        50% { transform: translateY(-8px) translateX(10px); }
    }
    @keyframes smoke1 {
        0% { transform: translateY(0px) scale(1); opacity: 0.1; }
        50% { transform: translateY(-20px) scale(1.2); opacity: 0.2; }
        100% { transform: translateY(-40px) scale(0.8); opacity: 0; }
    }
    @keyframes smoke2 {
        0% { transform: translateY(0px) scale(1); opacity: 0.15; }
        50% { transform: translateY(-25px) scale(1.1); opacity: 0.25; }
        100% { transform: translateY(-50px) scale(0.9); opacity: 0; }
    }
    @keyframes smoke3 {
        0% { transform: translateY(0px) scale(1); opacity: 0.2; }
        50% { transform: translateY(-18px) scale(1.3); opacity: 0.3; }
        100% { transform: translateY(-36px) scale(0.7); opacity: 0; }
    }
    @keyframes symbol1 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-5px) translateX(5px) rotate(5deg); }
        50% { transform: translateY(-10px) translateX(-5px) rotate(-5deg); }
        75% { transform: translateY(-5px) translateX(5px) rotate(5deg); }
    }
    @keyframes symbol2 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-8px) translateX(-3px) rotate(-3deg); }
        50% { transform: translateY(-16px) translateX(3px) rotate(3deg); }
        75% { transform: translateY(-8px) translateX(-3px) rotate(-3deg); }
    }
    @keyframes symbol3 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-6px) translateX(4px) rotate(4deg); }
        50% { transform: translateY(-12px) translateX(-4px) rotate(-4deg); }
        75% { transform: translateY(-6px) translateX(4px) rotate(4deg); }
    }
    @keyframes symbol4 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-7px) translateX(-2px) rotate(-2deg); }
        50% { transform: translateY(-14px) translateX(2px) rotate(2deg); }
        75% { transform: translateY(-7px) translateX(-2px) rotate(-2deg); }
    }
    @keyframes symbol5 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-4px) translateX(3px) rotate(3deg); }
        50% { transform: translateY(-8px) translateX(-3px) rotate(-3deg); }
        75% { transform: translateY(-4px) translateX(3px) rotate(3deg); }
    }
    @keyframes symbol6 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-9px) translateX(-4px) rotate(-4deg); }
        50% { transform: translateY(-18px) translateX(4px) rotate(4deg); }
        75% { transform: translateY(-9px) translateX(-4px) rotate(-4deg); }
    }
    @keyframes symbol7 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-6px) translateX(2px) rotate(2deg); }
        50% { transform: translateY(-12px) translateX(-2px) rotate(-2deg); }
        75% { transform: translateY(-6px) translateX(2px) rotate(2deg); }
    }
    @keyframes symbol8 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-10px) translateX(-5px) rotate(-5deg); }
        50% { transform: translateY(-20px) translateX(5px) rotate(5deg); }
        75% { transform: translateY(-10px) translateX(-5px) rotate(-5deg); }
    }
    @keyframes symbol9 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-7px) translateX(6px) rotate(6deg); }
        50% { transform: translateY(-14px) translateX(-6px) rotate(-6deg); }
        75% { transform: translateY(-7px) translateX(6px) rotate(6deg); }
    }
    @keyframes symbol10 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-5px) translateX(-1px) rotate(-1deg); }
        50% { transform: translateY(-10px) translateX(1px) rotate(1deg); }
        75% { transform: translateY(-5px) translateX(-1px) rotate(-1deg); }
    }
    @keyframes symbol11 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-8px) translateX(3px) rotate(3deg); }
        50% { transform: translateY(-16px) translateX(-3px) rotate(-3deg); }
        75% { transform: translateY(-8px) translateX(3px) rotate(3deg); }
    }
    @keyframes symbol12 {
        0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
        25% { transform: translateY(-11px) translateX(-4px) rotate(-4deg); }
        50% { transform: translateY(-22px) translateX(4px) rotate(4deg); }
        75% { transform: translateY(-11px) translateX(-4px) rotate(-4deg); }
    }
    .animate-float1 { animation: float1 6s ease-in-out infinite; }
    .animate-float2 { animation: float2 8s ease-in-out infinite; }
    .animate-float3 { animation: float3 7s ease-in-out infinite; }
    .animate-smoke1 { animation: smoke1 10s linear infinite; }
    .animate-smoke2 { animation: smoke2 12s linear infinite; }
    .animate-smoke3 { animation: smoke3 9s linear infinite; }
    .animate
</style>

</x-app-layout>
