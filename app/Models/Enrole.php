<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrole extends Model
{
    use HasFactory;

    public function Personne_a_prevenir() {
        return $this->hasMany(Personne_prevenir::class, 'id_enrole');
    }
}
