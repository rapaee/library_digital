@extends('navbar_user.nav_dashboard')
@section('navbar_user')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    @vite('resources/css/app.css') <!-- Ensure you have imported Tailwind CSS -->
</head>
<body class="bg-gray-100 p-5">
    <h1 class="text-center mb-5 text-2xl font-bold">Gallery</h1>
    <div class="gallery flex flex-wrap justify-center gap-5 px-3"> <!-- Increased gap for uniform spacing -->
    @if (!empty($new_product) && $new_product->count() > 0)
    <div class="flex flex-wrap justify-center gap-5 p-5"> <!-- Container for the card layout -->
        @foreach ($new_product as $item)
           <a href="">
            <div class="card border border-gray-300 rounded-lg p-4 bg-white w-60"> <!-- Individual card -->
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-64 object-cover border-2 border-gray-300 rounded-lg mb-2"> <!-- Book cover image -->
                
                <p><strong>Judul Buku:</strong> {{ $item->judul }}<br>
                   <strong>Penulis:</strong> {{ $item->penulis }}<br>
                   <strong>Penerbit:</strong> {{ $item->penerbit }}<br>
            </div>
           </a>
        @endforeach
    </div>
    
</div>
@else
    <p class="text-center text-gray-500 mt-5">No products found.</p>
@endif

</body>
</html>
@endsection
