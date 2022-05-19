<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = CategorieEntreprises::all()->take(9);
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $pays = DB::table('pays')
            ->join('villes', 'pays.id', '=', 'villes.pays_id')
            ->select('*')
            ->get();
        return view('frontend.home', compact('categories', 'sousCategorieNavs'));
    }
}
