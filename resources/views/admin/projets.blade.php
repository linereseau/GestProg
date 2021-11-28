@extends('layouts.backend')
@section('content')
<div class="container">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Ajouter un nouveau projet</h1>
 @if(session('success'))
 <div class="alert alert-success">
  {{ session('success') }}
 </div>
 @endif
 <form class="" action="{{ route('projets.save') }}" method="POST">
  @csrf
  <div class="row">

   <div class="form-group col-md-6">
    <label for="NOM">Projets</label>
    <input type="text" class="form-control" id="NOMProjet" name="NOMProjet">
    @error('NOMPROJET')<p class="text-danger">{{ $message }}@enderror</p>
   </div>

   <div class="form-group col-md-6">
    <label for="NOM">PTF</label>
    <input type="text" class="form-control" id="PFT" name="PFT">
    @error('PFT')<p class="text-danger">{{ $message }}@enderror</p>
   </div>
  </div>

  <div class="row">
   <div class="form-group col-md-6">
    <label for="NOM">ETAT</label>
    <input type="text" class="form-control" id="ETAT" name="ETAT">
    @error('ETAT')<p class="text-danger">{{ $message }}@enderror</p>
   </div>

   <div class="form-group col-md-6">
    <label for="NOM">Période</label>
    <input type="text" class="form-control" id="PERIODE" name="PERIODE" placeholder="2000-2001">
    @error('PERIODE')<p class="text-danger">{{ $message }}@enderror</p>
   </div>

  </div>

  <div class="form-group">
   <label for="NOM">Zones d'intervation</label>
   <textarea class="form-control" id="ZONES" name="ZONES"></TEXtarea>
   @error('ZONES')<p class="text-danger">{{ $message }}@enderror</p>
  </div>


  <div class="form-group">
   <label for="NOM">Types d'intervation/Activités</label>
   <textarea type="text" class="form-control" id="ACTIVITE" name="ACTIVITE"></textarea>
   @error('ACTIVITE')<p class="text-danger">{{ $message }}@enderror</p>
  </div>





  <div class="form-group">
   <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(246, 120, 58);">Enregister</button>
  </div>
 </form>
</div>
@endsection