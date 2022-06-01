<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use App\Models\entreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function recherche()
    {
        $Origine = request()->input('Origin');
        $pays2 = request()->input('pays');
        $ville2 = request()->input('ville');
        $secteur = request()->input('secteur');

        $recherches = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->join('entreprises','sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
            // ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
            // ->join('pays', 'relation_entre_pays_entreprises.pays_id', '=', 'pays.id')
            // ->join('villes', 'villes.id', '=', 'villes.pays_id')
            ->where('entreprises.nom', 'LIKE', "%$Origine%")
            ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
            ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
            ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
            ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
            ->orWhere('entreprises.adresse', 'LIKE', "%$pays2%")
            ->orWhere('entreprises.adresse', 'LIKE', "%$ville2%")
            ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
            ->select('*','sous_categorie_entreprises.libelle as sousCategorie','entreprises.id')
            ->orderBy('entreprises.id', 'desc')
            ->get();

        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();
        
        $entreprisePopulaire = entreprises::inRandomOrder()->limit(4)->get();
        //dump($_REQUEST, $_GET);
        
        return view('frontend.recherche-entreprise', compact('recherches', 'sousCategorieNavs', 'entreprisePopulaire'));
    }

    public function index()
    {
        $categories = CategorieEntreprises::all()->take(9);
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $pays = DB::table('pays')
            ->select('*')
            ->get();

        $villes = DB::table('villes')
            ->select('*')
            ->get();
        
        $categorie2s = CategorieEntreprises::all();
    
        $rejoins = DB::table('entreprises')
            ->select('*')
            ->orderBy('id', 'desc')
            ->take(10);

        $entrepriseHome = DB::table('entreprises')
            ->select('*')
            ->orderBy('id', 'desc')
            ->get();

        $entrepriseHonneur = DB::table('entreprises')
            ->select('honneur')
            ->get();

        $entrepriseElus = DB::table('entreprises')
            ->select('elus')
            ->get();
        return view('frontend.home', compact('categories', 'sousCategorieNavs', 'pays', 'villes', 'categorie2s','rejoins','entrepriseHome','entrepriseHonneur','entrepriseElus'));
    }
}
