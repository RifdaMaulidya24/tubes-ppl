<x-app-layout>
    <div class="min-h-screen py-10">
        <div class="max-w-3xl mx-auto px-4">
            <h1 class="text-3xl font-extrabold mb-2">Materi Pengurangan ➖</h1>
            <p class="text-gray-600 mb-6">Pengurangan adalah mengambil sebagian dari suatu angka.</p>

            <div class="bg-white border rounded-2xl p-6 shadow">
                <h2 class="font-bold text-xl mb-3">Contoh</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>7 - 3 = 4</li>
                    <li>15 - 6 = 9</li>
                </ul>

                <h2 class="font-bold text-xl mt-6 mb-3">Tips cepat</h2>
                <ul class="list-disc pl-5 space-y-2 text-gray-700">
                    <li>Gunakan “selisih”: 12 - 9 = 3 (karena 9 ke 12 naik 3)</li>
                </ul>
            </div>

            <div class="mt-8 flex gap-3">
                <a href="{{ route('materi.index') }}" class="px-4 py-2 rounded-xl bg-gray-200 font-bold hover:bg-gray-300 transition">
                    ⬅ Kembali
                </a>
                <a href="{{ url('/quiz/pengurangan') }}" class="px-4 py-2 rounded-xl bg-green-600 text-white font-bold hover:bg-green-700 transition">
                    Mulai Quiz Pengurangan
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
