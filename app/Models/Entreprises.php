<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{
    use HasFactory;

    public function CategorieEntreprises()
    {
        return $this->belongsTo(CategorieEntreprises::class);
    }

    public function offreEmplois()
    {
        return $this->belongsTo(OffreEmplois::class);
    }
}
