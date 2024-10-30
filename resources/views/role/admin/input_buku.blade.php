@extends('navbar_admin.nav_dashboard')

@section('navbar_admin')
<div class="container mx-auto ml-24">
    <h2 class="text-2xl font-bold mb-4 ml-36">Tambah Buku Baru</h2>
    
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

    <form action="{{ route('input_buku') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ml-36">
        @csrf
        <div class="form-group mb-4">
            <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul Buku</label>
            <input type="text" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Masukan Judul Buku Anda" required>
            @error('judul')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
            <input type="text" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="penulis" name="penulis" value="{{ old('penulis') }}" placeholder="Masukan Penulis Anda" required>
            @error('penulis')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="penerbit" class="block text-gray-700 text-sm font-bold mb-2">Penerbit</label>
            <input type="text" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="penerbit" name="penerbit" value="{{ old('penerbit') }}" placeholder="Masukan Penerbit Anda" required>
            @error('penerbit')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="kode_buku" class="block text-gray-700 text-sm font-bold mb-2">Kode Buku</label>
            <input type="number" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="kode_buku" name="kode_buku" placeholder="Masukan Code Buku Anda" value="{{ old('kode_buku') }}" required>
            @error('kode_buku')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="id_genre" class="block text-gray-700 text-sm font-bold mb-2">Genre</label>
            <select class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="id_genre" name="id_genre" required>
                <option value="" disabled selected>Pilih Genre</option>
                @foreach($genre as $g)
                    <option value="{{ $g->id }}">{{ $g->genre }}</option>
                @endforeach
            </select>
            @error('id_genre')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
            <input type="number" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="stok" name="stok" value="{{ old('stok') }}" placeholder="Masukan Stok Anda" required>
            @error('stok')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar</label>
            <input type="file" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="gambar" name="gambar" accept="image/*" required>
            @error('gambar')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>    

        <div class="form-group mb-4">
            <label for="sinopsis" class="block text-gray-700 text-sm font-bold mb-2">Sinopsis</label>
            <input type="text" class="form-control border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500" id="sinopsis" name="sinopsis" value="{{ old('sinopsis') }}" placeholder="Masukan Sinopsis Anda" required>
            @error('sinopsis')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

       <div class="flex">
        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 flex justify-end ml-[1135px] rounded">
            <a href="{{ route('buku') }}">Kembali</a>
        </button>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 flex justify-end ml-auto rounded">Simpan</button>
       </div>
    </form>
</div>
@endsection
