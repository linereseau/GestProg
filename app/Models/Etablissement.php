<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    // public function Programme()
    // {
    //     return $this->belongsToMany(Programme::class);
    // }

    public function filiere()
    {
        return $this->belongsToMany(Filiere::class);
    }

    public function programm()
    {
        return $this->hasMany(Programm::class);
    }


}
