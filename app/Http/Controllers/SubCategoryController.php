<?php

namespace App\Http\Controllers;

use App\Models\CategorieEntreprises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function mount($categorie_id)
    {
        $categorie = CategorieEntreprises::find($categorie_id);
    }

    public function subCategorie($categorie_id)
    {
        $sousCategories = DB::table('categorie_entreprises')->where('categorie_entreprises.id', $categorie_id)
            ->join('sous_categorie_entreprises', 'categorie_entreprises.id', '=', 'sous_categorie_entreprises.categorie_entreprises_id')
            ->select('*')
            ->get();
        return view('frontend.sub-category', compact('sousCategories'));
    }
}
