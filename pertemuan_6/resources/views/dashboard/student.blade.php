j<x-layouts.dashboard :title="$title">
    <section class="lg:w-[720px] md:w-[540px] w-screen p-2 bg-slate-50 border-2 border-rose-800 shadow-lg">
        <div class="flex justify-between w-full mb-4">
            <h1 class="font-bold text-xl text-rose-800">Daftar Mahasiswa</h1>

        @if (session('success'))
            <div class="border-2 border-green-700 p-1 lg:w-1/2 w-[265px] bg-green-100 shadow-md">
                <p class="text-green-700 text-center font-bold">
                    {{ session('success') }}
                </p>
            </div>
        @endif

            <a href="{{ route('student.create') }}" class="inline-flex items-center gap-0.5 text-rose-50 p-1 bg-green-600 cursor-pointer shadow-md duration-100 hover:translate-y-1">
                <i class="ph-fill ph-plus text-base"></i>
                Tambah Mahasiswa
                <i class="ph-fill ph-student text-xl"></i>
            </a>
        </div>

        <form method="GET" action="{{ route('student.index') }}" class="mb-4 flex gap-2 shadow-lg">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari mahasiswa..."
                class="p-2 w-full outline-2 outline-rose-800 focus:outline-rose-400 duration-100">
            <button type="submit" class="bg-rose-700 text-white font-semibold px-4 py-2 cursor-pointer duration-100 hover:translate-y-1">Cari</button>
        </form>

        <div class="overflow-x-auto shadow-lg bg-slate-50 h-[540px]">
            <x-dashboard.tabel>
                <x-slot:header>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2 hidden lg:block">Foto</th>
                        <th class="px-4 py-2">NIM</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Kelas</th>
                        <th class="px-4 py-2">Angkatan</th>
                        <th class="px-4 py-2">Dosbing</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </x-slot:header>
                <x-slot:body>
                    @foreach ($data as $index => $student)
                        <tr class="hover:bg-rose-50 odd:bg-slate-100">
                            <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 text-center hidden lg:block">
                                <x-avatar :src="'https://upload.wikimedia.org/wikipedia/commons/2/2c/Default_pfp.svg'"></x-avatar>
                            </td>
                            <td class="px-4 py-2 text-center">{{ $student->nim }}</td>
                            <td class="px-4 py-2 text-center">{{ $student->nama }}</td>
                            <td class="px-4 py-2 text-center">{{ $student->kelas }}</td>
                            <td class="px-4 py-2 text-center">{{ $student->angkatan }}</td>
                            <td class="px-4 py-2 text-center">{{ $student->lecturer?->name }}</td>
                            <td class="text-lg text-center">
                                <div class="flex lg:flex-row flex-col justify-center lg:gap-1 text-lg">
                                    <a href="{{ route('student.edit', $student->id) }}" class="text-rose-50 p-1 bg-amber-400 cursor-pointer shadow-md duration-100 hover:translate-y-1">
                                        <i class="ph-fill ph-pencil-line"></i>
                                    </a>
                                    <button type="button"
                                        onclick="openModal({{ $student->id }})"
                                        class="text-rose-50 p-1 bg-rose-700 cursor-pointer shadow-md duration-100 hover:translate-y-1">
                                        <i class="ph-fill ph-trash-simple"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <div id="deleteModal-{{ $student->id }}" class="fixed inset-0 hidden items-center justify-center z-50">
                            <div class="fixed inset-0 opacity-50 bg-black z-10"></div>
                            <div class="bg-white p-6 shadow-lg text-center border-2 border-rose-800 w-[90%] max-w-md z-20">
                                <h2 class="text-lg font-semibold text-rose-800 mb-4">Yakin ingin menghapus <span class="underline font-bold text-xl">{{ $student->nama }}</span> ?</h2>
                                <div class="flex justify-center gap-3">
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-rose-700 text-white hover:bg-rose-800 duration-100 cursor-pointer">
                                            Ya, Hapus
                                        </button>
                                    </form>
                                    <button type="button" onclick="closeModal({{ $student->id }})"
                                        class="px-4 py-2 bg-gray-300 text-gray-800 hover:bg-gray-400 duration-100 cursor-pointer">
                                        Batal
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </x-slot:body>
            </x-dashboard.tabel>
        </div>
    </section>
</x-layouts.dashboard>

<script>
    function openModal(id) {
        document.getElementById(`deleteModal-${id}`).classList.remove('hidden');
        document.getElementById(`deleteModal-${id}`).classList.add('flex');
    }

    function closeModal(id) {
        document.getElementById(`deleteModal-${id}`).classList.add('hidden');
        document.getElementById(`deleteModal-${id}`).classList.remove('flex');
    }
</script>

