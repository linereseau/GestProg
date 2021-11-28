@extends('layouts.template')

@section('content')

<h1 class="text-center" style="color:rgb(246, 120, 58)" ;>Ajouter référentiel par niveau</h1>

<div class=" container mb-10 mt-4 ">
 <form action=" {{ route('storeRef') }}" method="post" enctype="multipart/form-data" class="dropzone">
  @csrf

  <div class="from-group">
   <label for="">Programme</label>
   <select name="programme_id" id="" class="form-control">
    <option value="">Choisir</option>
    @foreach($programme as $pro)
     <option value="{{ $pro->id }}">{{ $pro->NOM }}</option>
    @endforeach
   </select>
  </div>


  <div class="from-group">
   <label for="">Réferentiel</label>
   <input type="file" name="NOMFICHE[]" class="form-control" multiple>
  </div>



  <div class="from-group mt-3">
   <label for="" class="">Niveau</label>
   <select name="niveau_id" id="" class="form-control">
    <option value="" disabled>choisir le Niveau</option>
    @foreach($programme as $programmes)
    @foreach($programmes->niveau as $niveaux)
    <option value="{{ $niveaux->id }}">{{ $niveaux->TYPE }}</option>
    @endforeach
    @endforeach

   </select>
  </div>

  <div class="from-group mt-4">
   <button type="submit" class="btn text-white" style="background-color:rgb(246, 120, 58)">Enregistrer</button>
  </div>

 </form>
</div>

@endsection