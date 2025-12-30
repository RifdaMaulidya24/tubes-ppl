<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Quiz Level 5 - Perkalian</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;700;800&display=swap" rel="stylesheet">

  <style>
    body { font-family: "Baloo 2", system-ui, sans-serif; }

    /* Animasi dasar*/
    @keyframes zoomIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
    @keyframes zoomOut { from { opacity: 1; transform: scale(1); } to { opacity: 0; transform: scale(0.9); } }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeOut { from { opacity: 1; transform: translateY(0); } to { opacity: 0; transform: translateY(-10px); } }
    .zoom-in { animation: zoomIn 0.3s ease-out forwards; }
    .zoom-out { animation: zoomOut 0.3s ease-out forwards; }
    .fade-in { animation: fadeIn 0.3s ease-out forwards; }
    .fade-out { animation: fadeOut 0.3s ease-out forwards; }

    /*  Fade + Zoom + Delay === */
    @keyframes fadeZoomIn {
      from { opacity: 0; transform: translateY(10px) scale(0.92); }
      to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes fadeZoomOut {
      from { opacity: 1; transform: translateY(0) scale(1); }
      to   { opacity: 0; transform: translateY(-10px) scale(0.92); }
    }
    .animate-fade-zoom { animation: fadeZoomIn 0.6s cubic-bezier(.2,.8,.2,1) both; }
    .animate-fade-zoom-out { animation: fadeZoomOut 0.45s ease-in both; }

    .delay-0   { animation-delay: 0ms; }
    .delay-75  { animation-delay: 75ms; }
    .delay-100 { animation-delay: 100ms; }
    .delay-150 { animation-delay: 150ms; }
    .delay-200 { animation-delay: 200ms; }
    .delay-300 { animation-delay: 300ms; }
    .delay-400 { animation-delay: 400ms; }
    .delay-500 { animation-delay: 500ms; }
    .delay-700 { animation-delay: 700ms; }

    /* Floating */
    @keyframes float1 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
    @keyframes float2 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-16px); } }
    @keyframes float3 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
    .animate-float1 { animation: float1 6s infinite; }
    .animate-float2 { animation: float2 8s infinite; }
    .animate-float3 { animation: float3 7s infinite; }

    /* Smoke */
    @keyframes smoke1 { 0%,100% { transform: translate(0,0) scale(1); opacity:.35; } 50% { transform: translate(12px,-14px) scale(1.08); opacity:.18; } }
    @keyframes smoke2 { 0%,100% { transform: translate(0,0) scale(1); opacity:.35; } 50% { transform: translate(-10px,12px) scale(1.1); opacity:.18; } }
    @keyframes smoke3 { 0%,100% { transform: translate(0,0) scale(1); opacity:.3; } 50% { transform: translate(10px,10px) scale(1.06); opacity:.16; } }
    .animate-smoke1 { animation: smoke1 9s infinite; }
    .animate-smoke2 { animation: smoke2 11s infinite; }
    .animate-smoke3 { animation: smoke3 10s infinite; }

    /* Feedback */
    @keyframes pop { 0% { transform: scale(.92); } 60% { transform: scale(1.06); } 100% { transform: scale(1); } }
    .animate-correct { animation: pop 0.35s ease-out; }

    .animate-wrong { animation: none !important; }

    /* Symbol rotation */
    @keyframes symbol1 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(180deg) scale(1.1); } }
    @keyframes symbol2 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(-180deg) scale(1.1); } }
    @keyframes symbol3 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(180deg) scale(1.1); } }
    @keyframes symbol4 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(-180deg) scale(1.1); } }
    .animate-symbol1 { animation: symbol1 8s infinite; }
    .animate-symbol2 { animation: symbol2 10s infinite; }
    .animate-symbol3 { animation: symbol3 9s infinite; }
    .animate-symbol4 { animation: symbol4 11s infinite; }

    .choice-btn:active { transform: scale(.98); }
     button {
            transition-delay: 0s !important;
        }
  </style>
