<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\Programme;
use App\Models\Referentiel;
use Illuminate\Http\Request;
use App\Models\ProgrammeNiveau;
use App\Models\DemandeProgramme;
use MercurySeries\Flashy\Flashy;
use App\Models\NiveauReferentiel;
use League\CommonMark\Reference\Reference;

class ReferentielController extends Controller
{
   public function RefenctielProgramme($id)
   {
        $programme = Programme::with('niveau')
        ->where('id',$id)
        ->get(); 
        $niveau = Niveau::all();
        return view('refe',compact('programme','niveau'));
   }

   public function StoreReferentileWithNiveau(Request $request)
   {


        $data = $request->validate([
            'NOMFICHE' => 'required',

        ]);
        if ($request->hasFile('NOMFICHE')) {
            $imageNameArr = [];
            foreach ($request->NOMFICHE as $file) {
                // you can also use the original name
                $fileName = time() . '-' . $file->getClientOriginalName();
                $onlyName =  $name = explode('.', $fileName)[0];
                $imageNameArr[] = $fileName;
                // Upload file to public path in images directory
                $file->move(public_path('referentiel'), $fileName);
                // Database operation
                $referentiel =  new Referentiel();
                $referentiel->File = $fileName;
                $referentiel->NOMFICHE = $onlyName;
               
                $referentiel->save();
               $idR[] = $referentiel->id;
               
            }
        }

        $longueur = count($idR);
        for($i = 0 ; $i < $longueur ;$i++ )
        {
            $ref_niveau = new NiveauReferentiel();
            $ref_niveau->programme_id = request('programme_id');
            $ref_niveau->niveau_id = request('niveau_id');
            $ref_niveau->referentiel_id = $idR[$i];
            $ref_niveau->save();

        }
        Flashy::message('success', 'référentiel ajouté avec success');
        return redirect()->route('liste.programme');
      

   }

   public function RefList()
   {
       $referentiel = Referentiel::with('niveau','programme')
       ->orderBy('id','DESC')
       ->get();
       return view('admin.listRef',compact('referentiel'));
   }

 
}

