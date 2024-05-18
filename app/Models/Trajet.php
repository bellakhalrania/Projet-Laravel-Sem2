<?php

namespace App\Models;

use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

   public function abonnements(){
        return $this->belongsTo(Abonnement::class);
    }
}
