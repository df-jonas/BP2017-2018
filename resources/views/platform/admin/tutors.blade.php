@extends('layouts.platform')
@section('pagetitle', 'Admin dashboard')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container">
        <!-- begin table -->
        <section class="table">
            <!-- begin sidebar -->
            <aside class="sidebar">
                <!-- admin nav -->
                <section class="item admin-nav">
                    @include('partials.platform.admin-sidebar')
                </section>
                <!-- end admin nav -->
            </aside>
            <!-- end sidebar -->
            <!-- begin content -->
            <section class="content">
                <section class="item clearfix">
                    <header><a class="header-title">Tutors</a></header>
                    <ul id="tutors-list" class="admin-list">
                        @foreach($tutors as $tutor)
                            <li class="clearfix">
                                <div class="col-lg-8 col-xs-12">
                                    <span class="user-id">{{$tutor->id}}</span>
                                    {{$tutor->user->first_name . " " . $tutor->user->last_name . " - " . $tutor->course->name}}
                                </div>
                                <a href="{{ $tutor->user->url() }}" class="profile-url"><span class="action">Bekijk profiel</span></a>
                            </li>
                        @endforeach
                    </ul>
                </section>
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