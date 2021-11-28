<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
   protected $guarded =[];

    public function programme()
    {
       return  $this->hasMany(Programme::class);
    }
}
