@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">

            <div class="sidebar">

                <!-- Upload button -->
                <article class="item button">
                    <a href="">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Nieuwe post
                        </button>
                    </a>


                </article>
                <!-- end Upload button -->

                <!--
                <article class="item clearfix">
                    <header>Nieuw bestand</header>
                    <div>
                        <a href="{{ route("community-group-new") }}">Nieuwe groep maken.</a>
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


                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5 class="title"><a href="#">Teveel springuren</a></h5>
                                <div class="rating">


                                    <p>test</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>


                            </div>

                        </div>

                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5 class="title"><a href="#">Teveel springuren</a></h5>
                                <div class="rating">


                                    <p>test</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>


                            </div>

                        </div>

                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5 class="title"><a href="#">Teveel springuren</a></h5>
                                <div class="rating">


                                    <p>test</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>


                            </div>

                        </div>

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
                                <p>23</p>
                            </div>
                        </div>

                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Posts</p>
                            </div>

                            <div class="col-xs-2">
                                <p>23</p>
                            </div>
                        </div>

                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal reacties</p>
                            </div>

                            <div class="col-xs-2">
                                <p>23</p>
                            </div>
                        </div>


                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal gebruikers</p>
                            </div>

                            <div class="col-xs-2">
                                <p>23</p>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end Community stats -->
            </div>



            <div class="content">
                <div id="groupcontainer" class="groups">

                    <div class="group-type item clearfix">
                        <header>Studentenraad<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>


                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                    <!-- <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">-->
                                        <img src="{{asset('img/icons/001-file.png')}} "
                                             style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4 class="title"><a href="#">Klachten</a></h4>
                                        <div class="row icons">
                                            <!--
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                            -->
                                            <div class="col-xs-12">
                                                23 posts
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-xs-12" style="text-align: right">
                                        <h6>Klachten over school</h6>
                                        <h6>Laatste update om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                        <img src="{{asset('img/icons/003-trophy-black-cup-symbol.png')}} "
                                             style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4 class="title"><a href="#">Evenementen</a></h4>
                                        <div class="row icons">
                                            <!--
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                            -->
                                            <div class="col-xs-12">
                                                23 posts
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-xs-12" style="text-align: right">
                                        <h6>Klachten over school</h6>
                                        <h6>Laatste update om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>


                    </div>


                    <div class="group-type item clearfix">
                        <header>Interesse groepen<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                    <!-- <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">-->
                                        <img src="{{asset('img/icons/001-file.png')}} "
                                             style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4 class="title"><a href="#">Design</a></h4>
                                        <div class="row icons">
                                            <!--
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                            -->
                                            <div class="col-xs-12">
                                                23 posts
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-xs-12" style="text-align: right">
                                        <h6>Klachten over school</h6>
                                        <h6>Laatste update om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                    <!-- <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">-->
                                        <img src="{{asset('img/icons/001-file.png')}} "
                                             style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4 class="title"><a href="#">Development</a></h4>
                                        <div class="row icons">
                                            <!--
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                            -->
                                            <div class="col-xs-12">
                                                23 posts
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-xs-12" style="text-align: right">
                                        <h6>Klachten over school</h6>
                                        <h6>Laatste update om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>


                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                        <img src="{{asset('img/icons/003-trophy-black-cup-symbol.png')}} "
                                             style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4 class="title"><a href="#">Server & Networking</a></h4>
                                        <div class="row icons">
                                            <!--
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                            -->
                                            <div class="col-xs-12">
                                                23 posts
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-xs-12" style="text-align: right">
                                        <h6>Klachten over school</h6>
                                        <h6>Laatste update om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>


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
