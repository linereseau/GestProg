@extends('layouts.backend')

@section('content')

<h1 class="text-center" style="color:rgb(246, 120, 58)" ;>Ajouter un nouveau document</h1>
 @if(session('success'))
 <div class="alert alert-success">
  {{ session('success') }}
 </div>
 @endif
<div class=" container mb-10 mt-4 ">

 <form action="{{ route('document.save')}} " method="post" enctype="multipart/form-data" class="dropzone">
  @csrf

  <div class="col">
        <label for="">Types de documents</label>
        <select id="" name="type" class="form-control">
          <option value="Guides et Manuelle de procédures">Guides et Manuelles de procédures</option>
          <option selected="" value="Resoources Pédagogiques et Didactiques">Ressources Pédagogiques et Didactiques</option>
          <option value="Rapport et etudes">Rapport et etudes</option>
          <option value="Autres">Autres</option>
        </select>
        @error('statut')<p class="text-danger">{{ $message }}@enderror</p>
      </div>


  <div class="from-group">
   <label for="">Documents</label>
   <input type="file" name="NOMFICHE[]" class="form-control" multiple>
  </div>
  <div class="from-group mt-4">
   <button type="submit" class="btn text-white" style="background-color:rgb(246, 120, 58)">Enregistrer</button>
  </div>

 </form>
</div>

@endsection