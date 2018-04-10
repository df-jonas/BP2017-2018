@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        @include('partials.platform.go-back')
        <div class="table">
            <div class="sidebar">
                <!-- Upload button -->
                <article class="item button">
                    <a href="#">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Nieuwe post
                        </button>
                    </a>
                </article>
                <!-- end Upload button -->
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
                                    <h5 class="title"><a href="{{ $post->generateurl() }}">{{ $post->title }}</a></h5>
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

            <div class="content">
                <div id="groupcontainer" class="item groups">

                    <div class="group-detail detail clearfix">
                        <header>{{ $post->group->category->name }} > {{ $post->group->name }}</header>

                        <article class="detail group col-xs-12">
                            <div class="padding clearfix">
                                <div class="row">
                                    <div class="info  col-lg-6 left col-md-4 col-sm-6 col-xs-12">
                                        <div class="table">
                                            <div style="display: table-cell; width: 32px">
                                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                     class="account-img round-img">
                                            </div>
                                            <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                                <h6 style="margin: 0">{{ $post->user->first_name }} {{ $post->user->last_name }}</h6>
                                                <h6 style="margin: 5px 0">{{ $post->postcreated() }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="actions col-lg-6 right col-md-8 col-sm-6 col-xs-12">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <a class="action col-lg-12 col-xs-12" href="#">Like</a>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <a class="action col-lg-12 col-xs-12" href="#">Volgen</a>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <a class="action col-lg-12 col-xs-12" href="#">Rapporteer</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 no-padding">
                                    <h4>{{ $post->title }}</h4>
                                    <p>{{ $post->content }}</p>
                                </div>

                                <div class="info" style="margin-top: 5%">
                                    <ul>
                                        <li>Reacties: 0</li>
                                        <li>Upvotes: 0</li>
                                    </ul>
                                </div>
                                
                            </div>
                            <div id="comment-box" class="row flex padding">
                                <div class="picture hide-mobile col-lg-1 col-sm-2 col-xs-0">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="account-img round-img">
                                </div>
                                <form id="comment-form" class="col-lg-11 col-sm-10 col-xs-12" method="POST" action="{{ route('community-add-comment', ['group_id' => $post->group->url, 'post_id' => $post->id]) }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="txt col-lg-11 col-sm-10 col-xs-10">
                                        <input type="text" name="comment" id="commentfield" class="col-xs-11" placeholder="reactie toevoegen">
                                    </div>
                                    <div class="icon col-lg-1 col-sm-2 col-xs-2 no-padding">
                                        <button type="submit" class="col-xs-12"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="item clearfix" style="margin-top: 3em">
                    <article class="group">
                        <div class="padding">
                            <h4>Reacties</h4>
                        </div>
                        <div id="messages" class="col-lg-12" style="border-bottom: none">
                            @foreach($post->comments as $comment)
                                <div class="msg clearfix col-lg-12">
                                    <div class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">
                                        <img src="{{ asset('img/avatars/' . $comment->user->image )}}"
                                             class="group-img round-img">
                                    </div>
                                    <div class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">
                                        <div class="table">
                                            <div style="display: table-cell;  float: left">
                                                <span>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</span>
                                            </div>
                                            <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                <span>{{ $comment->commentcreated() }}</span>
                                            </div>
                                        </div>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                    </article>
                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/community-detail.js") }}"></script>
@endsection
