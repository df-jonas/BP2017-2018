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
                    @if(sizeof($courses) < 1)
                        <p>Je hebt nog geen assessments. <a href="{{ route('assessment-docent-new') }}">Klik hier</a> om er een te starten.</p>
                    @else
                        @foreach($courses as $course)
                            <section class="assessment-group">
                                <div class="title col-lg-3">
                                    <h2 class="group-title">{{ $course->name }}</h2>
                                </div>
                                <div class="info col-lg-8">
                                    <span class="assessments">{{ $course->assessmentCount() }} assessments</span>
                                    <span class="students">{{ $course->assessmentMemberCount() }} studenten</span>
                                </div>
                                <div class="icons col-lg-1">
                                    <a href="{{ route('assessment-docent-new') }}"><i class="fas fa-plus"></i></a>
                                </div>
                            </section>
                            <ul class="assessments">
                                @php
                                    $tick = 1;
                                @endphp
                                @foreach($course->assessments as $assessment)
                                    <li>
                                        <span class="id col-lg-1">{{ $tick }}</span>
                                        <div class="info col-lg-7">
                                            <a href="{{ $assessment->url() }}"><h2 class="assessment-title">{{ $assessment->name }}</h2></a>
                                            <h4 class="assessment-submissions">{{ $assessment->submitCount() }} inzendingen</h4>
                                        </div>
                                        <div class="assessment-students col-lg-3">
                                            <h4>{{ $assessment->memberCount() }} studenten</h4>
                                        </div>
                                        <div class="icons col-lg-1">
                                            <a href="{{ $assessment->url() }}"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </li>
                                    @php
                                        $tick++;
                                    @endphp
                                @endforeach
                            </ul>
                        @endforeach
                    @endif
                </div>
            </section>
        </section>
        <!-- end content -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
