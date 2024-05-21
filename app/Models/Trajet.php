<?php

namespace App\Models;

use App\Models\Abonnement;
use App\Models\Bus;
use App\Models\Chauffeur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

   public function abonnements(){
        return $this->hasMany(Abonnement::class);
    }
   public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }
}
