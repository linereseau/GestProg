<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $guarded =[];

    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }

    public function etablissement()
    {
        return $this->belongsToMany(Etablissement::class);
    }

    public function programm()
    {
        return $this->hasMany(Programm::class);
    }
}
