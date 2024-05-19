<?php

namespace App\Models;


use App\Models\Gare;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
    use HasFactory;
    public function gare1()
    {
        return $this->belongsTo(Gare::class, 'garedepart_id'); // specify the foreign key if it is not 'gare_id'
    }
    public function gare2()
    {
        return $this->belongsTo(Gare::class, 'garearrive_id'); // specify the foreign key if it is not 'gare_id'
    }

    public function trajet(){
        return $this->belongsTo(Trajet::class);
    }
   

}
