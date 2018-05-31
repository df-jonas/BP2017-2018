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
        <!-- begin content -->
        <section class="content assessment">
            <section class="item clearfix">
                <header><a class="header-title">Assessment overzicht</a></header>
                <div class="padding">
                    <section class="assessment-group">
                        <div class="title col-lg-3">
                            <a href="#"><h2 class="group-title">Project management</h2></a>
                        </div>
                        <div class="info col-lg-9">
                            <span class="assessments">3 groepen</span>
                            <span class="students">29 studenten</span>
                        </div>
                    </section>
                    <ul class="assessments">
                        <li>
                            <span class="id col-lg-1">1</span>
                            <div class="info col-lg-7">
                                <h2 class="assessment-title">Groep Moleskine</h2>
                                <h4 class="assessment-submissions">22 inzendingen</h4>
                            </div>
                            <div class="assessment-students col-lg-3">
                                <h4>39 studenten</h4>
                            </div>
                            <div class="icons col-lg-1">
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </li>
                        <li>
                            <span class="id col-lg-1">2</span>
                            <div class="info col-lg-7">
                                <h2 class="assessment-title">Groep No-Lifers</h2>
                                <h4 class="assessment-submissions">22 inzendingen</h4>
                            </div>
                            <div class="assessment-students col-lg-3">
                                <h4>39 studenten</h4>
                            </div>
                            <div class="icons col-lg-1">
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </li>
                        <li>
                            <span class="id col-lg-1">3</span>
                            <div class="info col-lg-7">
                                <h2 class="assessment-title">Groep Sumo</h2>
                                <h4 class="assessment-submissions">22 inzendingen</h4>
                            </div>
                            <div class="assessment-students col-lg-3">
                                <h4>39 studenten</h4>
                            </div>
                            <div class="icons col-lg-1">
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </div>
                        </li>
                    </ul>

        </section>
        <!-- end content -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
