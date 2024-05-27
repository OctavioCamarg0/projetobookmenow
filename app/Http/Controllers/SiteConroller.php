<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteConroller extends Controller
{
    public function home() {
        return view('home');
    }

    public function sobrenos() {
        return view('sobre-nos');
    }

    public function contato() {
        return view('contato');
    }
}
