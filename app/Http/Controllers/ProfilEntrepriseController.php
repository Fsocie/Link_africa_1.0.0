<?php

namespace App\Http\Controllers;

use App\Models\entreprises;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProfilEntrepriseController extends Controller
{
    public $name;
    public $email;
    public $msg;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);
    }

    public function mail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);
        try {

            //  Envoi de mail
            Mail::send('frontend.contact-mail', array(
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'form_message' => $request->input('message'),
            ), function ($message) use ($request) {
                $message->from($request->input('email'));
                $message->to('gzk643192@gmail.com');
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

        $horaires = DB::table('entreprises')->where('entreprises.id', $entreprise_id)
            ->join('horaires', 'entreprises.id', '=', 'entreprise_id')
            ->select('*')
            ->get();

        $services =DB::table('entreprises')
            ->where('entreprises.id', $entreprise_id)
            ->join('services', 'entreprises.id', '=', 'entreprise_id')
            ->select('*')
            ->get();
        return view('frontend.ProfilEntreprise', compact('sousCategorieNavs', 'Profil_entreprises', 'horaires', 'services'));
    }
}
