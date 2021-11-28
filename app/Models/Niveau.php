<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $guarded = [];

    public function programm()
    {
        return $this->hasMany(Programm::class);
    }

    // public function etablissement()
    // {
    //     return $this->belongsToMany(Etablissement::class);
    // }

    public function demandeprogramme()
    {
        return $this->belongsToMany(DemandeProgramme::class, 'demrefprogs', 'niveau_id', 'demande_id');
    }

    public function referentiel()
    {
        return $this->belongsToMany(Referentiel::class, 'niveau_referentiel', 'niveau_id', 'referentiel_id');
    }

    public function programme()
    {
        return $this->belongsToMany(Programme::class, 'programme_niveau', 'niveau_id', 'programme_id');
    }


}

