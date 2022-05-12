<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffaireController extends Controller
{
    public function affaire()
    {
        return view('frontend.affaire');
    }
}
