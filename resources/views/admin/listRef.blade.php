@extends('layouts.backend')
@section('content')

<!-- Page Content -->
<div class="content">
 <!-- Full Table -->
 <div class="block">
  @if(session('success'))
  <div class="alert alert-success">
   {{ session('success') }}
  </div>
  @endif
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste Des REFERENTIELS</h1>
  <div class="block-content">
   <div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
     <thead style="color:rgb(246, 120, 58);">
      <tr>
       <th class="">REFERENTIEL</th>
       <th class="">NIVEAU</th>
       <th class="">PROGRAMME</th>
      </tr>
     </thead>

     <tbody>
      @foreach($referentiel as $referentiels)
      <tr>
       <td>{{ $referentiels->NOMFICHE }}</td>
       <td>{{ $referentiels->niveau->TYPE }}</td>
       <td>{{ $referentiels->programme->NOM }}</td>
      </tr>
      @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>


@endsection