</head>

<body>
  <div class="min-h-screen w-full relative overflow-hidden">

    <!-- Background Ungu -->
    <div class="absolute inset-0" style="background: linear-gradient(to bottom right, #9575cd, #7e57c2, #673ab7);"></div>
    <div class="absolute top-[-150px] left-[-120px] w-[420px] h-[420px] bg-purple-300 opacity-40 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-[-160px] right-[-120px] w-[380px] h-[380px] bg-purple-200 opacity-30 blur-[140px] rounded-full"></div>
    
    <!-- Floating Elements & Smoke -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-16 bg-white/20 rounded-full blur-sm animate-float1"></div>
        <div class="absolute top-20 right-20 w-40 h-20 bg-white/15 rounded-full blur-md animate-float2"></div>
        <div class="absolute bottom-20 left-1/4 w-28 h-14 bg-white/25 rounded-full blur-sm animate-float3"></div>
        <div class="absolute top-1/3 right-10 w-20 h-20 bg-gray-200/10 rounded-full blur-lg animate-smoke1"></div>
        <div class="absolute bottom-1/3 left-10 w-24 h-24 bg-gray-300/15 rounded-full blur-xl animate-smoke2"></div>
        <div class="absolute top-1/2 left-1/2 w-16 h-16 bg-white/20 rounded-full blur-md animate-smoke3"></div>
    </div>
    
    <!-- Math Symbols - MULTIPLY -->
    <div class="absolute inset-0 pointer-events-none select-none">
        <div class="absolute top-1/4 left-1/5 text-white text-6xl font-bold opacity-30 animate-symbol1">×</div>
        <div class="absolute top-1/3 right-1/4 text-white text-5xl font-bold opacity-25 animate-symbol2">×</div>
        <div class="absolute bottom-1/4 left-1/3 text-white text-6xl font-bold opacity-35 animate-symbol3">×</div>
        <div class="absolute bottom-1/3 right-1/5 text-white text-5xl font-bold opacity-30 animate-symbol4">×</div>
    </div>
    
    <!-- Texture & Overlay -->
    <div class="absolute inset-0 bg-[url('/img/grain.png')] opacity-[0.12] mix-blend-overlay pointer-events-none"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/20"></div>

    <!-- CONTENT -->
    <div id="quiz-container" class="relative min-h-screen flex items-center justify-center px-4 py-10 sm:py-14">
      <div class="w-full max-w-3xl">

<!-- Tutor -->
<div
  id="section-tutor"
  class="transition-all duration-500 ease-out text-center text-white max-w-xl mx-auto px-6 py-10 sm:py-14"
>
  <!-- Title -->
  <h1 class="text-2xl sm:text-3xl font-extrabold leading-tight drop-shadow animate-fade-zoom delay-0">
    Level 5 • Perkalian
  </h1>

  <!-- PNG -->
  <div class="mt-7 flex justify-center animate-fade-zoom delay-100">
    <img
      src="/img/anu.png"
      alt="Onboarding Perkalian"
      class="w-[190px] sm:w-[220px] drop-shadow-2xl select-none pointer-events-none"
      onerror="this.classList.add('hidden');"
    />
  </div>

  <!-- Desc -->
  <p class="mt-6 text-white/80 text-gl sm:text-[17px] leading-relaxed max-w-md mx-auto animate-fade-zoom delay-200">
    Perkalian itu pengulangan penjumlahan. Yuk baca singkatnya dulu, lalu mulai kuis
  </p>

  <!-- Mini materi -->
  <div class="mt-6 rounded-3xl bg-white/50 border border-white/15 p-4 text-left animate-fade-zoom delay-300">
    <p class="text-sm text-purple-800">
      Perkalian artinya <b>mengalikan</b> angka.
    </p>

    <!-- Contoh-->
    <div class="mt-3 rounded-xl bg-white/45 px-10 py-3">
      <p class="text-xs text-purple-800">Contoh:</p>
      <p class="text-2xl font-extrabold tracking-wider text-purple-800">
        24 × 4 = 96
      </p>
    </div>
  </div>

  <!-- Button -->
  <button
    type="button"
    onclick="startQuiz()"
    class="mt-7 inline-flex items-center justify-center px-32 py-3.5 rounded-2xl
           font-extrabold text-base sm:text-lg bg-white text-purple-700
           hover:bg-white/70 active:scale-[0.99] shadow-xl transition animate-fade-zoom delay-400"
  >
    Mulai
  </button>
