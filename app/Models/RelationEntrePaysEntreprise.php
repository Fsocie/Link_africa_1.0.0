<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationEntrePaysEntreprise extends Model
{
    use HasFactory;

    public function ville()
    {
        return $this->hasMany(Villes::class);
    }

    public function entreprise()
    {
        return $this->hasMany(Entreprises::class);
    }
}
