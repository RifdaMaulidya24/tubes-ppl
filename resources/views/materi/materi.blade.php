<x-app-layout>
    <div class="min-h-screen py-10">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-3xl font-extrabold mb-2">Materi</h1>
            <p class="text-gray-600 mb-8">Pilih materi yang mau kamu pelajari dulu sebelum quiz.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <a href="{{ route('materi.penambahan') }}" class="p-6 rounded-2xl bg-white shadow hover:shadow-lg transition border">
                    <div class="text-4xl mb-3">➕</div>
                    <div class="font-bold text-lg">Penambahan</div>
                    <div class="text-gray-600 text-sm mt-1">Konsep dasar menjumlahkan angka.</div>
                </a>

                <a href="{{ route('materi.pengurangan') }}" class="p-6 rounded-2xl bg-white shadow hover:shadow-lg transition border">
                    <div class="text-4xl mb-3">➖</div>
                    <div class="font-bold text-lg">Pengurangan</div>
                    <div class="text-gray-600 text-sm mt-1">Konsep dasar mengurangi angka.</div>
                </a>

                <a href="{{ route('materi.perkalian') }}" class="p-6 rounded-2xl bg-white shadow hover:shadow-lg transition border">
                    <div class="text-4xl mb-3">✖️</div>
                    <div class="font-bold text-lg">Perkalian</div>
                    <div class="text-gray-600 text-sm mt-1">Penjumlahan berulang dengan cepat.</div>
                </a>

                <a href="{{ route('materi.pembagian') }}" class="p-6 rounded-2xl bg-white shadow hover:shadow-lg transition border">
                    <div class="text-4xl mb-3">➗</div>
                    <div class="font-bold text-lg">Pembagian</div>
                    <div class="text-gray-600 text-sm mt-1">Membagi angka jadi beberapa bagian.</div>
                </a>

            </div>

            <div class="mt-8">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 rounded-xl bg-green-600 text-white font-bold hover:bg-green-700 transition">
                    ⬅ Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
