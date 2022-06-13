<?php

namespace App\Http\Controllers;

use App\Models\Parametres;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footer()
    {
        $parametres = Parametres::find(1);
        //dump($parametres);
        return view('frontend.footer', compact('parametres'));
    }
}
