<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Quiz Level 3 - Pengurangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="min-h-screen w-full relative overflow-hidden py-12">

    <!-- Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-red-400 via-red-500 to-red-700"></div>
    <div class="absolute top-[-150px] left-[-120px] w-[420px] h-[420px] bg-red-300 opacity-40 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-[-160px] right-[-120px] w-[380px] h-[380px] bg-red-200 opacity-30 blur-[140px] rounded-full"></div>
    
    <!-- Floating Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-16 bg-white/20 rounded-full blur-sm animate-float1"></div>
        <div class="absolute top-20 right-20 w-40 h-20 bg-white/15 rounded-full blur-md animate-float2"></div>
        <div class="absolute bottom-20 left-1/4 w-28 h-14 bg-white/25 rounded-full blur-sm animate-float3"></div>
    </div>
    
    <!-- Math Symbols -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/5 text-white text-6xl font-bold opacity-30 animate-symbol1">+</div>
        <div class="absolute top-1/3 right-1/4 text-white text-5xl font-bold opacity-25 animate-symbol2">-</div>
        <div class="absolute bottom-1/4 left-1/3 text-white text-6xl font-bold opacity-35 animate-symbol3">×</div>
        <div class="absolute bottom-1/3 right-1/5 text-white text-5xl font-bold opacity-30 animate-symbol4">÷</div>
    </div>

    <!-- CONTENT -->
    <div id="quiz-container" class="relative max-w-xl mx-auto text-center text-white px-4">

        <!-- Tutor Section -->
        <div id="section-tutor" class="transition-all duration-500 ease-out">
            <h1 class="text-3xl font-bold mb-3 drop-shadow-lg">Level 3 - Pengurangan</h1>
            <p class="mb-4">Pelajari materi sebelum mulai mengerjakan soal.</p>
            <div class="mx-auto w-64 h-64 bg-white/20 rounded-2xl mb-4 flex items-center justify-center">
                <span class="text-6xl">➖</span>
            </div>
            <div class="bg-white text-black p-4 rounded-2xl shadow-xl mb-6">
                <p class="mb-2">Pengurangan adalah mengurangi suatu angka dengan angka lainnya.</p>
                <p class="font-bold">Contoh: 5 - 2 = 3</p>
            </div>
            <button onclick="startQuiz()"
                    class="bg-red-700 hover:bg-red-800 w-full p-3 rounded-xl font-bold transition">
                Mulai Quiz
            </button>
        </div>

        <!-- Quiz Section -->
        <div id="section-quiz" class="hidden transition-all duration-500 ease-out text-black">
            <div class="bg-white p-6 rounded-2xl shadow-xl">
                <h2 id="quiz-title" class="font-bold text-xl mb-4"></h2>
                <p id="quiz-question" class="text-2xl font-bold mb-6 text-red-600"></p>
                
                <div id="choices-container" class="space-y-3 mb-4"></div>
                
                <div id="next-info" class="hidden text-gray-600 text-sm mt-4 animate-pulse">
                    Lanjut ke soal berikutnya dalam <span id="countdown">3</span> detik...
                </div>
            </div>
        </div>

        <!-- Notification Section -->
        <div id="section-notification" class="hidden transition-all duration-500 ease-out text-black">
            <div class="bg-white p-6 rounded-2xl shadow-xl">
                <div class="text-6xl mb-4">⚠️</div>
                <h2 class="text-2xl font-bold mb-3">Ada Jawaban yang Salah!</h2>
                <p class="text-lg mb-6">Kamu perlu mengulang <span id="wrong-count" class="font-bold text-red-600"></span> soal yang salah.</p>
                <button onclick="startRetry()"
                        class="bg-orange-600 hover:bg-orange-700 text-white w-full p-3 rounded-xl font-bold transition">
                    Mulai Mengulang Soal
                </button>
            </div>
        </div>

        <!-- Result Section -->
        <div id="section-result" class="hidden transition-all duration-500 ease-out text-black">
            <div class="bg-white p-6 rounded-2xl shadow-xl">
                <div class="text-6xl mb-4">🎉</div>
                <h2 class="text-2xl font-bold mb-4">Selamat! Quiz Telah Selesai!</h2>
                <p class="text-xl mb-4">Nilai Kamu: <span id="result-score" class="font-bold text-red-600"></span></p>
                <h3 class="font-bold mb-2">Review:</h3>
                <div id="review-list" class="max-h-96 overflow-y-auto"></div>

                <button onclick="unlockAndGoToNextLevel()" id="btn-next-level"
                   class="mt-4 block bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-xl font-bold w-full text-center">
                    Lanjut ke Level 4
                </button>

                <button onclick="unlockAndGoBack()" id="btn-go-back"
                   class="mt-2 block bg-gray-500 hover:bg-gray-600 text-white p-3 rounded-xl font-bold w-full text-center">
                    Kembali ke Halaman Pengurangan
                </button>
            </div>
        </div>

    </div>
