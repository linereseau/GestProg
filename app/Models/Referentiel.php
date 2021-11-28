<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    protected $guarded = [];


    public function programme()
    {
        return $this->belongsToMany(Programme::class, 'niveau_referentiel','referentiel_id','programme_id');
    }

    public function demandeprogramme()
    {
        return $this->belongsToMany(DemandeProgramme::class);
    }

    public function niveau()
    {
        return $this->belongsToMany(Niveau::class,'niveau_referentiel', 'referentiel_id', 'niveau_id');
    }
}
