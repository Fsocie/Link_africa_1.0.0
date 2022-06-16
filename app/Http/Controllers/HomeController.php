<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use App\Models\Entreprises;
use App\Models\Minispot;
use App\Models\Parametres;
use App\Models\Pubs;
use App\Models\Reportages;
use App\Models\Slider;
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

        if ($Origine && $pays2 && $ville2 && $secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('pays.libelle', 'LIKE', "%$pays2%")
                ->orWhere('villes.libelle', 'LIKE', "%$ville2%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($Origine && $pays2 && $ville2) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('pays.libelle', 'LIKE', "%$pays2%")
                ->orWhere('villes.libelle', 'LIKE', "%$ville2%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($Origine && $pays2 && $secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('pays.libelle', 'LIKE', "%$pays2%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($Origine && $ville2 && $secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('villes.libelle', 'LIKE', "%$ville2%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($pays2 && $ville2 && $secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('pays.libelle', 'LIKE', "%$pays2%")
                ->orWhere('villes.libelle', 'LIKE', "%$ville2%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($Origine && $pays2) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('pays.libelle', 'LIKE', "%$pays2%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($Origine && $ville2) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('villes.libelle', 'LIKE', "%$ville2%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($Origine && $secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($pays2 && $ville2) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('pays.libelle', 'LIKE', "%$pays2%")
                ->orWhere('villes.libelle', 'LIKE', "%$ville2%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($pays2 && $secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('pays.libelle', 'LIKE', "%$pays2%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($ville2 && $secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('villes.libelle', 'LIKE', "%$ville2%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($Origine) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($pays2) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('pays.libelle', 'LIKE', "%$pays2%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($ville2) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('villes.libelle', 'LIKE', "%$ville2%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        } elseif ($secteur) {
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        }else{
            $recherches = DB::table('categorie_entreprises')
                ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
                ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'entreprises.sous_categorie_id')
                ->join('relation_entre_pays_entreprises', 'entreprises.id', '=', 'entreprise_id')
                ->join('villes', 'relation_entre_pays_entreprises.villes_id', '=', 'villes.id')
                ->join('pays', 'pays.id', '=', 'villes.pays_id')
                ->where('entreprises.nom', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone2', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone3', 'LIKE', "%$Origine%")
                ->orWhere('entreprises.telephone4', 'LIKE', "%$Origine%")
                ->orWhere('pays.libelle', 'LIKE', "%$pays2%")
                ->orWhere('villes.libelle', 'LIKE', "%$ville2%")
                ->orWhere('categorie_entreprises.libelle', 'LIKE', "%$secteur%")
                ->select('*', 'sous_categorie_entreprises.libelle as sousCategorie', 'entreprises.id')
                ->orderBy('entreprises.id', 'desc')
                ->get();
        }

        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $entreprisePopulaire = entreprises::inRandomOrder()->limit(4)->get();

        $parametres = Parametres::find(1);
        //dump($_REQUEST, $_GET);

        return view('frontend.recherche-entreprise', compact('recherches', 'sousCategorieNavs', 'entreprisePopulaire','parametres'));
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
        //$id= $pays->id;

        $villes = DB::table('villes')
            //->where('pays_id', '=', $id)
            ->select('*')
            ->get();

        $categorie2s = CategorieEntreprises::all();

        $rejoins = DB::table('entreprises')
            ->select('*')
            ->orderBy('id', 'desc')
            ->limit(6)
            ->get();

        $entrepriseHome = DB::table('entreprises')
            ->select('*')
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();

        $entrepriseHonneur = DB::table('entreprises')
            ->select('honneur')
            ->get();

        $entrepriseElus = DB::table('entreprises')
            ->select('elus')
            ->get();

        $minispots = Minispot::all();

        $reportagedelasemaine = Reportages::all();

        $pubs = Pubs::all();
        $parametres = Parametres::find(1);

        $slider = Slider::all();

        return view('frontend.home', compact('categories', 'sousCategorieNavs', 
                    'pays', 'villes', 'categorie2s', 'rejoins', 'entrepriseHome', 'entrepriseHonneur', 
                    'entrepriseElus', 'reportagedelasemaine', 'minispots','pubs','parametres','slider'));
    }
}
