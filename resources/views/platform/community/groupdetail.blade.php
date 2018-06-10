@extends('layouts.platform')
@section('pagetitle', 'Community - ' . $group->name)
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')

<!-- begin container -->
<section class="container">
    <!-- go back -->
@include('partials.platform.go-back')
<!-- end go back-->
<!-- begin table -->
    <section class="table">
        <!-- begin sidebar -->
        <aside class="sidebar">
            <!-- Upload button -->
            <section class="item button">
                <a href="{{ route('community-post-new', [ 'group_id' => $group->url ]) }}">
                    <button>
                         Nieuwe post
                    </button>
                </a>
            </section>
            <!-- end Upload button -->

            <!-- Search form -->
            <section class="item search">
                <header><a class="header-title"><i class="fa fa-search"></i> Zoeken</a></header>
                <div class="inner-addon left-addon">
                    <!--<i class="glyphicon glyphicon-search"></i>-->
                    <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm"/>
                </div>
            </section>
            <!-- end Search form -->
            <!-- User items -->
            <section class="item user-owned hide-mobile">
                <header> <a class="header-title"><i class="fa fa-upload"></i> Mijn posts</a></header>
                <div class="padding">
                    @foreach($myposts as $mypost)
                        <div class="row flex">
                            <section class="icon col-lg-2 col-md-2 col-xs-2">
                                <a href="{{$mypost->user->url()}}" class="profile-url"></a>
                                <a href="{{ $mypost->user->url() }}" class="profile-url"><img src="{{ asset('img/avatars/' . $mypost->user->image )}}" class="account-img round-img" alt="User profile image"></a>
                            </section>
                            <section class="col-lg-8 col-md-8 col-xs-8">
                                <h2 class="item-title no-margin"><a href="{{ $mypost->generateurl() }}">{{ $mypost->title }}</a></h2>
                                <div class="rating col-xs-12 no-padding clearfix">
                                    <div class="col-xs-12 no-padding">
                                        <span class="fa fa-thumbs-up"></span> {{ $mypost->votesum() }} likes
                                    </div>
                                </div>
                            </section>
                            <section class="col-lg-2 col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>
                            </section>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- end User items -->
        </aside>
        <!--end sidebar -->
        <!-- begin content -->
        <section class="content community overview">
            <section id="groupcontainer" class="item groups">
                <section class="group group-type item clearfix">
                    <header><a class="header-title">Posts in "{{ $group->name }}"</a></header>
                    @if(sizeof($group->posts) > 0)
                        @foreach($posts as $post)
                            <article class="group">
                                <div class="padding">
                                    <div class="row flex">
                                        <section class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                            <a href="{{ $post->user->url() }}" class="profile-url"><img src="{{ asset('img/avatars/' . $post->user->image) }}" class="group-img round-img" alt="User profile picture"></a>
                                        </section>
                                        <section class="col-lg-5 col-md-5 col-sm-7 col-xs-10">
                                            <h2 class="item-title no-margin"><a href="{{ $post->generateurl() }}">{{ $post->title }}</a>
                                            </h2>
                                            <section class="row icons">
                                                <section class="col-lg-2 col-sm-2 col-xs-3">
                                                    <i class="fa fa-comment"><span> {{ $post->commentcount() }}</span></i>
                                                </section>
                                                <section class="col-lg-2 col-sm-2 col-xs-3">
                                                    <i class="fa fa-thumbs-up"><span> {{ $post->votesum() }}</span></i>
                                                </section>
                                            </section>
                                        </section>
                                        <section class="info hide-mobile col-lg-6 col-md-6 col-sm-4 col-xs-12" style="text-align: right;">
                                            <h6>{{ $post->postcreated() }}</h6>
                                            <h6>door
                                                <span> <a href="{{ $post->user->url() }}" class="profile-url">{{ $post->user->first_name }} {{ $post->user->last_name }}</a></span>
                                            </h6>
                                        </section>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @else
                        <span class="item padding">Er zijn geen posts in deze groep. Ga van start door een nieuwe post toe te voegen.</span>
                    @endif
                    {{ $posts->links() }}
                </section>
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
@endsection