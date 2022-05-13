<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use Illuminate\Http\Request;

class AllCategorieController extends Controller
{
    public function allCategorie()
    {
        $categories = CategorieEntreprises::all();
        return view('frontend.allCategorie', compact('categories'));
    }
    
}
