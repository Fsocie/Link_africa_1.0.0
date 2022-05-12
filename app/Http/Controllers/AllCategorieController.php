<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllCategorieController extends Controller
{
    public function allCategorie()
    {
        return view('frontend.allCategorie');
    }
    
}
