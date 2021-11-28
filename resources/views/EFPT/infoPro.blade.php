@extends('layouts.template')
@section('content')

<!-- Hero -->
<div class="bg-body-light mt-3">
 <div class="content content-full">
  <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
   <h1 class="flex-sm-fill h3 my-2 text-center" style="color:  #020031;">
    @foreach($pro as $pros )
    Statistiques du programmme {{ $pros->NOM }}
    @endforeach
   </h1>
  </div>
 </div>
</div>
<!-- END Hero -->


<!-- Page Content -->
<div class=" content mb-6">
 <!-- Full Table -->

 <div class="block-content">
  <div class="table-responsive">
   <table class="table table-bordered table-striped table-vcenter ">

    <thead style="background-color:  #020031;">
     <th class="text-white ">Effectif Garçons</th>
     <th class="text-white ">Effectif Filles</th>
     <th class="text-white ">Classe Pédagogique</th>
     <th class="text-white ">Année Académique</th>


    </thead>

    <tbody>
     @foreach($programme as $info)
     <tr>
      <td class="text-center">
       {{ $info->Effectif_garcon }}
      </td>

      <td class="text-center ">
       {{ $info->Effectif_fille }}
      </td>
      <td class="text-center">
       {{ $info->anne_aca }}
      </td>
      <td class="text-center">
       {{ $info->anne_niv}}
      </td>
     </tr>
     @endforeach
    </tbody>

   </table>
  </div>
 </div>
</div>

<!-- Page Content -->
<div class="content content-narrow">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Statistiques Départementales</h1>
 <!-- Stats -->
 <div class="row">
  <div class="col-6 col-md-3 col-lg-6 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Garçons</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($dep_eta_sGarcon) }}</div>
    </div>
   </a>
  </div>

  <div class="col-6 col-md-3 col-lg-6 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Filles</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($dep_eta_sFille) }}</div>
    </div>
   </a>
  </div>
 </div>
 <!-- END Stats -->
</DIV>
<!-- END Full Table -->

<!-- Page Content -->
<div class="content content-narrow mb-10 mt-3">
 <h1 class="text-center" style="color:rgb(246, 120, 58);">Statistiques Régionales</h1>
 <!-- Stats -->
 <div class="row">
  <div class="col-6 col-md-3 col-lg-12 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Garçons</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($sGarcon) }}</div>
    </div>
   </a>
  </div>

  <div class="col-6 col-md-3 col-lg-12 col-xl-6">
   <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
    <div class="block-content block-content-full">
     <div class="font-size-sm font-w600 text-uppercase">Effectifs Filles</div>
     <div class="font-size-h2 font-w400 text-dark">{{ ($sFille) }}</div>
    </div>
   </a>
  </div>
 </div>
 <!-- END Stats -->

 <!-- Page Content -->
 <div class="content content-narrow mb-10 mt-3">
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Statistiques Nationales</h1>
  <!-- Stats -->
  <div class="row">
   <div class="col-6 col-md-3 col-lg-12 col-xl-6">
    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
     <div class="block-content block-content-full">
      <div class="font-size-sm font-w600 text-uppercase">Effectifs Garçons</div>
      <div class="font-size-h2 font-w400 text-dark">{{ ($nationalGarcon) }}</div>
     </div>
    </a>
   </div>

   <div class="col-6 col-md-3 col-lg-12 col-xl-6">
    <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
     <div class="block-content block-content-full">
      <div class="font-size-sm font-w600 text-uppercase">Effectifs Filles</div>
      <div class="font-size-h2 font-w400 text-dark">{{ ($nationalFille) }}</div>
     </div>
    </a>
   </div>
  </div>
  <!-- END Stats -->
 </DIV>

 @endsection