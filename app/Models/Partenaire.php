<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
  protected $guarded =[];

    public function programme()
    {
       return $this->hasMany(Programme::class);
    }

  public function demandeprogramme()
  {
    return $this->hasMany(DemandeProgramme::class, 'demande_referentiel', 'referentiel_id', 'demande_id');
  }
}
