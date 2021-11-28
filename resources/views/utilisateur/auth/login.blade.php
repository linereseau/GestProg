@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/utilisateur/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse e-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                <div class="">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de Passe</label>

                     <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">
                    <input type="checkbox" onclick="Afficher()"> Afficher le mot de passe
                    <script>
                        function Afficher()
                                { 
                                var input = document.getElementById("password"); 
                                if (input.type === "password")
                                { 
                                input.type = "text"; 
                                } 
                                else
                                { 
                                input.type = "password"; 
                                } 
                                } 
                    </script>
                               
                                @if ($errors->has('password'))

                                <div class="">

                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>


                                </div>

                                @endif

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> se souvenir de moi
                                    </label>
                                </div>
                            </div>

                        </div>
                      

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn text-white" style="background-color:rgb(246, 120, 58);">
                                    Connecter
                                </button>

                                <a href="/utilisateur/register" class="btn" style="color:rgb(246, 120, 58);">Inscription</a>

                                <a class="btn btn-link" href="{{ url('/utilisateur/password/reset') }}">

                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection