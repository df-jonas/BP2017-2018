@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <!-- Sidebar -->
            <div class="sidebar">
                <article class="item">
                    <header>Planning</header>
                    <div class="padding">

                    </div>
                </article>
                <!-- sidebar -->
            </div>

            <!-- content -->
            <div class="content">
                <div class="item clearfix">
                    <div class="padding">


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
                                    <div class="actions col-lg-12 col-xs-12" style="text-align: center">

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
                                    <h3>Planning</h3>
                                </div>

                            </div>
                        </article>
                        <!-- Search form -->


                        <div id="planning" class="col-lg-12">


                        </div>


                    </div>
                </div>
            </div>
            <!-- content -->
        </div>
        <!-- container -->
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{asset("js/jquery.simple-calendar.js")}}"></script>
@endsection