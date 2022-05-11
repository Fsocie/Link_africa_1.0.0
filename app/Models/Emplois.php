<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplois extends Model
{
    use HasFactory;

    public function DemandeEmplois()
    {
        return $this->belongsTo(DemandeEmplois::class);
    }

    public function offreEmplois()
    {
        return $this->belongsTo(OffreEmplois::class);
    }
}
