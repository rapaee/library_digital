<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';

    protected $fillable = 
    [
        'id_users',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];
    public function genre()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
