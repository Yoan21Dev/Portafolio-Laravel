<nav
    class="relative w-full flex flex-wrap items-center justify-between py-3 bg-orange-300 opacity-70 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg">
    <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
        <div class="container-fluid">
            <a class="text-lg font-bold text-white dark:text-gray-500 "href="#"> Welcome</a>
            @if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-3 sm:block"> --}}
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-lg font-bold text-white dark:text-gray-500 ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-lg font-bold text-white dark:text-gray-500 ">Login</a>
                    @endauth
                {{-- </div> --}}
            @endif
        </div>
    </div>
</nav>
<br>
</nav>
