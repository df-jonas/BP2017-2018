@extends('layouts.platform')

@section('pagetitle', 'Profiel')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')
<!-- begin container -->
<section class="container profile">
    <!-- begin profile message -->
@include('partials.platform.message')
<!-- end profile message -->


    <!-- begin profile info -->
    <div class="row">
        <!-- picture -->
        <section class="col-xs-12">
            <div class="item padding left-border clearfix">
                <section class="headline">
                    <div class="row flex">
                        <section class="left col-lg-1 col-sm-2 col-xs-12">
                            <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img" alt="User profile image">
                            <br>
                        </section>
                        <section class="right col-lg-11 col-sm-10 col-xs-12">
                            <h4 class="user-title">{{ $user->first_name. " " .$user->last_name }}</h4>
                            <h4 style="margin-top: 0">
                                <small>{{ $email }}</small>
                            </h4>
                        </section>
                    </div>
                    <br>
                </section>
            </div>
        </section>
        <!-- end picture -->
    </div>
    <!-- end profile info -->

    <div class="row">
        <!-- voorkeuren -->
        <section class="col-xs-12">
            <div class="item padding clearfix">
                <h3>Recente bestanden</h3>
                @foreach($files as $file)
                    <h6><a href="{{ $file->detailUrl() }}">{{ $file->title }}</a></h6>
                @endforeach
            </div>
        </section>
        <!-- end voorkeuren -->

        <section class="col-xs-12">
            <div class="item padding clearfix">
                <h3>Recente posts</h3>
            @foreach($posts as $post)
                    <h6><a href="{{ $post->generateurl() }}">{{ $post->title }}</a></h6>
                @endforeach
            </div>
        </section>
    </div>
    <!-- end settings -->
</section>
<!-- end container -->
<!-- begin footer -->
@include('partials.footer')
<!-- end footer -->
@endsection

@section("scripts")
    <script src="{{ asset("js/course-filter.js") }}"></script>
@endsection
