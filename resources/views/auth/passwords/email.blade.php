@extends('layouts.website')

@section('content')


    <div id="login_page">
        <div class="login_box">

            <a href="{{route('website-index')}}"><img src="{{ asset('img/logo/Logo_final.png') }}"></a>



            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">

                {{ csrf_field() }}




                <div class="form-group clearfix col-xs-12">
                    <label for="email">E-mailadres</label>
                    <input type="email" class="form-control col-lg-6" id="email" name="email" aria-describedby="usernameHelp" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>









                <div class="form-group clearfix col-xs-12">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input">Dit is mijn account
                    </label>
                </div>
                <button type="submit" class="action-button login">Wachtwoord reset aanvragen</button>
            </form>

            <a class="login-problem" href="{{ route('login') }}"><p>Terug naar inloggen.</p></a>
        </div>
    </div>




<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    -->
</div>
@endsection
