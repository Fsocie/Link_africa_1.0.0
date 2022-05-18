<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllSubCategoryController extends Controller
{
    public function allSubCategorie()
    {
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('sous_categorie_entreprises.libelle')
            ->take(4)
            ->get();

        $allsubCategories = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('sous_categorie_entreprises.libelle')
            ->get();
        return view('frontend.all-sub-category', compact('sousCategorieNavs', 'allsubCategories'));
    }
}
