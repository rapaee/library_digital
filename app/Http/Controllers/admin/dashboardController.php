<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboardAdmin(){
        return view('role.admin.dashboardAdmin');
    }
}
