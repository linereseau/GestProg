<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaireP extends Model
{
    protected $guarded = [];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
}
