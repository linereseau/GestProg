@extends('layouts.template')
@section('content')

<!-- Hero -->
<div class="bg-body-light">
 <div class="content content-full">
  <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
   <h1 class="flex-sm-fill h3 my-2 text-center" style="color:  #020031;">
    @foreach($dep_et as $dep)
    Liste des établissements dans le département de {{ $dep->NOM_DEPT }}
    @endforeach
   </h1>
  </div>
 </div>
</div>
<!-- END Hero -->


<!-- Page Content -->
<div class="content mb-10 mt-4">
 <!-- Full Table -->

 <div class="block-content">
  <div class="table-responsive">
   <table class="table table-bordered table-striped table-vcenter ">

    <thead class="" style="background-color:  #020031;">
     <th class="text-white ">Nom Etablissement</th>
     <th class="text-white">Adresse</th>
     <th class="text-white">Email</th>
     <th class="text-white">Telephone</th>
     <th class="text-white">Statistiques Programmes</th>
     <th class="text-white">Statistiques Filiéres</th>
     <th class="text-white">Statistiques Secteurs</th>

    </thead>

    <tbody>
     @foreach($depart as $departs)
     <tr>
      <td class="text-center">
       {{ $departs->NOM_ETA}}
      </td>

      <td class="text-center ">
       {{ $departs->Adresse}}
      </td>

      <td class="text-center ">
       {{ $departs->EMAIL_ETBLMT}}
      </td>

      <td class="text-center ">
       {{ $departs->TEL_ETBLMT}}
      </td>

      <td class="text-center ">
       <a href="{{ route('prog.eta',$departs->id) }}" class="btn  text-white" style="background-color:rgb(246, 120, 58);">Consulter</a>
      </td>
      <td class="text-center ">
       <a href="{{ route('prog.eta1',$departs->id) }}" class="btn  text-white" style="background-color:rgb(246, 120, 58);">Consulter</a>
      </td>
      <td class="text-center ">
       <a href="{{ route('prog.eta2',$departs->id) }}" class="btn  text-white" style="background-color:rgb(246, 120, 58);">Consulter</a>
      </td>

     </tr>
     @endforeach
    </tbody>

   </table>
  </div>
 </div>

</div>

<!-- END Full Table -->

@endsection