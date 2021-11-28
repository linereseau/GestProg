@extends('layouts.backend1')
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
     <th class="text-white ">Actions</th>



    </thead>

    <tbody>
     @foreach($programme as $info)
     <tr>
      <td class="text-center">
       {{ $info->Effectif_garcon }}
      </td>

      <td class="text-center">
       {{ $info->Effectif_fille }}
      </td>
      <td class="text-center">
       {{ $info->anne_aca }}
      </td>
      <td class="text-center">
       {{ $info->anne_niv}}
      </td>
      <td class="text-center">
        <div class="">

            <a href="{{route('GesEtat.EditEtat',$info->id )}}" class="btn btn-sm " data-toggle="tooltip">
                 <i class="fa fa-fw fa-pencil-alt"></i>
             </a>
            <a href=" {{route('delete.sta',$info->id)}}" onclick="return confirm('Voulez vous supprimé')" class="btn btn-sm" data-toggle="tooltip">
                        <i class="fa fa-fw fa-times"></i>
            </a>
        </div>
      </td>
     </tr>
     @endforeach
    </tbody>

   </table>
  </div>
 </div>
</div>
@endsection
