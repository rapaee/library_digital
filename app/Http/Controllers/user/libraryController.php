<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function dashboardLibrary(){
        return view('role.user.library');
    }
}
