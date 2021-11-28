<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Secteur extends Model
{
   protected $guarded =[];

    public function programme()
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
