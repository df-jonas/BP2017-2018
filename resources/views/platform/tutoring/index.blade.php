@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table tutoring flex">

            <!-- Sidebar -->
            <div class="sidebar">
                <article class="item">

                    <ul class="people-list">
                        <li class="new">
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img" style="background: red"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Stuur verzoek</h6>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="active">
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Jonas De Frère</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Sam Goeman</h6>
                                        <h6 style="margin: 5px 0">Project Management</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Gijs Claes</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Dieter Conversal</h6>
                                        <h6 style="margin: 5px 0">Communicatie Management</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Jens Conversal</h6>
                                        <h6 style="margin: 5px 0">Online Marketing</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Jelle Stalpaert</h6>
                                        <h6 style="margin: 5px 0">Sales</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 class="bold" style="margin: 0">Arno Stalpaert</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="load-more">


                            <h6 class="bold">Toon alle</h6>


                        </li>


                    </ul>

                </article>
                <!-- sidebar -->
            </div>

            <div class="content" style="padding-left: 0">


                <!-- Search form -->
                <article class="item padding col-xs-12">
                    <div class="padding clearfix">




                        <div class="col-lg-3 col-xs-12">


                            <div class="table">
                                <div style="display: table-cell; width: 42px"><img
                                            src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                            class="group_img"></div>
                                <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                    <h6 style="margin: 0">Jonas De Frère</h6>
                                    <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-xs-12">
                            <div class="actions col-lg-10 col-lg-push-2 col-xs-12" style="text-align: center">

                                <div class="row">

                                    <div class="col-lg-4">
                                        <a class="action col-lg-12" href="{{route('tutoring-messages', ['id' => '1'])}}">Chatten</a>
                                    </div>

                                    <div class="col-lg-4">
                                        <a class="action col-lg-12" href="{{route('tutoring-planning', ['id' => '1']) }}">Planning</a>
                                    </div>

                                    <div class="col-lg-4">
                                        <a class="action col-lg-12" href="#">Tutoring stoppen</a>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="col-xs-12">

                            <p>
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                placerat eleifend leo. Pellentesque habitant morbi tristique senectus et netus et
                                malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                                eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.
                            </p>
                        </div>

                        <div class="col-xs-12">
                            <h3>Planning</h3>
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