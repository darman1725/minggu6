<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Today_SpecialController extends Controller
{
    public function todaySpecial(){
        return view('today-special');
    } 
}
