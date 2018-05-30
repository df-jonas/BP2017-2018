@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Community')
@include('partials.platform.header')
@include('partials.platform.subheader')
<!-- begin container -->
<section class="container">
    <!-- begin table -->
    <section class="table">
        <!-- begin sidebar -->
        <aside class="sidebar">
            <!-- Search form -->
            <section class="item search">
                <header>  <a class="header-title"><i class="fa fa-search"></i> Zoeken</a></header>
                <div class="inner-addon left-addon">
                    <!--<i class="glyphicon glyphicon-search"></i>-->
                    <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm" tabindex="1"/>
                </div>
            </section>
            <!-- end Search form -->

            <!-- filter menu -->
            <section class="item filter">
                <header>  <a class="header-title"><i class="fa fa-filter"></i> Posts filteren</a></header>
                <div class="padding">
                    <div class="form-group col-xs-12 no-padding clearfix">
                        <div class="sliderdiv">
                            <label for="rangepop">Populariteit</label>
                            <input id="rangepop" class="filterlistener" name="popularity" type="range" min="0" max="100" tabindex="2">
                        </div>
                    </div>

                    <div class="form-group clearfix">
                        <label>Type groep</label>
                        @foreach($categories as $category)
                            @foreach($category->groups as $group)
                                <label class="checkbox-container col-xs-12">{{ $group->name }}
                                    <input type="checkbox" name="category[]" value="{{ $group->id }}" class="filterlistener" checked>
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        @endforeach
                    </div>
                    <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                </div>
            </section>
            <!-- filter menu -->

            <!-- User items -->
            <section class="item user-owned hide-mobile">
                <header> <a class="header-title"><i class="fa fa-upload"></i> Mijn posts</a></header>
                <div class="padding">
                    @foreach($myposts as $mypost)
                        <div class="row flex">
                            <section class="icon col-lg-2 col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . $mypost->user->image )}}" class="account-img round-img" alt="User profile image">
                            </section>
                            <section class="col-lg-8 col-md-8 col-xs-8">
                                <h2 class="item-title"><a href="{{ $mypost->generateurl() }}">{{ $mypost->title }}</a></h2>
                                <div class="rating col-xs-12 no-padding clearfix">
                                    <div class="col-xs-12 no-padding">
                                        <span class="fa fa-thumbs-up"></span> {{ $mypost->votesum() }} likes
                                    </div>
                                </div>
                            </section>
                            <div class="col-lg-2 col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- end User items -->

            <!-- Community stats -->
            <section class="item stats">
                <header> <a class="header-title"><i class="fa fa-line-chart"></i> Statistieken</a></header>
                <div class="padding">
                    <div class="row flex">
                        <div class="col-xs-10">
                            <p>Groepen</p>
                        </div>

                        <div class="col-xs-2">
                            <p class="amount">{{ $stats['groups'] }}</p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-xs-10">
                            <p>Posts</p>
                        </div>

                        <div class="col-xs-2">
                            <p class="amount">{{ $stats['posts'] }}</p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-xs-10">
                            <p>Aantal reacties</p>
                        </div>

                        <div class="col-xs-2">
                            <p class="amount">{{ $stats['comments'] }}</p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-xs-10">
                            <p>Aantal gebruikers</p>
                        </div>

                        <div class="col-xs-2">
                            <p class="amount">{{ $stats['users'] }}</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end Community stats -->
        </aside>
        <!-- end sidebar -->
        <!-- begin content -->
        <section class="content community overview">
            <section id="groupcontainer" class="overview groups">
                @foreach($categories as $category)
                    <section class="overview group-type item clearfix">
                        <header> <a class="header-title">{{ $category->name }}</a></header>
                        @foreach($category->groups as $group)
                            <article class="group" style="position: relative">
                                <div class="padding">
                                    <section class="row flex">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                            <img class="account-img" src="{{asset('img/icons/' . $group->icon->path)}}" alt="User profile image">
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-10">
                                            <h2 class="item-title no-margin"><a href="{{ $group->url() }}">{{ $group->name }}</a></h2>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    @if($group->postcount() == 1)
                                                        <h4 class="item-count">1 post</h4>
                                                    @else
                                                        <h4 class="item-count">{{ $group->postcount() }} posts</h4>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-center col-lg-6 col-md-6 col-sm-6 col-xs-0 hide-mobile" style="text-align: right;">
                                            <h6 class="bold">{{ $group->shortdesc }}</h6>
                                            <h6 class="update">Laatste update: {{ $group->lastupdate() }}</h6>
                                        </div>
                                    </section>
                                </div>
                            </article>
                        @endforeach
                    </section>
                @endforeach
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

@section("scripts")
    <script src="{{ asset("js/moment.js") }}"></script>
    <script src="{{ asset("js/community-filter.js") }}"></script>
@endsection
