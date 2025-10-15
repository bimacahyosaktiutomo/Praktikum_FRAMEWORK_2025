<x-layouts.dashboard :title="$title">
    <section class="lg:w-[720px] md:w-[540px] w-screen p-4 bg-slate-50 border-2 border-rose-800 shadow-lg">
        <h1 class="font-bold text-xl text-rose-800 mb-2">Detail Mahasiswa</h1>

        <div class="bg-rose-800 h-0.5 my-2"></div>

        @if ($mode == 'student')
        <div class="flex flex-col gap-3">
            <div>
                <label class="font-semibold text-rose-800">NIM</label>
                <p class="p-2 bg-slate-100 border border-rose-300 rounded">{{ $student->nim }}</p>
            </div>

            <div>
                <label class="font-semibold text-rose-800">Nama</label>
                <p class="p-2 bg-slate-100 border border-rose-300 rounded">{{ $student->nama }}</p>
            </div>

            <div>
                <label class="font-semibold text-rose-800">Kelas</label>
                <p class="p-2 bg-slate-100 border border-rose-300 rounded">{{ $student->kelas }}</p>
            </div>

            <div>
                <label class="font-semibold text-rose-800">Angkatan</label>
                <p class="p-2 bg-slate-100 border border-rose-300 rounded">{{ $student->angkatan }}</p>
            </div>

            <div>
                <label class="font-semibold text-rose-800">Dosen Pembimbing</label>
                <p class="p-2 bg-slate-100 border border-rose-300 rounded">
                    {{ $student->lecturer->name ?? 'Belum ditentukan' }}
                </p>
            </div>
        </div>

        <div class="flex justify-end mt-4 gap-2">
            <a href="{{ route('student.index') }}"
                class="p-1 px-3 bg-slate-200 border-2 border-rose-800 text-rose-800 font-semibold shadow-md hover:-translate-x-1 duration-100">
                Kembali
            </a>

            <a href="{{ route('student.edit', $student->id) }}"
                class="p-1 px-3 bg-rose-800 border-2 border-rose-800 text-white font-semibold shadow-md hover:-translate-x-1 duration-100">
                Edit
            </a>
        </div>
        @endif
    </section>
</x-layouts.dashboard>
