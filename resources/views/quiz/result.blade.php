<x-app-layout>
    <div class="min-h-screen w-full relative overflow-hidden py-12">

        <!-- Background-->
        <div class="absolute inset-0 bg-gradient-to-br from-[#2F5A47] via-[#234738] to-[#1a3d2e]"></div>
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-[-140px] left-[-120px] w-[520px] h-[520px] bg-white/10 blur-[140px] rounded-full"></div>
            <div class="absolute bottom-[-160px] right-[-120px] w-[520px] h-[520px] bg-white/10 blur-[160px] rounded-full"></div>
        </div>

        <!-- Floating blobs-->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-10 left-10 w-32 h-16 bg-white/10 rounded-full blur-sm animate-float1"></div>
            <div class="absolute top-20 right-20 w-40 h-20 bg-white/10 rounded-full blur-md animate-float2"></div>
            <div class="absolute bottom-20 left-1/4 w-28 h-14 bg-white/10 rounded-full blur-sm animate-float3"></div>
        </div>

        <!-- Symbols -->
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

            <!-- GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                @foreach ($stats as $op)
                    @php
                        $themes = [
                            'penambahan' => ['#42a5f5', '#2196f3', '#1976d2'],
                            'pengurangan' => ['#66bb6a', '#4caf50', '#43a047'],
                            'perkalian' => ['#9575cd', '#7e57c2', '#673ab7'],
                            'pembagian' => ['#ffa726', '#ff9800', '#fb8c00'],
                        ];
                        $t = $themes[$op['slug']] ?? ['rgba(255,255,255,0.14)', 'rgba(255,255,255,0.12)', 'rgba(255,255,255,0.10)'];
                        $detailBg = "linear-gradient(135deg, rgba(232,245,233,0.95), rgba(232,245,233,0.78))";
                        if ($op['slug'] === 'penambahan') $detailBg = "linear-gradient(135deg, rgba(232,245,233,0.92), rgba(66,165,245,0.16))";
                        if ($op['slug'] === 'pengurangan') $detailBg = "linear-gradient(135deg, rgba(232,245,233,0.92), rgba(76,175,80,0.18))";
                        if ($op['slug'] === 'perkalian') $detailBg = "linear-gradient(135deg, rgba(232,245,233,0.92), rgba(126,87,194,0.16))";
                        if ($op['slug'] === 'pembagian') $detailBg = "linear-gradient(135deg, rgba(232,245,233,0.92), rgba(255,152,0,0.16))";
                    @endphp

                    <!-- ✅ CARD-->
                    <div class="relative overflow-hidden rounded-[28px] shadow-[0_18px_60px_-30px_rgba(0,0,0,0.75)] transform transition hover:-translate-y-1">

                        <!-- gradient khas -->
                        <div class="absolute inset-0"
                            style="background: linear-gradient(to bottom right, {{ $t[0] }}, {{ $t[1] }}, {{ $t[2] }});">
                        </div>

                        <!-- overlay glass halus-->
                        <div class="absolute inset-0 bg-black/25"></div>

                        <!-- soft highlights -->
                        <div class="absolute -top-24 -left-24 w-[340px] h-[340px] bg-white/12 blur-[90px] rounded-full"></div>
                        <div class="absolute -bottom-28 -right-24 w-[420px] h-[420px] bg-black/20 blur-[120px] rounded-full"></div>

                        <div class="relative p-6 text-white">

                            <div class="flex items-start justify-between gap-3">
                                <div class="pr-2">
                                    <h2 class="text-2xl font-extrabold leading-tight drop-shadow-sm">{{ $op['title'] }}</h2>
                                    <p class="mt-1 text-white/75 text-sm">{{ $op['slug'] }}</p>
                                </div>

                                <a href="{{ route('quiz.levels', ['operation' => $op['slug']]) }}"
                                    class="shrink-0 bg-white/95 hover:bg-white text-slate-900 px-4 py-2 rounded-2xl font-extrabold transition shadow-[0_10px_30px_-14px_rgba(0,0,0,0.65)] focus:outline-none focus:ring-2 focus:ring-white/35 no-underline">
                                    Buka Level
                                </a>
                            </div>

                            <!-- Summary numbers-->
                            <div class="grid grid-cols-3 gap-3 mt-6">
                                <div class="rounded-2xl p-3 text-center bg-white/12 hover:bg-white/14 transition">
                                    <div class="text-xs text-white/75">Selesai</div>
                                    <div class="text-2xl font-extrabold">{{ $op['completed_count'] }}</div>
                                </div>
                                <div class="rounded-2xl p-3 text-center bg-white/12 hover:bg-white/14 transition">
                                    <div class="text-xs text-white/75">Rata-rata</div>
                                    <div class="text-2xl font-extrabold">{{ $op['avg_score'] }}</div>
                                </div>
                                <div class="rounded-2xl p-3 text-center bg-white/12 hover:bg-white/14 transition">
                                    <div class="text-xs text-white/75">Terbaik</div>
                                    <div class="text-2xl font-extrabold">{{ $op['best_score'] }}</div>
                                </div>
                            </div>

                            <!-- Progress bar-->
                            <div class="mt-6">
                                <div class="flex items-center justify-between text-sm text-white/90 mb-2">
                                    <span class="font-semibold">Progress</span>
                                    <span class="font-extrabold">{{ $op['progress_pct'] }}%</span>
                                </div>

                                <div class="w-full h-3 rounded-full bg-black/25 overflow-hidden">
                                    <div class="h-3 rounded-full"
                                        style="width: {{ $op['progress_pct'] }}%; background: linear-gradient(to right, rgba(255,255,255,0.95), rgba(255,255,255,0.70));">
                                    </div>
                                </div>

                                <p class="mt-2 text-xs text-white/75">
                                    Level terdata: {{ $op['total_levels'] }} (berdasarkan session)
                                </p>
                            </div>

                            <!-- Level list -->
                            <div class="mt-7">
                                <h3 class="font-extrabold mb-3">Detail Level</h3>

                                @if (count($op['levels']) === 0)
                                    <div class="rounded-2xl p-4 text-slate-900 shadow-sm"
                                        style="background: {{ $detailBg }};">
                                        Belum ada data level untuk operasi ini.
                                    </div>
                                @else
                                    <div class="space-y-3">
                                        @foreach ($op['levels'] as $lv)
                                            <div class="rounded-2xl p-4 flex items-center justify-between gap-3 shadow-sm"
                                                style="background: {{ $detailBg }};">
                                                <div>
                                                    <div class="font-extrabold text-slate-900">Level {{ $lv['level'] }}</div>
                                                    <div class="text-xs text-slate-700 mt-1">
                                                        Status:
                                                        @if ($lv['completed'])
                                                            <span class="font-bold text-slate-900">Selesai</span>
                                                        @else
                                                            <span class="text-slate-600">Belum</span>
                                                        @endif
                                                        • Score:
                                                        <span class="font-extrabold text-slate-900">{{ $lv['score'] ?? '-' }}</span>
                                                    </div>
                                                </div>

                                                <a href="{{ route('quiz.level', ['operation' => $op['slug'], 'level' => $lv['level']]) }}"
                                                    class="shrink-0 bg-slate-900/90 hover:bg-slate-900 text-white px-4 py-2 rounded-2xl font-extrabold transition shadow-[0_10px_30px_-14px_rgba(0,0,0,0.55)] focus:outline-none focus:ring-2 focus:ring-white/25 no-underline">
                                                    Main
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

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
        a, a:hover, a:focus, a:active {
            text-decoration: none !important;
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
