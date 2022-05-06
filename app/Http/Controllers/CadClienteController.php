<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadClienteController extends Controller
{
    public function cadCliente() {
        return view('cadCliente');
    }
}
