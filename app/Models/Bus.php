<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    public function chauffeur()
    {
        return $this->belongsToMany(Chauffeur::class);
    }


    public function trajets()
    {
        return $this->hasMany(Trajet::class);
    }
}
