<?php

namespace App\Http\Controllers;

use App\Models\Entreprises;
use App\Models\Parametres;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProfilController extends Controller
{
    public function profil() 
    {
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $users = User::paginate(100);
        $entreprisePopulaire = Entreprises::inRandomOrder()->limit(2)->get();
        $parametres = Parametres::find(1);
        return view('frontend.profile', compact('sousCategorieNavs', 'users', 'entreprisePopulaire','parametres'));
    }
}
