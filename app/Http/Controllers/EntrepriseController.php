<?php

namespace App\Http\Controllers;

use App\Models\entreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    public function entreprise($sousCategorie_id)
    {
        $entreprises = DB::table('sous_categorie_entreprises')->where('sous_categorie_entreprises.id', $sousCategorie_id)
            ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'sous_categorie_id')
            ->select('*')
            ->get();

        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $sousCategories = DB::table('sous_categorie_entreprises')->where('sous_categorie_entreprises.id', $sousCategorie_id)
            ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'sous_categorie_id')
            ->select('sous_categorie_entreprises.libelle')
            ->limit(1)
            ->get();

        $entreprisePopulaire = entreprises::inRandomOrder()->limit(4)->get();
        return view('frontend.entreprise', compact('sousCategorieNavs', 'entreprises', 'sousCategories', 'entreprisePopulaire'));
    }
}
