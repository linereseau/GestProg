 @extends('layouts.template')
 @section('content')

 @if(session('success'))
 <div class="alert alert-success">{{ session('success') }}</div>
 @endif

 @if(!Auth::guard('utilisateur')->user())
 <a href="/utilisateur/login" class="pt-2" style="color:#F37335">
   <span><i class="fa fa-shopping-basket"></i></span>Mon espace
 </a>
 @endif
 <form action="{{  route('programme.rechercher') }}"  class="d-flex mb-2 mr-3" style="position:relative;left:75%; ">
     <div class="from-group mb-0 mr-1" >
      <input type="search" class="form-control" id="recherche" placeholder="rechercher...." name="recherche">
     </div>
     <button href="" type="submit" class="btn" style="background-color:rgb(246, 120, 58);"><i class="fa fa-search text-white"></i></button>
    </form>

 <!-- Button trigger modal -->
 <button type="button" class="btn mt-7 col-sm-12" data-toggle="modal" style="background-color:#F37335" data-target="#exampleModal">
   <span style="color:  #FFFF;">filtrer par filière</span>
 </button>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       @foreach($fil as $fils)
       <div class="modal-body h-20">
         <a href="{{ route('show.programme',$fils->id) }}">{{ $fils->NOM }}</a>
       </div>
       @endforeach
       
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
       </div>
     </div>
   </div>
 </div>
 




 <div class="row mb-2 mt-5 card-group">
   @foreach($prog as $progs)

   <div class="col-md-4 col-lg-3 mb-3 card-group">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative card-group">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-success"></strong>
         <h5 class="mb-0" style="color:rgb(246, 120, 58);">{{ $progs->NOM }}</h5>
         <hr style="background-color: #020031;">
         <div class="mb-auto">
           <h5>
             Niveau: @foreach($progs->niveau as $p)
             {{$p->TYPE}} 
             @endforeach
             <br><br>
             Modalité: {{$progs->modalite->TYPE}}
             <br><br>
             Validation: {{$progs->validation->NOM}}
             <br><br>
             Statut: {{$progs->statu->TYPE}}
             <br><br>
             Partenaire: {{$progs->partenaire->NOM}}
           </h5>
         </div>

         <a href="{{ route('show.description',$progs->description) }}" class="btn mt-2" style="background-color:rgb(246, 120, 58);"><span style="color:  #020031;">Voir description</span></a>
         <a href="{{ route('getidProgramme',$progs->id) }}" class=" btn mt-2"><span style="color:rgb(246, 120, 58);"> Demander le programme</span></a>
       </div>
     </div>
   </div>
   @endforeach
 </div>
 {{ $prog->links() }}
 @stop
