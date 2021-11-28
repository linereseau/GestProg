    
    <?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\MatiereParSeries;
use App\Models\ProgrammeTech;
use Illuminate\Http\Request;

class PROTECHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serie = Serie::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        // $pt = ProgrammeTech::distinct()->select('idClasse')->where('idSerie','=' ,1)->groupBy('idClasse')->get();
        return view('programme.Technique',compact('serie','classe','matiere'));
       
    }

    public function showClasse()
    {

        // $classe = MatiereParSeries::select('matiere_id')
        // ->where('serie_id',$id)
        // ->get();
        // $nClasse = Matiere::all();
        // $serie = Serie::get();
        // dd($classe);
         $serie = Serie::with('technique')->get();
        $classe = Classe::with('technique')->get();
        // $serie = Serie::find($id);
        // $matiere = $serie->matieres()
        // ->get();

   
        
       
        return view('programme.showClasse',compact('serie','classe'));
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
