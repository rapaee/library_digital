<script src="https://cdn.tailwindcss.com"></script>

<nav class="bg-gray-100 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="flex items-center" href="#">
            <img src="{{ asset('img/icon.png') }}" alt="" width="80" height="60">
        </a>

        <!-- Menu burger untuk mobile -->
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-8 h-8 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Nav links -->
        <nav id="menu" class="hidden md:flex space-x-4">
            <a class="text-gray-900 underline hover:text-gray-400 font-semibold" href="{{ route('dashboardAdmin') }}">Dashboard</a>
            <a class="text-gray-900 hover:text-gray-400 font-semibold" href="#">Link</a>
            <a class="text-gray-900 hover:text-gray-400 font-semibold" href="#">Link</a>
            <a class="text-gray-900 hover:text-gray-400 font-semibold">
                <form method="POST" action="{{ route('logout') }}" class="block cursor-pointer" onclick="this.closest('form').submit();">
                    @csrf
                    <div class="" onclick="this.closest('form').submit();">
                        <li class="list-none">
                            Logout
                        </li>
                    </div>
                </form>
            </a>
        </nav>
    </div>

    <!-- Menu dropdown untuk tampilan mobile -->
    <div id="mobile-menu" class="md:hidden hidden space-y-2 mt-4">
        <a class="block text-gray-900 underline hover:text-gray-400 font-semibold" href="{{ route('dashboardAdmin') }}">Dashboard</a>
        <a class="block text-gray-900 hover:text-gray-400 font-semibold" href="#">Link</a>
        <a class="block text-gray-900 hover:text-gray-400 font-semibold" href="#">Link</a>
        <a class="block text-gray-900 hover:text-gray-400 font-semibold">
            <form method="POST" action="{{ route('logout') }}" class="block cursor-pointer" onclick="this.closest('form').submit();">
                @csrf
                <div class="" onclick="this.closest('form').submit();">
                    <li class="list-none">
                        Logout
                    </li>
                </div>
            </form>
        </a>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

@yield('navbar_admin')
