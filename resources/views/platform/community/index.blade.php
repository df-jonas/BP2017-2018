@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Community')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        <div class="table">
            <div class="sidebar">
                <!-- TODO [JONAS] Only admins should be able to create a new group.
                    <article class="item clearfix">
                        <header>Nieuw bestand</header>
                        <div>
                            <a href="">Nieuwe groep maken.</a>
                        </div>
                    </article>
                -->
                <!-- Search form -->
                <article class="item search">
                    <header><i class="fa fa-search"></i> Zoeken</header>
                    <div class="inner-addon left-addon">
                        <!--<i class="glyphicon glyphicon-search"></i>-->
                        <input type="text" id="search" name="search" class="form-control filterlistener"
                               placeholder="zoekterm"/>
                    </div>
                </article>
                <!-- end Search form -->

                <!-- filter menu -->
                <article class="item filter">
                    <header><i class="fa fa-filter"></i> Posts filteren</header>
                    <div class="padding">
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="sliderdiv">
                                <label for="rangepop">Populariteit</label>
                                <input id="rangepop" class="filterlistener" name="popularity" type="range" min="0"
                                       max="100">
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label>Type groep</label>
                            @foreach($categories as $category)
                                @foreach($category->groups as $group)
                                    <label class="checkbox-container col-xs-12">{{ $group->name }}
                                        <input type="checkbox" name="category[]" value="{{ $group->id }}"
                                               class="filterlistener" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                            @endforeach
                        </div>
                        <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </article>
                <!-- filter menu -->

                <!-- User items -->
                <article class="overview item user-owned">
                    <header><i class="fa fa-upload"></i> Mijn posts</header>
                    <div class="padding">
                        @foreach($myposts as $mypost)
                            <div class="row flex">
                                <div class="icon col-lg-2 col-md-2 col-xs-2">
                                    <img src="{{ asset('img/avatars/' . $mypost->user->image )}}"
                                         class="account-img round-img">
                                </div>
                                <div class="col-lg-8 col-md-8 col-xs-8">
                                    <h5 class="title no-margin"><a
                                                href="{{ $mypost->generateurl() }}">{{ $mypost->title }}</a></h5>
                                    <div class="rating col-xs-12 no-padding clearfix">
                                        <div class="col-xs-12 no-padding">
                                            <span class="fa fa-thumbs-up"></span> {{ $mypost->votesum() }} likes
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-xs-2">
                                    <i class="fa fa-pencil brown"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </article>
                <!-- end User items -->

                <!-- Community stats -->
                <article class="item stats">
                    <header><i class="fa fa-line-chart"></i> Statistieken</header>
                    <div class="padding">
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Groepen</p>
                            </div>

                            <div class="col-xs-2">
                                <p class="amount">0</p>
                            </div>
                        </div>
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Posts</p>
                            </div>

                            <div class="col-xs-2">
                                <p class="amount">0</p>
                            </div>
                        </div>
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal reacties</p>
                            </div>

                            <div class="col-xs-2">
                                <p class="amount">0</p>
                            </div>
                        </div>
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal gebruikers</p>
                            </div>

                            <div class="col-xs-2">
                                <p class="amount">0</p>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end Community stats -->
            </div>
            <div class="content">
                <div id="groupcontainer" class="overview groups">
                    @foreach($categories as $category)
                        <div class="overview group-type item clearfix">
                            <header>{{ $category->name }}</header>
                            @foreach($category->groups as $group)
                                <article class="group" style="position: relative">
                                    <div class="padding">
                                        <div class="row flex">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                                <img class="account-img"
                                                     src="{{asset('img/icons/' . $group->icon->path)}}">
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-10">
                                                <h5 class="title no-margin"><a
                                                            href="{{ $group->url() }}">{{ $group->name }}</a></h5>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        @if($group->postcount() == 1)
                                                            1 post
                                                        @else
                                                            {{ $group->postcount() }} posts
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-center col-lg-6 col-md-6 col-sm-6 col-xs-0 hide-mobile"
                                                 style="text-align: right;">
                                                <h6 class="bold">{{ $group->shortdesc }}</h6>
                                                <h6 class="update">Laatste update: {{ $group->lastupdate() }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
@section("scripts")
    <script src="{{ asset("js/community-filter.js") }}"></script>
@endsection
