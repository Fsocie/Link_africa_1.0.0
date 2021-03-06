<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use App\Models\Parametres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function subCategorie($categorie_id) 
    {
        $sousCategories = DB::table('categorie_entreprises')->where('categorie_entreprises.id', $categorie_id)
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->get();

        $Categories = DB::table('categorie_entreprises')->where('categorie_entreprises.id', $categorie_id)
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('categorie_entreprises.libelle')
            ->limit(1)
            ->get();
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();
        //dump($Categories);
        $parametres = Parametres::find(1);
        return view('frontend.sub-category', compact('sousCategories', 'Categories', 'sousCategorieNavs', 'parametres'));
    }
}
