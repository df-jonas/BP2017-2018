@extends('layouts.website')

@section('content')


    <div id="login_page">
        <div class="login_box">

            <!--
                       <div class="canvas">

                           <h4>Canvas login</h4>
                           <p>Als student aan de Erasmushogeschool Brussel kan je veilig en snel inloggen via je persoonlijke
                               Canvas Account.</p>

                       </div>
             -->
            <a href="{{route('website-index')}}"><img src="{{ asset('img/logo/Logo_final.png') }}"></a>

            <form>
                <div class="form-group clearfix col-xs-12">
                    <label for="username">Gebruikersnaam of e-mailadres</label>
                    <input type="text" class="form-control col-lg-6" id="username" name="username"
                           aria-describedby="usernameHelp">
                </div>

                <div class="form-group clearfix col-xs-12">
                    <label for="username">Wachtwoord</label>
                    <input type="password" class="form-control col-lg-6" id="password" name="password"
                           aria-describedby="usernameHelp">
                </div>

                <div class="form-group clearfix col-xs-12">
                    <label class="form-check-label">
                        <input type="checkbox" name="tnc" class="form-check-input">
                        Aangemeld blijven
                    </label>

                </div>

                <!--TODO: verander button type naar submit als er gewerkt wordt met username en password login -->
                <a href="{{ route('canvas-login') }}">
                    <button type="button" class="action-button login">Aanmelden</button>
                </a>

            </form>

            <a class="login-problem"><p>Problemen met inloggen?</p></a>
        </div>


    </div>


@endsection
