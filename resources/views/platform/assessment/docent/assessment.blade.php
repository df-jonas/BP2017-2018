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
        <section class="col-xs-12">
            <!-- begin go back -->
        @include('partials.platform.go-back')
        <!-- end go back-->
        </section>

        <section class="col-xs-12">
            <section class="content assessment">
                <section class="item clearfix">
                    <header><a class="header-title">Assessment overzicht</a></header>
                    <div class="padding">
                        <section class="assessment-group">
                            <div class="title col-lg-3">
                                <a><h2 class="group-title">{{ $assessment->name }}</h2></a>
                            </div>
                            <div class="info col-lg-9">
                                <span class="assessments">{{ $assessment->groupCount() }} groepen</span>
                                <span class="students">{{ $assessment->memberCount() }} studenten</span>
                            </div>
                        </section>
                        <ul class="assessments">
                            @foreach($assessment->assessmentgroups as $group)
                                <li>
                                    <span class="id col-lg-1">1</span>
                                    <div class="info col-lg-7">
                                        <a href="{{ $group->url() }}"><h2 class="assessment-title">{{ $group->name }}</h2></a>
                                        <h4 class="assessment-submissions">{{ $group->submitCount() }} van {{ $group->memberCount() }} inzendingen</h4>
                                    </div>
                                    <div class="assessment-students col-lg-3">
                                        <h4>{{ $group->memberCount() }} studenten</h4>
                                    </div>
                                    <div class="icons col-lg-1">
                                        <a href="{{ $group->url() }}"><i class="fas fa-eye"></i></a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                </section>
            </section>
            <!-- end content -->
        </section>
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
