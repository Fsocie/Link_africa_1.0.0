<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilEntrepriseController extends Controller
{
    public function profilEntreprise($entreprise_id)
    {
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $Profil_entreprises = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('sous_categorie_entreprises', 'sous_categorie_entreprises.id', '=', 'sous_categorie_id')
            ->select('*')
            ->get();

        $horaires = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('horaires', 'entreprises.id', '=', 'entreprise_id')
            ->select('*')
            ->get();
        return view('frontend.ProfilEntreprise', compact('sousCategorieNavs', 'Profil_entreprises', 'horaires'));
    }
}
