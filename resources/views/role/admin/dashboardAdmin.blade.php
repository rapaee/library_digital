<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @extends('navbar_admin.nav_dashboard')
    @section('navbar_admin')
    <h1 class="flex justify-center mt-32">Hello </h1>
   <!-- Gambar utama, responsif -->
   <div class="flex justify-center">
    <img src="{{ asset('img/gambar_dashboard.png') }}" alt="" class="w-full max-w-lg md:max-w-md lg:max-w-lg">
</div>

    @endsection
</body>
</html>