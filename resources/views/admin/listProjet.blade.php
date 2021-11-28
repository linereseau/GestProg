@extends('layouts.template')
@section('content')



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Striped Dark Table</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
 .bs-example {
  margin: 20px;
 }
</style>


<body>
 <div class="bs-example">
  <table class="table table-striped table-light table-bordered">
   <thead>
    <tr>

    </tr>
   </thead>
   <tbody>
    <tr>

    </tr>

   </tbody>
  </table>
 </div>

 <!-- Page Content -->
 <div class="content">
  <!-- Full Table -->
  <div class="block">
   @if(session('success'))
   <div class="alert alert-success">
    {{ session('success') }}
   </div>
   @endif
  <marquee><h1 class="text-center" style="color:rgb(246, 120, 58);">Principaux projets financés par les partenaires au developement du pays </h1></marquee>
    

   <div>
    <form action="{{  route('projets.rechercher') }}" class="d-flex mb-2 mr-3">
     <div class="from-group mb-0 mr-1">
      <input type="search" class="form-control" id="recherche" placeholder="rechercher...." name="recherche">
     </div>
     <button href="" type="submit" class="btn" style="background-color:rgb(246, 120, 58);"><i class="fa fa-search text-white"></i></button>
    </form>
   </div>

   <div class="block-content">
    <div class="table-responsive">
     <table class="table table-bordered table-striped table-vcenter">
      <thead style="color:rgb(246, 120, 58);">
       <tr>
        <th>Projet</th>
        <th style="">Périodes</th>
        <th colspan="2" class="bordered" style="text-align: center;">Sources de financement
         <table class="table">
          <tr>
           <th style="color:rgb(246, 120, 58);">PTF</th>
           <th style="color:rgb(246, 120, 58);">ETAT</th>
          </tr>
         </table>
        </th>
        <th style="text-align: center;">Zones d'intervention</th>
        <th>Types d'intervention/Activités</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <!--td colspan="6">
         <h5 style="color:rgb(246, 120, 58);" class="text-center">Les programmes et projets intervenants directement au niveau du MFPAA</h5>
        </td-->
       </tr>


       @foreach($projet as $projets)
       <tr>
        <td style="width: =50px;">{{ $projets->NOMProjet }}</td>
        <td >{{ $projets->PERIODE }}</td>
        <td>{{ $projets->PFT }}</td>
        <td>{{ $projets->ETAT }}</td>
        <td>
         {{ $projets->ZONES }}
        </td>
        <td>
         {{ $projets->ACTIVITE }}
        </td>
       </tr>
       @endforeach
      </tbody>
     </TABle>
     {{ $projet->links() }}
    </div>
   </div>
  </div>
 </div>






 @stop