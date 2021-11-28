 @extends('layouts.template')
 @section('content')


 <div class="content content-boxed">
     <div class="row row-deck py-4">
         @foreach($description as $des)
         <!-- Course -->
         <div class="col-md-12">
            
                 <h4 class="mb-9">{{ $des->description}}</h4>
             </div>
     <a href="/programme.programmeProf" class="btn btn-secondary mb-4">Retour</a>
         
         <!-- END Course -->
         @endforeach
     </div>
 </div>
 @stop