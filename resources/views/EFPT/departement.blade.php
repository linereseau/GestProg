@extends('layouts.template')
@section('content')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2 text-center" style="color:  #020031;">
                @foreach($region_dep as $rd )
                STATISTIQUES DES CENTRES DANS LA REGION DE {{ $rd->NOM }}
                @endforeach
            </h1>
        </div>
    </div>
</div>
<!-- END Hero -->


<!-- Page Content -->
<div class="content mb-6">
    <!-- Full Table -->

    <div class="block-content">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter ">

                <thead style="background-color:  #020031;">
                    <th class="text-white ">Departement</th>
                    <th class="text-white">Centre de formation</th>
                </thead>

                <tbody>
                    @foreach($reg as $regs)
                    <tr>
                        <td class="text-center">
                            <a href="{{ route('depart.eta',$regs->id) }}" style="color:  #020031;">{{ $regs->NOM_DEPT}}</a>
                        </td>

                        <td class="text-center ">

                            <h4 class="" style="color:rgb(246, 120, 58);"> {{ $regs->etablissement_count }}</h4>

                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>

<!-- END Full Table -->

@endsection