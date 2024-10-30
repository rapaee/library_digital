<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\buku;
use Illuminate\Http\Request;

class libraryController extends Controller
{

    public function dashboardLibrary(){
        $new_product = Buku::with('genre')
        ->whereHas('genre', function($query) {
            $query->whereIn('genre', [
                'drama', 'romance', 'fantasi'
            ]);
        })
        ->get();
    
    return view('role.user.library', compact('new_product'));
    
    }
}
