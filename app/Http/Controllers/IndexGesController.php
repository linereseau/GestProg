<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use App\Models\Etablissement;
use App\Models\Programm;
use App\User;
use Illuminate\Http\Request;

class IndexGesController extends Controller
{
    //

public function indexEtat($id)
{

         // $eta_pro = Programm::where('etablissement_id',$id1)->get();

		$eta_pro=Programm::join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
		->join('programmes','programmes.id','=','programms.programme_id')
		->join('users','users.id','=','etablissements.user_id')
		// ->where('etablissement_id',$id)
            ->where('user_id',$id)
            ->get();

        $etablissement = Etablissement::where('user_id',$id)->get();
       
	    return view('GesEtat.indexEtat',compact('eta_pro','etablissement'));
            //dd($eta_pro);
} 

 public function ProgrammeInfo($id,$id1,$id4,$id5,$id6)
    {
       
    
        $programme = Programm::where('programme_id', $id)
            ->where('etablissement_id',$id1)
             ->where('niveau_id', $id4)
              ->where('anne_aca', $id5)
              ->where('anne_niv', $id6)
        ->get();

        $pro = Programme::findOrFail($id)
        ->where('id',$id)
        ->get();
        return view('GesEtat.ProgEtat', compact('programme','pro',
           
           ));
    }
}
