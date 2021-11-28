<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Etablissement;
use App\Models\Programme;



class PageController extends Controller
{
    //
     public function index()
    {
       
        
        $filiere = Filiere::all();
        $programme = Programme::all();
         $niveau = Niveau::all();
        $etablissement = Etablissement::all();
        return view('pages.acceuil', compact(
            
            'filiere',
            'programme',
            
            'niveau',
            'etablissement',   
        ));
        
    }

    
}
