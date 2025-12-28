<x-app-layout>
    <div class="min-h-screen w-full relative overflow-hidden py-12">

        <!-- ✅ Background: samakan dengan tema Menu Quiz (dashboard vibes) -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#2F5A47] via-[#234738] to-[#1a3d2e]"></div>
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-[-140px] left-[-120px] w-[520px] h-[520px] bg-white/10 blur-[140px] rounded-full"></div>
            <div class="absolute bottom-[-160px] right-[-120px] w-[520px] h-[520px] bg-white/10 blur-[160px] rounded-full"></div>
        </div>

        <!-- Floating blobs (klik aman karena pointer-events-none) -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-10 left-10 w-32 h-16 bg-white/10 rounded-full blur-sm animate-float1"></div>
            <div class="absolute top-20 right-20 w-40 h-20 bg-white/10 rounded-full blur-md animate-float2"></div>
            <div class="absolute bottom-20 left-1/4 w-28 h-14 bg-white/10 rounded-full blur-sm animate-float3"></div>
        </div>

        <!-- Symbols (klik aman) -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-1/4 left-1/5 text-white text-6xl font-bold opacity-20 animate-symbol1">+</div>
            <div class="absolute top-1/3 right-1/4 text-white text-5xl font-bold opacity-15 animate-symbol2">-</div>
            <div class="absolute bottom-1/4 left-1/3 text-white text-6xl font-bold opacity-20 animate-symbol3">×</div>
            <div class="absolute bottom-1/3 right-1/5 text-white text-5xl font-bold opacity-20 animate-symbol4">÷</div>
        </div>

        <!-- ✅ CONTENT -->
        <div class="relative max-w-5xl mx-auto px-4 z-10">

            <div class="text-center text-white mb-8">
                <h1 class="text-4xl font-extrabold tracking-tight drop-shadow-lg">Result & Statistik Quiz</h1>
                <p class="mt-2 text-white/80">
                    Rekap hasil dari semua operasi (Penambahan, Pengurangan, Perkalian, Pembagian).
                </p>
            </div>

            <!-- Quick Actions (LOGIKA TETAP) -->
            <div class="flex flex-col sm:flex-row gap-3 justify-center mb-8">

                <!-- Dropdown Navigation (LOGIKA TETAP) -->
                <div x-data="{ open: false }" class="relative w-full sm:w-auto">
                    <button @click="open = !open" @keydown.escape.window="open = false"
                        class="w-full sm:w-auto bg-white/20 hover:bg-white/30 text-white px-5 py-3 rounded-xl font-bold transition shadow-lg backdrop-blur flex items-center justify-between gap-2 border border-white/20">
                        📌 Pilih Halaman
                        <svg class="w-4 h-4 opacity-90" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-cloak x-show="open" @click.outside="open = false" x-transition
                        class="absolute z-50 mt-2 w-full sm:w-64 rounded-xl overflow-hidden shadow-xl bg-white/95 text-gray-800 border border-white/20">
                        <div class="h-px bg-gray-200"></div>

                        <a href="{{ route('quiz.levels', ['operation' => 'penambahan']) }}"
                            class="block px-4 py-3 hover:bg-gray-100">
                            ➕ Penambahan
                        </a>
                        <a href="{{ route('quiz.levels', ['operation' => 'pengurangan']) }}"
                            class="block px-4 py-3 hover:bg-gray-100">
                            ➖ Pengurangan
                        </a>
                        <a href="{{ route('quiz.levels', ['operation' => 'perkalian']) }}"
                            class="block px-4 py-3 hover:bg-gray-100">
                            ✖️ Perkalian
                        </a>
                        <a href="{{ route('quiz.levels', ['operation' => 'pembagian']) }}"
                            class="block px-4 py-3 hover:bg-gray-100">
                            ➗ Pembagian
                        </a>
                    </div>
                </div>

                <!-- Tombol Dashboard tetap (LOGIKA TETAP) -->
                <a href="{{ route('dashboard') }}"
                    class="bg-white/20 hover:bg-white/30 text-white px-5 py-3 rounded-xl font-bold transition shadow-lg backdrop-blur text-center border border-white/20">
                    🏠 Dashboard
                </a>

            </div>

            <!-- GRID (LOGIKA TETAP) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                @foreach ($stats as $op)
                    <div class="bg-white/15 backdrop-blur-md rounded-2xl shadow-xl p-6 text-white border border-white/15">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <h2 class="text-2xl font-extrabold">{{ $op['title'] }}</h2>
                                <p class="text-white/70 text-sm">{{ $op['slug'] }}</p>
                            </div>

                            <a href="{{ route('quiz.levels', ['operation' => $op['slug']]) }}"
                                class="bg-white text-green-800 hover:bg-green-50 px-4 py-2 rounded-xl font-bold transition shadow">
                                Buka Level
                            </a>
                        </div>

                        <!-- Summary numbers -->
                        <div class="grid grid-cols-3 gap-3 mt-5">
                            <div class="bg-white/10 rounded-xl p-3 text-center border border-white/10">
                                <div class="text-xs text-white/70">Selesai</div>
                                <div class="text-2xl font-extrabold">{{ $op['completed_count'] }}</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-3 text-center border border-white/10">
                                <div class="text-xs text-white/70">Rata-rata</div>
                                <div class="text-2xl font-extrabold">{{ $op['avg_score'] }}</div>
                            </div>
                            <div class="bg-white/10 rounded-xl p-3 text-center border border-white/10">
                                <div class="text-xs text-white/70">Terbaik</div>
                                <div class="text-2xl font-extrabold">{{ $op['best_score'] }}</div>
                            </div>
                        </div>

                        <!-- Progress bar -->
                        <div class="mt-5">
                            <div class="flex items-center justify-between text-sm text-white/80 mb-2">
                                <span>Progress</span>
                                <span>{{ $op['progress_pct'] }}%</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-white/15 overflow-hidden border border-white/10">
                                <div class="h-3 bg-white/90 rounded-full" style="width: {{ $op['progress_pct'] }}%"></div>
                            </div>
                            <p class="mt-2 text-xs text-white/70">
                                Level terdata: {{ $op['total_levels'] }} (berdasarkan session)
                            </p>
                        </div>

                        <!-- Level list -->
                        <div class="mt-6">
                            <h3 class="font-bold mb-3">Detail Level</h3>

                            @if (count($op['levels']) === 0)
                                <div class="bg-white/10 rounded-xl p-4 text-white/90 border border-white/10">
                                    Belum ada data level untuk operasi ini.
                                </div>
                            @else
                                <div class="space-y-3">
                                    @foreach ($op['levels'] as $lv)
                                        <div class="bg-white/10 rounded-xl p-4 flex items-center justify-between gap-3 border border-white/10">
                                            <div>
                                                <div class="font-extrabold">Level {{ $lv['level'] }}</div>
                                                <div class="text-xs text-white/70">
                                                    Status:
                                                    @if ($lv['completed'])
                                                        <span class="font-bold text-white">Selesai</span>
                                                    @else
                                                        <span class="text-white/70">Belum</span>
                                                    @endif
                                                    • Score:
                                                    <span class="font-bold">{{ $lv['score'] ?? '-' }}</span>
                                                </div>
                                            </div>

                                            <a href="{{ route('quiz.level', ['operation' => $op['slug'], 'level' => $lv['level']]) }}"
                                                class="bg-white text-green-800 hover:bg-green-50 px-4 py-2 rounded-xl font-bold transition shadow">
                                                Main
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap');

        body {
            background: linear-gradient(to bottom right, #2F5A47, #234738, #1a3d2e);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            position: relative;
            overflow-x: hidden;
            color: #fff;
            scroll-behavior: smooth;
        }

        @keyframes float1 { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-10px)} }
        @keyframes float2 { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-15px)} }
        @keyframes float3 { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }

        @keyframes symbol1 { 0%,100%{transform:rotate(0deg) scale(1);} 50%{transform:rotate(180deg) scale(1.1);} }
        @keyframes symbol2 { 0%,100%{transform:rotate(0deg) scale(1);} 50%{transform:rotate(-180deg) scale(1.1);} }
        @keyframes symbol3 { 0%,100%{transform:rotate(0deg) scale(1);} 50%{transform:rotate(180deg) scale(1.1);} }
        @keyframes symbol4 { 0%,100%{transform:rotate(0deg) scale(1);} 50%{transform:rotate(-180deg) scale(1.1);} }

        .animate-float1 { animation: float1 6s infinite }
        .animate-float2 { animation: float2 8s infinite }
        .animate-float3 { animation: float3 7s infinite }

        .animate-symbol1 { animation: symbol1 8s infinite; }
        .animate-symbol2 { animation: symbol2 10s infinite; }
        .animate-symbol3 { animation: symbol3 9s infinite; }
        .animate-symbol4 { animation: symbol4 11s infinite; }
    </style>
</x-app-layout>
