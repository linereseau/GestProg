<?php

namespace App\Http\Controllers;


use App\User;
use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Programm;
use App\Models\Programme;
use App\Models\Partenaire;
use App\Models\Departement;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Models\DemandeProgramme;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('home');
    }

    public function admin()
    {
       
        $progEtat = DemandeProgramme::where('etat', '=', 'en attente')->get();
        $user = User::count();
        
        $filiere = Filiere::count();
        $programme = Programme::count();
        $partenaire = Partenaire::count();
        $niveau = Niveau::count();
        $etablissement = Etablissement::count();
        return view('admin/home', compact(
            'user',
            'filiere',
            'programme',
            'partenaire',
            'niveau',
            'etablissement',
            'progEtat',
            
           
        ));
    }

    public function getDemande()
    {
        $utilisateur =Utilisateur::all();
        $demande =  DemandeProgramme::with('referentiel','programme')
        ->orderBy('id','DESC')->paginate(5);
        return view('admin.GetDemande',compact('demande','utilisateur'));
    }

    public function validerProgramme($id)
    {
        $valider = "validé";
        $validDemande = DemandeProgramme::find($id);
        $validDemande->etat = $valider;
        $validDemande->update();
        Flashy::message('Demande validé!!!', 'http://127.0.0.1:8000/admin.GetDemande');
          return redirect()->route('getdemande');
    }

    public function rejeterProgramme($id)
    {
        $rejectDemande = "rejeté";
        $validDemande = DemandeProgramme::find($id);
        $validDemande->etat = $rejectDemande;
        $validDemande->update();
        Flashy::message('Demande rejeté!!!', 'http://127.0.0.1:8000/admin.GetDemande');
        return redirect()->route('getdemande');
    }

    public function user()
    {
        $departement = Departement::all();
        return view('user/home', compact('departement'));
    }


    public function AddRenseigneEta(Request $request)
    {

        $data = $request->validate([
            'NOM_ETA' => ['required', 'string', 'unique:etablissements'],
            'departement_id' => ['required'],
            'TEL_ETBLMT' => ['required', 'integer'],
            'EMAIL_ETBLMT' => ['required', 'email', 'unique:etablissements'],
            'Adresse' => ['required', 'string'],
            'user_id' => ['required', 'integer'],
        ]);

        $etablissement = Etablissement::create($data);
        $etablissement->save();
        Flashy::message('Etablissement ajouté');
        return redirect()->route('user.home');
    }


public function listeEtablissement()
{
     $etablissement = Etablissement::orderBy('id','DESC')
        ->paginate(9);
        return view('ModEtat.etablissement',compact('etablissement'));
}


    public function RenseignerEta()
    {
        $etablissement = Etablissement::where('user_id',Auth::user()->id)->get();
        $niveau = Niveau::all();
        $programme = Programme::all();
        return view('user/RenseignerEta',compact('etablissement','niveau','programme'));
    }

    public function StoreRenseignerEta(Request $request)
    {

        $data = $request->validate([
            'etablissement_id' => ['required', 'string'],
            'niveau_id' => ['required'],
            'programme_id' => ['required', 'integer',],
            'anne_aca' => ['required'],
            'anne_niv' => ['required'],
            'Effectif_garcon' => ['required', 'numeric', ''],
            'Effectif_fille' => ['required', 'numeric', ''],
            
        ]);

        $programme = Programm::create($data);
        $programme->save();
        
        Flashy::message('Renseignements Etablissement ajoutés');
        return redirect()->route('re.etablissement')->with('success', 'Renseignements Etablissement ajoutés');  
    }
public function EditEtablissement(Request $request)

{

        $data = $request->validate([
            'etablissement_id' => ['required', 'string'],
            'niveau_id' => ['required'],
            'programme_id' => ['required', 'integer',],
            'anne_aca' => ['required'],
            'anne_niv' => ['required'],
            'Effectif_garcon' => ['required', 'numeric', ''],
            'Effectif_fille' => ['required', 'numeric', ''],
            
        ]);

        $programme = New Programm();
        $programme->save();
        
        return redirect()->route('GesEtat.EditEtat')->with('success', 'Renseignements Etablissement modifié');

}
 public function edited($id )
    {
        $programme = Programm::find($id);
        $etablissement=Etablissement::where('user_id',Auth::user()->id)->get();
           $niveau = Niveau::all();
            $programm = Programme::all();
         
        return view('GesEtat.EditEtat',compact('programme','etablissement','niveau','programm'));
    }
 public function updateEtat(Request $request, $id )
    {
        $data = $request->validate([
            'etablissement_id' => ['required', 'string'],
            'niveau_id' => ['required'],
            'programme_id' => ['required', 'integer',],
            'anne_aca' => ['required'],
            'anne_niv' => ['required'],
            'Effectif_garcon' => ['required', 'numeric', ''],
            'Effectif_fille' => ['required', 'numeric', ''],
            
        ]);

        $programme =  Programm::find($id);
        $programme->etablissement_id = request('etablissement_id');
        $programme->niveau_id = request('niveau_id');
        $programme->programme_id = request('programme_id');
        $programme->anne_aca = request('anne_aca');
        $programme->anne_niv = request('anne_niv');        
        $programme->Effectif_garcon = request('Effectif_garcon');        
        $programme->Effectif_fille = request('Effectif_fille');        

        $programme->save();
        return redirect()->route('GesEtat.indexEtat',Auth::user()->id)->with('success', 'Renseignements Etablissement modifié');
    }


public function destroy($id)
{
 $programme = Programm::find($id);
        $programme->delete();
        return redirect()->route('GesEtat.indexEtat',Auth::user()->id)->with('success', 'Statistiques supprimmé avec success');

}

}
