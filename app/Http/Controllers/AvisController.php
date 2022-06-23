<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Exception;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    public $note;
    public $commentaire;
    
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

}
