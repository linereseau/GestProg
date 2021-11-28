@extends('layouts.template')
@section('content')



<!-- Page Content -->
<div class="content mb-6">
   <!-- Full Table -->

   <div class="block-content">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table-vcenter ">

            <thead style="background-color:  #020031;">
               <th class="text-white">Secteurs d'activités</th>
               
               <th class="text-white">Année académique</th>
               <th class="text-white">Statistiques</th>
            </thead>

            <tbody>
               @foreach($eta_pro as $prog)
               @foreach($etablissement as $eta)
               <tr>
                  <td class="text-center ">
                     {{$prog->programme->secteur->TYPE ??''}}
                  </td>
                 <td class="text-center">
                {{ $prog->anne_niv}}
               </td>
                  <td>
                     <a href="{{ route('prog.info2',[$prog->programme->secteur->id ??'',$prog->etablissement_id,$eta->departement_id,$eta->departement->region_id,$prog->anne_niv])}}" class="btn text-white" style="background-color:rgb(246, 120, 58);">Voir</a>
                  </td>
               </tr>
               @endforeach
               @endforeach
            </tbody>

         </table>
      </div>
   </div>

</div>

<!-- END Full Table -->

@endsection
