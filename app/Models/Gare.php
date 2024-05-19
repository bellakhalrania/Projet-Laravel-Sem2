<?php

namespace App\Models;

use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gare extends Model
{
    use HasFactory;


    public function abonnements(){
        return $this->hasMany(Abonnement::class);
    }
    
}