</div>

        <!-- Quiz -->
        <div id="section-quiz" class="hidden transition-all duration-500 ease-out animate-fade-zoom delay-0">
          <div class="max-w-2xl mx-auto text-center text-white">

            <div class="flex items-center justify-between mb-4 animate-fade-zoom delay-75">
              <h2 id="quiz-title" class="font-extrabold text-lg sm:text-xl drop-shadow"></h2>
              <div class="px-3 py-1 rounded-full bg-white/15 backdrop-blur-md border border-white/20 font-extrabold text-sm shadow-lg">
                🌟 Quiz
              </div>
            </div>

            <div class="w-full h-3 rounded-full bg-white/15 overflow-hidden mb-6 border border-white/20 animate-fade-zoom delay-100">
              <div id="progress-bar" class="h-full w-0 bg-gradient-to-r from-purple-200 to-fuchsia-200 transition-all duration-300"></div>
            </div>

            <div class="soal-card mx-auto rounded-[22px] overflow-hidden shadow-2xl border border-white/10
                        bg-black/55 backdrop-blur-xl animate-fade-zoom delay-150">
              <div class="p-10 sm:p-12">
                <p id="quiz-question"
                   class="text-6xl sm:text-7xl font-extrabold tracking-widest text-white drop-shadow-lg">
                </p>
              </div>
            </div>

            <div id="choices-container" class="grid grid-cols-2 gap-4 sm:gap-5 mt-8"></div>

            <div id="next-info" class="hidden text-white/80 text-sm mt-5 animate-pulse">
              Lanjut ke soal berikutnya dalam <span id="countdown" class="font-bold text-white">3</span> detik...
            </div>
          </div>
        </div>

        <!-- Notification -->
        <div id="section-notification" class="hidden transition-all duration-500 ease-out text-black animate-fade-zoom delay-0">
          <div class="bg-white/95 p-6 rounded-3xl shadow-2xl border border-white/40 max-w-xl mx-auto text-center">
            <div class="text-6xl mb-3">😵</div>
            <h2 class="text-2xl font-extrabold mb-2">Ada yang salah nih!</h2>
            <p class="text-lg mb-6">
              Kamu perlu mengulang <span id="wrong-count" class="font-extrabold text-purple-700"></span>.
            </p>
            <button onclick="startRetry()"
              class="bg-gradient-to-r from-purple-600 to-fuchsia-600 hover:from-purple-700 hover:to-fuchsia-700
                     text-white w-full p-4 rounded-2xl font-extrabold text-lg transition shadow-xl active:scale-[0.99]">
              Ulang Soalnya
            </button>
          </div>
        </div>

        <!-- Result -->
        <div id="section-result" class="hidden transition-all duration-500 ease-out text-black animate-fade-zoom delay-0">
          <div class="bg-white/95 p-6 rounded-3xl shadow-2xl border border-white/40 max-w-xl mx-auto text-center">
            <div class="text-6xl mb-3">🎉</div>
            <h2 class="text-2xl font-extrabold mb-4">Hebat! Kamu Selesai!</h2>

            <div class="text-xl mb-4">
              Nilai Kamu:
              <span id="result-score" class="font-extrabold text-3xl text-purple-700"></span>
            </div>

            <h3 class="font-extrabold mb-2">Review:</h3>
            <div id="review-list" class="max-h-96 overflow-y-auto"></div>

            <button onclick="unlockAndGoToNextLevel()" id="btn-next-level"
              class="mt-4 block bg-gradient-to-r from-purple-700 to-fuchsia-700 hover:from-purple-800 hover:to-fuchsia-800
                     text-white p-4 rounded-2xl font-extrabold w-full text-center transition shadow-xl active:scale-[0.99]">
              Selesai
            </button>
          </div>
        </div>

      </div>
    </div>
  </div>

