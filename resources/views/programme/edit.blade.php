@extends('layouts.backend')
@section('content')
<div class="container">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Modifier Le Programme</h1>
 <form class="col-md-6 col-lg-12" action="{{ route('update.programme',$programme->id) }}" method="POST">
  @csrf
  <div class="form-group">
   <label for="NOM">Nom Programme</label>
   <input type="text" class="form-control" id="NOM" name="NOM" value="{{ $programme->NOM }}">
   @error('NOM')<p class="text-danger">{{ $message }}@enderror</p>
  </div>

   <div class="form-group " >
        <label for="secteur">Secteur d'activité</label>
        <select name="secteur_id" id="id" class="form-control">
          <option value="">Choisir secteur</option>
          @foreach($secteur as $sect)
          <option value="{{ $sect->id }}">{{ $sect->TYPE
           }}</option>
          @endforeach
        </select>
        @error('secteur_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>

  <div class="form-row">
   <div class="form-group col-md-4 col-lg-6">
    <label for="filiere">Filiere</label>
    <select name="filiere_id" id="filiere_id" class="form-control" value="{{ $programme->filiere->NOM }}">
     <option value="" disabled>Choisir la filiére</option>
     @foreach($filiere as $filieres)
     <option value="{{ $filieres->id }}">{{ $filieres->NOM }}</option>
     @endforeach
    </select>
    @error('filiere_id')<p class="text-danger">{{ $message }}@enderror</p>

   </div>

   <div class="form-group col-md-4 col-lg-6">
    <label for="status">Status</label>
    <select name="statu_id" id="statu_id" class="form-control" value="{{ $programme->statu->TYPE }}">
     <option value="" disabled>Choisir Statut</option>
     @foreach($statut as $stat)
     <option value="{{ $stat->id }}">{{ $stat->TYPE }}</option>
     @endforeach
    </select>
    @error('statu_id')<p class="text-danger">{{ $message }}@enderror</p>
   </div>
  </div>


  <div class="form-group">
   <label for="modalite">Modalité</label>
   <select name="modalite_id" id="modalite_id" class="form-control" value="{{ $programme->modalite->TYPE }}">
    <option value="" disabled>Choisir Modalité</option>
    @foreach($modalite as $mod)
    <option value="{{ $mod->id }}">{{ $mod->TYPE }}</option>
    @endforeach
   </select>
   @error('modalite_id')<p class="text-danger">{{ $message }}@enderror</p>
  </div>

  <div class="form-group">
   <label for="validation">Validation</label>
   <select name="validation_id" id="validation_id" class="form-control" value="{{ $programme->validation->NOM }}">
    <option value="" disabled>Validation</option>
    @foreach($validation as $val)
    <option value="{{ $val->id }}">{{ $val->NOM }}</option>
    @endforeach
   </select>
   @error('validation_id')<p class="text-danger">{{ $message }}@enderror</p>
  </div>

  <div class="form-group">
   <label for="partenaire">Partenaire</label>
   <select name="partenaire_id" id="partenaire_id" class="form-control" value="{{ $programme->partenaire->NOM }}">
    <option value="" disabled>Parteneaire</option>
    @foreach($partenaire as $part)
    <option value="{{ $part->id }}">{{ $part->NOM }}</option>
    @endforeach
   </select>
   @error('partenaire_id')<p class="text-danger">{{ $message }}@enderror</p>
  </div>

  <div class="form-group col-md-8">
   <button type="submit" class="btn col-lg-6 mt-3 btn-lg text-white" style="background-color:rgb(246, 120, 58);">Modifier</button>
  </div>
 </form>
</div>
@endsection