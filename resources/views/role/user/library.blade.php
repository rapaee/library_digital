{{-- resources/views/gallery.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Warna latar belakang */
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center; /* Pusatkan judul */
            margin-bottom: 20px; /* Jarak bawah judul */
        }
        .gallery {
            display: flex;
            flex-wrap: wrap; /* Agar gambar bisa pindah baris */
            justify-content: center; /* Pusatkan gambar */
            gap: 15px; /* Jarak antara gambar */
        }
        .gallery-item {
            text-align: justify; /* Rata kanan kiri teks deskripsi */
            max-width: 200px; /* Batas lebar untuk item galeri */
            border: 1px solid #ccc; /* Border untuk item galeri (opsional) */
            border-radius: 8px; /* Sudut melengkung (opsional) */
            padding: 10px; /* Jarak dalam untuk item galeri */
            background-color: #fff; /* Warna latar belakang item */
        }
        .gallery img {
            max-width: 100%; /* Gambar akan menyesuaikan lebar */
            height: auto; /* Tinggi otomatis untuk menjaga proporsi */
            border: 2px solid #ccc; /* Border untuk gambar */
            border-radius: 8px; /* Sudut melengkung */
        }
        .gallery-item p {
            margin: 0; /* Menghapus margin untuk konsistensi */
        }
        @media (max-width: 600px) {
            .gallery img {
                flex: 1 1 100%; /* Gambar menjadi 100% pada layar kecil */
            }
        }
    </style>
</head>
<body>
    <h1>Gallery</h1>
    <div class="gallery">
        <div class="gallery-item">
            <img src="{{ asset('images/gambar1.jpg') }}" alt="Gambar 1">
            <p><strong>Judul Buku:</strong> Buku Pertama<br>
               <strong>Penulis:</strong> Penulis Pertama<br>
               <strong>Penerbit:</strong> Penerbit Pertama<br>
               <strong>Tahun Terbit:</strong> 2021</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/gambar2.jpg') }}" alt="Gambar 2">
            <p><strong>Judul Buku:</strong> Buku Kedua<br>
               <strong>Penulis:</strong> Penulis Kedua<br>
               <strong>Penerbit:</strong> Penerbit Kedua<br>
               <strong>Tahun Terbit:</strong> 2022</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/gambar3.jpg') }}" alt="Gambar 3">
            <p><strong>Judul Buku:</strong> Buku Ketiga<br>
               <strong>Penulis:</strong> Penulis Ketiga<br>
               <strong>Penerbit:</strong> Penerbit Ketiga<br>
               <strong>Tahun Terbit:</strong> 2023</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/gambar1.jpg') }}" alt="Gambar 1">
            <p><strong>Judul Buku:</strong> Buku Pertama<br>
               <strong>Penulis:</strong> Penulis Pertama<br>
               <strong>Penerbit:</strong> Penerbit Pertama<br>
               <strong>Tahun Terbit:</strong> 2021</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/gambar2.jpg') }}" alt="Gambar 2">
            <p><strong>Judul Buku:</strong> Buku Kedua<br>
               <strong>Penulis:</strong> Penulis Kedua<br>
               <strong>Penerbit:</strong> Penerbit Kedua<br>
               <strong>Tahun Terbit:</strong> 2022</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/gambar3.jpg') }}" alt="Gambar 3">
            <p><strong>Judul Buku:</strong> Buku Ketiga<br>
               <strong>Penulis:</strong> Penulis Ketiga<br>
               <strong>Penerbit:</strong> Penerbit Ketiga<br>
               <strong>Tahun Terbit:</strong> 2023</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/gambar1.jpg') }}" alt="Gambar 1">
            <p><strong>Judul Buku:</strong> Buku Pertama<br>
               <strong>Penulis:</strong> Penulis Pertama<br>
               <strong>Penerbit:</strong> Penerbit Pertama<br>
               <strong>Tahun Terbit:</strong> 2021</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('images/gambar2.jpg') }}" alt="Gambar 2">
            <p><strong>Judul Buku:</strong> Buku Kedua<br>
               <strong>Penulis:</strong> Penulis Kedua<br>
               <strong>Penerbit:</strong> Penerbit Kedua<br>
               <strong>Tahun Terbit:</strong> 2022</p>
        </div>
    </div>
</body>
</html>
