<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainMenuController extends Controller
{
    public function mainMenu() {
        return view('mainMenu');
    }
}
