<?php

use Illuminate\Support\Facades\Auth;

Route::get('/home', function () {
    

    $filiere = Filiere::all();
    $programme = Programme::all();
    $etablissement = Etablissement::all();

    //dd($users);

    return view('ut/home', compact('filiere', 'programme', 'etablissement'));
});




