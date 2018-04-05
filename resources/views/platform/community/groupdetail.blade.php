@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <!-- begin container -->
    <div class="container">
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
                    <header>Zoeken</header>
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-search"></i>
                        <input type="text" id="search" name="search" class="form-control filterlistener"
                               placeholder="zoekterm"/>
                    </div>
                </article>
                <!-- end Search form -->


                <!-- User items -->
                <article class="item user-owned">
                    <header>Mijn posts</header>

                    <div class="padding">
                        @foreach($myposts as $post)
                            <div class="row flex">
                                <div class="icon col-md-2 col-xs-2">
                                    <img src="{{ asset('img/avatars/' . $post->user->image )}}" class="group-img round-img">
                                </div>
                                <div class="col-md-8 col-xs-8">
                                    <h5 class="title"><a href="{{ $post->generateurl() }}">{{ $post->title }}</a></h5>
                                    <div class="rating">
                                        <p>subtitle</p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-2">
                                    <i class="fa fa-pencil brown"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </article>
                <!-- end User items -->

                <!-- Community stats -->
                <article class="item stats">
                    <header>Statistieken</header>
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
                                            <img src="{{ asset('img/avatars/' . $post->user->image) }}"
                                                 class="group-img round-img">
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-7 col-xs-10">
                                            <h4 class="title"><a href="{{ $post->generateurl() }}">{{ $post->title }}</a></h4>
                                            <div class="row icons">
                                                <div class="col-sm-3 col-xs-12">
                                                    <i class="fa fa-comment"><span>{{ $post->commentcount() }} reacties</span></i>
                                                </div>

                                                <!-- TODO aantal likes tellen (controleren door arno) -->
                                                <div class="col-sm-3 col-xs-12">
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