<script>
const questions = [
  { text: "24 × 4 = ?", answer: 96 },
  { text: "25 × 3 = ?", answer: 75 },
  { text: "27 × 3 = ?", answer: 81 },
  { text: "33 × 3 = ?", answer: 99 },
  { text: "21 × 4 = ?", answer: 84 },
  { text: "19 × 5 = ?", answer: 95 },
  { text: "18 × 4 = ?", answer: 72 },
  { text: "16 × 6 = ?", answer: 96 },
  { text: "12 × 8 = ?", answer: 96 },
  { text: "22 × 4 = ?", answer: 88 }
  //bila atau rifda bisa ngrubah soal di sini, intinya jadi 10 soal
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

/* progress bar */
function updateProgress() {
  const bar = document.getElementById('progress-bar');
  if (!bar) return;
  const total = questions.length || 1;
  const pct = Math.round((index / total) * 100);
  bar.style.width = pct + "%";
}

function startQuiz() {
  quizStarted = true;
  const tutorSection = document.getElementById('section-tutor');
  tutorSection.classList.add('animate-fade-zoom-out');

  history.pushState(null, null, location.href);
  window.onpopstate = function() {
    history.pushState(null, null, location.href);
    alert('Kamu tidak bisa kembali saat quiz sedang berlangsung!');
  };

  setTimeout(() => {
    tutorSection.classList.add('hidden');
    tutorSection.classList.remove('animate-fade-zoom-out');

    const quizSection = document.getElementById('section-quiz');
    quizSection.classList.remove('hidden');
    quizSection.classList.add('animate-fade-zoom');

    index = 0;
    userAnswers = [];
    wrongQuestions = [];
    isRetryMode = false;
    originalQuestions = [...questions];
    allAnswersHistory = [];
    firstAttemptCorrect = [];

    updateProgress();
    loadQuestion();
  }, 500);
}

function generateChoices(correctAnswer) {
  const choices = [correctAnswer];
  while (choices.length < 4) {
    const random = Math.floor(Math.random() * 15) + 1;
    if (!choices.includes(random)) choices.push(random);
  }
  return choices.sort(() => Math.random() - 0.5);
}

function loadQuestion() {
  const q = questions[index];
  document.getElementById('quiz-title').innerText = `Soal ${index + 1} dari ${questions.length}`;
  document.getElementById('quiz-question').innerText = q.text;
  document.getElementById('next-info').classList.add('hidden');

  updateProgress();

  const choices = generateChoices(q.answer);
  const choicesContainer = document.getElementById('choices-container');
  choicesContainer.innerHTML = '';

  choices.forEach((choice, i) => {
    const button = document.createElement('button');

    button.className =
      'choice-btn w-full py-5 sm:py-6 rounded-full ' +
      'bg-white text-purple-700 border border-gray-200 ' +
      'font-extrabold text-2xl sm:text-3xl shadow-2xl ' +
      'transition active:scale-[0.99] ' +
      'hover:bg-white/70 hover:scale-[1.01] ' +
      'animate-fade-zoom ' + (i === 0 ? 'delay-0' : i === 1 ? 'delay-75' : i === 2 ? 'delay-150' : 'delay-200');

    button.innerText = choice;
    button.onclick = () => selectAnswer(choice, button);
    choicesContainer.appendChild(button);
  });
}

function selectAnswer(selectedAnswer, button) {
  const q = questions[index];
  const allButtons = document.querySelectorAll('.choice-btn');

  // MATIIN HOVER 
  allButtons.forEach(btn => {
    btn.disabled = true;
    btn.classList.remove('hover:bg-white/70', 'hover:scale-[1.01]');
  });

  if (selectedAnswer === q.answer) {
    // benar -> ungu
    button.classList.add('bg-purple-600','text-white','border-purple-700','animate-correct');
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
    // salah -> merah
    button.classList.add('bg-red-600','text-white','border-red-700');
    userAnswers[index] = selectedAnswer;

    if (!isRetryMode) {
      allAnswersHistory[index] = selectedAnswer;
      firstAttemptCorrect[index] = false;
    } else {
      const originalIndex = originalQuestions.findIndex(oq => oq.text === q.text);
      allAnswersHistory[originalIndex] = selectedAnswer;
    }

    // kunci -> ungu
    allButtons.forEach(btn => {
      if (parseInt(btn.innerText) === q.answer) {
        btn.classList.add('bg-purple-600','text-white','border-purple-700','animate-correct');
      }
    });

    if (!isRetryMode) wrongQuestions.push(index);
    startCountdown(2500);
  }
}

function startCountdown(duration) {
  const nextInfo = document.getElementById('next-info');
  const countdownSpan = document.getElementById('countdown');
  nextInfo.classList.remove('hidden');

  let secondsLeft = Math.ceil(duration / 1000);
  countdownSpan.innerText = secondsLeft;

  if (countdownInterval) clearInterval(countdownInterval);

  countdownInterval = setInterval(() => {
    secondsLeft--;
    if (secondsLeft > 0) countdownSpan.innerText = secondsLeft;
  }, 1000);

  setTimeout(() => {
    clearInterval(countdownInterval);
    nextQuestion();
  }, duration);
}

function nextQuestion() {
  if (index + 1 === questions.length) showResult();
  else { index++; loadQuestion(); }
}

function showResult() {
  if (wrongQuestions.length > 0 && !isRetryMode) { showNotification(); return; }

  const quizSection = document.getElementById('section-quiz');
  quizSection.classList.add('animate-fade-zoom-out');

  setTimeout(() => {
    quizSection.classList.add('hidden');
    quizSection.classList.remove('animate-fade-zoom-out');

    const resultSection = document.getElementById('section-result');
    resultSection.classList.remove('hidden');
    resultSection.classList.add('animate-fade-zoom');

    let totalPoints = 0;
    let reviewHTML = "";

    originalQuestions.forEach((q, originalIndex) => {
      const finalAnswer = allAnswersHistory[originalIndex];
      const isCorrect = finalAnswer === q.answer;
      const correctFirstAttempt = firstAttemptCorrect[originalIndex];

      if (correctFirstAttempt) totalPoints += 1;
      else if (isCorrect && !correctFirstAttempt) totalPoints += 0.5;

      let bgColor = 'bg-red-100';
      if (isCorrect && correctFirstAttempt) bgColor = 'bg-purple-100';
      else if (isCorrect && !correctFirstAttempt) bgColor = 'bg-yellow-100';

      reviewHTML += `<div class="mb-3 p-3 rounded-2xl ${bgColor} text-left">
        <b class="text-lg">${q.text}</b><br>
        Jawaban Kamu: <b>${finalAnswer}</b><br>
        Kunci Jawaban: <b>${q.answer}</b><br>
        ${correctFirstAttempt ? '<span class="text-purple-700 font-bold">✓ Benar pertama (+10)</span>' :
          isCorrect ? '<span class="text-orange-700 font-bold">✓ Benar setelah ulang (+5)</span>' :
          '<span class="text-red-700 font-bold">✗ Salah (+0)</span>'}
      </div>`;
    });

    const finalScore = Math.round((totalPoints / originalQuestions.length) * 100);
    document.getElementById('result-score').innerText = finalScore;
    document.getElementById('review-list').innerHTML = reviewHTML;

    saveProgress(finalScore);
  }, 500);
}

function showNotification() {
  const quizSection = document.getElementById('section-quiz');
  quizSection.classList.add('animate-fade-zoom-out');

  setTimeout(() => {
    quizSection.classList.add('hidden');
    quizSection.classList.remove('animate-fade-zoom-out');

    const notificationSection = document.getElementById('section-notification');
    notificationSection.classList.remove('hidden');
    notificationSection.classList.add('animate-fade-zoom');

    document.getElementById('wrong-count').innerText = wrongQuestions.length + ' soal';
  }, 500);
}

function startRetry() {
  const questionsToRetry = [];
  wrongQuestions.forEach(wrongIndex => questionsToRetry.push(originalQuestions[wrongIndex]));

  questions.length = 0;
  questionsToRetry.forEach(q => questions.push(q));

  const notificationSection = document.getElementById('section-notification');
  notificationSection.classList.add('animate-fade-zoom-out');

  setTimeout(() => {
    notificationSection.classList.add('hidden');
    notificationSection.classList.remove('animate-fade-zoom-out');

    const quizSection = document.getElementById('section-quiz');
    quizSection.classList.remove('hidden');
    quizSection.classList.add('animate-fade-zoom');

    index = 0;
    userAnswers = [];
    wrongQuestions = [];
    isRetryMode = true;

    updateProgress();
    loadQuestion();
  }, 500);
}

function calculateTotalPoints() {
  let totalPoints = 0;
  originalQuestions.forEach((q, originalIndex) => {
    const finalAnswer = allAnswersHistory[originalIndex];
    const isCorrect = finalAnswer === q.answer;
    const correctFirstAttempt = firstAttemptCorrect[originalIndex];

    if (correctFirstAttempt) totalPoints += 1;
    else if (isCorrect && !correctFirstAttempt) totalPoints += 0.5;
  });
  return totalPoints;
}

function saveProgress(finalScore) {
  fetch('/quiz/perkalian/complete-level/5', {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ level: 5, score: finalScore, unlock_next: false })
  })
  .then(r => r.json())
  .then(data => console.log('Score saved:', data))
  .catch(err => console.error('Gagal menyimpan score:', err));
}

