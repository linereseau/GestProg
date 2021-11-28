@extends('layouts.backend')

@section('content')



<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
      <h1 class="flex-sm-fill h3 my-2 text-center" style="color:rgb(246, 120, 58);">
        Liste des programmes demandés
      </h1>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

  <!-- Full Table -->
  <div class="block">

    <div class="block-content">

      <div class="table-responsive">
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
        <table class="table table-bordered table-striped table-vcenter mb-6" style="color:rgb(246, 120, 58);">
          <thead>
            <tr>
              <th>Programme/Métier</th>
              <th>Filiere</th>
              <th>Demandeur</th>
              <th>Appuis</th>
              <th>Ressource</th>
              <th>Motif</th>
              <th>etat</th>
              <th>Référentiels</th>
              <th>Action</th>
            </tr>
          </thead>
          @foreach($demande as $demandes)
          <tbody>
            <tr>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href="">{{ $demandes->programme->NOM }}</a>
              </td>

              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href="">{{ $demandes->filiere->NOM }}</a>
              </td>

              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href="">{{ $demandes->utilisateur->type }}</a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href="">{{ $demandes->appui }}</a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href="">{{ $demandes->RessourceNecessaire }}</a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href="">{{ $demandes->motif }}</a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                <a href="">{{ $demandes->etat }}</a>
              </td>
              <td class="font-w600 font-size-sm" style="color: #020031;">
                @foreach($demandes->referentiel as $refe)
                <a href="">{{ $refe->NOMFICHE }}</a>
                @endforeach
              </td>
              <td class="pb-2">
                <a href="{{ route('voirplus',$demandes->id) }}" class="btn mb-2 text-white" style="background-color:rgb(246, 120, 58);">Voir plus</a>
                <a href=" {{ route('validerProgramme',$demandes->id) }}" class="btn btn-success">Valider</a>
                <a href="{{ route('rejeterProgramme',$demandes->id) }}" class="btn btn-danger mt-1">Rejeter</a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        {{ $demande->links() }}
      </div>
    </div>
  </div>
  <!-- END Full Table -->
  @endsection