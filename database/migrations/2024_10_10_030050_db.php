<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabel genre
        Schema::create('genre', function (Blueprint $table) {
            $table->id();
            $table->string('genre');
            $table->timestamps();
        });


        // Tabel buku
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('kode_buku');
            $table->foreignId('id_genre')->constrained('genre')->onDelete('cascade');
            $table->integer('stok');
            $table->string('gambar');
            $table->string('sinopsis');
            $table->timestamps();
        });

        // Tabel peminjaman
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users')->onDelete('cascade');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->timestamps();
        });

        // Tabel detail_peminjaman
        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_peminjaman')->constrained('peminjaman')->onDelete('cascade');
            $table->foreignId('id_buku')->constrained('buku')->onDelete('cascade');
            $table->string('status');
            $table->timestamps();
        });

        // Tabel nota_peminjaman
        Schema::create('nota_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku')->constrained('buku')->onDelete('cascade');
            $table->foreignId('id_peminjaman')->constrained('peminjaman')->onDelete('cascade');
            $table->foreignId('id_detail_peminjaman')->constrained('detail_peminjaman')->onDelete('cascade');
            $table->foreignId('id_users')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_peminjaman');
        Schema::dropIfExists('detail_peminjaman');
        Schema::dropIfExists('peminjaman');
        Schema::dropIfExists('bukus');
        Schema::dropIfExists('genres');
    }
};