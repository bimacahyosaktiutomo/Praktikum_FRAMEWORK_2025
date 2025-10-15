<x-layouts.dashboard :title="$title">
    <section class="lg:w-[720px] md:w-[540px] w-screen p-2 bg-slate-50 border-2 border-rose-800 shadow-lg">
        <h1 class="font-bold text-xl text-rose-800 mb-4">Daftar Dosen</h1>

        <div class="overflow-x-auto shadow-lg bg-slate-50 h-[540px]">
            <x-dashboard.tabel>
                <x-slot:header>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2 hidden md:block">Foto</th>
                        <th class="px-4 py-2">NIP</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </x-slot:header>
                <x-slot:body>
                    @foreach ($data as $index => $lecturer)
                        <tr class="hover:bg-rose-50">
                            <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 text-center hidden md:block">
                                <x-avatar :src="'https://upload.wikimedia.org/wikipedia/commons/2/2c/Default_pfp.svg'"></x-avatar>
                            </td>
                            <td class="px-4 py-2 text-center">{{ $lecturer->nip }}</td>
                            <td class="px-4 py-2 text-center">{{ $lecturer->name }}</td>
                            <td class="px-4 py-2 text-center">{{ $lecturer->email }}</td>
                            <td class="px-4 py-2 text-center">SOON 😊</td>
                        </tr>
                    @endforeach
                </x-slot:body>
            </x-dashboard.tabel>
        </div>
    </section>
</x-layouts.dashboard>
