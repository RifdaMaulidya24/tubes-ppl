<x-app-layout>

<div class="min-h-screen w-full relative overflow-hidden py-12">

    <!-- Gradient, glow, smoke, simbol, texture sama seperti sebelumnya -->
    <div class="absolute inset-0 bg-gradient-to-br from-green-400 via-green-500 to-green-700"></div>
    <div class="absolute top-[-150px] left-[-120px] w-[420px] h-[420px] bg-green-300 opacity-40 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-[-160px] right-[-120px] w-[380px] h-[380px] bg-green-200 opacity-30 blur-[140px] rounded-full"></div>
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-16 bg-white/20 rounded-full blur-sm animate-float1"></div>
        <div class="absolute top-20 right-20 w-40 h-20 bg-white/15 rounded-full blur-md animate-float2"></div>
        <div class="absolute bottom-20 left-1/4 w-28 h-14 bg-white/25 rounded-full blur-sm animate-float3"></div>
        <div class="absolute top-1/3 right-10 w-20 h-20 bg-gray-200/10 rounded-full blur-lg animate-smoke1"></div>
        <div class="absolute bottom-1/3 left-10 w-24 h-24 bg-gray-300/15 rounded-full blur-xl animate-smoke2"></div>
        <div class="absolute top-1/2 left-1/2 w-16 h-16 bg-white/20 rounded-full blur-md animate-smoke3"></div>
    </div>
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/5 text-white text-6xl font-bold opacity-30 animate-symbol1">+</div>
        <div class="absolute top-1/3 right-1/4 text-white text-5xl font-bold opacity-25 animate-symbol2">-</div>
        <div class="absolute bottom-1/4 left-1/3 text-white text-6xl font-bold opacity-35 animate-symbol3">×</div>
        <div class="absolute bottom-1/3 right-1/5 text-white text-5xl font-bold opacity-30 animate-symbol4">÷</div>
    </div>
    <div class="absolute inset-0 bg-[url('/img/grain.png')] opacity-[0.12] mix-blend-overlay pointer-events-none"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/20"></div>

    <!-- CONTENT -->
    <div id="quiz-container" class="relative max-w-xl mx-auto text-center text-white">

        <!-- Tutor Section -->
        <div id="section-tutor">
            <h1 class="text-3xl font-bold mb-3 drop-shadow-lg">Level 1 - perkalian</h1>
            <p class="mb-4">Pelajari materi sebelum mulai mengerjakan soal.</p>
            <img src="/images/perkalian.png" class="mx-auto w-64 mb-4">
            <div class="bg-white text-black p-4 rounded-2xl shadow-xl mb-6">
                <p>perkalian adalah menjumlahkan dua angka untuk mendapatkan totalnya.</p>
                <p>Contoh: 1 x 2 = 2</p>
            </div>
            <button onclick="startQuiz()"
                    class="bg-green-700 hover:bg-green-800 w-full p-3 rounded-xl font-bold transition">
                Mulai Quiz
            </button>
        </div>

        <!-- Quiz Section -->
        <div id="section-quiz" class="hidden text-black">
            <div class="bg-white p-4 rounded-2xl shadow-xl">
                <h2 id="quiz-title" class="font-bold mb-4"></h2>
                <p id="quiz-question" class="text-lg mb-4"></p>
                <img id="quiz-image" class="mx-auto w-60 mb-4">
                <input id="quiz-answer" type="number" class="border w-full p-2 rounded mb-4" placeholder="Jawaban kamu...">
                <button onclick="nextQuestion()"
                        class="bg-blue-600 hover:bg-blue-700 text-white w-full p-3 rounded-xl font-bold transition">
                    Lanjut
                </button>
            </div>
        </div>

        <!-- Result Section -->
