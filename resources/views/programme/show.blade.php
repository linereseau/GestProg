 @extends('layouts.template')
 @section('content')

 @foreach($fil as $fils)
 <h3 class="text-center pt-4" style="color:#F37335">Filiére {{$fils->NOM}}</h3>
 @endforeach
 <a href="/programme.programmeProf" class="btn btn-secondary mb-4"style="position:relative;left:90%; ">Retour</a>

 <div class="row mb-2 mt-5 card-group">
   @foreach($fil_prog as $progs)

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
             Validation:{{$progs->validation->NOM}}
             <br><br>
             Status:{{$progs->statu->TYPE}}
             <br><br>
             Partenaire:{{$progs->partenaire->NOM}}
           </h5>
         </div>

         <a href="{{ route('show.description',$progs->description) }}" class="btn mt-2" style="background-color:rgb(246, 120, 58);"><span style="color:  #020031;">Voir description</span></a>
         <a href="{{ route('getidProgramme',$progs->id) }}" class=" btn mt-2"><span style="color:rgb(246, 120, 58);"> Demander le programme</span></a>
       </div>
     </div>
   </div>
   @endforeach
 </div>
 {{ $fil_prog->links() }}
 @endsection