@extends('layouts.website')

@section('content')
    @include('partials.website.header')
    <div id="login_page" class="col-xs-12">
        <div class="login_box col-lg-4 col-lg-push-4 col-xs-12">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Inloggen</h1>
                    <a href="{{ route('website-register') }}">
                        <button type="button" class="action-button canvas">Inloggen met Canvas</button>
                    </a>
                </div>

                <div class="col-lg-4 info">
                    <h4>Waarom UniHelp gebruiken?</h4>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
