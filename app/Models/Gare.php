<?php

namespace App\Models;

use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gare extends Model
{
    use HasFactory;
    //protected $guarded=[];

    public function abonnements(){
        return $this->hasMany(Abonnement::class);
    }
    /*
    protected $fillable = [
        'nom_Gare',
        'lieu',
        'address',
    ];*/
}
