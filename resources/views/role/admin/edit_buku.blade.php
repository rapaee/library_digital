@extends('navbar_admin.nav_buku')

@section('navbar_admin')
<div class="container mx-auto ml-24">
    <h2 class="text-2xl font-bold mb-4 ml-36">Edit Buku </h2>
    
    @if(session('success'))
        <div class="alert alert-success mb-4 bg-green-100 text-green-800 p-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger mb-4 bg-red-100 text-red-800 p-4 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('update.buku', $buku->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ml-36">
        @csrf
        @method('PUT')

        <div class="form-group mb-4">
            <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul Buku</label>
            <input type="text" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="judul" name="judul" value="{{ old('judul', $buku->judul) }}" required>
            @error('judul')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
            <input type="text" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="penulis" name="penulis" value="{{ old('penulis', $buku->penulis) }}" required>
            @error('penulis')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="penerbit" class="block text-gray-700 text-sm font-bold mb-2">Penerbit</label>
            <input type="text" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="penerbit" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" required>
            @error('penerbit')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="kode_buku" class="block text-gray-700 text-sm font-bold mb-2">Kode Buku</label>
            <input type="number" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="kode_buku" name="kode_buku" value="{{ old('kode_buku', $buku->kode_buku) }}" required>
            @error('kode_buku')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="id_genre" class="block text-gray-700 text-sm font-bold mb-2">Genre</label>
            <select class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="id_genre" name="id_genre" required>
                <option value="" disabled>Pilih Genre</option>
                @foreach($genre as $g)
                    <option value="{{ $g->id }}" {{ $g->id == old('id_genre', $buku->id_genre) ? 'selected' : '' }}>
                        {{ $g->genre }}
                    </option>
                @endforeach
            </select>
            @error('id_genre')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
            <input type="number" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="stok" name="stok" value="{{ old('stok', $buku->stok) }}" required>
            @error('stok')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar</label>

            {{-- Menampilkan gambar yang sudah ada --}}
            @if($buku->gambar)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $buku->gambar) }}" alt="Gambar Buku" class="w-32 h-48 object-cover">
                </div>
            @endif

            <input type="file" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="gambar" name="gambar" accept="image/*">
            @error('gambar')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>        

        <button type="submit" value="Update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 flex justify-end ml-auto rounded">Submit</button>
    </form>
</div>
@endsection
