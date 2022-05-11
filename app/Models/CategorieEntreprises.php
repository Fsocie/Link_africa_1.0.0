<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieEntreprises extends Model
{
    use HasFactory;

    public function entreprise()
    {
        return $this->hasMany(Entreprises::class);
    }
}
