<x-layouts.app :title="'Beranda'">
    <section class="lg:w-[720px] md:w-[540px] h-[540px] w-screen px-2 pb-2 bg-slate-50 border-2 border-rose-800 shadow-lg overflow-y-scroll">
        <h1 class="font-bold text-xl text-rose-800 py-2 sticky top-0 z-10 bg-inherit">Mahasiswa</h1>
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
