@extends('layouts.website')

@section('content')
    @include('partials.website.header')
    <div id="login_page">

        <div class="login_box col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-6 col-sm-push-3 col-xs-10 col-xs-push-1">


            <div class="row">


                <div class="auth col-lg-8 col-xs-12">

                        <div class="canvas">
                            <img src="{{ URL::asset('img/logo/canvas-logo.png') }}">
                            <h4>Canvas login</h4>
                            <p>Als EHB student kan je veilig en snel inloggen via je Canvas Account.</p>
                        </div>


                        <a href="{{ route('canvas-login') }}">
                            <button type="button" class="action-button login">Aanmelden</button>
                        </a>
                </div>


                <div class="info col-lg-4 col-xs-12">
                    <h4>Waarom UniHelp gebruiken?</h4>
                </div>


            </div>

        </div>
    </div>

    @include('partials.footer')
@endsection
