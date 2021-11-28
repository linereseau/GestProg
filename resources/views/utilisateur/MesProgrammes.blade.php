@extends('layouts.template')
@section('content')


<!-- Hero -->
<div class="bg-body-light">
       <div class="content content-full">
              <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                     <h1 class="flex-sm-fill h3 my-2 text-center" style="color:rgb(246, 120, 58);">
                            Mes Programmes <span class="badge badge-info"></span>
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
                            <table class="table table-bordered table-striped table-vcenter">
                                   <thead>
                                          <tr>
                                                 <th>Filiere</th>
                                                 <th>Programme/Metier</th>
                                                 @if(Auth::guard('utilisateur')->user()->type == "chef Etablissement")
                                                 <th>Etablissement</th>
                                                 @endif
                                                 <!--th>Appuis</th>
                                                 @if(Auth::guard('utilisateur')->user()->type == "partenaire")
                                                 <th>Partenaire</th>
                                                 @endif
                                                 <th>Ressource</th-->
                                                 <th>Niveau</th>
                                                 <th>Motif</th>
                                                 <th>Nom referentiel</th>
                                                 <th class="">etat</th>

                                          </tr>
                                   </thead>

                                   <tbody>
                                          @foreach($utilisateurProgramme as $progra)
                                          <tr>

                                                 <td class=" font-w600 font-size-sm">
                                                        <p style="color:  #020031;">{{ $progra->filiere->NOM }}</p>
                                                 </td>

                                                 <td class="font-w600 font-size-sm">
                                                        <P style="color:  #020031;">{{ $progra->programme->NOM }}</P>
                                                 </td>


                                                 @if(Auth::guard('utilisateur')->user()->type == "chef Etablissement")
                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;">{{ $progra->etablissement->NOM_ETA }}</p>
                                                 </td>
                                                 @endif

                                                 <!--td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;">{{ $progra->appui}}</p>
                                                 </td-->

                                                 @if(Auth::guard('utilisateur')->user()->type == "partenaire")

                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;">{{ $progra->partenaire->NOM}}</p>
                                                 </td>

                                                 @endif



                                               

                                                 
                                                 

                                                 <td class="font-w600 font-size-sm">
                                                        @foreach($progra->niveau as $niv)
                                                  <p style="color:  #020031;">{{ $niv->TYPE }}
                                                        @endforeach
                                                        </p>
                                                        
                                                 </td>

                                                 <td class="font-w600 font-size-sm">
                                                        <p style="color:  #020031;">{{ $progra->motif}}</p>
                                                 </td>





                                                 <td class="font-w600 font-size-sm">

                                                        @foreach($progra->referentiel as $ref)

                                                        <p style="color:  #020031;">{{ $ref->NOMFICHE}}</p>


                                                        @if($progra->etat == 'validé')
                                                        <a href="{{ route('getReferentiel',$ref->File) }}" class="btn btn-success">Télécharger</a>
                                                        @else
                                                        <button class="btn btn-danger" disabled>Verrouiller</button>
                                                        @endif
                                                        @endforeach

                                                 </td>


                                                 <td class="font-w600 font-size-sm">
                                                        <button class="text-white btn" style="background-color:rgb(246, 120, 58); border-radius:4px">{{ $progra->etat}}</button>
                                                 </td>


                                          </tr>
                                          @endforeach
                                   </tbody>
                            </table>
                     </div>
              </div>
       </div>
</div>

@endsection