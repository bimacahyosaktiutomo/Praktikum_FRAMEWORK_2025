<x-layouts.dashboard :title="$title">
    <section class="lg:w-[720px] w-[540px] p-2 bg-slate-50 rounded-xl border border-indigo-100 shadow-lg">
        <h1 class="font-bold text-xl text-indigo-800 mb-4">Daftar Mahasiswa</h1>

        <div class="overflow-x-auto shadow-lg bg-slate-50 h-[640px]">
            <table class="min-w-full rounded-xl overflow-hidden text-sm">
                <thead class="bg-indigo-200 text-indigo-900">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">NIP</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $lecturer)
                        <tr class="hover:bg-indigo-50">
                            <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 text-center">
                                <x-avatar :src="'https://upload.wikimedia.org/wikipedia/commons/2/2c/Default_pfp.svg'"></x-avatar>
                            </td>
                            <td class="px-4 py-2 text-center">{{ $lecturer->nip }}</td>
                            <td class="px-4 py-2 text-center">{{ $lecturer->name }}</td>
                            <td class="px-4 py-2 text-center">{{ $lecturer->email }}</td>
                            <td class="px-4 py-2 text-center">SOON 😊</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.dashboard>
