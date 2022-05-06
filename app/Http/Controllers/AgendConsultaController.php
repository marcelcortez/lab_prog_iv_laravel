<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendConsultaController extends Controller
{
    public function agendConsulta() {
        return view('agendCOnsulta');
    }
}
