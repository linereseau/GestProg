@extends('layouts.backend')
@section('content')


<h2 class="text-center mt-3 mb-3" style="color:rgb(246, 120, 58);">{{ __('Modifier Utilisateur') }}</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">


                <div class="">
                    <form method="POST" action="{{ route('update.user',$user->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4  col-lg-2 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6 col-lg-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4  col-lg-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 col-lg-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{  $user->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4  col-lg-2 col-form-label text-md-right" aria-readonly="true">{{ __('Password') }}</label>

                            <div class="col-md-6 col-lg-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{  $user->password }}">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="is_admin" class="col-md-4 col-lg-2 col-form-label text-md-right">{{ __('is_admin') }}</label>

                            <div class="col-md-6 col-lg-9">
                                <input id="is_admin" type="" class="form-control" name="is_admin" required autocomplete="new-password" value="{{  $user->is_admin }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 col-lg-9 offset-2">
                                <button type="submit" class="btn text-white" style="background-color:rgb(246, 120, 58);">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection