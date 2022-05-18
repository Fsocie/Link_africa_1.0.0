<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllCategorieController extends Controller
{
    public function allCategorie()
    {
        $categories = CategorieEntreprises::all();
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();
        return view('frontend.allCategorie', compact('categories', 'sousCategorieNavs'));
    }
    
}
