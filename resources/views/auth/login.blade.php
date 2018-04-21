@extends('layouts.website')

@section('content')
    <div id="login-page">
        <!-- TODO classes goed zetten, name attrituben, routes -->
        <div class="auth-box col-lg-5 col-mg-8 col-sm-10 col-xs-12 clearfix">

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="col-sm-6 col-xs-12 padding">
                    <h4 class="padding">Aanmelden</h4>
                    <div class="form-group clearfix col-xs-12">
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="usernameHelp"
                               placeholder="someone@example.com">
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group clearfix col-xs-12">
                        <input type="password" class="form-control" id="password" name="password"
                               aria-describedby="usernameHelp" placeholder="*****">
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group clearfix col-xs-12">

                        <label class="checkbox-container col-xs-12">Aangemeld blijven
                            <input type="checkbox" name="remember" value="Aangemeld blijven" class="form-check-input" checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group clearfix col-xs-12">
                        <input type="submit" class="action-button login col-xs-12" value="Inloggen">
                    </div>
                </div>
            </form>
                <div class="col-sm-6 col-xs-12 padding">
                    <h4 class="padding">Registreren</h4>

                    <div class="form-group clearfix col-xs-12">
                        <a href="{{ route('register') }}">
                        <input type="submit" class="action-button reg col-xs-12" value="Registreren">
                        </a>
                    </div>
                    <!-- TODO Jonas: login with canvas -->
                    <div class="form-group clearfix col-xs-12">
                        <input type="submit" class="action-button canvas col-xs-12" value="LOGIN MET CANVAS">
                    </div>
                </div>

            <footer class="row">
                <p>Problemen met inloggen? <strong>Wachtwoord vergeten?</strong></p>
            </footer>

        </div>
    </div>
@endsection
