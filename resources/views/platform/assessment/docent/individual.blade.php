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
        <!-- begin assessment-->
        <div class="row">
            <section class="col-xs-12">
                <!-- begin go back -->
            @include('partials.platform.go-back')
            <!-- end go back-->
            </section>
            <section class="col-xs-12">
                <div class="item clearfix">
                    <header><a class="header-title">Assessment individueel</a></header>
                    <div class="padding">
                        <section class="content assessment">
                            <section class="assessment-group">
                                <div class="title col-lg-6">
                                    <a href="{{ $assessment->url() }}"><h2 class="group-title">{{ $assessment->name }} ({{ $assessment->course->name }})</h2></a>
                                </div>
                                <div class="info col-lg-6">
                                    <span class="assessments">{{ $group->name }}</span>
                                </div>
                            </section>
                        </section>
                        <div class="row flex padding">
                            <!-- begin table -->
                            <table class="assessment individual">
                                <tr class="heading">
                                    <th class="left top"><span class="large-th">Uitgedeelde scores</span> <br> <span
                                                class="mid-th">{{ $user->user->last_name }}, {{ $user->user->first_name }}</span></th>
                                    @foreach($assessmentskills as $assessmentskill)
                                        <th class="skill-th">{{ $assessmentskill->skill->name }}</th>
                                    @endforeach
                                </tr>
                                @foreach($users as $assessmentuser)
                                    <tr>
                                        <td class="left" rowspan="2">{{ $assessmentuser->user->last_name }}, {{ $assessmentuser->user->first_name }}
                                            <img src="{{ asset('img/avatars/' . $assessmentuser->user->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                        @foreach($assessmentskills as $assessmentskill)
                                            <td>{{ $scores[$assessmentuser->id][$assessmentskill->id]['grade'] }}</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        @foreach($assessmentskills as $assessmentskill)
                                            <td class="comment">{{ $scores[$assessmentuser->id][$assessmentskill->id]['comment'] }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end picture -->
        </div>
        <!-- end profile info -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
