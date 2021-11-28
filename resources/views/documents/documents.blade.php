 @extends('layouts.template')
 @section('content')

 <!-- Hero -->
 <div class="bg-body-light">
     <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
             <h1 class="flex-sm-fill h3 my-2 text-center" style="color:rgb(246, 120, 58);">
                 DOCUMENTATIONS
             </h1>
         </div>
     </div>
 </div>
 <!-- END Hero -->

 <div class="row mb-7 mt-3">
     <!-- Subscribe -->
     <div class="col-md-4 block block-rounded">
         <div class="block-content">
             <a class="btn btn-block btn-rounded mb-2 text-white" style="background-color:rgb(246, 120, 58);" href="">
                 Guides et Manuelles de procédures
             </a>
             <p class="font-size-sm text-center">
                 <a class="link-effect"> GUIDE FORMATEUR</a>
             </p>
             <a class="btn btn-block text-white push" style="background-color:#020031" ; href="files/guide_formateur.pdf">
                 <i class="fa fa-download mr-1"></i> Voir Document
             </a>

             <p class="font-size-sm text-center">
                 <a class="link-effect"> GUIDE EVALUATION</a>
             </p>
             <a class="btn btn-block text-white push" style="background-color:#020031" ; href="files/Guide_EVALUATION.pdf">
                 <i class="fa fa-download mr-1"></i> Voir Document
             </a>
         </div>
     </div>

     <div class="col-md-4 block block-rounded">
         <div class="block-content">
             <a class="btn btn-block btn-rounded mb-2  text-white" style="background-color:rgb(246, 120, 58);" href="">Ressources Pédagogique et Didactique</a>
             <p class="font-size-sm text-center">
                 <a class="link-effect" href=""></a>
             </p>
             <a class="btn btn-block push text-white" style="background-color:#020031" ; href="">
                 <i class="fa fa-download mr-1"></i>Voir Document
             </a>
         </div>
     </div>

     <div class="col-md-4 block block-rounded">
         <div class="block-content">
             <a class="btn btn-block btn-rounded mb-2  text-white" style="background-color:rgb(246, 120, 58);" href="">Rapports et Etudes</a>
             <p class="font-size-sm text-center">
                 <a class="link-effect" href=""></a>
             </p>
             <a class="btn btn-block push text-white" style="background-color:#020031" ; href="">
                 <i class="fa fa-download mr-1"></i>Voir Document
             </a>
         </div>
     </div>

     <div class="col-md-4 block block-rounded">
         <div class="block-content">
             <a class="btn btn-block btn-rounded mb-2  text-white" style="background-color:rgb(246, 120, 58);" href="">Autres</a>
             <p class="font-size-sm text-center">
                 <a class="link-effect" href=""></a>
             </p>
             <a class="btn btn-block push text-white" style="background-color:#020031" ; href="">
                 <i class="fa fa-download mr-1"></i>Voir Document
             </a>
         </div>
     </div>
 </div>



 @endsection