
@extends('layouts.backend')
@section('content')



<div class="content mb-12">
<div class="block-content col-md-1 col-lg-9">
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Détails de la Demande </h1>

      <div class="table-responsive">
         <table class="table table-bordered table-striped table-vcenter " style="margin-left: 100px;">

            <thead style="background-color:  #020031;">
               <th class="text-white">Demandeur</th>
               <th class="text-white">Etablissement</th>
               <th class="text-white">Partenaire</th>
               <th class="text-white">Niveau</th>
               <th class="text-white">Motivation</th>
            </thead>

            <tbody>
               @foreach($utilisateur as $progra)
               <tr>
                  <td class="text-center ">
                    {{ $progra->utilisateur->type }}
                  </td>
                  <td class="text-center ">
                     {{ $progra->etablissement->NOM_ETA ??''}}
                  </td>
                  <td class="text-center ">
                      @if( $progra->utilisateur->type == "partenaire")
                      {{ $progra->partenaire->NOM }}
                       @endif
                  </td>
                 <td class="text-center">
               @foreach($progra->niveau as $niv)
                <p style="color:  #020031;">{{ $niv->TYPE }}</p>
                  @endforeach
               </td>
               <td class="text-center">
              {{ $progra->motivation }}
               </td>
                  
               </tr>
               @endforeach
               
            </tbody>

         </table>
      </div>
   </div>
 </div>

<!--div class="text-center">

 <h5>
  Demandeur : {{ $progra->utilisateur->type }}
 </h5>
 <h5>
  @if( $progra->utilisateur->type == "chef Etablissement")
  Etablissement :

  {{ $progra->etablissement->NOM_ETA }}
  @endif

 </h5>
 <h5>

  @if( $progra->utilisateur->type == "partenaire")
  Partenaire :
  @endif
  @if( $progra->utilisateur->type == "partenaire")
  {{ $progra->partenaire->NOM }}
  @endif

 </h5>

 <h5>
  Niveau : @foreach($progra->niveau as $niv)
  <p style="color:  #020031;">{{ $niv->TYPE }}</p>
  @endforeach
 </h5>

 <H5>
  Motivation :
  <p>{{ $progra->motivation }}</p>
 </H5>
</div-->
