@extends('layouts.platform')
@section('pagetitle', 'Peer Assessment')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container">
        <!-- begin profile message -->
    @include('partials.platform.message')
    <!-- end profile message -->
        <!-- begin table -->
        <section class="table">
            <!-- begin sidebar -->
            <aside class="sidebar">
                <!-- User items -->
            {{--<section class="item user-owned hide-mobile">
                <header><a class="header-title">Beschikbare assessments</a></header>
                <div class="padding">
                    <div class="row flex">
                        <section class="col-xs-10">
                            <h2 class="item-title"><a href="#">Android project</a></h2>
                            <div class="rating col-xs-12 no-padding clearfix">
                                <div class="col-xs-12 no-padding">
                                    geldig tot 12 juni
                                </div>
                            </div>
                        </section>
                        <div class="col-xs-2">
                            <i class="fa fa-user-plus brown"></i>
                        </div>
                    </div>
                    <div class="row flex">
                        <section class="col-xs-10">
                            <h2 class="item-title"><a href="#">Android project</a></h2>
                            <div class="rating col-xs-12 no-padding clearfix">
                                <div class="col-xs-12 no-padding">
                                    geldig tot 12 juni
                                </div>
                            </div>
                        </section>
                        <div class="col-xs-2">
                            <i class="fa fa-user-plus brown"></i>
                        </div>
                    </div>
                    <div class="row flex">
                        <section class="col-xs-10">
                            <h2 class="item-title"><a href="#">Android project</a></h2>
                            <div class="rating col-xs-12 no-padding clearfix">
                                <div class="col-xs-12 no-padding">
                                    geldig tot 12 juni
                                </div>
                            </div>
                        </section>
                        <div class="col-xs-2">
                            <i class="fa fa-user-plus brown"></i>
                        </div>
                    </div>
                </div>
            </section>--}}
            <!-- end User items -->

                <!-- User items -->
                <section class="item user-owned hide-mobile">
                    <header><a class="header-title">Voltooide assessments</a></header>
                    <div class="padding">
                        @if(sizeof($finished) < 1)
                            <p>Geen voltooide assessments.</p>
                        @else
                            @foreach($finished as $assessment)
                                <div class="row flex">
                                    <section class="col-xs-10">
                                        <h2 class="item-title"><a
                                                    href="{{ $assessment->url() }}">{{ $assessment->name }}</a></h2>
                                        <div class="rating col-xs-12 no-padding clearfix">
                                            <div class="col-xs-12 no-padding">{{ $assessment->string }}</div>
                                        </div>
                                    </section>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>
                <!-- end User items -->
            </aside>
            <!-- end sidebar -->
            <!-- begin content -->
            <section class="content assessment overview">
                @if(sizeof($todo) < 1)
                    <section class="item clearfix">
                        <header><a class="header-title">Assessments</a></header>
                        <div>
                            <p style="padding: 15px;">Er zijn geen nieuwe assessments beschikbaar voor jouw account.</p>
                        </div>
                    </section>
                @else
                    @foreach($todo as $assessment)
                        <section class="item clearfix">
                            <header><a class="header-title">{{ $assessment->course->name }}</a></header>
                            <div class="padding">
                                <table class="assessment-overview">
                                    <tr>
                                        <td class="bold">Peer assessment</td>
                                        <td class="static-course">{{ $assessment->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Aantal leden</td>
                                        <td class="static-course">{{ $assessment->memberCount() }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Einddatum</td>
                                        <td class="static-course">{{ $assessment->humanEnd() }}
                                            ({{ $assessment->timeToEnd() }})
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Geschatte tijd</td>
                                        <td class="static-title">{{ $assessment->expected_time }} minuten</td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Aantal beurten</td>
                                        <td class="static-course">{{ $assessment->retry }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Instructies</td>
                                        <td class="static-course">{{ $assessment->instructions }}</td>
                                    </tr>
                                </table>
                                <a href="{{ $assessment->url() }}">
                                    <button class="download-button col-lg-2 col-sm-4 col-xs-12" value="Starten">Starten
                                    </button>
                                </a>
                            </div>
                        </section>
                    @endforeach
                @endif
            </section>
            <!-- end content -->
        </section>
        <!-- end table -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