<div id="section-result" class="hidden text-black">
    <div class="bg-white p-4 rounded-2xl shadow-xl">
        <h2 class="text-xl font-bold mb-4">Hasil Latihan</h2>
        <p class="text-xl mb-4">Nilai Kamu: <span id="result-score"></span></p>
        <h3 class="font-bold mb-2">Review:</h3>
        <div id="review-list"></div>

        <!-- Tombol Lanjut ke Level 2 -->
        <a href="{{ route('quiz.level', ['operation' => 'perkalian', 'level' => 2]) }}"
           class="mt-4 block bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-xl font-bold w-full text-center">
            Lanjut ke Level 2
        </a>

        <!-- Tombol Kembali ke Halaman perkalian Utama (opsional) -->
        <a href="{{ route('quiz.levels', ['operation' => 'perkalian']) }}"
           class="mt-2 block bg-gray-500 hover:bg-gray-600 text-white p-3 rounded-xl font-bold w-full text-center">
            Kembali ke Halaman perkalian
        </a>
    </div>
</div>


    </div>
</div>

<script>
const questions = [
    { text: "1 * 2 = ?", answer: 2, image: "/images/quiz/21.png" },
    { text: "2 * 4 = ?", answer: 8, image: "/images/quiz/43.png" },
    { text: "3 * 3 = ?", answer: 9, image: "/images/quiz/15.png" }
];

let index = 0;
let userAnswers = [];

function startQuiz() {
    document.getElementById('section-tutor').classList.add('hidden');
    document.getElementById('section-quiz').classList.remove('hidden');
    index = 0;
    userAnswers = [];
    loadQuestion();
}

function loadQuestion() {
    const q = questions[index];
    document.getElementById('quiz-title').innerText = `Soal ${index + 1} dari ${questions.length}`;
    document.getElementById('quiz-question').innerText = q.text;
    document.getElementById('quiz-answer').value = "";
    document.getElementById('quiz-image').src = q.image;
}

function nextQuestion() {
    const ans = document.getElementById('quiz-answer').value;
    if(ans === "") { alert("Jawaban tidak boleh kosong"); return; }
    userAnswers[index] = Number(ans);

    if(index + 1 === questions.length){
        showResult();
    } else {
        index++;
        loadQuestion();
    }
}

function showResult() {
    // Sembunyikan quiz, tampilkan hasil
    document.getElementById('section-quiz').classList.add('hidden');
    document.getElementById('section-result').classList.remove('hidden');

    // Hitung skor dan buat review
    let correct = 0;
    let reviewHTML = "";
    questions.forEach((q, i) => {
        if (userAnswers[i] === q.answer) correct++;
        reviewHTML += `<p class="mb-3"><b>${q.text}</b><br>Jawaban Kamu: ${userAnswers[i]}<br>Kunci Jawaban: ${q.answer}</p>`;
    });
    document.getElementById('result-score').innerText = `${Math.round((correct / questions.length) * 100)}`;
    document.getElementById('review-list').innerHTML = reviewHTML;

    // Kirim request ke backend untuk unlock Level 2
    fetch('/quiz/perkalian/complete-level/1', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ level: 1 })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'ok') {
            // Tampilkan tombol lanjut ke level 2
            document.getElementById('next-level-btn').classList.remove('hidden');
        }
    })
    .catch(err => console.error('Gagal menyimpan progress level:', err));
}

</script>

<style>
@keyframes float1 {0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
@keyframes float2 {0%,100%{transform:translateY(0)}50%{transform:translateY(-15px)}}
@keyframes float3 {0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
@keyframes smoke1 {0%{opacity:.1}50%{opacity:.2}100%{opacity:0}}
@keyframes smoke2 {0%{opacity:.15}50%{opacity:.25}100%{opacity:0}}
@keyframes smoke3 {0%{opacity:.2}50%{opacity:.3}100%{opacity:0}}

.animate-float1{animation:float1 6s infinite}
.animate-float2{animation:float2 8s infinite}
.animate-float3{animation:float3 7s infinite}
.animate-smoke1{animation:smoke1 10s infinite}
.animate-smoke2{animation:smoke2 12s infinite}
.animate-smoke3{animation:smoke3 9s infinite}
</style>

</x-app-layout>
