@extends('layouts.platform')
@section('pagetitle', 'Admin dashboard')
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
                    <header><a class="header-title">Vakken</a></header>
                    <ul id="course-list" class="admin-list">
                        <li class="new clear">
                            <div class="col-xs-12">
                                <a href="{{ route('admin-course-new') }}"><i class="fa fa-plus"></i> Nieuw vak</a>
                            </div>
                        </li>
                        @foreach($courses as $course)
                            <li class="clearfix">
                                <div class="col-lg-8 col-xs-12"><span class="user-id">{{$course->id}}</span>{{$course->name}}</div>
                                <div class="col-lg-4 col-xs-12">
                                    <!--<a href="{{ route('admin-course-delete', ['id' => $course->id]) }}"> <span class="action delete">Verwijderen</span></a>-->
                                    <a href="{{ route('admin-course-update', ['id' => $course->id]) }}"><span class="action">Bewerken</span></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    {{ $courses->links() }}
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