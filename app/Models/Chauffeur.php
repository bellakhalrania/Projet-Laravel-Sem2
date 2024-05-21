<?php

namespace App\Models;
use App\Models\Bus;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;


   public function bus()
    {
        return $this->belongsToMany(Bus::class);
    }
    public function trajets(){
        return $this->hasMany(Trajet::class);
    }
}
