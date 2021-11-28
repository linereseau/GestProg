@extends('layouts.template')
@section('content')



<!-- Page Content -->
<div class="content mb-6">
   <!-- Full Table -->

   <div class="block-content">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table-vcenter ">

            <thead style="background-color:  #020031;">
               <th class="text-white">Filieres</th>
               <th class="text-white">Programmes</th>
               <th class="text-white">Niveaux</th>
               <th class="text-white">Classe pédagoqigue</th>
               <th class="text-white">Annee academique</th>

               <th class="text-white">Statistiques</th>
            </thead>

            <tbody>
               @foreach($eta_pro as $prog)
               @foreach($etablissement as $eta)
               <tr>
                  <td class="text-center ">
                     {{$prog->programme->filiere->NOM}}
                  </td>
                  <td class="text-center ">
                     {{$prog->programme->NOM}}
                  </td>
                  <td class="text-center ">
                     {{$prog->niveau->TYPE}}
                  </td>
                 <td class="text-center">
                {{ $prog->anne_aca }}
               </td>
               
                  <td class="text-center">
                {{ $prog->anne_niv}}
               </td>
               

                  <td>
                     <a href="{{ route('prog.info',[$prog->programme->id ,$prog->etablissement_id,$eta->departement_id,$eta->departement->region_id,$prog->niveau_id,$prog->anne_aca,$prog->anne_niv]) }}" class="btn text-white" style="background-color:rgb(246, 120, 58);">Voir</a>
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
