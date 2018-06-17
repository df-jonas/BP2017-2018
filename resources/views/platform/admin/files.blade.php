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
                    <header><a class="header-title">Files</a></header>
                    <ul id="files-list" class="admin-list">
                        @foreach($files as $file)
                            <li class="clearfix">
                                <div class="col-lg-8 col-xs-12">
                                    <span class="user-id">{{$file->id}}</span>{{$file->title}}</div>
                                <div class="col-lg-4 col-xs-12">
                                    <span class="action delete">Verwijderen</span>
                                    <a href="{{ $file->detailUrl() }}"><span class="action">Bekijken</span></a>
                                </div>
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