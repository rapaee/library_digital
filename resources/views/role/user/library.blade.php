<!-- Template Blade untuk Galeri Buku -->
@extends('navbar_user.nav_dashboard')
@section('navbar_user')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    @vite('resources/css/app.css') <!-- Pastikan Tailwind CSS sudah terpasang -->
</head>
<body class="bg-gray-100 p-5">
    <h1 class="text-center mb-5 text-2xl font-bold">Galeri</h1>
    <div class="gallery flex flex-col items-start ml-10 gap-5 px-3"> <!-- Flex kolom untuk genre -->

    @if (!empty($new_product) && $new_product->count() > 0)
        @php
            $currentGenre = null; // Inisialisasi genre saat ini
        @endphp

        @foreach ($new_product as $item)
            @if ($currentGenre !== $item->genre->genre) <!-- Cek jika genre berubah -->
                @if ($currentGenre !== null)
                    </div> <!-- Penutup untuk genre sebelumnya -->
                @endif
                @php
                    $currentGenre = $item->genre->genre; // Set genre saat ini
                @endphp
                <h1 class="text-center text-xl font-semibold mt-5">{{ $currentGenre }}</h1> <!-- Tampilkan nama genre -->
                <div class="flex flex-wrap justify-center gap-5 p-5"> <!-- Container untuk buku dalam genre -->
            @endif

            <!-- Link ke halaman detail buku dengan ID -->
            <a href="{{ route('show', $item->id) }}" class="rounded-lg bg-white shadow-lg hover:shadow-xl transition w-60"> <!-- Kartu buku -->
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-64 object-cover border-2 border-gray-300 rounded-t-lg"> <!-- Gambar sampul -->
                <div class="p-4">
                    <p class="font-semibold text-center">{{ $item->judul }}</p>
                    <p class="text-sm text-gray-600 text-center mt-1"><strong>Penulis:</strong> {{ $item->penulis }}</p>
                    <p class="text-sm text-gray-600 text-center"><strong>Penerbit:</strong> {{ $item->penerbit }}</p>
                </div>
            </a>
        @endforeach
        
        @if ($currentGenre !== null)
            </div> <!-- Penutup untuk genre terakhir -->
        @endif

    @else
        <p class="text-center text-gray-500 mt-5">Tidak ada produk ditemukan.</p>
    @endif

</div>
</body>
</html>
@endsection
