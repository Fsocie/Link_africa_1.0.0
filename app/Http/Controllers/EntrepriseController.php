<?php

namespace App\Http\Controllers;

use App\Models\Parametres;
<<<<<<< HEAD
use App\Models\Pubs;
=======
use App\Models\Entreprises;
>>>>>>> e78b002fb42106254e10cb4e776ff069baedaf69
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RelationEntrePaysEntreprise;

class EntrepriseController extends Controller
{
    public function index(){
        return view("frontend.users.entreprise");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'sous_categorie_id'=>'required|integer',
            'nom'=>'required|string',
            'email'=>'required|string|email',
            'adresse'=>'required|string',
            'statu'=>'required|string',
            'telephone'=>'required|string',
            'telephone2'=>'required|string',
            /*'telephone3'=>'string',
            'telephone4'=>'string',
            'elus'=>'string',
            'honneur'=>'string',*/
            'itineraire'=>'nullable|string',
            'siteweb'=>'nullable|string',
            'description_entreprise'=>'required|string',
            'photo'=>'nullable|file|max:1024',
            'villes_id'=>'required|integer'
        ]);
        //dd($request->all());
        
        if($request->photo==null){
            $data = new Entreprises();

            $data->sous_categorie_id = $request->sous_categorie_id;
            $data->nom = $request->nom;
            $data->email = $request->email;
            $data->adresse = $request->adresse;
            $data->statu = $request->statu;
            $data->telephone = $request->telephone;
            $data->telephone2 = $request->telephone2;
            $data->telephone3 = $request->telephone3;
            $data->telephone4 = $request->telephone4;
            $data->itineraire = $request->itineraire;
            $data->siteweb = $request->siteweb;
            $data->description_entreprise = $request->description_entreprise;
            $data->elus = 0;
            $data->honneur = 0;
            $data->save();
            $entreprise_id = DB::table('entreprises')->latest('id')->first();
            $pays_entreprise = new RelationEntrePaysEntreprise();
            $pays_entreprise->entreprise_id = $entreprise_id->id;
            $pays_entreprise->villes_id = $request->villes_id;
            $pays_entreprise->save();
        }else{
            $filename = time().'.'.$request->photo->extension();
            $img = $request->file('photo')->storeAs('EntrepriseImages',$filename,'public');
            $data = new Entreprises();

            $data->sous_categorie_id = $request->sous_categorie_id;
            $data->nom = $request->nom;
            $data->email = $request->email;
            $data->adresse = $request->adresse;
            $data->statu = $request->statu;
            $data->telephone = $request->telephone;
            $data->telephone2 = $request->telephone2;
            $data->telephone3 = $request->telephone3;
            $data->telephone4 = $request->telephone4;
            $data->itineraire = $request->itineraire;
            $data->siteweb = $request->siteweb;
            $data->description_entreprise = $request->description_entreprise;
            $data->photo = $img;
            $data->elus = 0;
            $data->honneur = 0;
            $data->save();
            $entreprise_id = DB::table('entreprises')->latest('id')->first();
            $pays_entreprise = new RelationEntrePaysEntreprise();
            $pays_entreprise->entreprise_id = $entreprise_id->id;
            $pays_entreprise->villes_id = $request->villes_id;
            $pays_entreprise->save();
        }
        //return redirect()->route('Entreprises.index')->with('success','Nouvelle Entreprise ajoutée avec succès');
        return redirect()->back()->with('success','Nouvelle Entreprise ajoutée avec succès');
    }

    public function entreprise($sousCategorie_id)
    {
        $entreprises = DB::table('sous_categorie_entreprises')->where('sous_categorie_entreprises.id', $sousCategorie_id)
            ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'sous_categorie_id')
            ->select('*')
            ->orderBy('entreprises.id', 'desc')
            ->paginate(100);

        $sousCategorieNavs = DB::table('categorie_entreprises')
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->take(4)
            ->get();

        $sousCategories = DB::table('sous_categorie_entreprises')->where('sous_categorie_entreprises.id', $sousCategorie_id)
            ->join('entreprises', 'sous_categorie_entreprises.id', '=', 'sous_categorie_id')
            ->select('sous_categorie_entreprises.libelle')
            ->limit(1)
            ->get();

        $entreprisePopulaire = Entreprises::inRandomOrder()->limit(4)->get();

        $parametres = Parametres::find(1);

        $pubs = Pubs::all();
        
        return view('frontend.entreprise', compact('sousCategorieNavs', 'entreprises', 'sousCategories', 'entreprisePopulaire','parametres','pubs'));
    }

   
}
