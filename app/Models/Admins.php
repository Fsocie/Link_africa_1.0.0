<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;

    public function pub()
    {
        return $this->belongsTo(Pubs::class);
    }

    public function catArticle()
    {
        return $this->belongsTo(CartegorieArticles::class);
    }

    public function reportage()
    {
        return $this->belongsTo(Reportages::class);
    }

    public function magasine()
    {
        return $this->belongsTo(Magasines::class);
    }

    public function service()
    {
        return $this->belongsTo(Services::class);
    }

    public function horaire()
    {
        return $this->belongsTo(Horaires::class);
    }
}
