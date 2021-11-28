<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DemandeReferentiel extends Pivot
{
    protected $table = 'demrefprogs';
}
