<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
   protected $guarded =[];

    public function programmes()
    {
       return  $this->hasMany(Programme::class);
    }
    
}
