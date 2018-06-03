@extends('layouts.platform')
@section('pagetitle', 'Tutoring verzoeken')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        <div id="filter-results" class="item filecontainer files">
            <header><a class="header-title"><i class="fa fa-bell"></i> Openstaande verzoeken</a></header>
            <div class="padding">
                @if(sizeof($candidates) <= 0)
                    <p>Er zijn geen verzoeken gevonden voor jouw geselecteerde vakken.</p>
                @else
                    <div class="padding">
                        <ul class="all-tutoring-requests">
                            @foreach($candidates as $candidate)
                                <li class="row unread">
                                    <div class="icon col-xs-1">
                                        <img src="{{asset('img/icons/002-group-persons.png')}}"
                                             class="group-img round-img">
                                    </div>
                                    <div class="col-xs-11">
                                        <a class="tutoring-request-title"><strong>{{ $candidate->course->name }}</strong></a>
                                        <a class="tutoring-request-read"
                                           href="{{ route("tutoring-accept", ['tutee_id' => $candidate->id]) }}"><i class="fas fa-check"></i> Accepteren</a>
                                        <h4 class="tutoring-request-type">Oefeningen</h4>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection