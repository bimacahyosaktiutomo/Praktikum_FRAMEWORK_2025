<x-layouts.dashboard :title="$title">
    <section class="lg:w-[720px] md:w-[540px] w-screen p-2 bg-slate-50 border-2 border-rose-800 shadow-lg">
        <h1 class="font-bold text-xl text-rose-800 mb-4">Daftar User</h1>

        <div class="overflow-x-auto shadow-lg bg-slate-50 h-[540px]">
            <x-dashboard.tabel>
                <x-slot:header>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Dibuat</th>
                        <th class="px-4 py-2">Diubah</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </x-slot:header>
                <x-slot:body>
                    @foreach ($data as $index => $user)
                        <tr class="hover:bg-rose-50">
                            <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 text-center">{{ $user->username }}</td>
                            <td class="px-4 py-2 text-center">{{ $user->name }}</td>
                            <td class="px-4 py-2 text-center">{{ $user->created_at }}</td>
                            <td class="px-4 py-2 text-center">{{ $user->updated_at }}</td>
                            <td class="text-lg text-center">
                                <div class="flex lg:flex-row flex-col justify-center gap-1 text-lg">
                                    <a href="" class="text-rose-50 p-1 bg-amber-400 cursor-pointer shadow-md duration-100 hover:translate-y-1">
                                        <i class="ph-fill ph-pencil-line"></i>
                                    </a>
                                    <a href="" class="text-rose-50 p-1 bg-rose-600 cursor-pointer shadow-md duration-100 hover:translate-y-1">
                                        <i class="ph-fill ph-trash-simple"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </x-slot:body>
            </x-dashboard.tabel>
        </div>
    </section>
</x-layouts.dashboard>
