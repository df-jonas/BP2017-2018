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
                    <header><a class="header-title">Gebruikers</a></header>
                    <ul id="user-list" class="admin-list">
                        @foreach($users as $user)
                            <li class="clearfix">
                                <div class="col-lg-8 col-xs-12"><span class="user-id">{{$user->id}}</span>{{$user->first_name  . " " . $user->last_name}}</div>
                                <div class="col-lg-4 col-xs-12">
                                    <!-- <span class="action delete">Verwijderen</span> -->
                                    <a href="{{ $user->url() }}" class="profile-url"><span class="action">Bekijk profiel</span></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    {{ $users->links() }}
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