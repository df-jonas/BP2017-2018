@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="verzoek-modal" role="dialog">
            <div class="modal-dialog  modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Keuze hier tonen</p>
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
                                    <div style="display: table-cell; width: 42px">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img"
                                             style="background: red"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold"  style="margin: 0">Stuur verzoek</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="active">
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Jonas De Frère</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Sam Goeman</h6>
                                        <h6 style="margin: 5px 0">Project Management</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Gijs Claes</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Dieter Conversal</h6>
                                        <h6 style="margin: 5px 0">Communicatie Management</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Jens Conversal</h6>
                                        <h6 style="margin: 5px 0">Online Marketing</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Jelle Stalpaert</h6>
                                        <h6 style="margin: 5px 0">Sales</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding vertical-center">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Arno Stalpaert</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
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

            <div class="content clearfix" style="min-height: 50em;">
                <!-- Search form -->
                <article class="item padding col-xs-12">
                    <br>
                    <div class="padding clearfix">

                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
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


                            <div class="actions col-lg-4 col-md-4 col-sm-6 col-xs-12" style="text-align: center">
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
                                <h3>Planning</h3>

                                <div class="row">
                                    <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                        <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="bold">12</span><br>
                                            <small>Maart</small>
                                        </div>
                                        <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h5 class="col-xs-12 vertical-center">Test activiteit</h5>
                                        </div>
                                    </div>


                                    <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                        <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="bold">12</span><br>
                                            <small>Maart</small>
                                        </div>
                                        <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h5 class="col-xs-12 vertical-center">Test activiteit</h5>
                                        </div>
                                    </div>


                                    <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                        <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="bold">12</span><br>
                                            <small>Maart</small>
                                        </div>
                                        <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h5 class="col-xs-12 vertical-center">Test activiteit</h5>
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