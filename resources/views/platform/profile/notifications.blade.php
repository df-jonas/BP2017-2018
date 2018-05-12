@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Notificaties')
@include('partials.platform.header')
    @include('partials.platform.subheader')
    <section class="container">
        @include('partials.platform.go-back')
        <section class="table">
            <section class="sidebar">
                <!-- Search form -->
                <section class="item search">
                    <header> <a class="header-title"><i class="fa fa-search"></i> Zoeken</a></header>
                    <div class="inner-addon left-addon">
                        <!--<i class="glyphicon glyphicon-search"></i>-->
                        <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm"/>
                    </div>
                </section>

                <!-- Community stats -->
                <section class="item stats">
                    <header> <a class="header-title"><i class="fa fa-line-chart"></i> Statistieken</a></header>
                    <div class="padding">
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Ontvangen notificaties</p>
                            </div>

                            <div class="col-xs-2">
                                <p class="amount">33</p>
                            </div>
                        </div>
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Ongelezen</p>
                            </div>

                            <div class="col-xs-2">
                                <p class="amount">33</p>
                            </div>
                        </div>
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Gelezen</p>
                            </div>

                            <div class="col-xs-2">
                                <p class="amount">0</p>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- end Community stats -->
                <!-- Search form -->
            </section>
            <!-- content -->
            <section class="content">
                <div id="filter-results" class="item filecontainer files">
                    <header>  <a class="header-title"><i class="fa fa-bell"></i> Mijn notificaties</a></header>
                    <div class="padding">
                    <ul class="all-notifications">
                        <!-- TODO jonas: haal ALLE notificaties van user op -->
                        @foreach(Auth::user()->notifications as $notification)
                            @if($notification->read_at == NULL)
                                <li class="unread">
                                    <a href="{{ $notification->data['url'] }}" class="notification-title"><i class="fa fa-comment"></i>
                                        <strong>{{ $notification->data['commenter'] }}</strong>  {{ $notification->data['melding'] }} op "{{ $notification->data['title'] }}"
                                    </a>
                                    {{--<a href="{{route('notification-read', ['id' => $notification->id] )}}">markeren als gelezen</a>--}}
                                    <a class="notification-read" href="{{ route('notification-read', ['id' => $notification->id]) }}">Markeer als gelezen</a>

                                    <h4 class="notification-date">2 uur geleden</h4>
                                </li>
                            @else
                                <li>
                                <a href="{{ $notification->data['url'] }}" class="notification-title"><i class="fa fa-comment"></i>
                                    <strong>{{ $notification->data['commenter'] }}</strong>  {{ $notification->data['melding'] }} op "{{ $notification->data['title'] }}"
                                </a>
                                {{--<a href="{{route('notification-read', ['id' => $notification->id] )}}">markeren als gelezen</a>--}}
                                <a class="notification-read" href="{{ route('notification-delete', ['id' => $notification->id]) }}">Verwijderen</a>

                                <h4 class="notification-date">2 uur geleden</h4>
                                </li>
                            @endif


                        @endforeach
                    </ul>
                    </div>
                </div>
            </section>
        </section>
    </section>
    </div>
    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
