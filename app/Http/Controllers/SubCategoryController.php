<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subCategorie()
    {
        return view('frontend.sub-category');
    }
}
