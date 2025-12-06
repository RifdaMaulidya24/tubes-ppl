<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Quiz: {{ ucfirst($operation) }}</h1>

    <div class="p-4 bg-white rounded shadow text-black">
        <p>Ini adalah halaman untuk kuis {{ $operation }}.</p>

        {{-- Contoh UI soal sederhana --}}
        <h2 class="mt-4 mb-2 font-semibold">Soal:</h2>
        <p>Berapa hasil 2 + 3?</p>

        <div class="mt-3">
            <button class="block w-full text-left p-3 bg-green-100 rounded mb-2">A. 4</button>
            <button class="block w-full text-left p-3 bg-green-100 rounded mb-2">B. 5</button>
            <button class="block w-full text-left p-3 bg-green-100 rounded mb-2">C. 6</button>
            <button class="block w-full text-left p-3 bg-green-100 rounded">D. 7</button>
        </div>
    </div>
</x-app-layout>
