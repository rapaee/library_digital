<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function bukuAdmin(){
        return view('role.admin.buku');
    }
}
