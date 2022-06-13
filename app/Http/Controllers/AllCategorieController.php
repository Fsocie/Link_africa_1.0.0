<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use App\Models\Parametres;
use App\Models\Pubs;
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

        $pubs = Pubs::all();
        $parametres = Parametres::find(1);
        return view('frontend.allCategorie', compact('categories', 'sousCategorieNavs','pubs','parametres'));
    }
    
}
