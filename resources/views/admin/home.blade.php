@extends('layouts.backend')

@section('content')
<!-- 
<!-- Hero -->
<div class="bg-image overflow-hidden" style="background-image: url('assets/media/photos/photo3@2x.jpg');">
 <div class="bg-default">
  <div class="content content-narrow content-full">
   <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
    <div class="flex-sm-fill">
     <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Tableau de Bord</h1>
     <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Bienvenue dans la page d'administration</h2>
    </div>
    <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
    </div>
   </div>
  </div>
 </div>
</div>


<!-- Page Content -->
<div class="content content-narrow">
 <!-- Stats -->
 <div class="row">
  <div class="col-6 col-md-3 col-lg-6 col-xl-3">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Utilisateurs</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($user) }}</div>
    </div>
   </a>
  </div>
  <div class="col-6 col-md-3 col-lg-6 col-xl-3">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Filieres</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($filiere) }}</div>
    </div>
   </a>
  </div>
  <div class="col-6 col-md-3 col-lg-6 col-xl-3">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Programmes</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($programme) }}</div>
    </div>
   </a>
  </div>
  <div class="col-6 col-md-3 col-lg-6 col-xl-3">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Partenaires</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($partenaire) }}</div>
    </div>
   </a>
  </div>

  <div class="col-6 col-md-3 col-lg-6 col-xl-3">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Niveaux</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($niveau) }}</div>
    </div>
   </a>
  </div>
  <div class="col-6 col-md-3 col-lg-6 col-xl-3">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Etablissements</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($etablissement) }}</div>
    </div>
   </a>
  </div>
 </div>
 <!-- END Stats -->
 @endsection