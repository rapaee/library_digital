{{-- resources/views/gallery.blade.php --}}
@extends('navbar_user.nav_dashboard')
@section('navbar_user')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    @vite('resources/css/app.css') <!-- Pastikan Anda sudah mengimpor Tailwind CSS -->
</head>
<body class="bg-gray-100 p-5">
    <h1 class="text-center mb-5 text-2xl font-bold">Gallery</h1>
    <div class="gallery grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="gallery-item border border-gray-300 rounded-lg p-4 bg-white">
            <img src="{{ asset('images/gambar1.jpg') }}" alt="Gambar 1" class="w-full h-auto border-2 border-gray-300 rounded-lg mb-2">
            <p><strong>Judul Buku:</strong> Buku Pertama<br>
               <strong>Penulis:</strong> Penulis Pertama<br>
               <strong>Penerbit:</strong> Penerbit Pertama<br>
               <strong>Tahun Terbit:</strong> 2021</p>
        </div>
        <div class="gallery-item border border-gray-300 rounded-lg p-4 bg-white">
            <img src="{{ asset('images/gambar2.jpg') }}" alt="Gambar 2" class="w-full h-auto border-2 border-gray-300 rounded-lg mb-2">
            <p><strong>Judul Buku:</strong> Buku Kedua<br>
               <strong>Penulis:</strong> Penulis Kedua<br>
               <strong>Penerbit:</strong> Penerbit Kedua<br>
               <strong>Tahun Terbit:</strong> 2022</p>
        </div>
        <div class="gallery-item border border-gray-300 rounded-lg p-4 bg-white">
            <img src="{{ asset('images/gambar3.jpg') }}" alt="Gambar 3" class="w-full h-auto border-2 border-gray-300 rounded-lg mb-2">
            <p><strong>Judul Buku:</strong> Buku Ketiga<br>
               <strong>Penulis:</strong> Penulis Ketiga<br>
               <strong>Penerbit:</strong> Penerbit Ketiga<br>
               <strong>Tahun Terbit:</strong> 2023</p>
        </div>
        <!-- Tambahkan item galeri lainnya dengan pola yang sama -->
    </div>
</body>
</html>
@endsection
