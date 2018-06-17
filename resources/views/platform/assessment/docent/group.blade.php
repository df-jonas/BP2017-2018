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


            <!-- Assessment titel -->
            <section class="col-xs-12">


                <div class="item clearfix">
                    <header><a class="header-title">Assessment groep</a></header>
                    <div class="padding">
                        <section class="content assessment">
                            <section class="assessment-group">
                                <div class="title col-lg-6">
                                    <a><h2 class="group-title">{{ $group->assessment->name }}
                                            ({{ $group->assessment->course->name }})</h2></a>
                                </div>
                                <div class="info col-lg-6">
                                    <span class="assessments">{{ $group->name }}</span>
                                </div>
                            </section>
                        </section>
                        <!-- end assessment titel -->
                        <div class="row flex padding">
                            <!-- begin table -->
                            <table class="assessment group">
                                <tr class="heading">
                                    <th class="left top"><span class="large-th">Groep overzicht</span></th>
                                    <th class="skill-th">Factor</th>
                                    <th class="skill-th">Uitgedeelde scores</th>
                                    <!--<th class="skill-th">Ontvangen scores</th>-->
                                </tr>
                                @foreach($group->assessmentgroupusers as $groupuser)
                                    <tr>
                                        <td class="left"><a href="{{ $groupuser->url() }}">{{ $groupuser->user->last_name }}, {{ $groupuser->user->first_name }}</a>
                                            <img src="{{ asset('img/avatars/' . $groupuser->user->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                        <td>{{ round($groupuser->calcScore(), 2) }}</td>
                                        <td>
                                            @if($groupuser->hasSubmitted())
                                                <a href="{{ $groupuser->url() }}">Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a>
                                            @else
                                                Onvoltooid.
                                            @endif
                                        </td>
                                        <!--<td><a href="#">Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>-->
                                    </tr>
                                @endforeach
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
