<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Entreprises;
use App\Models\Horaires;
use App\Models\Parametres;
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
    public $note;
    public $commentaire;

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

    public function updated1($fields)
    {
        $this->validateOnly($fields, [
            'note' => 'required',
            'commentaire' => 'required'
        ]);
    }

    public function avis(Request $request, $entreprise_id)
    {
        $request->validate([
            'note' => 'required',
            'commentaire' => 'required'
        ]);

        try {
            $commentaire = new Avis();
            $commentaire->entreprise_id = $entreprise_id;
            $commentaire->note = $this->note;
            $commentaire->commentaire = $this->commentaire;
            $commentaire->save();
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
            //->join('avis', 'entreprises.id', '=', 'avis.entreprise_id')
            ->select('*', 'entreprises.id')
            ->get();

        $est_souscrits = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('sous_categorie_entreprises', 'sous_categorie_entreprises.id', '=', 'sous_categorie_id')
            ->select('est_souscrit', 'entreprises.id')
            ->get();

        $horaires = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('horaires', 'entreprises.id', '=', 'entreprise_id')
            ->select('*')
            ->get();

        $services = DB::table('entreprises')
            ->where('entreprises.id', $entreprise_id)
            ->join('services', 'entreprises.id', '=', 'entreprise_id')
            ->select('*')
            ->get();

        $service_images = DB::table('entreprises')
            ->where('entreprises.id', $entreprise_id)
            ->join('services', 'entreprises.id', '=', 'entreprise_id')
            ->join('service_images', 'services.id', '=', 'service_id')
            ->select('*')
            ->get();

        $avis = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('avis', 'entreprises.id', '=', 'avis.entreprise_id')
            ->select('*')
            ->get();

        $avis2 = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            //->join('avis', 'entreprises.id', '=', 'avis.entreprise_id')
            ->select('*')
            ->get();

        $parametres = Parametres::find(1);

        return view('frontend.ProfilEntreprise', compact(
            'sousCategorieNavs',
            'Profil_entreprises',
            'horaires',
            'services',
            'est_souscrits',
            'parametres',
            'service_images',
            'avis',
            'avis2'
        ));
    }
}