</div>

<script>
const questions = [
    { text: "5 - 2 = ?", answer: 3 }
    
//     ,
//     { text: "7 - 3 = ?", answer: 4 },
//     { text: "6 - 1 = ?", answer: 5 },
//     { text: "8 - 4 = ?", answer: 4 },
//     { text: "9 - 5 = ?", answer: 4 },
//     { text: "10 - 6 = ?", answer: 4 },
//     { text: "6 - 3 = ?", answer: 3 },
//     { text: "9 - 1 = ?", answer: 8 },
//     { text: "8 - 3 = ?", answer: 5 },
//     { text: "10 - 8 = ?", answer: 2 }
];

let index = 0;
let userAnswers = [];
let wrongQuestions = [];
let isRetryMode = false;
let originalQuestions = [];
let allAnswersHistory = [];
let firstAttemptCorrect = [];
let countdownInterval = null;
let quizStarted = false;

function startQuiz() {
    quizStarted = true;
    const tutorSection = document.getElementById('section-tutor');
    tutorSection.classList.add('zoom-out');
    
    history.pushState(null, null, location.href);
    window.onpopstate = function() {
        history.pushState(null, null, location.href);
        alert('Kamu tidak bisa kembali saat quiz sedang berlangsung!');
    };
    
    setTimeout(() => {
        tutorSection.classList.add('hidden');
        tutorSection.classList.remove('zoom-out');
        
        const quizSection = document.getElementById('section-quiz');
        quizSection.classList.remove('hidden');
        quizSection.classList.add('zoom-in');
        
        index = 0;
        userAnswers = [];
        wrongQuestions = [];
        isRetryMode = false;
        originalQuestions = [...questions];
        allAnswersHistory = [];
        firstAttemptCorrect = [];
        loadQuestion();
    }, 500);
}

function generateChoices(correctAnswer) {
    const choices = [correctAnswer];
    while (choices.length < 4) {
        const random = Math.floor(Math.random() * 15) + 1;
        if (!choices.includes(random)) {
            choices.push(random);
        }
    }
    return choices.sort(() => Math.random() - 0.5);
}

function loadQuestion() {
    const quizSection = document.getElementById('section-quiz');
    const quizContent = quizSection.querySelector('.bg-white');
    
    if (index > 0 || isRetryMode) {
        quizContent.classList.add('fade-out');
    }
    
    setTimeout(() => {
        const q = questions[index];
        document.getElementById('quiz-title').innerText = `Soal ${index + 1} dari ${questions.length}`;
        document.getElementById('quiz-question').innerText = q.text;
        document.getElementById('next-info').classList.add('hidden');
        
        const choices = generateChoices(q.answer);
        const choicesContainer = document.getElementById('choices-container');
        choicesContainer.innerHTML = '';
        
        choices.forEach(choice => {
            const button = document.createElement('button');
            button.className = 'choice-btn w-full p-4 rounded-xl border-2 border-gray-300 bg-white hover:bg-gray-50 transition font-bold text-lg';
            button.innerText = choice;
            button.onclick = () => selectAnswer(choice, button);
            choicesContainer.appendChild(button);
        });
        
        quizContent.classList.remove('fade-out');
        if (index > 0 || isRetryMode) {
            quizContent.classList.add('fade-in');
            setTimeout(() => {
                quizContent.classList.remove('fade-in');
            }, 300);
        }
    }, (index > 0 || isRetryMode) ? 300 : 0);
}

function selectAnswer(selectedAnswer, button) {
    const q = questions[index];
    const allButtons = document.querySelectorAll('.choice-btn');
    
    allButtons.forEach(btn => {
        btn.disabled = true;
        btn.classList.remove('hover:bg-gray-50');
    });
    
    if (selectedAnswer === q.answer) {
        button.classList.add('bg-green-500', 'text-white', 'border-green-600', 'animate-correct');
        userAnswers[index] = selectedAnswer;
        
        if (!isRetryMode) {
            allAnswersHistory[index] = selectedAnswer;
            firstAttemptCorrect[index] = true;
        } else {
            const originalIndex = originalQuestions.findIndex(oq => oq.text === q.text);
            allAnswersHistory[originalIndex] = selectedAnswer;
        }
        
        startCountdown(1000);
        
    } else {
        button.classList.add('bg-red-500', 'text-white', 'border-red-600', 'animate-wrong');
        userAnswers[index] = selectedAnswer;
        
        if (!isRetryMode) {
            allAnswersHistory[index] = selectedAnswer;
            firstAttemptCorrect[index] = false;
        } else {
            const originalIndex = originalQuestions.findIndex(oq => oq.text === q.text);
            allAnswersHistory[originalIndex] = selectedAnswer;
        }
        
        allButtons.forEach(btn => {
            if (parseInt(btn.innerText) === q.answer) {
                setTimeout(() => {
                    btn.classList.add('bg-green-500', 'text-white', 'border-green-600', 'animate-correct');
                }, 500);
            }
        });
        
        if (!isRetryMode) {
            wrongQuestions.push(index);
        }
        
        startCountdown(3000);
    }
}

