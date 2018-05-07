@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Notificaties')
@include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        @include('partials.platform.go-back')
        <div class="table">
            <div class="sidebar">
                <!-- Search form -->
                <article class="item search">
                    <header><i class="fa fa-search"></i> Zoeken</header>
                    <div class="inner-addon left-addon">
                        <!--<i class="glyphicon glyphicon-search"></i>-->
                        <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm"/>
                    </div>
                </article>
                <!-- Search form -->
            </div>
            <!-- content -->
            <div class="content">
                <div id="filter-results" class="item filecontainer files">
                    <header><i class="fa fa-bell"></i> Mijn notificaties</header>
                    <div class="padding">
                    <ul>
                        <!-- TODO jonas: haal notificaties van user op -->
                        @foreach(Auth::user()->unreadNotifications as $notification)
                            <li>
                                <a href="{{ $notification->data['url'] }}"><i class="fa fa-comment"></i>
                                    <strong>{{ $notification->data['commenter'] }}</strong>  {{ $notification->data['melding'] }}
                                </a>
                                <a href="{{route('notification-read', ['id' => $notification->id] )}}">markeren als gelezen</a>
                                <a href="{{route('notification-delete', ['id' => $notification->id] )}}">verwijderen</a>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
