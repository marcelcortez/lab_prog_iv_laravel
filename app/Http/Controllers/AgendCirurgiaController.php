<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendCirurgiaController extends Controller
{
    public function agendCirurgia() {
        return view('agendCirurgia');
    }
}
