@extends('layouts.backend')
@section('content')
<div class="container">
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Ajouter un nouveau programme</h1>
  <form class="col-md-12 col-lg-10 offset-1" action="{{ route('store.programme') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="NOM">Programme/metier</label>
      <input type="text" class="form-control" id="NOM" name="NOM">
      @error('NOM')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" id="description" class="form-control"></textarea>
      @error('description')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
<div class="form-group " >
        <label for="secteur">Secteur d'activités</label>
        <select name="secteur_id" id="id" class="form-control">
          <option value="">Choisir secteur</option>
          @foreach($secteur as $sect)
          <option value="{{ $sect->id }}">{{ $sect->TYPE }}</option>
          @endforeach
        </select>
        @error('secteur_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="filiere">Filiere</label>
        <select name="filiere_id" id="filiere_id" class="form-control">
          <option value="">Choisir la filiére</option>
          @foreach($filiere as $filieres)
          <option value="{{ $filieres->id }}">{{ $filieres->NOM }}</option>
          @endforeach
        </select>
        @error('filiere_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>

      <div class="form-group col-md-6">
        <label for="status">Statut</label>
        <select name="statu_id" id="statu_id" class="form-control">
          <option value="">Choisir Statut</option>
          @foreach($statut as $stat)
          <option value="{{ $stat->id }}">{{ $stat->TYPE }}</option>
          @endforeach
        </select>
        @error('statu_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
    
    <div class="form-group">
      <label for="niveau_id">Niveau</label>
      <select name="niveau_id[]" id="niveau_id" class="form-control">
        <option value="">Choisir Niveau</option>
        @foreach($niveau as $niv)
        <option value="{{ $niv->id }}">{{ $niv->TYPE }}</option>
        @endforeach
      </select>
    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label for="modalite">Modalité</label>
        <select name="modalite_id" id="modalite_id" class="form-control">
          <option value="">Choisir Modalité</option>
          @foreach($modalite as $mod)
          <option value="{{ $mod->id }}">{{ $mod->TYPE }}</option>
          @endforeach
        </select>
        @error('modalite_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>

      <div class="form-group col-md-4">
        <label for="validation">Validation</label>
        <select name="validation_id" id="validation_id" class="form-control" >
          <option value="">Choisir validation</option>
          @foreach($validation as $val)
          <option value="{{ $val->id }}">{{ $val->NOM }}</option>
          @endforeach
        </select>
        @error('validation_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>

      <div class="form-group col-md-4">
        <label for="partenaire">Partenaire</label>
        <select name="partenaire_id" id="partenaire_id" class="form-control">
          <option value="">Choisir partenaire</option>
          @foreach($partenaire as $part)
          <option value="{{ $part->id }}">{{ $part->NOM }}</option>
          @endforeach
        </select>
        @error('partenaire_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
     

    </div>


    <div class="form-group col-md-12 col-lg-10 offset-1">
      <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(246, 120, 58);">Enregister</button>
    </div>
  </form>
</div>
@endsection