<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'buku';

    protected $fillable = 
    [
        'judul',
        'penulis',
        'penerbit',
        'kode_buku',
        'id_genre',
        'stok',
        'gambar',
    ];
    public function genre()
    {
        return $this->belongsTo(genre::class, 'id_genre');
    }
}
