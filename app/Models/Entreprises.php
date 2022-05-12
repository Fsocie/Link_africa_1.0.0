<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{
    use HasFactory;

    public function SousCategorie()
    {
        return $this->hasMany(SousCategorieEntreprises::class);
    }

    public function offreEmplois()
    {
        return $this->belongsTo(OffreEmplois::class);
    }
}
