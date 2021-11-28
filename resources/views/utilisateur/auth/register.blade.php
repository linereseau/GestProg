@extends('layouts.template')

@section('content')
<div class="container">
    <H2 class="mt-6 text-center" style="color:rgb(246, 120, 58);">INSCRIPTION</H2>
    <div class="row mb-10">
        <div class="col-lg-6 col-md-6">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/utilisateur/register') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Vous êtes?</label>
                    <select id="" name="type" class="form-control">
                        <option value="">Vous êtes?</option>
                        <option id="" value="chef Etablissement">Chef d'etablissement</option>
                        <option value="partenaire">Partenaire</option>
                        <option value="autres">Autres</option>
                    </select>
                </div>

                <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                    <label for="nom" class="col-md-4 control-label">Nom</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="nom" value="{{ old('nom') }}" autofocus>
                        @error('nom')<p class="text-danger">{{ $message }}@enderror</p>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                    <label for="prenom" class="col-md-4 control-label">Prenom</label>

                    <div class="">
                        <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" autofocus>
                        @error('prenom')<p class="text-danger">{{ $message }}@enderror</p>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('fonction') ? ' has-error' : '' }}">
                    <label for="nom" class="col-md-4 control-label">Fonction</label>

                    <div class="">
                        <input id="fonction" type="text" class="form-control" name="fonction" value="{{ old('fonction') }}" autofocus>
                        @error('fonction')<p class="text-danger">{{ $message }}@enderror</p>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('structure') ? ' has-error' : '' }}">
                    <label for="structure" class="col-md-4 control-label">Structure</label>

                    <div class="">
                        <input id="structure" type="text" class="form-control" name="structure" value="{{ old('structure') }}" autofocus>
                        @error('structure')<p class="text-danger">{{ $message }}@enderror</p>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('structure') ? ' has-error' : '' }}">
                    <label for="telephone" class="col-md-4 control-label">Telephone</label>

                    <div class="">
                        <input id="telephone" type="number" class="form-control" name="telephone" value="{{ old('telephone') }}" autofocus>
                        @error('telephone')<p class="text-danger">{{ $message }}@enderror</p>
                    </div>
                </div>


        </div>

        <div class="col-lg-6 col-md-6">


            <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                <label for="adresse" class="col-md-4 control-label">Adresse</label>

                <div class="">
                    <input id="adresse" type="text" class="form-control" name="adresse" value="{{ old('adresse') }}" autofocus>
                    @error('adresse')<p class="text-danger">{{ $message }}@enderror</p>
                </div>
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"placeholder="xyz@adresse.com">
                    @error('email')<p class="text-danger">{{ $message }}@enderror</p>
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="" >
                    <input id="password" type="password" class="form-control"  name="password"placeholder="Mettre le password de votre choix">
                     <!--i class="far fa-eye" id="togglePassword" style=" margin-left: -30px;
                            cursor: pointer; position: relative;left:100%;"></i-->
                    @error('password')<p class="text-danger">{{ $message }}@enderror</p>
                   
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"placeholder="Confirmez le password choisi" >
                    @error('password-confirm')<p class="text-danger">{{ $message }}@enderror</p>
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-block text-white" style="background-color:rgb(246, 120, 58);">
                        S'Inscrire
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


@endsection