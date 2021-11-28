<?php

namespace App\Http\Controllers;

use App\Models\Statu;
use App\Models\Niveau;
use App\Models\PROJET;
use App\Models\Filiere;
use App\Models\Modalite;
use App\Models\Programm;
use App\Models\Programme;
use App\Models\Partenaire;
use App\Models\Validation;
use App\Models\Secteur;
use App\Models\Referentiel;
use Illuminate\Http\Request;
use App\Models\ProgrammeNiveau;
use MercurySeries\Flashy\Flashy;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home');
    }

    public function addProgramme()
    {
        $niveau = Niveau::all();
        $filiere = Filiere::all();
        $modalite = Modalite::all();
        $statut = Statu::all();
        $validation = Validation::all();
        $partenaire = Partenaire::all();
        $secteur = Secteur::all();
        $prog =    Programme::all();
        return view('programme.add', compact('prog', 'filiere', 'modalite', 
        'statut', 'validation', 'partenaire','niveau','secteur'));
    
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
        $data  = $request->validate([
            'NOM' => 'required|string',
            'description' => 'required|string',
            'filiere_id' => 'required',
            'statu_id' => 'required',
            'modalite_id' => 'required',
            'validation_id' => 'required',
            'partenaire_id' => 'required',
            'secteur_id'=>     'required',
            
        ]);

        $programme =   Programme::create($data);
        $programme->save();

        
        $longueur = count($request->niveau_id);
        for($i = 0 ;$i < $longueur ;$i++)
        {
                $pro_niveau = new ProgrammeNiveau();
                $pro_niveau->programme_id = (int)$programme->id;
                $pro_niveau->niveau_id = (int)$request->niveau_id[$i];
                   
                    $pro_niveau->save();

        }


        Flashy::message('success', 'programme ajouté avec success');
        return redirect()->route('liste.programme');

    }

    public function ListProgramme()
    {
        $programme = Programme::orderBy('id','DESC')
        ->paginate(9);
        return view('programme.liste',compact('programme'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere = Filiere::all();
        $modalite = Modalite::all();
        $statut = Statu::all();
        $validation = Validation::all();
        $partenaire = Partenaire::all();
        $secteur = Secteur::all();
        $prog = Programme::all();

        $programme = Programme::findOrFail($id);
        return view('programme.edit',compact('programme','prog', 'filiere', 'modalite', 'statut', 'validation', 'partenaire','secteur',));
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
        $data  = $request->validate([
            'NOM' => 'required|string',
            'filiere_id' => 'required',
            'statu_id' => 'required',
            'modalite_id' => 'required',
            'validation_id' => 'required',
            'partenaire_id' => 'required',
            'secteur_id'=>'required',
        ]);

        $programme = Programme::findOrFail($id);
        $programme->update($data);
        Flashy::message('programme modifié avec success');
        return redirect()->route('liste.programme');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $programme = Programme::findOrFail($id);
        $programme->delete();
        return redirect()->route('liste.programme')->with('success', 'programme supprimmé avec success');

    }

    public function projet()
    {
        
        
        return view('admin.projets');
    }

    public function storeProjet(Request $request)
    {
            $data = $request->validate([
                    'NOMProjet' => 'required',
                    'PFT' => 'required',
                    'ETAT' => 'required',
                    'ZONES'=>'required',
                    'ACTIVITE' => 'required',
                    'PERIODE' => 'required',
            ]);

            $projet = PROJET::create($data);
            $projet->save();
            
            return redirect()->route('projet')->with('success','Projet ajouté avec succés');
    }

    public function listProjet()
    {
        $projet = PROJET::orderBy('id','DESC')
         ->paginate(6);
        return view('admin.listProjet',compact('projet'));
    }

    public function rechercherProjet()
    {
        $search = request()->input('recherche');
        $projet = PROJET::where('NOMProjet', 'like', '%' . $search . '%')
            ->get();

        return view('admin.rechercherProjet', ['projet' => $projet]);
    }


    public function rechercheListe()
    {
        $fil=Filiere::all();
        // $prog = Programme::all();
        $search = request()->input('rechercher');
        $programme= Programme::where('NOM', 'like', '%' . $search . '%')
            ->get();
            //dd($programme);

         return view('programme.rechercheliste', compact('programme','fil'));
    }
}
