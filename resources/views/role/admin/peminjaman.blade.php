<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman</title>
</head>
<body>
    @extends('navbar_admin.nav_peminjaman')
    @section('navbar_admin')
        <div class="ml-64">
            <h1>Data Peminjaman</h1>
            <button class="bg-sky-500 text-white p-2  rounded flex ml-auto justify-end mb-4">
                <a href="">Tambah</a>
            </button>
             <!-- Date Picker with Auto Submit -->
             <div class="flex justify-center mb-4">
                <form id="filterForm" action="" method="GET" class="flex w-full">
                    <input type="date" name="tanggal" 
                        class="border border-gray-300 p-2 rounded-md w-full bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out" 
                        onchange="this.form.submit()">
                </form>
            </div>
            <table class="w-full border">
                <thead>
                    <tr>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">S/N</th>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Nama</th>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Judul</th>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Kode Buku</th>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Tanggal Pinjam</th>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Tanggal Kembali</th>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Status</th>
                        <th class="px-2 py-3 border border-gray-300 text-center text-sm font-semibold text-gray-600 ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @if (!empty($new_product) && $new_product->count() > 0)
                    @foreach ($new_product as $item)
                    <tr>
                        <td class="text-center py-3 border border-gray-300">{{ $loop->iteration }}</td>
                        <td class="text-center py-3 border border-gray-300">{{ $item->judul }}</td>
                        <td class="text-center py-3 border border-gray-300">{{ $item->penulis }}</td>
                        <td class="text-center py-3 border border-gray-300">{{ $item->penerbit }}</td>
                        <td class="text-center py-3 border border-gray-300">{{ $item->kode_buku }}</td>
                        <td class="text-center py-3 border border-gray-300">{{ $item->genre->genre }}</td>
                        <td class="text-center py-3 border border-gray-300">{{ $item->stok }}</td>
                        <td class="flex justify-center py-3 border border-gray-300">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="max-width: 50px; max-height: 50px;" class="">
                        </td>
                        <td class="text-center py-3 border border-gray-300">
                            <div class="flex justify-center space-x-2">
                                <form action="{{ route('delete.buku', $item->id) }}" method="post" class="inline-flex items-center delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" class="text-red-500 hover:text-red-700 flex items-center delete-button">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('edit.buku', $item->id) }}" class="text-gray-600 hover:text-gray-700 flex items-center edit-button">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="9" class="text-center py-3 border border-gray-300">Tidak ada buku ditemukan!</td>
                    </tr>
                    @endif --}}
                </tbody>
                </table>
        </div>
    @endsection
</body>
</html>