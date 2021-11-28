<?php

namespace App\Http\Controllers;

use App\Models\FaireP;
use App\Models\Departement;
use App\Models\Etablissement;
use App\Models\Filiere;
use App\Models\Secteur;
use App\Models\Niveau;
use App\Models\Programm;
use App\Models\Programme;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EFPT2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function Showdepartement($id)
    {
        $reg = Departement::where('region_id', $id)
            ->withCount('etablissement')
            ->get();

        $region_dep  = Region::findOrFail($id)
            ->where('id', $id)
            ->get();

       
        return view('EFPT.departement', compact('reg', 'region_dep'));
    }


    public function DepartWithEtabli($id)
    {
        $depart = Etablissement::where('departement_id',$id)
        ->get();

        $dep_et  = Departement::findOrFail($id)
        ->where('id',$id)
        ->get();
        return view('EFPT.departInfo', compact('depart', 'dep_et'));
    }
    

    public function ProparEtablissement2($id)
    {
          
        $eta_pro= Programm::where('etablissement_id',$id)->get();
        $etablissement = Etablissement::where('id', $id)->get();
       
        return view('EFPT.showProg2',compact('eta_pro', 'etablissement'));
    }



    public function ProgrammeInfo2($id,$id1,$id2,$id3,$id4)
    {
      
        $programme = Programm::join('programmes','programmes.id','=','programms.programme_id')
           ->join('secteurs','secteurs.id','=','programmes.secteur_id')
          ->where('secteur_id', $id)
            ->where('etablissement_id',$id1)
              ->where('anne_niv', $id4)
              
        ->get();

        $pro= Secteur::findOrFail($id)
        ->where('id',$id)

        ->get();


       $etablissement = Etablissement::with('programm')
      ->where('departement_id',$id2)->get();

     $region = Departement::with('etablissement')
   ->where('region_id',$id3)->get();

        //statistique departemental
          
         $dep_eta_sFille = Programm::join('programmes','programmes.id','=','programms.programme_id')
           ->join('secteurs','secteurs.id','=','programmes.secteur_id')
           ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
                   ->where('secteur_id', $id)
                   ->where('etablissements.departement_id',$id2)
                   ->where('anne_niv',$id4)
                   ->sum('Effectif_fille');

        $dep_eta_sGarcon = Programm::join('programmes','programmes.id','=','programms.programme_id')
           ->join('secteurs','secteurs.id','=','programmes.secteur_id')
           ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
                   ->where('secteur_id', $id)
                   ->where('etablissements.departement_id',$id2)
                   ->where('anne_niv',$id4)
                   ->sum('Effectif_garcon');

       /*$dep_eta_sFille = DB::table('filieres')
           ->join('programmes','programmes.id','=','filieres.id')
           ->join('programms','programms.programme_id','=','programmes.id')
           ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
                   ->where('filiere_id', $id)
                   ->where('etablissements.departement_id',$id2)
                   ->where('anne_aca',$id4)
                   ->sum('Effectif_fille');

        $dep_eta_sGarcon = DB::table('programms')
        ->join('programmes','programmes.id','=','programms.programme_id')
           ->join('filieres','filieres.id','=','programmes.filiere_id')
        ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
        ->where('programme_id', $id)
        ->where('etablissements.departement_id',$id2)
        ->where('anne_aca',$id4)
         ->sum('Effectif_garcon');*/

        //statistique regional

         $sFille = Programm::join('programmes','programmes.id','=','programms.programme_id')
           ->join('secteurs','secteurs.id','=','programmes.secteur_id')
           ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
           ->join('departements', 'etablissements.departement_id', '=', 'departements.id')
            ->where('departements.region_id', $id3)
                   ->where('secteur_id', $id)
                   //->where('etablissements.departement_id',$id2)
                   ->where('anne_niv',$id4)
                   ->sum('Effectif_fille');

        $sGarcon = Programm::join('programmes','programmes.id','=','programms.programme_id')
           ->join('secteurs','secteurs.id','=','programmes.secteur_id')
           ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
           ->join('departements', 'etablissements.departement_id', '=', 'departements.id')
            ->where('departements.region_id', $id3)
                   ->where('secteur_id', $id)
                   //->where('etablissements.departement_id',$id2)
                   ->where('anne_niv',$id4)
                   ->sum('Effectif_garcon');



      /*  $sFille = DB::table('programms')
        ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
        ->join('departements', 'etablissements.departement_id', '=', 'departements.id')
        ->where('programme_id', $id)
        ->where('departements.region_id', $id3)
        ->where('anne_niv',$id5)
        ->where('niveau_id',$id4)
        ->sum('Effectif_fille');

       
        $sGarcon = DB::table('programms')
        ->join('etablissements', 'etablissements.id', '=', 'programms.etablissement_id')
        ->join('departements', 'etablissements.departement_id', '=', 'departements.id')
        ->where('programme_id', $id)
            ->where('departements.region_id', $id3)
         ->where('anne_niv',$id5)
        ->where('niveau_id',$id4)
        ->sum('Effectif_garcon');*/


        $nationalFille = Programm::join('programmes', 'programmes.id', '=', 'programms.programme_id')
         ->join('secteurs', 'secteurs.id', '=', 'programmes.secteur_id')
        ->where('secteur_id', $id)
        ->where('anne_niv',$id4)
       
        ->sum('Effectif_fille');
        
        $nationalGarcon = Programm::join('programmes', 'programmes.id', '=', 'programms.programme_id')
         ->join('secteurs', 'secteurs.id', '=', 'programmes.secteur_id')
        ->where('secteur_id', $id)
        ->where('anne_niv',$id4)
       
        ->sum('Effectif_garcon');
       
        

        
        return view('EFPT.infoPro2', compact(
            'programme',
            'dep_eta_sGarcon',
            'dep_eta_sFille',
            'sGarcon','sFille',
            'nationalFille',
            'nationalGarcon',
            'pro',
           
           ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

/**select `departements`.`ID_DEPT`, `departements`.`NOM_DEPT`, `Count(etablissements`.`NOM_ETA)` as `Nombre` from `departements` inner join `etablissements` on `departements`.`ID_DEPT` = */

