<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\buku;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboardUser(){
        return view('role.user.dashboardUser');
    }

    public function showFeatured()
    {
        $featuredBook = buku::inRandomOrder()->first(); // Fetch a random book
        return view('role.user.dashboardUser', compact('featuredBook'));
    }
    
   
}
