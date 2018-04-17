@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="verzoek-modal" role="dialog">
            <div id="tutoring-modal" class="modal-dialog  modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="col-xs-12 modal-body clearfix">
                        <div class="col-sm-4 col-xs-12 clearfix">
                            <a href="{{ route('tutoring-tutee-new') }}">
                            <article class="item keuze no-padding col-xs-12">
                                <header>Vind een tutor</header>
                                <div class="padding">
                                    <img src="{{ asset('img/icons/001-pen.svg' )}}" >
                                    <!-- <h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4> -->
                                </div>
                            </article>
                            </a>
                        </div>

                        <div class="col-sm-4 col-xs-12 c clearfix">
                             <a href="{{route(('tutoring-tutor-new'))}}">
                            <article class="item keuze no-padding col-xs-12">
                                <header>Wordt tutor</header>
                                <div class="padding">
                                    <img src="{{ asset('img/icons/002-book.svg' )}}" >
                                    <!-- <h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4> -->
                                </div>
                            </article>
                             </a>
                        </div>

                        <div class="col-sm-4 col-xs-12 clearfix">
                             <a href="{{route('tutoring-help')}}">
                            <article class="item keuze no-padding col-xs-12">
                                <header>Hoe werkt het?</header>
                                <div class="padding">
                                    <img src="{{ asset('img/icons/003-whiteboard.svg' )}}" >
                                    <!-- <h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4> -->
                                </div>
                            </article>
                             </a>
                        </div>
                    </div>
                    <div class="modal-footer padding">
                        <div class="form-group col-xs-12 clearfix">
                            <input type="button" class="download-button next col-lg-2 col-sm-4 col-xs-12"  data-dismiss="modal" value="Sluiten">
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

                        <!-- TODO [JONAS] data-request-id attribute must be equal to the id of the tutoring request in the database. -->
                        <li class="people-list-active" data-request-id="1">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="picture"><img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img"></div>
                                    <div class="info">
                                        <h6 class="bold">Jonas De Frère</h6>
                                        <h6>Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li data-request-id="2">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="picture"><img src="{{ asset('img/avatars/' . Auth::user()->image )}}"class="group-img round-img"></div>
                                    <div class="info">
                                        <h6 class="bold">Sam Goeman</h6>
                                        <h6>Project Management</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li data-request-id="3">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="picture"><img src="{{ asset('img/avatars/' . Auth::user()->image )}}"class="group-img round-img"></div>
                                    <div class="info">
                                        <h6 class="bold">Gijs Claes</h6>
                                        <h6>Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li data-request-id="4">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="picture"><img src="{{ asset('img/avatars/' . Auth::user()->image )}}"class="group-img round-img"></div>
                                    <div class="info">
                                        <h6 class="bold">Dieter Conversal</h6>
                                        <h6>Communicatie Management</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li data-request-id="5">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="picture"><img src="{{ asset('img/avatars/' . Auth::user()->image )}}"class="group-img round-img"></div>
                                    <div class="info">
                                        <h6 class="bold">Jens Conversal</h6>
                                        <h6>Online Marketing</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li data-request-id="6">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="picture"><img src="{{ asset('img/avatars/' . Auth::user()->image )}}"class="group-img round-img"></div>
                                    <div class="info">
                                        <h6 class="bold">Jelle Stalpaert</h6>
                                        <h6">Sales</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li data-request-id="7">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div class="picture"><img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img"></div>
                                    <div class="info">
                                        <h6 class="bold">Arno Stalpaert</h6>
                                        <h6>Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="load-more">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <h6 class="col-xs-12 bold">Toon alle</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </article>
                <!-- sidebar -->
            </div>

            <div id="people-list-detail" class="content detail clearfix">
                <!-- Search form -->
                <article class="item col-xs-12">
                    <div class="padding clearfix">

                        <div class="row">
                            <div class="col-lg-6 left col-md-4 col-sm-6 col-xs-12">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 style="margin: 0">Jonas De Frère</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>


                            <div class="actions col-lg-6 right col-md-8 col-sm-6 col-xs-12" style="text-align: center">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12" href="{{route('tutoring-messages', ['id' => '1']) }}">Chatten</a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12" href="{{route('tutoring-planning', ['id' => '1']) }}">Agenda</a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12" href="#">Stopzetten</a>
                                    </div>
                            </div>


                            <div class="col-xs-12">
                                <h4>Introductie</h4>
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                                    ante.
                                    Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                    placerat eleifend leo. Pellentesque habitant morbi tristique senectus et netus et
                                    malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                                    eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.
                                </p>
                            </div>

                            <div class="col-xs-12">
                                <h4>Planning</h4>

                                <div class="row">
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

        </div>

    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection