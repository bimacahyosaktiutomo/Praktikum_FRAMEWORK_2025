<div class="hidden md:block bg-slate-50 p-4 font-semibold text-rose-800 w-fit h-80 shadow-lg border-r-2 border-y-2 border-rose-800">
    <ul class="flex flex-col gap-3 text-sm">
        <li>
            <a href="{{ route('dashboard.students') }}"
                class="flex items-center gap-3 px-3 py-2 border-2 border-rose-800 transition ease-in-out duration-100 hover:translate-x-1
                        {{ request()->routeIs('dashboard.students') ? 'bg-rose-800 text-rose-50 ' : 'hover:bg-rose-100 hover:text-rose-800' }}">
                <span>Mahasiswa</span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.lecturers') }}"
                class="flex items-center gap-3 px-3 py-2 border-2 border-rose-800 transition ease-in-out duration-100 hover:translate-x-1
                        {{ request()->routeIs('dashboard.lecturers') ? 'bg-rose-800 text-rose-50 ' : 'hover:bg-rose-100 hover:text-rose-800' }}">
                <span>Dosen</span>
            </a>
        </li>

        {{-- <li>
            <a href="{{ route('dashboard.users') }}"
                class="flex items-center gap-3 px-3 py-2 border-2 border-rose-800 transition ease-in-out duration-100 hover:translate-x-1
                        {{ request()->routeIs('dashboard.users') ? 'bg-rose-800 text-rose-50 ' : 'hover:bg-rose-100 hover:text-rose-800' }}">
                <span>User</span>
            </a>
        </li> --}}
    </ul>
</div>

<div class="fixed bottom-0 left-0 w-full bg-slate-50 border-t-2 border-rose-800 shadow-inner md:hidden">
    <ul class="flex justify-around items-center text-sm font-semibold text-rose-800 divide-x-2 divide-rose-800">
        <li class="flex-1 text-center">
            <a href="{{ route('dashboard.students') }}"
                class="flex flex-col items-center justify-center py-2 transition ease-in-out duration-300
                        {{ request()->routeIs('dashboard.students') ? 'text-rose-50 bg-rose-800' : 'hover:bg-rose-100 hover:text-rose-800' }}">
                <span>Mahasiswa</span>
            </a>
        </li>
        <li class="flex-1 text-center">
            <a href="{{ route('dashboard.lecturers') }}"
                class="flex flex-col items-center justify-center py-2 transition ease-in-out duration-300
                        {{ request()->routeIs('dashboard.lecturers') ? 'text-rose-50 bg-rose-800' : 'hover:bg-rose-100 hover:text-rose-800' }}">
                <span>Dosen</span>
            </a>
        </li>

        {{-- <li class="flex-1 text-center">
            <a href="{{ route('dashboard.users') }}"
                class="flex flex-col items-center justify-center py-2 transition ease-in-out duration-300
                        {{ request()->routeIs('dashboard.users') ? 'text-rose-50 bg-rose-800' : 'hover:bg-rose-100 hover:text-rose-800' }}">
                <span>User</span> --}}
            </a>
        </li>
    </ul>
</div>
