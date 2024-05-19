<?php

namespace App\Models;


use App\Models\Gare;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
    use HasFactory;
    public function gare(){
        return $this->belongsTo(Gare::class);
    }

    public function trajet(){
        return $this->belongsTo(Trajet::class);
    }
   

}
