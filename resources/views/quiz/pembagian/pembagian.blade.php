<x-app-layout>
<div class="min-h-screen w-full relative overflow-hidden py-12">

    <!-- Gradient, glow, smoke, simbol, texture -->
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
    <div class="relative max-w-md mx-auto p-6 space-y-6">

        <h1 class="text-4xl font-extrabold text-center text-white mb-6 tracking-tight drop-shadow-lg">Pilih Level pembagian</h1>

        <div class="space-y-4">
            <a id="btn-level1" 
               href="{{ route('quiz.level', ['operation'=>'pembagian','level'=>1]) }}"
               class="group block bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white p-6 rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="flex items-center justify-center space-x-3">
                    <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <span class="text-xl font-bold">1</span>
                    </div>
                    <span class="text-lg font-semibold">Level 1</span>
                </div>
            </a>

            <a id="btn-level2" 
               href="{{ route('quiz.level', ['operation'=>'pembagian','level'=>2]) }}"
               class="group block bg-gray-300 text-gray-500 p-6 rounded-xl shadow-lg cursor-not-allowed opacity-50 pointer-events-none">
                <div class="flex items-center justify-center space-x-3">
                    <div class="w-10 h-10 bg-gray-400 bg-opacity-20 rounded-full flex items-center justify-center">
                        <span class="text-xl font-bold">2</span>
                    </div>
                    <span class="text-lg font-semibold">Level 2 (Terkunci)</span>
                </div>
            </a>

            <a id="btn-level3" 
               href="{{ route('quiz.level', ['operation'=>'pembagian','level'=>3]) }}"
               class="group block bg-gray-300 text-gray-500 p-6 rounded-xl shadow-lg cursor-not-allowed opacity-50 pointer-events-none">
                <div class="flex items-center justify-center space-x-3">
                    <div class="w-10 h-10 bg-gray-400 bg-opacity-20 rounded-full flex items-center justify-center">
                        <span class="text-xl font-bold">3</span>
                    </div>
                    <span class="text-lg font-semibold">Level 3 (Terkunci)</span>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
const completedLevels = @json(session('pembagian_completed_levels', []));
completedLevels.forEach(level => {
    let btn = document.getElementById(`btn-level${Number(level)+1}`);
    if(btn){
        btn.classList.remove("opacity-50","pointer-events-none","bg-gray-300","text-gray-500","cursor-not-allowed");
        btn.classList.add("bg-gradient-to-r","from-blue-500","to-blue-600","hover:from-blue-600","hover:to-blue-700","text-white","cursor-pointer");
        btn.innerHTML = `
            <div class="flex items-center justify-center space-x-3">
                <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                    <span class="text-xl font-bold">${Number(level)+1}</span>
                </div>
                <span class="text-lg font-semibold">Level ${Number(level)+1}</span>
            </div>
        `;
    }
});
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
