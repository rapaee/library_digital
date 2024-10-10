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
   <div class=" relative mt-24 text-wrap ml-10">
    <h1 class="text-4xl font-bold mb-4">WELCOME TO ADMIN</h1>
    <p class="justify-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Nesciunt id recusandae cupiditate accusamus quo voluptate repellat aperiam consequatur. <br> Veniam quas dignissimos ducimus, accusamus labore voluptates. At modi eius possimus dolorem.</p>
   </div>
   <!-- Gambar utama, responsif -->
   <div class="flex justify-end mt-16">
    <img src="{{ asset('img/gambar_dashboard.png') }}" alt="" class="w-full max-w-lg md:max-w-md lg:max-w-lg">
</div>

    @endsection
</body>
</html>