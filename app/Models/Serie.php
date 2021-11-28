<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $guarded = [];

    public function classe()
    {
        return $this->belongsToMany(Classe::class, 'techniques','serie_id','classe_id');
    }

    public function matiere()
    {
        return $this->belongsToMany(Matiere::class, 'techniques', 'serie_id','matiere_id');
    }
}
