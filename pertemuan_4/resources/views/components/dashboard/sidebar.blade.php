<div class="bg-slate-50 p-2 rounded-r-xl font-semibold text-indigo-600 w-fit h-80 shadow-lg border border-indigo-200">
    <ul class="flex flex-col gap-3 text-sm">
        <li>
            <a href="{{ route('dashboard.students') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition ease-in-out duration-300
                        {{ request()->routeIs('dashboard.students') ? 'bg-indigo-100 text-indigo-800' : 'hover:bg-indigo-100 hover:text-indigo-800' }}">
                <span>Mahasiswa</span>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('dashboard.lecturers') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg transition ease-in-out duration-300
                        {{ request()->routeIs('dashboard.lecturers') ? 'bg-indigo-100 text-indigo-800' : 'hover:bg-indigo-100 hover:text-indigo-800' }}">
                <span>Dosen</span>
            </a>
        </li> --}}
    </ul>
</div>
