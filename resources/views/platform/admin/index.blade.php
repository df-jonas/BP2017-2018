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
                    <header><a class="header-title"><i class="fa fa-navicon"></i> Navigatie</a></header>
                    <ul>
                        <li><i class="fa fa-user"></i> Gebruikers</li>
                        <li><i class="fa fa-book"></i> Vakken</li>
                        <li><i class="fa fa-group"></i> Groepen</li>
                        <li><i class="fa fa-area-chart"></i> Statistieken</li>
                    </ul>
                </section>
                <!-- end admin nav -->

            </aside>
            <!-- end sidebar -->
            <!-- begin content -->
            <section class="content">
                    <section class="item clearfix">
                        <header><a class="header-title">Gebruikers</a></header>
                        <ul class="user-list">
                            @foreach($users as $user)
                                <li class="clearfix"><div class="col-lg-8 col-xs-12"> <span class="user-id">{{$user->id}}</span>{{$user->first_name  . " " . $user->last_name}}</div> <div class="col-lg-4 col-xs-12"><span class="action delete">Verwijderen</span><span class="action">Bekijk profiel</span></div> </li>
                            @endforeach
                        </ul>
                        {{ $users->links() }}
                </section>


                    <section class="item clearfix">
                        <header><a class="header-title">Vakken</a></header>
                        <ul class="course-list">
                            <li class="new"><a><i class="fa fa-plus"></i> Nieuw vak aanmaken</a></li>
                            @foreach($courses as $course)
                                <li class="clearfix"><div class="col-lg-8 col-xs-12"><span class="user-id">{{$course->id}}</span>{{$course->name}}</div> <div class="col-lg-4 col-xs-12"><span class="action delete">Verwijderen</span><span class="action">Bewerken</span></div> </li>
                            @endforeach
                        </ul>
                        {{ $courses->links() }}
                    </section>

                    <section class="item clearfix">
                        <header><a class="header-title">Groepen</a></header>
                        <ul class="group-list">
                            <li class="new"><a><i class="fa fa-plus"></i> Nieuwe groep aanmaken</a></li>
                            @foreach($groups as $group)
                                <li class="clearfix"><div class="col-lg-8 col-xs-12"><span class="user-id">{{$group->id}}</span>{{$group->name}}</div> <div class="col-lg-4 col-xs-12"><span class="action delete">Verwijderen</span><span class="action">Bewerken</span></div></li>
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