function startCountdown(duration) {
    const nextInfo = document.getElementById('next-info');
    const countdownSpan = document.getElementById('countdown');
    nextInfo.classList.remove('hidden');
    
    let secondsLeft = Math.ceil(duration / 1000);
    countdownSpan.innerText = secondsLeft;
    
    if (countdownInterval) {
        clearInterval(countdownInterval);
    }
    
    countdownInterval = setInterval(() => {
        secondsLeft--;
        if (secondsLeft > 0) {
            countdownSpan.innerText = secondsLeft;
        }
    }, 1000);
    
    setTimeout(() => {
        clearInterval(countdownInterval);
        nextQuestion();
    }, duration);
}

function nextQuestion() {
    if (index + 1 === questions.length) {
        showResult();
    } else {
        index++;
        loadQuestion();
    }
}

function showResult() {
    if (wrongQuestions.length > 0 && !isRetryMode) {
        showNotification();
        return;
    }
    
    const quizSection = document.getElementById('section-quiz');
    quizSection.classList.add('zoom-out');
    
    setTimeout(() => {
        quizSection.classList.add('hidden');
        quizSection.classList.remove('zoom-out');
        
        const resultSection = document.getElementById('section-result');
        resultSection.classList.remove('hidden');
        resultSection.classList.add('zoom-in');

        let totalPoints = 0;
        let reviewHTML = "";
        
        originalQuestions.forEach((q, originalIndex) => {
            const finalAnswer = allAnswersHistory[originalIndex];
            const isCorrect = finalAnswer === q.answer;
            const correctFirstAttempt = firstAttemptCorrect[originalIndex];
            
            if (correctFirstAttempt) {
                totalPoints += 1;
            } else if (isCorrect && !correctFirstAttempt) {
                totalPoints += 0.5;
            }
            
            let bgColor = 'bg-red-100';
            if (isCorrect && correctFirstAttempt) {
                bgColor = 'bg-green-100';
            } else if (isCorrect && !correctFirstAttempt) {
                bgColor = 'bg-yellow-100';
            }
            
            reviewHTML += `<p class="mb-3 p-3 rounded-lg ${bgColor} text-left">
                <b>${q.text}</b><br>
                Jawaban Kamu: ${finalAnswer}<br>
                Kunci Jawaban: ${q.answer}<br>
                ${correctFirstAttempt ? '<span class="text-green-600 font-bold">✓ Benar di percobaan pertama (+10 poin)</span>' : 
                  isCorrect ? '<span class="text-orange-600">✓ Benar setelah retry (+5 poin)</span>' : 
                  '<span class="text-red-600 font-bold">✗ Salah (+0 poin)</span>'}
            </p>`;
        });
        
        const finalScore = Math.round((totalPoints / originalQuestions.length) * 100);
        document.getElementById('result-score').innerText = finalScore;
        document.getElementById('review-list').innerHTML = reviewHTML;
        
        saveProgress(finalScore);
    }, 500);
}

function showNotification() {
    const quizSection = document.getElementById('section-quiz');
    quizSection.classList.add('zoom-out');
    
    setTimeout(() => {
        quizSection.classList.add('hidden');
        quizSection.classList.remove('zoom-out');
        
        const notificationSection = document.getElementById('section-notification');
        notificationSection.classList.remove('hidden');
        notificationSection.classList.add('zoom-in');
        
        document.getElementById('wrong-count').innerText = wrongQuestions.length + ' soal';
    }, 500);
}

function startRetry() {
    const questionsToRetry = [];
    wrongQuestions.forEach(wrongIndex => {
        questionsToRetry.push(originalQuestions[wrongIndex]);
    });
    
    questions.length = 0;
    questionsToRetry.forEach(q => questions.push(q));
    
    const notificationSection = document.getElementById('section-notification');
    notificationSection.classList.add('zoom-out');
    
    setTimeout(() => {
        notificationSection.classList.add('hidden');
        notificationSection.classList.remove('zoom-out');
        
        const quizSection = document.getElementById('section-quiz');
        quizSection.classList.remove('hidden');
        quizSection.classList.add('zoom-in');
        
        index = 0;
        userAnswers = [];
        wrongQuestions = [];
        isRetryMode = true;
        loadQuestion();
    }, 500);
}

