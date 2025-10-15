<x-layouts.dashboard :title="$title">
    <section class="lg:w-[720px] md:w-[540px] w-screen p-2 bg-slate-50 border-2 border-rose-800 shadow-lg">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="border-2 border-rose-800 p-2 lg:w-1/2 w-[265px] bg-rose-100 shadow-md">
                <p class="text-rose-700 text-center font-bold">
                    {{ $errors }}
                </p>
            </div>
            @endforeach
        @endif

        @if ($mode == 'student')
        <h1 class="font-bold text-xl text-rose-800">Tambah Mahasiswa</h1>

        <div  class="bg-rose-800 h-0.5 my-1"></div>

        <form action="{{ route('student.store') }}" method="POST" class="flex flex-col gap-2">
            @csrf

            <label class="font-semibold text-rose-800" for="nim">NIM</label>
            <input type="number" name="nim" placeholder="Masukkan Nim" min="0"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100"
                value="{{ old('nim') }}"/>

            <label class="font-semibold text-rose-800" for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100"
                value="{{ old('nama') }}"/>

            <label class="font-semibold text-rose-800" for="kelas">Kelas</label>
            <input type="text" name="kelas" placeholder="Masukkan Kelas"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100"
                value="{{ old('kelas') }}"/>

            <label class="font-semibold text-rose-800" for="angkatan">Angkatan</label>
            <input type="number" name="angkatan" placeholder="Masukkan Angkatan" min="0"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100"
                value="{{ old('angkatan') }}"/>

            <label class="font-semibold text-rose-800" for="lecturer_id">Dosen Pembimbing</label>
            <select name="lecturer_id" id="lecturer_id"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100">
                <option value="" selected disabled>Pilih Dosen</option>
                @foreach ($lecturer as $d)
                    <option value="{{ $d->id }}" {{ old('lecturer_id') == $d->id ? 'selected' : '' }}>
                        {{ $d->name }}
                    </option>
                @endforeach
            </select>

            <div class="flex justify-end">
                <button type="submit"
                    class="p-1 px-3 bg-rose-800 shadow-lg text-rose-50 border-2 border-rose-800 cursor-pointer hover:-translate-x-1 duration-100">
                    Submit
                </button>
            </div>
        </form>
        @endif

        @if ($mode == 'lecturer')
        <h1 class="font-bold text-xl text-rose-800">Tambah Dosen</h1>

        <div  class="bg-rose-800 h-0.5 my-1"></div>

        <form action="{{ route('lecturer.store') }}" method="POST" class="flex flex-col gap-2">
            @csrf

            <label class="font-semibold text-rose-800" for="nip">NIP</label>
            <input type="number" name="nip" placeholder="Masukkan NIP" min="0"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100"
                value="{{ old('nip') }}"/>

            <label class="font-semibold text-rose-800" for="name">Nama</label>
            <input type="text" name="name" placeholder="Masukkan Nama"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100"
                value="{{ old('nama') }}"/>

            <label class="font-semibold text-rose-800" for="email">Email</label>
            <input type="email" name="email" placeholder="Masukkan Email" min="0"
                class="w-full p-2 bg-slate-50 outline-2 outline-rose-800 focus:outline-rose-400 duration-100"
                value="{{ old('email') }}"/>

            <div class="flex justify-end">
                <button type="submit"
                    class="p-1 px-3 bg-rose-800 shadow-lg text-rose-50 border-2 border-rose-800 cursor-pointer hover:-translate-x-1 duration-100">
                    Submit
                </button>
            </div>
        </form>
        @endif
    </section>
</x-layouts.dashboard>
