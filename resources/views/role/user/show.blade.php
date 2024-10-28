<!-- resources/views/books/show.blade.php -->
@extends('navbar_user.nav_dashboard')

@section('navbar_user')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - {{ $book->judul }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-5">
    <div class="container mx-auto max-w-4xl bg-white p-5 rounded-lg shadow-lg mb-10">
        <h1 class="text-center text-3xl font-bold mb-5">{{ $book->judul }}</h1>
        
        <!-- Kontainer untuk Gambar dan Detail Buku -->
        <div class="flex md:flex-row ml-64  gap-5">
            <!-- Gambar Buku -->
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/' . $book->gambar) }}" alt="{{ $book->judul }}" class="w-40 md:w-64 h-auto object-cover border-2 border-gray-300 rounded-lg">
            </div>
            
            <!-- Detail Buku -->
            <div class="text-gray-700 text-lg  ">
                <p class="mb-5"><strong>Penulis:</strong> {{ $book->penulis }}</p>
                <p class="mb-5"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
                <p class="mb-5"><strong>Genre:</strong> {{ $book->genre->genre }}</p>
                <p class="mb-36"><strong>Kode Buku:</strong> {{ $book->kode_buku }}</p>
                
                <!-- Tombol Booking -->
                <a href="" class="bg-green-800 hover:bg-green-700 text-white p-2 rounded">Booking</a>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ url()->previous() }}" class="mt-8 inline-block text-blue-500 hover:underline">Kembali ke Galeri</a>
    </div>
</body>
</html>
@endsection
