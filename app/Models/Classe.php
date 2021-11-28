<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $guarded = [];

    public function serie()
    {
        return $this->belongsToMany(Serie::class,'techniques','classe_id','serie_id');
    }

    public function matiere()
    {
        return $this->belongsToMany(Matiere::class, 'techniques', 'classe_id','matiere_id');
    }

    


}
