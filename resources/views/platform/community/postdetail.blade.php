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


                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Teveel springuren</a></h5>
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
                                <h5><a href="#">Teveel springuren</a></h5>
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
                                <h5><a href="#">Teveel springuren</a></h5>
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
                <div id="groupcontainer" class="item groups">

                    <div class="group-detail detail clearfix">
                        <header>Studentenraad > klachten<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                                <div class="row">
                                    <div class="col-lg-3 col-xs-12">
                                        <div class="table">
                                            <div style="display: table-cell; width: 32px"><img
                                                        src="{{ URL::asset('img/avatars/1518557547_bday.jpg') }}"
                                                        class="account_img"></div>
                                            <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                                <h6 style="margin: 0">Arno Stalpaert</h6>
                                                <h6 style="margin: 5px 0">Donderdag om 14:43</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 col-xs-12">
                                        <div class="actions col-lg-6 col-lg-push-6 col-xs-12" style="text-align: center">
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

                                <h3>Teveel springuren</h3>
                                <p>
                                    Een broodrooster is een huishoudelijk apparaat waarmee brood kan worden geroosterd.
                                    Een geroosterde snee brood noemt men ook wel toast. Een snee brood werd traditioneel
                                    geroosterd aan een lange vork of in een klem van metaaldraad boven open vuur. In
                                    1893 werd het elektrisch broodrooster uitgevonden door de Schot Alan MacMasters.[1]
                                    Albert Marsh ontwikkelde in 1905 de nichrome verwarmingsdraden bestaande uit een
                                    nikkel-chroomlegering die nog steeds in broodroosters worden toegepast.
                                </p>

                                <p>
                                    Het bekende ‘pop-up’ broodrooster, die automatisch de broodjes uit de rooster gooit,
                                    werd in 1919 door Charles Strite gepatenteerd. Er zijn ook broodroosters waarmee
                                    tosti’s gemaakt kunnen worden. Deze hebben daarvoor een uitneembare houder, waar de
                                    tosti in geplaatst wordt.
                                    Sindsdien zijn er nog veel verbeteringen en aanpassingen aan het broodrooster
                                    gedaan.
                                </p>

                                <div class="info" style="margin-top: 5%">
                                    <ul>
                                        <li>Reacties: 44</li>
                                        <li>Upvotes: 44</li>
                                        <li>Downvotes: 44</li>
                                    </ul>
                                </div>

                                <hr>

                                <div id="comment-box" class="col-lg-12 flex" style="margin-top: 3.5em">
                                    <div class="picture col-lg-1">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="account_img">
                                    </div>

                                    <div class="txt col-lg-10">
                                        <p>Reactie toevoegen</p>


                                    </div>

                                    <div class="icon col-lg-1">
                                        <i class="fa fa-paper-plane"></i>


                                    </div>
                                </div>

                            </div>

                        </article>


                    </div>


                    <div class="group-detail clearfix">


                        <article class="group">
                            <div class="padding">
                                <h3>Reacties</h3>
                            </div>



                            <div id="messages" class="col-lg-12" style="border-bottom: none">

                                <div class="msg col-lg-12">

                                    <div class="picture col-lg-1">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                    </div>

                                    <div class="txt col-lg-11">
                                        <div class="table">
                                            <div style="display: table-cell;  float: left" >
                                                <span>Jeffrey Thor</span>
                                            </div>
                                            <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                <span>Donderdag om 14:43</span>
                                            </div>
                                        </div>

                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                                    </div>



                                </div>





                                <div class="msg col-lg-12">

                                    <div class="picture col-lg-1">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                    </div>

                                    <div class="txt col-lg-11">
                                        <div class="table">
                                            <div style="display: table-cell;  float: left" >
                                                <span>Jeffrey Thor</span>
                                            </div>
                                            <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                <span>Donderdag om 14:43</span>
                                            </div>
                                        </div>

                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
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
