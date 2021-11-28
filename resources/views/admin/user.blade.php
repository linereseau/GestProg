@extends('layouts.backend')
@section('content')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2 text-center" style="color:rgb(246, 120, 58);">
                Liste Des Utilisateurs
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
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <table class="table table-bordered table-striped table-vcenter">
                    <thead style="color:rgb(246, 120, 58);">
                        <tr>

                            <th>Name</th>
                            <th style="width: 30%;">Email</th>
                            <th style="width: 30%;">Admin</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    @foreach($user as $users)
                    <tbody>
                        <tr>

                            <td class="font-w600 font-size-sm">
                                <a href="">{{ $users->name }}</a>
                            </td>
                            <td class="font-w600 font-size-sm">
                                <a href="">{{ $users->email }}</a>
                            </td>
                            <td class="font-w600 font-size-sm">
                                <a href=""style="color: black;">{{ $users->is_admin }}</a>
                            </td>
                            <td class="text-center">
                                <div class="">
                                    <a href="{{ route('edit.user',$users->id) }}" class="btn btn-sm " data-toggle="tooltip">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{ route('delete.user',$users->id) }}" onclick="return confirm('Voulez vous supprimé')" class="btn btn-sm" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- END Full Table -->
    @endsection