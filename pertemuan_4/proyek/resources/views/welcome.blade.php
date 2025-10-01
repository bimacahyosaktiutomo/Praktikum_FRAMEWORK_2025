<x-layouts.app :title="'Beranda'">
    <section class="lg:w-[720px] w-[540px] p-2 bg-slate-50 rounded-xl border border-indigo-100 shadow-lg">
        <h1 class="font-bold text-xl text-indigo-800 mb-2">Mahasiswa</h1>
        <div class="grid lg:grid-cols-5 md:grid-cols-4 grid-cols-3 font-medium space-y-2 text-[#2A2622] text-xs">
            @foreach ($data as $data)
                <x-avatar :src="'https://upload.wikimedia.org/wikipedia/commons/2/2c/Default_pfp.svg'">
                    <p>{{ $data['nim'] }}</h1>
                    <p>{{ $data['nama'] }}</h1>
                </x-avatar>
            @endforeach
        </div>
    </section>
</x-layouts.app>
