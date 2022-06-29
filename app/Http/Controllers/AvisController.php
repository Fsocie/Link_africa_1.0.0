<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvisController extends Controller
{
    public $note;
    public $commentaire;

    public function updated($fields)
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
            $commentaire->note = $_POST['note'];
            $commentaire->commentaire = $_POST['commentaire'];
            $commentaire->save();
            return redirect()->back()->with('ok', 'Merci :) !!!');
        } catch (Exception $e) {
            return redirect()->back()->with('ok', $e->getMessage());
        }
    }
}
