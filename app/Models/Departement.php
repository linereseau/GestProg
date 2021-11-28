<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
   protected $guarded = [];

    public function etablissement()
    {
        return $this->hasMany(Etablissement::class);
    }

     public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
