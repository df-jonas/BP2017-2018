@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
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
                <article class="item user-owned">
                    <header>Mijn posts</header>

                    <div class="padding">
                        @foreach($myposts as $post)
                            <div class="row flex">
                                <div class="icon col-md-2 col-xs-2">
                                    <img src="{{ asset('img/avatars/' . $post->user->image )}}" class="group_img">
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
                                <p>0</p>
                            </div>
                        </div>

                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Posts</p>
                            </div>

                            <div class="col-xs-2">
                                <p>0</p>
                            </div>
                        </div>

                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal reacties</p>
                            </div>

                            <div class="col-xs-2">
                                <p>0</p>
                            </div>
                        </div>


                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal gebruikers</p>
                            </div>

                            <div class="col-xs-2">
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end Community stats -->
            </div>

            <div class="content">
                <div id="groupcontainer" class="item groups">

                    <div class="group-detail detail clearfix">
                        <header>{{ $post->group->category->name }} > {{ $post->group->name }}<a href=""><i
                                        class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding clearfix">
                                <div class="row col-xs-12">
                                    <div class="info col-lg-3 col-xs-12">
                                        <div class="table">
                                            <div style="display: table-cell; width: 32px">
                                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                     class="account_img">
                                            </div>
                                            <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                                <h6 style="margin: 0">{{ $post->user->first_name }} {{ $post->user->last_name }}</h6>
                                                <h6 style="margin: 5px 0">{{ $post->postcreated() }}</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 col-xs-12">
                                        <div class="actions col-lg-10 col-lg-push-2 col-xs-12"
                                             style="text-align: center">
                                            <div class="action col-lg-4 col-xs-12" style="border: 1px solid darkgray"><i
                                                        class="fa fa-thumbs-up"></i> Upvote
                                            </div>
                                            <div class="action col-lg-4 col-xs-12" style="border: 1px solid darkgray"><i
                                                        class="fa fa-thumbs-down"></i> Downvote
                                            </div>
                                            <div class="action col-lg-4 col-xs-12" style="border: 1px solid darkgray"><i
                                                        class="fa fa-bookmark"></i> Volgen
                                            </div>
                                        </div>

                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="col-xs-12">
                                    <h3>Teveel springuren</h3>
                                    <p>
                                        Een broodrooster is een huishoudelijk apparaat waarmee brood kan worden
                                        geroosterd.
                                        Een geroosterde snee brood noemt men ook wel toast. Een snee brood werd
                                        traditioneel
                                        geroosterd aan een lange vork of in een klem van metaaldraad boven open vuur. In
                                        1893 werd het elektrisch broodrooster uitgevonden door de Schot Alan
                                        MacMasters.[1]
                                        Albert Marsh ontwikkelde in 1905 de nichrome verwarmingsdraden bestaande uit een
                                        nikkel-chroomlegering die nog steeds in broodroosters worden toegepast.
                                    </p>

                                    <p>
                                        Het bekende ‘pop-up’ broodrooster, die automatisch de broodjes uit de rooster
                                        gooit,
                                        werd in 1919 door Charles Strite gepatenteerd. Er zijn ook broodroosters waarmee
                                        tosti’s gemaakt kunnen worden. Deze hebben daarvoor een uitneembare houder, waar
                                        de
                                        tosti in geplaatst wordt.
                                        Sindsdien zijn er nog veel verbeteringen en aanpassingen aan het broodrooster
                                        gedaan.
                                    </p>

=======
                                
                                <div class="col-xs-12">
                                    <h3>{{ $post->title }}</h3>
                                    <p>{{ $post->content }}</p>
>>>>>>> origin/dev_arno
                                </div>

                                <div class="info col-xs-12" style="margin-top: 5%">
                                    <ul>
                                        <li>Reacties: 0</li>
                                        <li>Upvotes: 0</li>
                                        <li>Downvotes: 0</li>
                                    </ul>
                                </div>


                                <div id="comment-box" class="flex padding col-lg-12">
                                    <div class="picture col-lg-1">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                             class="account_img">
                                    </div>
                                    <form id="comment-form" method="POST"
                                          action="{{ route('community-add-comment', ['group_id' => $post->group->url, 'post_id' => $post->id]) }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="txt col-lg-10">
                                            <input type="text" name="comment" id="commentfield" class="col-lg-12"
                                                   placeholder="reactie toevoegen">
                                        </div>
                                        <div class="icon col-lg-1">
                                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="item clearfix" style="margin-top: 3em">
                    <article class="group">
                        <div class="padding">
                            <h3>Reacties</h3>
                        </div>
                        <div id="messages" class="col-lg-12" style="border-bottom: none">
                            @foreach($post->comments as $comment)
                                <div class="msg col-lg-12">
                                    <div class="picture col-lg-1">
                                        <img src="{{ asset('img/avatars/' . $comment->user->image )}}"
                                             class="group_img">
                                    </div>
                                    <div class="txt col-lg-11">
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
