<x-app-layout>
    <div class="min-h-screen py-10">
        <div class="max-w-3xl mx-auto px-4">
            <h1 class="text-3xl font-extrabold mb-2">Materi Perkalian ✖️</h1>
            <p class="text-gray-600 mb-6">Perkalian adalah penjumlahan berulang.</p>

            <div class="bg-white border rounded-2xl p-6 shadow">
                <h2 class="font-bold text-xl mb-3">Contoh</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>3 × 4 = 12 (4 + 4 + 4)</li>
                    <li>5 × 2 = 10</li>
                </ul>

                <h2 class="font-bold text-xl mt-6 mb-3">Tips cepat</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Hafalin tabel 1–10 biar cepat.</li>
                    <li>Gunakan pola: 9×n = (10×n) - n</li>
                </ul>
            </div>

            <div class="mt-8 flex gap-3">
                <a href="{{ route('materi.index') }}" class="px-4 py-2 rounded-xl bg-gray-200 font-bold hover:bg-gray-300 transition">
                    ⬅ Kembali
                </a>
                <a href="{{ url('/quiz/perkalian') }}" class="px-4 py-2 rounded-xl bg-green-600 text-white font-bold hover:bg-green-700 transition">
                    Mulai Quiz Perkalian
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
