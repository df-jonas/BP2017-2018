@extends('layouts.platform')
@section('pagetitle', 'Tutoring verzoeken')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        <div id="filter-results" class="item filecontainer files">
            <header><a class="header-title"><i class="fa fa-bell"></i> Openstaande verzoeken</a></header>
            <div class="padding">
                <ul class="all-tutoring-requests">
                    <li class="unread">
                        <a href="#" class="tutoring-request-title">
                            <strong>Project Management</strong>
                        </a>
                        <a class="tutoring-request-read"
                           href="#">Accepteren</a>
                        <h4 class="tutoring-request-type">Oefeningen</h4>
                    </li>
                    <li class="unread">
                        <a href="#" class="tutoring-request-title">
                            <strong>Project Management</strong>
                        </a>
                        <a class="tutoring-request-read"
                           href="#">Accepteren</a>
                        <h4 class="tutoring-request-type">Oefeningen</h4>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection