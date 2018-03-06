@extends('layouts.website')

@section('content')
    <div id="login_page">
        <div class="login_box">



            <header class="col-xs-12">
                <h3>Inloggen</h3>
                <p>Vul je gegevens in om in te loggen met je UniHelp account.</p>
            </header>

            <div class="box col-xs-12 clearfix">
                <form method="POST" action="{{ route('login') }}">

                    {{ csrf_field() }}

                    <div class="form-group clearfix col-xs-12">
                        <label for="email">E-mailadres</label>
                        <input type="text" class="form-control" id="email" name="email"
                               aria-describedby="usernameHelp">
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group clearfix col-xs-12">
                        <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" id="password" name="password"
                               aria-describedby="usernameHelp">
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>

                    <!--
                    <div class="form-group clearfix col-xs-12">
                        <label class="form-check-label">
                            <input type="checkbox" name="remember" class="form-check-input">Aangemeld blijven
                        </label>
                    </div>
                    -->
                    <div class="form-group clearfix col-xs-12">
                        <label for="password"></label>
                        <input type="submit" class="action-button login" value="Inloggen">
                    </div>

                </form>
                <a class="login-problem" href="#"><p>Wachtwoord vergeten?</p></a>
            </div>




            <footer class="col-xs-12 clearfix">
                <h5>Heb je nog geen UniHelp account?</h5>
                <br/>

                    <a href="{{ route('register') }}">
                        <input type="button" class="action-button register" value="Registreer nu">
                    </a>

            </footer>


        </div>
    </div>
@endsection
