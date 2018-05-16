@extends('layouts.website')
@section('content')
    <div class="auth-page">
        <div class="auth-box message col-lg-4 col-lg-push-4 col-md-6 col-md-push-6 col-sm-8 col-sm-push-2  col-xs-12">
            <img class="logo" src="/img/logo/favicon.png">
            <h4>@yield("message")</h4>
            <a class="text-muted col-xs-12" href="{{ url()->previous() }}">Klik <strong>hier</strong> om terug te keren naar de vorige pagina</a>
        </div>
    </div>
@endsection
