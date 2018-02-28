@extends('layouts.website')

@section('content')
    <div id="login_page">
        <div class="login_box">

            <a href="{{route('website-index')}}"><img src="{{ asset('img/logo/Logo_final.png') }}"></a>

            <div class="page-error">
                <h1 class="">404</h1>
                <br>
                <h4>Deze pagina kon niet gevonden worden...</h4>
                <br>
            </div>


            <a class="login-problem" href="{{ route('website-index') }}"><p>Ga naar de home pagina.</p></a>
        </div>
    </div>
@endsection
