<?php

namespace App\Http\Controllers;

use App\Models\entreprises;
use App\Models\Horaires;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProfilEntrepriseController extends Controller
{
    public $nom;
    public $email;
    public $objet;
    public $message;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required'
        ]);
    }

    public function mail(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required'
        ]);
        try {

            //  Envoi de mail
            Mail::send('frontend.contact-mail', array(
                'name' => $request->input('nom'),
                'email' => $request->input('email'),
                'subject' => $request->input('objet'),
                'form_message' => $request->input('message'),
            ), function ($message) use ($request) {
                $message->from($request->input('email'));
                $message->to('gzk643192@gmail.com', 'Salut K Gz')->subject($request->input('objet'));
            });
            return redirect()->back()->with('success', 'Merci de nous avoir contacté.');
        } catch (Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }
    
    public function profilEntreprise($entreprise_id)
    {
        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $Profil_entreprises = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('sous_categorie_entreprises', 'sous_categorie_entreprises.id', '=', 'sous_categorie_id')
            ->select('*','entreprises.id')
            ->get();

        $horaireCount = Horaires::all();    
        $horaires = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('horaires', 'entreprises.id', '=', 'entreprise_id')
            ->select('*')
            ->get();

        $serviceCount = Services::all();
        $services =DB::table('entreprises')
            ->where('entreprises.id', $entreprise_id)
            ->join('services', 'entreprises.id', '=', 'entreprise_id')
            ->select('*')
            ->get();
        return view('frontend.ProfilEntreprise', compact('sousCategorieNavs', 'Profil_entreprises', 'horaires', 
                    'services', 'serviceCount', 'horaireCount'));
    }
}
