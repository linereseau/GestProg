<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class NiveauReferentiel extends Pivot
{
    protected $guarded = [];
    protected $table = 'niveau_referentiel';
}
