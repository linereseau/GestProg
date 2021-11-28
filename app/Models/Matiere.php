<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $guarded = [];

    public function serie()
    {
        return $this->belongsToMany(Serie::class,'techniques','matiere_id','serie_id');
    }

    public function classe()
    {
        return $this->belongsToMany(Classe::class,'techniques','matiere_id','classe_id');
    }

}