function unlockAndGoToNextLevel() {
  const finalScore = Math.round((calculateTotalPoints() / originalQuestions.length) * 100);
  const button = document.getElementById('btn-next-level');

  button.disabled = true;
  button.innerHTML = 'Menyimpan...';

  fetch('/quiz/perkalian/complete-level/5', {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ level: 5, score: finalScore, next_level: 5, unlock_next: true })
  })
  .then(r => r.json())
  .then(data => {
    if (data.status === 'ok' || data.success) window.location.href = '/quiz/perkalian';
    else {
      alert('Gagal membuka level berikutnya. Silakan coba lagi.');
      button.disabled = false;
      button.innerHTML = 'Selesai';
    }
  })
  .catch(() => {
    alert('Terjadi kesalahan. Silakan coba lagi.');
    button.disabled = false;
    button.innerHTML = 'Selesai';
  });
}

function unlockAndGoBack() {
  const finalScore = Math.round((calculateTotalPoints() / originalQuestions.length) * 100);
  const button = document.getElementById('btn-go-back');

  button.disabled = true;
  button.innerHTML = ' Menyimpan Progress...';

  fetch('/quiz/perkalian/complete-level/5', {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ level: 5, score: finalScore, next_level: 5, unlock_next: true })
  })
  .then(r => r.json())
  .then(data => {
    if (data.status === 'ok' || data.success) window.location.href = '/quiz/perkalian';
    else {
      alert('Gagal menyimpan progress. Silakan coba lagi.');
      button.disabled = false;
      button.innerHTML = 'Kembali';
    }
  })
  .catch(() => {
    alert('Terjadi kesalahan. Silakan coba lagi.');
    button.disabled = false;
    button.innerHTML = 'Kembali';
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

</body>
</html>
