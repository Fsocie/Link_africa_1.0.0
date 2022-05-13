<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = CategorieEntreprises::all();
        return view('frontend.home', compact('categories'));
    }
}
