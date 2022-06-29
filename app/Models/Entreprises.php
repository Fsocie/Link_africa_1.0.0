<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{

    protected $fillable = [
        'sous_categorie_id',
        'nom',
        'email',
        'adresse',
        'statu',
        'telephone',
        'itineraire',
        'siteweb',
        'description_entreprise',
        'telephone2',
        'telephone3',
        'telephone4',
        'photo',
        'elus',
        'honneur',
        'est_souscrit'
    ];
    use HasFactory;

    public function SousCategorie()
    {
        return $this->hasMany(SousCategorieEntreprises::class);
    }

    public function offreEmplois()
    {
        return $this->belongsTo(OffreEmplois::class);
    }

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }
}
