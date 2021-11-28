 @extends('layouts.template')
 @section('content')

 <h2 class="text-center mt-5" style="color:rgb(246, 120, 58);">Programmes techniques classés par série</h2>

 <!-- Page Content -->
 <div class="content">
     <div class="row mb-6">
         @foreach( $serie as $series )
         <div class="col-md-6 col-xl-3">
             <!-- Default Position Primary -->
             <div class="block">
                 <div class="block-content block-content-full ribbon ribbon-primary">
                     <div class="text-center text-white py-4" style="background-color:rgb(246, 120, 58);">
                         <div class="block-content  mt-1 p-2  dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <h4 class=" mb-0">Série{{ $series->nomSerie }}</h4>
                             <span class="mt-2">Voir Matiéres</span>
                         </div>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                             @foreach($series->matieres as $mat)
                             <h4 class="dropdown-item" style="color:  #020031;">{{ $mat->nomMatiere }}</h4>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>


             <!-- END Default Position Primary -->
         </div>
         @endforeach
     </div>

 </div>



 @stop