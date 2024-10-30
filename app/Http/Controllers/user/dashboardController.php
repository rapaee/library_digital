<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\buku;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboardUser(){
        $book = buku::whereIn('id', [1,2,3,4])->get();
        return view('role.user.dashboardUser', compact('book'));
    }

    
   
}
