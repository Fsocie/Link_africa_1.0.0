<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minispot extends Model
{
    use HasFactory;

    public function Admin()
    {
        return $this->hasMany(Admins::class);
    }
}
