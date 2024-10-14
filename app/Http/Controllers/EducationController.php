<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function Education(){
        return view('role.user.education');
    }
}
