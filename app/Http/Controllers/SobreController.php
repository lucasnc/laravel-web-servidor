<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function mostrar(){
        return view('pages.sobre');
    }
}
