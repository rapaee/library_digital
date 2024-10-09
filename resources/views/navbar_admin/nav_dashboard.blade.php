<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-gray-100 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="flex items-center" href="#">
            <img src="{{ asset('img/icon.png') }}" alt="" width="80" height="60">
        </a>
        <nav class="flex space-x-4">
            <a class="text-gray-900 underline hover:text-gray-600 font-semibold" href="{{ route('dashboardAdmin') }}">Dashboard</a>
            <a class="text-gray-900 hover:text-gray-600 font-semibold" href="#">Link</a>
            <a class="text-gray-900 hover:text-gray-600 font-semibold" href="#">Link</a>
        </nav>
    </div>
</nav>

@yield('navbar_admin')
