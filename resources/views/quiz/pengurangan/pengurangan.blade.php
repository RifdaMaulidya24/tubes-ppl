<x-app-layout>
<div class="min-h-screen w-full relative overflow-hidden py-12 animate-fadeIn">
    <!-- Background Hijau -->
    <div class="absolute inset-0" style="background: linear-gradient(to bottom right, #66bb6a, #4caf50, #43a047);"></div>
    <div class="absolute top-[-150px] left-[-120px] w-[420px] h-[420px] bg-green-300 opacity-40 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-[-160px] right-[-120px] w-[380px] h-[380px] bg-green-200 opacity-30 blur-[140px] rounded-full"></div>
    
    <!-- Floating Elements & Smoke -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-16 bg-white/20 rounded-full blur-sm animate-float1"></div>
        <div class="absolute top-20 right-20 w-40 h-20 bg-white/15 rounded-full blur-md animate-float2"></div>
        <div class="absolute bottom-20 left-1/4 w-28 h-14 bg-white/25 rounded-full blur-sm animate-float3"></div>
        <div class="absolute top-1/3 right-10 w-20 h-20 bg-gray-200/10 rounded-full blur-lg animate-smoke1"></div>
        <div class="absolute bottom-1/3 left-10 w-24 h-24 bg-gray-300/15 rounded-full blur-xl animate-smoke2"></div>
        <div class="absolute top-1/2 left-1/2 w-16 h-16 bg-white/20 rounded-full blur-md animate-smoke3"></div>
    </div>
    
    <!-- Math Symbols - MINUS -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/5 text-white text-6xl font-bold opacity-30 animate-symbol1">−</div>
        <div class="absolute top-1/3 right-1/4 text-white text-5xl font-bold opacity-25 animate-symbol2">−</div>
        <div class="absolute bottom-1/4 left-1/3 text-white text-6xl font-bold opacity-35 animate-symbol3">−</div>
        <div class="absolute bottom-1/3 right-1/5 text-white text-5xl font-bold opacity-30 animate-symbol4">−</div>
    </div>
    
    <!-- Texture & Overlay -->
    <div class="absolute inset-0 bg-[url('/img/grain.png')] opacity-[0.12] mix-blend-overlay pointer-events-none"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/20"></div>

    <!-- CONTENT -->
    <div class="relative max-w-md mx-auto p-6 space-y-6 animate-slideUp">
        <h1 class="text-4xl font-extrabold text-center text-white mb-6 tracking-tight drop-shadow-lg">Pilih Level Pengurangan</h1>

        <div class="space-y-4">
            @for($i = 1; $i <= 5; $i++)
                @php
                    $isCompleted = isset($completedLevels[$i]) && $completedLevels[$i];
                    $isUnlocked = $i == 1 || (isset($completedLevels[$i - 1]) && $completedLevels[$i - 1]);
                @endphp

                @if($isUnlocked)
                    <a href="{{ route('quiz.level', ['operation'=>'pengurangan','level'=>$i]) }}"
                       class="group block {{ $isCompleted ? 'bg-white/95 hover:bg-white' : 'bg-white/90 hover:bg-white/95' }} text-green-600 p-6 rounded-2xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl no-underline border-2 {{ $isCompleted ? 'border-green-400' : 'border-green-300' }}">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <span class="text-lg font-semibold">Level {{ $i }}</span>
                            </div>
                            @if($isCompleted)
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm bg-green-100 text-green-700 px-3 py-1 rounded-full font-medium">✓ Selesai</span>
                                    @if(isset($scores[$i]))
                                        <span class="text-sm bg-yellow-400 text-gray-900 px-3 py-1 rounded-full font-bold">{{ $scores[$i] }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </a>
                @else
                    <div class="group block bg-gray-300 text-gray-500 p-6 rounded-2xl shadow-lg cursor-not-allowed opacity-50">
                        <div class="flex items-center justify-center space-x-3">
                            <span class="text-lg font-semibold">Level {{ $i }} (Terkunci)</span>
                        </div>
                    </div>
                @endif
            @endfor

            <a href="{{ route('quiz.result') }}"
               class="block bg-white/20 hover:bg-white/30 text-white p-4 rounded-2xl font-bold text-center shadow-lg transition no-underline">
               📊 Lihat Result
        </div>
    </div>
</div>

<style>
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes slideUp {
  from { 
    opacity: 0;
    transform: translateY(30px);
  }
  to { 
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes float1 {0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
@keyframes float2 {0%,100%{transform:translateY(0)}50%{transform:translateY(-15px)}}
@keyframes float3 {0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
@keyframes smoke1 {0%{opacity:.1}50%{opacity:.2}100%{opacity:0}}
@keyframes smoke2 {0%{opacity:.15}50%{opacity:.25}100%{opacity:0}}
@keyframes smoke3 {0%{opacity:.2}50%{opacity:.3}100%{opacity:0}}
@keyframes symbol1 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(180deg) scale(1.1); } }
@keyframes symbol2 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(-180deg) scale(1.1); } }
@keyframes symbol3 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(180deg) scale(1.1); } }
@keyframes symbol4 { 0%, 100% { transform: rotate(0deg) scale(1); } 50% { transform: rotate(-180deg) scale(1.1); } }

.animate-fadeIn { animation: fadeIn 0.6s ease-out; }
.animate-slideUp { animation: slideUp 0.8s ease-out 0.2s backwards; }
.animate-float1{animation:float1 6s infinite}
.animate-float2{animation:float2 8s infinite}
.animate-float3{animation:float3 7s infinite}
.animate-smoke1{animation:smoke1 10s infinite}
.animate-smoke2{animation:smoke2 12s infinite}
.animate-smoke3{animation:smoke3 9s infinite}
.animate-symbol1 { animation: symbol1 8s infinite; }
.animate-symbol2 { animation: symbol2 10s infinite; }
.animate-symbol3 { animation: symbol3 9s infinite; }
.animate-symbol4 { animation: symbol4 11s infinite; }
</style>
</x-app-layout>