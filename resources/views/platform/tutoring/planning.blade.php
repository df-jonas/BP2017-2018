@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <!-- Sidebar -->
            <div class="sidebar">
                <article class="item">
                    <header>Informatie</header>
                    <div class="padding">

                    </div>
                </article>
                <!-- sidebar -->
            </div>

            <!-- content -->
            <div class="content">
                <div class="item clearfix">
                    <div class="padding">
                        Planning
                    </div>
                </div>
            </div>
            <!-- content -->
        </div>
        <!-- container -->
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{asset("js/sharing-new.js")}}"></script>
@endsection