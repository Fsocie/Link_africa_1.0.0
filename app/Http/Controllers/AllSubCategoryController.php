<?php

namespace App\Http\Controllers;

use App\Models\Parametres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllSubCategoryController extends Controller
{
    public function allSubCategorie()
    {
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $allsubCategories = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->get();

        $parametres = Parametres::find(1);
        return view('frontend.all-sub-category', compact('sousCategorieNavs', 'allsubCategories', 'parametres'));
    }
}
