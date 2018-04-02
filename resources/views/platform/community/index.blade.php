@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">

            <div class="sidebar">

                <!-- Upload button -->
                <!--<article class="item button">
                    <a href="">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Nieuwe post
                        </button>
                    </a>


                </article>-->
                <!-- end Upload button -->

            <!--
                <article class="item clearfix">
                    <header>Nieuw bestand</header>
                    <div>
                        <a href="">Nieuwe groep maken.</a>
                    </div>
                </article>
                -->

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

                <!-- filter menu -->
                <article class="item filter">
                    <header>Posts filteren</header>
                    <div class="padding">
                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Populariteit</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>

                                </select>
                            </div>
                        </div>
                        <label>Type groep</label>
                        <br>

                        <div class="form-group clearfix">

                            <label class="checkbox-container col-xs-12">Studentenraad
                                <input type="checkbox" name="pubyear[]" value="1"
                                       class="filterlistener" checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox-container col-xs-12">Interesse groep
                                <input type="checkbox" name="pubyear[]" value="1"
                                       class="filterlistener">
                                <span class="checkmark"></span>
                            </label>

                        </div>
                        <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </article>
                <!-- filter menu -->


                <!-- User items -->
                <article class="item user-owned">
                    <header>Mijn posts</header>

                    <div class="padding">
                        @foreach($myposts as $post)
                            <div class="row flex">
                                <div class="icon col-lg-2 col-md-2 col-xs-2">
                                    <img src="{{ asset('img/avatars/' . $post->user->image )}}" class="group_img">
                                </div>
                                <div class="col-lg-8 col-md-8 col-xs-8">
                                    <h5 class="title"><a href="{{ $post->generateurl() }}">{{ $post->title }}</a></h5>
                                    <div class="rating">
                                        <div class="col-lg-2 col-xs-3">
                                            <i class="fa fa-comment"><span>22</span></i>
                                        </div>
                                        <div class="col-lg-2 col-xs-3">
                                            <i class="fa fa-thumbs-up"><span>22</span></i>
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
                <div id="groupcontainer" class="groups">


                    @foreach($categories as $category)
                        <div class="group-type item clearfix">
                            <header>{{ $category->name }}<!--<a href="#top"><i class="fa fa-angle-up"></i></a>--></header>
                            @foreach($category->groups as $group)
                                <article class="group" style="position: relative">
                                    <div class="padding">
                                        <div class="row flex">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                <img src="{{asset('img/icons/' . $group->icon->path)}}"
                                                     style="width: 36px; height: 36px">
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-11">
                                                <h4 class="title"><a href="{{ $group->url() }}">{{ $group->name }}</a></h4>
                                                <div class="row icons">
                                                    <!--<div class="col-lg-2"><i class="fa fa-comment"><span>22</span></i></div>
                                                    <div class="col-lg-2"><i class="fa fa-thumbs-up"><span>22</span></i></div>-->
                                                    <div class="col-xs-12">
                                                        @if($group->postcount() == 1)
                                                            1 post
                                                        @else
                                                            {{ $group->postcount() }} posts
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-center col-lg-6 col-md-6 col-sm-6 col-xs-0 hide-mobile" style="text-align: right;">
                                                <h6>{{ $group->shortdesc }}</h6>
                                                <h6>Laatste update: {{ $group->lastupdate() }}</h6>
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
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
