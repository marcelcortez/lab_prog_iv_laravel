<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadMedicoController extends Controller
{
    public function cadMedico() {
        return view('cadMedico');
    }
}
