<x-layouts.app :title="'Beranda'">
    <section class="lg:w-[720px] md:w-[540px] h-[540px] w-screen px-2 pb-2 bg-slate-50 border-2 border-rose-800 shadow-lg overflow-y-scroll">
        <div class="flex flex-col gap-2 pt-1 sticky top-0 z-10 bg-inherit">
            <h1 class="font-bold text-xl text-rose-800">Mahasiswa</h1>
            <form method="GET" action="{{ route('welcome') }}" class="mb-2 flex gap-2">
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari mahasiswa..." 
                    class="p-2 w-full outline-2 outline-rose-800 focus:outline-rose-400 duration-100">
                <button type="submit" class="bg-rose-700 text-white font-semibold px-4 py-2 cursor-pointer duration-100 hover:translate-y-1">Cari</button>
            </form>
        </div>
        <div class="grid lg:grid-cols-5 md:grid-cols-4 grid-cols-3 font-medium space-y-2 text-[#2A2622] text-xs mt-2">
            @foreach ($data as $data)
                <x-avatar :src="'https://upload.wikimedia.org/wikipedia/commons/2/2c/Default_pfp.svg'">
                    <p>{{ $data['nim'] }}</h1>
                    <p>{{ $data['nama'] }}</h1>
                </x-avatar>
            @endforeach
        </div>
    </section>
</x-layouts.app>
