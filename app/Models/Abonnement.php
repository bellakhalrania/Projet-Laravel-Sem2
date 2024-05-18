<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
    use HasFactory;

    public function trajets(){
        return $this->hasMany(Trajet::class);
    }
    public function gares(){
        return $this->hasMany(Gare::class);
    }

}
