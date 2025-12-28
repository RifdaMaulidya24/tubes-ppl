<x-app-layout>
    <div class="min-h-screen py-10">
        <div class="max-w-3xl mx-auto px-4">
            <h1 class="text-3xl font-extrabold mb-2">Materi Pembagian ➗</h1>
            <p class="text-gray-600 mb-6">Pembagian adalah membagi angka menjadi beberapa kelompok sama besar.</p>

            <div class="bg-white border rounded-2xl p-6 shadow">
                <h2 class="font-bold text-xl mb-3">Contoh</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>12 ÷ 3 = 4</li>
                    <li>20 ÷ 5 = 4</li>
                </ul>

                <h2 class="font-bold text-xl mt-6 mb-3">Tips cepat</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Pembagian kebalikan dari perkalian: kalau 4×3=12, maka 12÷3=4.</li>
                </ul>
            </div>

            <div class="mt-8 flex gap-3">
                <a href="{{ route('materi.index') }}" class="px-4 py-2 rounded-xl bg-gray-200 font-bold hover:bg-gray-300 transition">
                    ⬅ Kembali
                </a>
                <a href="{{ url('/quiz/pembagian') }}" class="px-4 py-2 rounded-xl bg-green-600 text-white font-bold hover:bg-green-700 transition">
                    Mulai Quiz Pembagian
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
