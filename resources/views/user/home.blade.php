@extends('layouts.backend1')
@section('content')
<h2 class="text-center mb-3" style="color:rgb(246, 120, 58);">Renseignement établissement</h2>
<div class="container col-md-12 col-lg-9">
  <form action="{{ route('show.RE') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="NOM_ETA">Etablissement</label>
      <input type="hidden" name="user_id" value="{{Auth::user()->id}} ">
      <input type="text" class="form-control" id="NOM_ETA"placeholder="Nom"  name="NOM_ETA">
      @error('NOM_ETA')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group">
      <label for="departement_id">Département</label>
      <select name="departement_id" id="departement_id" class="form-control">
        <option value="">Choisir le departement</option>
        @foreach($departement as $departs)
        <option value="{{ $departs->id }}">{{ $departs->NOM_DEPT }}</option>
        @endforeach
      </select>
      @error('departement_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group">
      <label for="TEL_ETBLMT">Téléphone</label>
      <input type="text" name="TEL_ETBLMT" id="TEL_ETBLMT" placeholder="(+221)" class="form-control">
      @error('TEL_ETBLMT')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group">
      <label for="EMAIL_ETBLMT">Email</label>
      <input type="email" name="EMAIL_ETBLMT" id="EMAIL_ETBLMT" placeholder="azxy@adresse.com"  class="form-control">
      @error('EMAIL_ETBLMT')<p class="text-danger">{{ $message}}@enderror</p>
    </div>


    <div class="form-group">
      <label for="Adresse">Adresse</label>
      <input type="text" name="Adresse" id="Adresse" placeholder="adresse" class="form-control">
      @error('Adresse')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div>
      <button type="submit" class="btn mb-3 col-md-12 col-lg-9 offset-1 text-white" style="background-color:rgb(246, 120, 58);">Enregistrer</button>
    </div>

  </form>
</div>
<!-- END Main Container -->
@stop