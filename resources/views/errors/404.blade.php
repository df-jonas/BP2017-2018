@extends('layouts.website')

@section('content')
    <div id="login-page">
        <div class="login-box">

            <a href="{{route('website-index')}}"><img src="{{ asset('img/logo/Logo_final.png') }}"></a>

            <div class="page-error">
                <br>
                <h1>404</h1>
                <br>
                <h3>Deze pagina kon niet gevonden worden.</h3>
                <br>



            <a href="{{ route('website-index') }}"><p>Ga naar de home pagina.</p></a>
            </div>
            <br>
        </div>
    </div>
@endsection
