<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_peminjaman extends Model
{
    use HasFactory;
    protected $table = 'detail_peminjaman';

    protected $fillable = 
    [
        'id_peminjaman',
        'id_buku',
        'status',
    ];
    public function genre()
    {
        return $this->belongsTo(peminjaman::class, 'id_peminjaman');
        return $this->belongsTo(buku::class, 'id_buku');
    }
}
