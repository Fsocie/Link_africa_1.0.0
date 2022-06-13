<?php

namespace App\Http\Controllers;

use App\Models\Parametres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffaireController extends Controller
{
    public function affaire()
    {
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $affaires = DB::table('offre_emplois')
            ->join('entreprises', 'offre_emplois.entreprise_id', '=', 'entreprises.id')
            ->join('sous_categorie_entreprises', 'entreprises.sous_categorie_id', '=', 'sous_categorie_entreprises.id')
            ->join('emplois', 'offre_emplois.emploi_id', '=', 'emplois.id')
            ->select('*','sous_categorie_entreprises.libelle as sousCatlib','emplois.libelle as emploiLib')
            ->orderBy('emplois.id', 'DESC')
            //->get()
            ->paginate(2);

        $parametres = Parametres::find(1);
        return view('frontend.affaire', compact('sousCategorieNavs', 'affaires', 'parametres'));
    }
}
