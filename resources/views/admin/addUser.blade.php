@extends('layouts.backend')
@section('content')



<!-- Alternative Style -->
<div class="block">
    <div class="">
        <h3 class="pt-4 pb-1 text-center" style="color:rgb(246, 120, 58);">Ajouter un nouveau utilisateur</h3>
    </div>
    <div class="block-content block-content-full col-md-6 col-lg-9">
        <form method="POST" action="{{ route('store.user') }}">
            @csrf

            <div class="form-group">
                <label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }} " required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="">{{ __('Email') }}</label>

                <div class="">
                    <input id="email" type="email" placeholder="xzy@adresse.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label text-md-right">{{ __('Mot de Passe') }}</label>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-form-label">{{ __('Confirmation') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group mb-0">
                <div class="">
                    <button type="submit" class="btn text-white" style="background-color:rgb(246, 120, 58);">
                        {{ __('Enregister') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END Alternative Style -->

@endsection