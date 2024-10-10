<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\buku;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function dashboardLibrary(){
        $new_product = buku::with('genre')->get(); // Pastikan model dan relasi benar
        return view('role.user.library ', compact('new_product'));
    }
}
