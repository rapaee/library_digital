<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-200">
    <div class="flex fixed">
        <div class="bg-gray-900 text-white w-64 h-screen p-4">
            <div class="flex items-center mb-8">
                <i class="fas fa-book-open text-blue-500 text-2xl mr-2"></i>
                <span class="text-xl font-semibold">Admin</span>
            </div>
            <ul>
                <li class="mb-4">
                    <a href="{{ route('dashboardAdmin') }}" class="flex  bg-gray-700 items-center p-2 rounded">
                       
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('buku') }}" class="flex items-center p-2">
                        
                        <span>Data Buku</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center p-2">
                     
                        <span>Peminjaman</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center p-2">
                       
                        <span>Report</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center p-2">
                     
                        <span>Settings</span>
                    </a>
                </li>
                <li class="mb-4">
                    <form method="POST" action="{{ route('logout') }}" class="flex items-center p-2" onclick="this.closest('form').submit();">
                        @csrf
                        
                        <span>Log out</span>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
<div class="flex-1 p-10">
    @yield('navbar_admin')
</div>