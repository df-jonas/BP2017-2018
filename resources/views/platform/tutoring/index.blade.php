@extends('layouts.platform')
@section('pagetitle', 'Tutoring')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container tutoring">

        <a href="{{route('tutoring-requests')}}">
            <div class="item message col-xs-12">
                <div class="padding">
                    @if($validcount > 0)
                        <div>
                            <b>{{ $validcount }} {{ ($validcount == 1) ? "inkomend verzoek" : "inkomende verzoeken" }}</b>
                            {{ ($validcount == 1) ? "matcht" : "matchen" }} met uw profiel.
                            <i class="fa fa-close pull-right"></i>
                        </div>
                    @else
                        <div>Er zijn op dit moment geen verzoeken voor jou.</div>
                    @endif
                </div>
            </div>
        </a>
        <!-- Modal -->
        <div class="modal fade" id="verzoek-modal" role="dialog">
            <div id="tutoring-modal" class="modal-dialog  modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Tutoring</h4>
                    </div>
                    <div class="col-xs-12 modal-body clearfix">
                        <div class="col-sm-6 col-xs-12 clearfix">
                            <a href="{{ route('tutoring-tutee-new') }}">
                                <article class="item keuze no-padding col-xs-12">
                                    <header>Ik wil hulp krijgen</header>
                                    <div class="padding">
                                        <img src="{{ asset('img/icons/001-pen.svg' )}}">
                                    </div>
                                </article>
                            </a>
                        </div>

                        <div class="col-sm-6 col-xs-12 c clearfix">
                            <a href="{{route(('tutoring-tutor-new'))}}">
                                <article class="item keuze no-padding col-xs-12">
                                    <header>Ik wil tutor worden</header>
                                    <div class="padding">
                                        <img src="{{ asset('img/icons/002-book.svg' )}}">
                                    </div>
                                </article>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer padding">

                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf_token">
        <input type="hidden" name="_userid" value="{{ Auth::id() }}" id="userid">

        <div class="table tutoring flex">
            <!-- Sidebar -->
            <div class="sidebar clearfix">
                <article class="item">
                    <ul class="people-list">
                        <li class="new" data-toggle="modal" data-target="#verzoek-modal">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="add group-img round-img" style="display: table-cell">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div>
                                    <div class="info">
                                        <h6 class="bold">Stuur verzoek</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @if($validcount > 0)
                            <li>
                                <a href="{{route('tutoring-requests')}}">
                                    <div class="padding vertical-center">
                                        <div class="table">
                                            <div class="picture">
                                                <img src="{{ asset('img/avatars/empty.png')}}"
                                                     class="group-img round-img">
                                            </div>
                                            <div class="info">
                                                <h6 class="bold blurry-text">Voornaam en Naam</h6>
                                                <h6 class="blurry-text">Mooi geprobeerd!</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endif

                        @php
                            $first = true;
                        @endphp

                        @foreach($sessions as $session)
                            <li class="conversation-handle tutoringsession {{ ($first) ? "people-list-active" : "" }}"
                                data-id="{{ $session->id }}">
                                @php
                                    $disp = ($session->tutee->user->id == Auth::id()) ? $session->tutor : $session->tutee;
                                    $first = false;
                                @endphp
                                <div class="padding vertical-center">
                                    <div class="table">
                                        <div class="picture"><img src="{{ asset('img/avatars/' . $disp->user->image )}}"
                                                                  class="group-img round-img"></div>
                                        <div class="info">
                                            <h6 class="bold">{{ $disp->user->first_name }} {{ $disp->user->last_name }}</h6>
                                            <h6>{{ $disp->course->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </article>
                <!-- sidebar -->
            </div>

            @if(sizeof($sessions) > 0)

                @php
                    $first = $sessions[0];
                    $subject = ($first->tutee->user->id == Auth::id()) ? $first->tutor : $first->tutee;
                @endphp

                <div id="people-list-detail" class="content detail clearfix">
                    <!-- Search form -->
                    <article class="item col-xs-12">
                        <div class="padding clearfix userpanel">
                            <div class="row">
                                <div class="col-lg-6 left col-md-4 col-sm-6 col-xs-12">
                                    <div class="table">
                                        <div style="display: table-cell; width: 42px">
                                            <img id="image" src="/img/avatars/{{ $subject->user->image }}"
                                                 class="group-img round-img round-img"/>
                                        </div>
                                        <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                            <h6 id="name"
                                                style="margin: 0">{{ $subject->user->first_name }} {{ $subject->user->last_name }}</h6>
                                            <h6 id="course" style="margin: 5px 0">{{ $subject->course->name }}</h6>
                                        </div>
                                    </div>
                                </div>


                                <div class="actions col-lg-6 right col-md-8 col-sm-6 col-xs-12"
                                     style="text-align: center">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12" id="url_chat" href="">Chatten</a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12" id="url_planner" href="">Agenda</a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <!-- TODO [JONAS] Tutoring stopzetten -->
                                        <a class="action col-lg-12 col-xs-12" id="url_stop" href="">Stopzetten</a>
                                    </div>
                                </div>


                                <div class="col-xs-12">
                                    <h4 class="tutoring-intro-title">Introductie</h4>
                                    <p id="introduction">{{ $first->tutee->description }}</p>
                                </div>

                                <div class="col-xs-12">
                                    <h4 class="tutoring-intro-title">Planning</h4>
                                    <div class="row planning_container">

                                        <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                            <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <span class="bold">12</span><br>
                                                <small>Maart</small>
                                            </div>
                                            <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                <p class="col-xs-12 vertical-center">Test activiteit</p>
                                            </div>
                                        </div>


                                        <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                            <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <span class="bold">12</span><br>
                                                <small>Maart</small>
                                            </div>
                                            <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                <p class="col-xs-12 vertical-center">Test activiteit</p>
                                            </div>
                                        </div>


                                        <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                            <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <span class="bold">12</span><br>
                                                <small>Maart</small>
                                            </div>
                                            <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                <p class="col-xs-12 vertical-center">Test activiteit</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Search form -->

                </div>
            @else
                <div id="people-list-detail" class="content detail clearfix">
                    <!-- Search form -->
                    <article class="item col-xs-12">
                        <div class="padding clearfix userpanel">
                            <div class="row">
                                <p>U heeft nog geen actieve tutoring sessies. Aanvaard een verzoek of maak er zelf een
                                    om van start te gaan.</p>
                            </div>
                        </div>
                    </article>
                </div>
            @endif
        </div>
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="/js/tutoring.js"></script>
@endsection