<x-app-layout>

<div class="p-6 text-center">
    <h1 class="text-3xl font-bold mb-6">Pilih Level Penambahan</h1>

    <a id="btn-level1" 
       href="{{ route('quiz.level', ['operation'=>'penambahan','level'=>1]) }}"
       class="block bg-green-600 text-white p-4 rounded-xl mb-4">
       Level 1
    </a>

    <a id="btn-level2" 
       href="{{ route('quiz.level', ['operation'=>'penambahan','level'=>2]) }}"
       class="block bg-gray-400 text-white p-4 rounded-xl mb-4 pointer-events-none opacity-40">
       Level 2 (Terkunci)
    </a>

    <a id="btn-level3" 
       href="{{ route('quiz.level', ['operation'=>'penambahan','level'=>3]) }}"
       class="block bg-gray-400 text-white p-4 rounded-xl pointer-events-none opacity-40">
       Level 3 (Terkunci)
    </a>
</div>

<script>
    // Ambil level yang sudah selesai dari session backend
    const completedLevels = @json(session('penambahan_completed_levels', []));

    completedLevels.forEach(level => {
        let btn = document.getElementById(`btn-level${Number(level)+1}`);
        if (btn) {
            btn.classList.remove("opacity-40", "pointer-events-none", "bg-gray-400");
            btn.classList.add("bg-blue-600");
            btn.innerText = `Level ${Number(level)+1}`;
        }
    });
</script>

</x-app-layout>
