@extends('layouts.website')

@section('content')
    @include('partials.website.header')

    <div id="login_page">
        <div class="login_box">


            <div class="canvas">
                <img src="{{ asset('img/logo/canvas-logo.png') }}">
                <h4>Canvas login</h4>
                <p>Als student aan de Erasmushogeschool Brussel kan je veilig en snel inloggen via je persoonlijke
                    Canvas Account.</p>
            </div>

            <a href="{{ route('canvas-login') }}">
                <button type="button" class="action-button login">Aanmelden</button>
            </a>

            <a class="login-problem"><p>Problemen met inloggen?</p></a>
        </div>


    </div>

    @include('partials.footer')
@endsection
