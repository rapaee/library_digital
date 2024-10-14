<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-amber-500 text-white">
        <div class="container mx-auto flex justify-between items-center py-2 px-4">
            <div class="flex items-center space-x-2">
                <div class="text-3xl font-bold">LB:</div>
                <div class="text-lg sm:block">Library Digital</div>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="hover:underline">Sign In</a>
                <a href="#" class="flex items-center space-x-1 hover:underline">
                    <i class="fas fa-user"></i>
                    <span>Your Account</span>
                </a>
                <a href="#" class="hover:underline">Contact Us</a>
                {{-- <a href="#" class="bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700">Donate Now</a> --}}
            </div>
            <button class="block sm:hidden text-white focus:outline-none" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <nav class="bg-amber-400 sm:block" id="navbar">
            <div class="container mx-auto flex justify-between items-center py-2 px-4">
                <a href="{{ route('dashboardUser') }}" class="hover:underline">Dashboard</a>
                <a href="{{ route('library') }}" class="hover:underline">Gallery</a>
                <a href="{{ route('education') }}" class="hover:underline">Education</a>
                <a href="#" class="hover:underline">Locations</a>
                <a href="#" class="hover:underline">Using the Library</a>
                <a href="#" class="hover:underline">Teens</a>
                <a href="#" class="hover:underline">Kids</a>
            </div>
        </nav>
    </header>
    <main class="container mx-auto py-8 px-4">
        <div class="bg-white p-4 rounded shadow">
            <div class="flex items-center space-x-2">
                <input type="text" class="border border-gray-300 p-2 flex-grow" placeholder="Search books, movies, branches, programs & more">
                <button class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-700">Search</button>
                <a href="#" class="text-green-500 hover:underline">Advanced</a>
            </div>
        </div>
    </main>
    <div class="mt-4">
        @yield('navbar_user')
    </div>
   

    <script>
        // Toggle navbar visibility on mobile
        const navToggle = document.getElementById('nav-toggle');
        const navbar = document.getElementById('navbar');

        navToggle.addEventListener('click', () => {
            navbar.classList.toggle('hidden');
        });
    </script>

<footer class="bg-blue-900 text-white w-auto py-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div>
            <h3 class="font-bold mb-4">About the Library</h3>
            <ul>
              <p>Doing Business with the Library</p> 
                <p>Vision, Mission & Values</p>
                <p>Customer Feedback Standards</p>
                <p>History of the Library</p
                <p>Library Board</p>
            </ul>
        </div>
        <div>
            <h3 class="font-bold mb-4">Jobs at the Library</h3>
            <ul>
                <p>Open Data</p>
               <p>Young Voices Magazine</p>
                <p>Library Policies & Terms of Use</p>
            </ul>
        </div>
        <div>
            <h3 class="font-bold mb-4">Media & News</h3>
            <ul>
                <p>Accessible Collections</p>
                <p>Accessible Collections</p>
            </ul>
        </div>
        <div>
            <h3 class="font-bold mb-4">Accessibility</h3>
            <ul>
                <p></p>
                <p></p>
                <p></p>
            </ul>
        </div>
        <div>
            <h3 class="font-bold mb-4">Support Your Library</h3>
            <ul>
                <p></p>
                <p></p>
                <p></p>
            </ul>
        </div>
    </div>
    <div class="container mx-auto text-center mt-8">
        <p>All content © 2024 Toronto Public Library. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
