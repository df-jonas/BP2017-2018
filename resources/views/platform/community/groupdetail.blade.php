@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <!-- begin container -->
    <div class="container">
        @include('partials.platform.go-back')
        <!-- begin table -->
        <div class="table">

            <!-- sidebar -->
            <div class="sidebar">
                <!-- Upload button -->
                <article class="item button">
                    <a href="{{ route('community-post-new', [ 'group_id' => $group->url ]) }}">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Nieuwe post
                        </button>
                    </a>
                </article>
                <!-- end Upload button -->

                <!-- Search form -->
                <article class="item search">
                    <header><i class="fa fa-search"></i> Zoeken</header>
                    <div class="inner-addon left-addon">
                        <!--<i class="glyphicon glyphicon-search"></i>-->
                        <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm"/>
                    </div>
                </article>
                <!-- end Search form -->
                <!-- User items -->
                <article class="overview item user-owned">
                    <header><i class="fa fa-upload"></i> Mijn posts</header>
                    <div class="padding">
                        @foreach($myposts as $post)
                            <div class="row flex">
                                <div class="icon col-lg-2 col-md-2 col-xs-2">
                                    <img src="{{ asset('img/avatars/' . $post->user->image )}}" class="account-img round-img">
                                </div>
                                <div class="col-lg-8 col-md-8 col-xs-8">
                                    <h5 class="title no-margin"><a href="{{ $post->generateurl() }}">{{ $post->title }}</a></h5>
                                    <div class="rating col-xs-12 no-padding clearfix">
                                        <div class="col-lg-4 col-xs-3 no-padding">
                                            <i class="fa fa-comment"><span> 22</span></i>
                                        </div>
                                        <div class="col-lg-4 col-xs-3 no-padding">
                                            <i class="fa fa-thumbs-up"><span> 22</span></i>
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
            <!--end sidebar -->

            <!-- content section -->
            <div class="content">
                <div id="groupcontainer" class="item groups">

                    <div class="overview group group-type item clearfix">
                        <header>Posts in "{{ $group->name }}"</header>


                        @foreach($group->posts as $post)
                            <article class="group">
                                <div class="padding">
                                    <div class="row flex">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                            <img src="{{ asset('img/avatars/' . $post->user->image) }}" class="group-img round-img">
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-7 col-xs-10">
                                            <h5 class="title no-margin"><a href="{{ $post->generateurl() }}">{{ $post->title }}</a></h5>
                                            <div class="row icons">
                                                <div class="col-lg-2 col-sm-2 col-xs-3">
                                                    <i class="fa fa-comment"><span>{{ $post->commentcount() }}</span></i>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 col-xs-3">
                                                    <i class="fa fa-thumbs-up"><span>{{ $post->votesum() }}</span></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="info hide-mobile col-lg-6 col-md-6 col-sm-4 col-xs-12"
                                             style="text-align: right;">
                                            <h6>{{ $post->postcreated() }}</h6>
                                            <h6>door
                                                <span>{{ $post->user->first_name }} {{ $post->user->last_name }}</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- end content section -->

            <!-- end table -->
        </div>
    </div>
    <!-- end container -->



    @include('partials.footer')
@endsection

@section("scripts")
@endsection
