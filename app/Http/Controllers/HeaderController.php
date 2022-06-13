<?php

namespace App\Http\Controllers;

use App\Models\Parametres;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function header()
    {
        $parametres = Parametres::find(1);
        return view('frontend.header', compact('parametres'));
    }
}
