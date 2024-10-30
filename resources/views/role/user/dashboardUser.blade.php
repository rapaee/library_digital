{{-- resources/views/gallery.blade.php --}}
@extends('navbar_user.nav_dashboard')
@section('navbar_user')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css') <!-- Pastikan Anda sudah mengimpor Tailwind CSS -->
</head>
<body class="bg-gray-100 p-5">
    <!-- Header -->
    <div class="bg-yellow-500 text-white p-6 rounded-lg flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold">Let's Go</h1>
            <p>Reading books in space? Imagine where your child will go with a library card.</p>
            <a href="#" class="mt-4 inline-block text-blue-500 hover:underline">Learn more</a>
        </div>
        <div>
            <img src="{{ asset('gambar/children.jpg') }}" alt="My Image" class="w-32 h-32 object-cover rounded-lg">
        </div>
    </div>

    <!-- Featured Section -->
    <section class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Featured</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Card 1 -->
            @if (!empty($book) && $book->count() > 0)
            @foreach ($book as $item)
                <a href="{{ route('show', $item->id) }}" class="bg-white p-4 rounded-lg shadow-md">
                    <div>
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Real Image" class="w-full h-auto">
                        <h3 class="font-bold text-lg mb-2">Special Collections</h3>
                        <p class="text-sm">Preserving "dummy books" of Harry the Dirty Dog.</p>
                    </div>
                </a>
            @endforeach
            @else
            <p>Tidak Ada Data Buku Ditemukan</p>
            @endif

           
        </div>
    </section>

    <main class="container mx-auto py-8 px-4">
        <!-- Section: Upcoming Programs -->
        <section class="bg-white p-6 rounded-lg shadow-lg mb-4">
            <h2 class="text-3xl font-bold mb-6">Upcoming Programs</h2>
    
            <!-- Program Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Large Image with 4 people -->
                <div class="md:col-span-1">
                    <div class="relative">
                        <img src="{{ asset('gambar/perpus2.jpg') }}" alt="Salon Series Speakers" class="rounded-lg w-full h-4/6 object-cover">
                        <div class="absolute inset-0 bg-white-800 bg-opacity-50 rounded-lg"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-xl font-semibold">Salon Series</h3>
                            <p>Connect and engage with Canadian and international authors, artists, and thinkers.</p>
                        </div>
                    </div>
                </div>
    
                <!-- Maud's World Program -->
                @if (!empty($book) && $book->count() > 0)
                @foreach ($book as $item)
                @if ($item->id == 1)  {{-- Tambahkan kondisi ini --}}
                    <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Maud's World" class="rounded-lg mb-2" style="width: 200px">
                        <h4 class="text-xl font-bold mb-2">{{$item->judul}}</h4>
                        <p class=" mb-2">Penulis: {{ $item->penulis }}</p>
                        <p class="text-gray-700">Penerbit: {{ $item->penerbit }}</p>
                        <p class="text-gray-600">Synopsis: {{$item->sinopsis}}</p>
                    </div>
                @endif
                @endforeach
                @else
                    <p>Tidak Ada Data Buku Ditemukan</p>
                @endif

                @if (!empty($book) && $book->count() > 0)
                @foreach ($book as $item)
                @if ($item->id == 2)  {{-- Tambahkan kondisi ini --}}
                    <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Maud's World" class="rounded-lg mb-2" style="width: 200px">
                        <h4 class="text-xl font-bold mb-2">{{$item->judul}}</h4>
                        <p class="text-sm mb-2">Mon Sep 09, 2024 - Sun Dec 01, 2024</p>
                        <p class="text-gray-700">Publisher: Pastel Books</p>
                        <p class="text-gray-600">Synopsis: kisah cinta remaja antara Milea dan Dilan, seorang anak geng motor yang nakal namun romantis. Dengan gaya unik dan penuh kejutan, Dilan berhasil menarik perhatian Milea, meski hubungan mereka diwarnai konflik dan tantangan masa muda.</p>
                    </div>
                @endif
                @endforeach
                @else
                    <p>Tidak Ada Data Buku Ditemukan</p>
                @endif

                @if (!empty($book) && $book->count() > 0)
                @foreach ($book as $item)
                @if ($item->id == 3)  {{-- Tambahkan kondisi ini --}}
                    <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Maud's World" class="rounded-lg mb-2" style="width: 200px">
                        <h4 class="text-xl font-bold mb-2">{{$item->judul}}</h4>
                        <p class="text-sm mb-2">Mon Sep 09, 2024 - Sun Dec 01, 2024</p>
                        <p class="text-gray-700">Publisher: Pastel Books</p>
                        <p class="text-gray-600">Synopsis: {{$item->sinopsis}}</p>
                    </div>
                @endif
                @endforeach
                @else
                    <p>Tidak Ada Data Buku Ditemukan</p>
                @endif

            </div>
        </section>
        <!-- Footer -->


</body>
</html>
@endsection
