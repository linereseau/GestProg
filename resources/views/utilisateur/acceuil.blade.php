@extends('layouts.template')
@section('content')

<h1 class="text-center mt-4">Direction de la formation professionnelle et technique</h1>
<h4 class="text-center">Formulaire de demande de ressources pédagogiques et didactiques de formation professionnelle et technique</h4>
<div class="col-md-6 col-lg-12 mb-10">
  <form action="{{ route('store.DP') }}" method="post">
    @csrf

    <div class="row">
      @if(Auth::guard('utilisateur')->user()->type == "chef Etablissement")
      <div class="col">
        <label for="">Etablissement</label>
        <select name="etablissement_id" id="etablissement_id" class="form-control">
          <option value="" disabled>Etablissement</option>
          @foreach($etablissement as $et)
          <option value="{{ $et->id }}">{{ $et->NOM_ETA }}</option>
          @endforeach
          @error('etablissement_id')<p class="text-danger">{{ $message }}@enderror</p>
        </select>
      </div>
      @endif
      <div class="col">
        <label for="">Statut</label>
        <select id="" name="statut" class="form-control">
          <option value="prive">Privé</option>
          <option selected="" value="public">Public</option>
          <option value="mefpa">Agrée par le MEFPA</option>
          <option value="programme">Projet programme</option>
          <option value="autre">Autre</option>
        </select>
        @error('statut')<p class="text-danger">{{ $message }}@enderror</p>
      </div>

      <div class="col">
        <label for="">Programme/métier</label>
        <select id="" name="programme_id" class="form-control">
          <option value="{{ $programme->id }}">{{ $programme->NOM  }}</option>
        </select>
      </div>
    </div>

    <div class="row pt-4">
      <!--div class="col">
        <label for="">Domaine ou secteur d’activité</label>
        <select name="secteur_id" id="id_secteur" class="form-control">
          <option value="" disabled>Secteur</option>
           
          <option value="{{ $programme->secteur->TYPE}}">{{ $programme->secteur->TYPE ??''}}
             
          </option>
        </select>
        @error('id_secteur')<p class="text-danger">{{ $message }}@enderror</p>
      </div-->

      <div class="col">
        <label for="">Filiére</label>
        <select name="filiere_id" id="" class="form-control">
          <option value="" disabled>Filiere</option>
          <option value="{{ $programme->filiere->id }}">{{ $programme->filiere->NOM }}</option>
        </select>
        @error('filiere_id')<p class="text-danger">{{ $message }}@enderror</p>
      </div>
    </div>


    <div class="form-group">
      <label for="">Motifs de la demande</label>
      <select name="motif" id="" class="form-control">
        <option value="adaptation">Adaptation</option>
        <option value="revision">Révision</option>
        <option value="Implantation">Implantation</option>
        <option value="existante">Mise à jour d’une ressource existante</option>
        <option value="autre">Autre</option>
      </select>
      @error('motif')<p class="text-danger">{{ $message }}@enderror</p>
    </div>




    @if(Auth::guard('utilisateur')->user()->type == "partenaire")
    <div class="form-group partenaire">
      <label for="">Partenaire</label>
      <select name="partenaire_id" id="partenaire_id" class="form-control ">
        <option value="" disabled>Partenaire</option>
        <option value="{{ $programme->partenaire->id }}">{{ $programme->partenaire->NOM }}</option>
      </select>
    </div>
    @endif



    <div class="form-group">
      <label for="">Niveau</label>
      <select name="niveau_id" id="" class="form-control">
        <option value="">Niveau</option>
        @foreach($programme->niveau as $niv)
        <option value="{{ $niv->id }}">{{ $niv->TYPE  }}</option>
        @endforeach
      </select>
      @error('niveau_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>





    <div class="form-group">
      <label for="">Réferentiel (Veillez choisir les reférentiels que vous demandez)</label>
      <select name="referentiel_id[]" id="" class="form-control" multiple>
        <option value="" disabled>Réferentiel</option>
      </select>
      @error('referentiel_id')<p class="text-danger">{{ ('Veuillez choisir au moins un référentiel') }}@enderror</p>
    </div>



    <div class="form-group tout">
      <label for="">Motivation de la demande</label>
      <textarea name="motivation" id="" class="form-control"></textarea>
      @error('motivation')<p class="text-danger">{{ $message }}@enderror</p>
    </div>



    <h4>Disposez-vous des ressources nécessaires pour le déploiement?
      <input type="radio" name="RessourceNecessaire" value="oui" id="oui"><label for="">OUI</label>
      <input type="radio" name="RessourceNecessaire" id="non" value="non"><label for="">NON</label>
      @error('RessourceNecessaire')<p class="text-danger">{{ $message }}@enderror</p>
    </h4>

    <h4>
      Souhaitez-vous un appui?
      <input type="radio" name="appui" id="oui" value="oui"><label for="">OUI</label>
      <input type="radio" name="appui" id="non" value="non"><label for="">NON</label>
      @error('appui')<p class="text-danger">{{ $message }}@enderror</p>
    </h4>

    <button type="submit" class="btn btn-success col-md-12">Enregistrer</button>
  </form>
</div>








<script src="{{ asset('js/jquery.js') }}"></script>
<script>
  $('document').ready(function() {
    $('select[name = "niveau_id"]').change(function() {
      $('select[name = "programme_id"]')
      var type = $('select[name = "niveau_id"]').val();
      var type1 = $('select[name = "programme_id"]').val();

      console.log(type1);

      if (type) {
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: "/getRefByNiveau/" + type + "/" + type1,
          Type: 'GET',
          dataType: 'json',
          success: function(data) {
            console.log(data);
            $('select[name="referentiel_id[]"]').show();
            var select = $('select[name="referentiel_id[]"]');

            select.empty();




            $.each(data, function(key, value) {
              select.append('<option value="' + value.id + '">' + value.NOMFICHE + '</option>');
            });

          }

        });
      } else {
        $('select[name="referentiel_id[]"]').hide();
        alert('vide');
      }
    });
  });
</script>
@endsection