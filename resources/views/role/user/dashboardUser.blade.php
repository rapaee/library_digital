<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        .navbar {
            background-color: yellow;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
        }

        .navbar-logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-logo img {
            height: 40px;
            width: 40px;
        }

        .navbar-menu {
            display: flex;
            gap: 20px;
        }

        .navbar-menu a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 25px;
        }

        .navbar-menu a:hover {
            color: gray;
        }

         /* Image Styles */
         .header-image {
            width: 100%;
            height: auto;
         }

        /* Logout Button Styles */
        .logout-btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-weight: bold;
            font-size: 25px;
            color: black;
        }

        .logout-btn:hover {
            color: gray;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-logo">
            {{-- <img src="logo.png" alt="Library Logo"> <!-- Replace with your logo --> --}}
        </div>
        <div class="navbar-menu">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Library</a>
            <!-- Form Logout di dalam Navbar -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <img src="{{ asset('gambar/header.png') }}" alt="Header Image" class="header-image">
    <!-- Content -->
    <h1>User</h1>

</body>
</html>
