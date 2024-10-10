<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @extends('navbar_admin.nav_buku')
    @section('navbar_admin')
    <h1 class="ml-64">Data Buku</h1>
    <button class="flex justify-end items-end ml-auto  mr-4 bg-slate-800 rounded text-white p-2 mb-4">
        <a href="{{ route('input_buku') }}">
            Tambah Buku
        </a>
    </button>
    <table class="ml-64 w-10/12 bg-white border">
        <thead>
            <tr>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">S/N</th>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Judul</th>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Penulis</th>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Penerbit</th>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Kode Buku</th>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Genre</th>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Stok</th>
                <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($new_product) && $new_product->count() > 0)
            @foreach ($new_product as $item)
            <tr>
                <td class="text-center py-3 border border-gray-300">{{ $loop->iteration }}</td>
                <td class="text-center py-3 border border-gray-300">{{ $item->judul }}</td>
                <td class="text-center py-3 border border-gray-300">{{ $item->penulis }}</td>
                <td class="text-center py-3 border border-gray-300">{{ $item->penerbit }}</td>
                <td class="text-center py-3 border border-gray-300">{{ $item->kode_buku }}</td>
                <td class="text-center py-3 border border-gray-300">{{ $item->genre->genre }}</td>
                <td class="text-center py-3 border border-gray-300">{{ $item->stok }}</td>
                <td class="text-center py-3 border border-gray-300">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" style="max-width: 100px; max-height: 100px;">
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="9" class="text-center py-3 border border-gray-300">Tidak ada buku ditemukan!</td>
            </tr>
            @endif
        </tbody>
        </table>
    @endsection
</body>
</html>