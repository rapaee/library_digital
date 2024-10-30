<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\buku;
use App\Models\genre;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function bukuAdmin(){
        $new_product = buku::with('genre')->get(); // Pastikan model dan relasi benar
        return view('role.admin.buku', compact('new_product'));
    }
    public function create(){
        $genre = genre::all();
        return view('role.admin.input_buku', compact('genre'));
    }
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'kode_buku' => 'required|numeric',
            'id_genre' => 'required|exists:genre,id',
            'stok' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sinopsis' => 'required|string',
        ]);
    
        try {
            // Menyimpan gambar
            $path = $request->file('gambar')->store('images', 'public'); // Simpan di folder 'public/images'
    
            // Membuat instance produk baru dan menyimpan data
            $new_product = new buku();
            $new_product->judul = $request->judul;
            $new_product->penulis = $request->penulis;
            $new_product->penerbit = $request->penerbit;
            $new_product->kode_buku = $request->kode_buku;
            $new_product->id_genre = $request->id_genre; // Pastikan menggunakan id_genre
            $new_product->stok = $request->stok;
            $new_product->gambar = $path; // Menyimpan path gambar ke database
            $new_product->sinopsis = $request->sinopsis;
            $new_product->save();
    
            // Redirect ke halaman data-barang dengan pesan sukses
            return redirect()->route('buku')->with('success', 'Berhasil menambahkan produk');
        } catch (\Exception $e) {
            // Redirect kembali ke form tambah data dengan pesan error
            return redirect()->route('input_buku')->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
        }
    }
    public function edit($id)
    {
        // Mengambil data buku berdasarkan ID
        $buku = buku::findOrFail($id);
        
        // Mengambil semua genre
        $genre = genre::all();
        
        // Mengembalikan view dengan data buku dan semua genre
        return view('role/admin/edit_buku', compact('genre', 'buku'));
    }
    
       
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'kode_buku' => 'required|numeric',
            'id_genre' => 'required|exists:genre,id',
            'stok' => 'required|numeric',
            'gambar' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // gambar tidak wajib
            'sinopsis' => 'required|string',
        ]);
    
        try {
            // Mengambil data buku berdasarkan ID
            $buku = buku::findOrFail($id);
    
            // Mengupdate data buku
            $buku->judul = $request->judul;
            $buku->penulis = $request->penulis;
            $buku->penerbit = $request->penerbit;
            $buku->kode_buku = $request->kode_buku;
            $buku->id_genre = $request->id_genre; // Pastikan menggunakan id_genre
            $buku->stok = $request->stok;
            $buku->sinopsis = $request->sinopsis;
    
            // Jika ada gambar yang diupload, simpan gambar tersebut
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $path = $gambar->store('images', 'public'); // Simpan di direktori 'storage/images'
                $buku->gambar = $path; // Menyimpan path gambar ke database
            }
    
            $buku->save();
    
            // Redirect ke halaman data-buku dengan pesan sukses
            return redirect()->route('buku')->with('success', 'Berhasil mengupdate buku');
        } catch (\Exception $e) {
            // Redirect kembali ke form dengan pesan error
            return redirect()->route('edit.buku', $id)->with('fail', 'Gagal mengupdate buku: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $buku = buku::find($id);
        if ($buku) {
            $buku->delete();
            return redirect()->route('buku')->with('success', 'Data barang berhasil dihapus');
        } else {
            return redirect()->route('buku')->with('error', 'Data barang tidak ditemukan');
        }
    }
    public function show($id)
{
    $book = buku::findOrFail($id); // Mengambil detail buku berdasarkan ID
    return view('role/user/show', compact('book'));
}

    
}
