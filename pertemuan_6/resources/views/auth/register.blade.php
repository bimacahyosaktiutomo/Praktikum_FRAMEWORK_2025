<x-layouts.app :title="'Register'">
    <section class="lg:w-[720px] md:w-[540px] h-[540px] w-screen flex flex-col justify-center items-center p-2 bg-slate-50 border-2 border-rose-800 shadow-lg">
        @if ($errors->any())
            <div class="border-2 border-rose-800 p-2 lg:w-1/2 w-[265px] bg-rose-100 shadow-md">
                <p class="text-rose-700 text-center font-bold">
                    {{ $errors->first() }}
                </p>
            </div>
        @endif

        @if (session('success'))
            <div class="border-2 border-green-700 p-2 lg:w-1/2 w-[265px] bg-green-100 shadow-md">
                <p class="text-green-700 text-center font-bold">
                    {{ session('success') }}
                </p>
            </div>
        @endif

        <div class="bg-rose-800 m-4 p-2 shadow-md lg:w-1/2 w-[265px]">
            <h1 class="font-bold text-xl text-rose-50 mb-2">Register</h1>

            {{-- route nya jangan lipa dimasukin --}}
            <form action="{{ route('register.post') }}" method="POST" class="relative text-sm space-y-1.5 font-semibold">
                @csrf

                {{-- NAME --}}
                @error('name')
                    <p class="text-xs text-rose-50 mt-1">{{ $message }}</p>
                @enderror
                <div class="relative">
                    <i class="ph-fill ph-identification-card absolute left-3 top-1/2 -translate-y-1/2 text-rose-800 text-lg"></i>
                    <input type="text" name="name" placeholder="Masukkan nama lengkap"
                        class="w-full pl-10 pr-3 py-2 bg-slate-50 focus:outline-none"
                        value="{{ old('name') }}" />
                </div>

                {{-- USERNAME --}}
                @error('username')
                    <p class="text-xs text-rose-50 mt-1">{{ $message }}</p>
                @enderror
                <div class="relative">
                    <i class="ph-fill ph-user-square absolute left-3 top-1/2 -translate-y-1/2 text-rose-800 text-lg"></i>
                    <input type="text" name="username" placeholder="Masukkan username"
                        class="w-full pl-10 pr-3 py-2 bg-slate-50 focus:outline-none"
                        value="{{ old('username') }}" />
                </div>

                {{-- PASSWORD --}}
                @error('password')
                    <p class="text-xs text-rose-50 mt-1">{{ $message }}</p>
                @enderror
                <div class="relative">
                    <i class="ph-fill ph-key absolute left-3 top-1/2 -translate-y-1/2 text-rose-800 text-lg"></i>
                    <input type="password" id="password" name="password" placeholder="Masukkan password"
                        class="w-full pl-10 pr-10 py-2 bg-slate-50 focus:outline-none" />
                    <button type="button" id="togglePassword"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-rose-800 hover:text-rose-700 cursor-pointer">
                        <i class="ph-fill ph-eye"></i>
                    </button>
                </div>

                {{-- KONFIRMASI PASSWORD --}}
                @error('password')
                    <p class="text-xs text-rose-50 mt-1">{{ $message }}</p>
                @enderror
                <div class="relative">
                    <i class="ph-fill ph-lock absolute left-3 top-1/2 -translate-y-1/2 text-rose-800 text-lg"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Konfirmasi password"
                        class="w-full pl-10 pr-10 py-2 bg-slate-50 focus:outline-none" />
                    <button type="button" id="toggleConPassword"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-rose-800 hover:text-rose-700 cursor-pointer">
                        <i class="ph-fill ph-eye"></i>
                    </button>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="p-1 px-3 bg-white shadow-lg hover:bg-rose-100 text-rose-800 border-2 border-rose-800 cursor-pointer hover:-translate-x-1 duration-100">
                        Register
                    </button>
                </div>
            </form>

            <p class="text-rose-50 mt-4 text-sm text-center">
                Sudah punya akun? <a class="hover:underline font-bold" href="{{ route('login') }}">Login</a>
            </p>
        </div>
    </section>
</x-layouts.app>
<script>
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const icon = togglePassword.querySelector('i');

    togglePassword.addEventListener('click', () => {
        const isHidden = passwordInput.type === 'password';
        passwordInput.type = isHidden ? 'text' : 'password';
        icon.classList.toggle('ph-eye');
        icon.classList.toggle('ph-eye-closed');
    });

    const passwordConInput = document.getElementById('password_confirmation');
    const toggleConPassword = document.getElementById('toggleConPassword');
    const iconCon = toggleConPassword.querySelector('i');

    toggleConPassword.addEventListener('click', () => {
        const isHidden = passwordConInput.type === 'password';
        passwordConInput.type = isHidden ? 'text' : 'password';
        iconCon.classList.toggle('ph-eye');
        iconCon.classList.toggle('ph-eye-closed');
    });
</script>
