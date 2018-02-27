@extends('layouts.website')

@section('content')
    <div id="login_page">
        <div class="login_box">
            <!--<div class="canvas">
                <h4>Canvas login</h4>
                <p>Als student aan de Erasmushogeschool Brussel kan je veilig en snel inloggen via je persoonlijke
                    Canvas Account.</p>
            </div>-->
            <a href="{{route('website-index')}}"><img src="{{ asset('img/logo/Logo_final.png') }}"></a>
            <form method="POST" action="{{ route('login') }}">

                {{ csrf_field() }}

                <div class="form-group clearfix col-xs-12">
                    <label for="email">E-mailadres</label>
                    <input type="text" class="form-control col-lg-6" id="email" name="email"
                           aria-describedby="usernameHelp">
                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>

                <div class="form-group clearfix col-xs-12">
                    <label for="password">Wachtwoord</label>
                    <input type="password" class="form-control col-lg-6" id="password" name="password"
                           aria-describedby="usernameHelp">
                    @if ($errors->has('password'))
                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>

                <div class="form-group clearfix col-xs-12">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input">Aangemeld blijven
                    </label>
                </div>
                <button type="submit" class="action-button login">Aanmelden</button>
            </form>
            <a class="login-problem" href="{{ route('register') }}"><p>Ik heb nog geen account.</p></a>
        </div>
    </div>
@endsection
