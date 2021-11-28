<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProgrammeNiveau extends Pivot
{
    protected $guarded = [];
    
    protected $table = 'programme_niveau';
}
