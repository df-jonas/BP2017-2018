@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Downloads')
@include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        @include('partials.platform.go-back')
        <div class="table">
            <div class="sidebar">
                <!-- Search form -->
                <article class="item search">
                    <header><i class="fa fa-search"></i> Zoeken</header>
                    <div class="inner-addon left-addon">
                        <!--<i class="glyphicon glyphicon-search"></i>-->
                        <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm"/>
                    </div>
                </article>
                <!-- Search form -->
            </div>
            <!-- content -->
            <div class="content">
                <div id="filter-results" class="filecontainer files">
                    <p>Mijn downloads</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