function calculateTotalPoints() {
    let totalPoints = 0;
    originalQuestions.forEach((q, originalIndex) => {
        const finalAnswer = allAnswersHistory[originalIndex];
        const isCorrect = finalAnswer === q.answer;
        const correctFirstAttempt = firstAttemptCorrect[originalIndex];
        
        if (correctFirstAttempt) {
            totalPoints += 1;
        } else if (isCorrect && !correctFirstAttempt) {
            totalPoints += 0.5;
        }
    });
    return totalPoints;
}

function saveProgress(finalScore) {
    fetch('/quiz/pengurangan/complete-level/3', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ 
            level: 3,
            score: finalScore,
            unlock_next: false
        })
    })
    .then(response => response.json())
    .then(data => {
        console.log('Score saved:', data);
    })
    .catch(err => {
        console.error('Gagal menyimpan score:', err);
    });
}

function unlockAndGoToNextLevel() {
    const finalScore = Math.round((calculateTotalPoints() / originalQuestions.length) * 100);
    const button = document.getElementById('btn-next-level');
    
    button.disabled = true;
    button.innerHTML = '⏳ Membuka Level 4...';
    
    fetch('/quiz/pengurangan/complete-level/3', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ 
            level: 3,
            score: finalScore,
            next_level: 4,
            unlock_next: true
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'ok' || data.success) {
            window.location.href = '/quiz/pengurangan/level4';
        } else {
            alert('Gagal membuka level berikutnya. Silakan coba lagi.');
            button.disabled = false;
            button.innerHTML = 'Lanjut ke Level 4';
        }
    })
    .catch(err => {
        console.error('Gagal unlock level:', err);
        alert('Terjadi kesalahan. Silakan coba lagi.');
        button.disabled = false;
        button.innerHTML = 'Lanjut ke Level 4';
    });
}

function unlockAndGoBack() {
    const finalScore = Math.round((calculateTotalPoints() / originalQuestions.length) * 100);
    const button = document.getElementById('btn-go-back');
    
    button.disabled = true;
    button.innerHTML = '⏳ Menyimpan Progress...';
    
    fetch('/quiz/pengurangan/complete-level/3', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ 
            level: 3,
            score: finalScore,
            next_level: 4,
            unlock_next: true
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'ok' || data.success) {
            window.location.href = '/quiz/pengurangan';
        } else {
            alert('Gagal menyimpan progress. Silakan coba lagi.');
            button.disabled = false;
            button.innerHTML = 'Kembali ke Halaman Pengurangan';
        }
    })
    .catch(err => {
        console.error('Gagal menyimpan progress:', err);
        alert('Terjadi kesalahan. Silakan coba lagi.');
        button.disabled = false;
        button.innerHTML = 'Kembali ke Halaman Pengurangan';
    });
}

window.addEventListener('beforeunload', function (e) {
    if (!quizStarted) return;
    if (!document.getElementById('section-result').classList.contains('hidden')) return;
    
    e.preventDefault();
    e.returnValue = '';
    return '';
});
</script>

<style>
@keyframes zoomIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

@keyframes zoomOut {
    from { opacity: 1; transform: scale(1); }
    to { opacity: 0; transform: scale(0.9); }
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeOut {
    from { opacity: 1; transform: translateY(0); }
    to { opacity: 0; transform: translateY(-10px); }
}

.zoom-in { animation: zoomIn 0.3s ease-out forwards; }
.zoom-out { animation: zoomOut 0.3s ease-out forwards; }
.fade-in { animation: fadeIn 0.3s ease-out forwards; }
.fade-out { animation: fadeOut 0.3s ease-out forwards; }

@keyframes float1 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
@keyframes float2 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
@keyframes float3 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    10%, 30%, 50%, 70%, 90% { transform: translateX(-10px); }
    20%, 40%, 60%, 80% { transform: translateX(10px); }
}

@keyframes pulse-scale {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.animate-float1 { animation: float1 6s infinite; }
.animate-float2 { animation: float2 8s infinite; }
.animate-float3 { animation: float3 7s infinite; }

.animate-wrong { animation: shake 0.5s; }
.animate-correct { animation: pulse-scale 0.5s; }

@keyframes symbol1 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(180deg) scale(1.1); } }
@keyframes symbol2 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(-180deg) scale(1.1); } }
@keyframes symbol3 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(180deg) scale(1.1); } }
@keyframes symbol4 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(-180deg) scale(1.1); } }

.animate-symbol1 { animation: symbol1 8s infinite; }
.animate-symbol2 { animation: symbol2 10s infinite; }
.animate-symbol3 { animation: symbol3 9s infinite; }
.animate-symbol4 { animation: symbol4 11s infinite; }
</style>

</body>
</html>