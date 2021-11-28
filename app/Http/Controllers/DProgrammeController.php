<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Programme;
use App\Models\Partenaire;
use App\Models\Referentiel;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\DemandeProgramme;
use App\Models\DemandeReferentiel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Models\DemandeprogrammeReferentiel;
use App\Models\NiveauReferentiel;
use App\Models\ProgrammeNiveau;
// appel de la facde mail
use Illuminate\Support\Facades\Mail;
use App\Mail\DemandeMail;

class DProgrammeController extends Controller
{

    
    public function getidProgramme($id)
    {
    

        $filiere = Filiere::all();
        $partenaire = Partenaire::all();
        
        $etablissement = Etablissement::all();
        $programme = Programme::findOrFail($id);
        return view('utilisateur/acceuil', compact('programme','etablissement','filiere',
        'partenaire'));   
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'referentiel_id' => 'required',

            ]

        );


        $data = $request->validate([
            'programme_id' => 'required',
            'etablissement_id' => '',
            
            'filiere_id' => 'required',
            'appui' => 'required',
            'RessourceNecessaire' => 'required',
            'motif' => 'required',
            'motivation' => 'required',
            'partenaire_id' => '',

        ]);

       
        $dp = new DemandeProgramme($data);
        $dp->utilisateur_id =Auth::guard('utilisateur')->user()->id;
        $dp->save();

        $id_demande = $dp->id;


     


        $longueur = count($request->referentiel_id);

        for($i=0; $i<$longueur; $i++) 
        {
            $referentiel =  new DemandeReferentiel();
            $referentiel->demande_id = (int)$id_demande;
            $referentiel->niveau_id = (int)$request->niveau_id;
            $referentiel->referentiel_id = (int)$request->referentiel_id[$i];
            $referentiel->save();


        }

         $lastDemande = DemandeProgramme::get()->last();



         $envoyerMail = Mail::to($lastDemande->utilisateur->email)->send(new DemandeMail($lastDemande));

         
        return redirect()->route('programme')->with('success', 'Demande envoyé avec success');
    }

    public function UtilisateurProgramme()
    {
   
        // $utilisateur_id = Utilisateur::with('DProgramme')
        // ->where('id', Auth::guard('utilisateur')->user()->id)
        //     ->orderBy('id', 'DESC')->paginate(5);

        // $demandeprogramme = DemandeProgramme::with('referentiel')->get();
        
        $programme = Programme::with('partenaire')->get();
        $utilisateurProgramme = DemandeProgramme::with('utilisateur')
        ->with('referentiel')
            ->where('utilisateur_id', Auth::guard('utilisateur')->user()->id)
       ->get();
        return view('utilisateur.MesProgrammes',compact('utilisateurProgramme','programme'));
    }



    public function ifDemandeIsValid($file)
    {
        
 
        $path = public_path('referentiel\\' . $file);
        header('content-type:application/pdf');
        echo file_get_contents($path);
        return view('utilisateur.OpenReferentiel',compact('ref'));

    }

    public function getRefByNiveau($id,$id1)
    {

$referentiel = NiveauReferentiel::where('niveau_id', '=', $id)
     ->where('programme_id', '=', $id1)
 ->join('programmes', 'niveau_referentiel.programme_id', '=', 'programmes.id')
 ->join('referentiels', 'niveau_referentiel.referentiel_id', '=', 'referentiels.id')
->get();

        return response()->json($referentiel);
    }

    public function voirPLus($id)
    {
        $utilisateur = DemandeProgramme::with('utilisateur')
        ->with('referentiel')
        ->where('id',$id)
            ->get();
        return view('admin.voirplus', compact('utilisateur'));
    }
   
}
