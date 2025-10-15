<nav class="flex flex-col items-center bg-slate-50 lg:w-[720px] md:w-[540px] w-screen px-4 py-2 shadow-lg gap-3 text-rose-800 border-b-2 border-x-2 border-rose-800 font-medium">
    <div class="flex justify-between items-center w-full">
        <div class="w-1/3 font-bold">
            <a href="{{ route('welcome') }}" class="inline-block hover:scale-105 duration-100 font-semibold text-rose-800 hover:text-rose-500">Framework</a>
        </div>

        
        <div class="w-1/3 text-right">
            <a href="" class="inline-block hover:scale-105 duration-100 font-semibold text-rose-800 hover:text-rose-500">
                Login
            </a>
        </div>
    </div>


    <ul class="flex gap-2">
        <li>
            <a href="{{ route('welcome') }}"
                class="inline-block duration-100 p-1.5 border-2 border-rose-800 hover:translate-y-0.5
                {{ request()->routeIs('welcome') ? 'bg-rose-800 text-rose-50 ' : 'hover:bg-rose-100' }}">
                Beranda
            </a>
        </li>

        <li>
            <a href="{{ request()->routeIs('dashboard.students', 'dashboard.lecturers') ? '' : route('dashboard.students') }}"
                class="inline-block duration-100 p-1.5 border-2 border-rose-800 hover:translate-y-0.5
                {{ request()->routeIs('dashboard.*') ? 'bg-rose-800 text-rose-50 ' : 'hover:bg-rose-100' }}">
                Dashboard
            </a>
        </li>
    </ul>
</nav>