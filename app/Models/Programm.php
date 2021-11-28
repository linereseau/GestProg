<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programm extends Model
{
    public $timestamps =  false;

    protected $guarded = [];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
}
