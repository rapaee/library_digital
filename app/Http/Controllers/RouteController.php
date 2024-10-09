<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function dashboardAdmin(){
        return view('role.admin.dashboardAdmin');
    }
    public function dashboardUser(){
        return view('role.user.dashboardUser');
    }
    public function dashboardLibrary(){
        return view('role.user.library');
    }
    public function dashboardLibraryAdmin(){
        return view('role.admin.library');
    }
}
