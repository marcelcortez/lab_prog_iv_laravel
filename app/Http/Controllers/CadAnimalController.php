<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadAnimalController extends Controller
{
    public function cadAnimal() {
        return view('cadAnimal');
    }
}
