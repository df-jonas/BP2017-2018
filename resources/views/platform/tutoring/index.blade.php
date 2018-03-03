@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <div class="sidebar">


                <!-- New button -->
                <article class="item button">
                    <a href="">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Nieuw verzoek
                        </button>
                    </a>


                </article>
                <!-- end New button -->

                <!-- Requests-->
                <article class="item user-owned">
                    <header>Verzoeken</header>
                    <div class="padding">


                        <div class="row flex">
                            <div class="icon col-xs-2">
                                <img src="{{asset('img/icons/003-trophy-black-cup-symbol.png')}} "
                                     style="width: 36px; height: 36px">
                            </div>


                            <div class="col-xs-7">
                                <h5><a href="#">Android development</a></h5>
                                <div class="rating">


                                    <p>Inkomend tutee verzoek</p>


                                </div>

                            </div>

                            <div class="col-xs-3">
                                <i class="fa fa-check brown"></i>
                                <i class="fa fa-trash brown"></i>
                            </div>

                        </div>


                        <div class="row flex">
                            <div class="col-xs-2">
                                <img src="{{asset('img/icons/003-trophy-black-cup-symbol.png')}} "
                                     style="width: 36px; height: 36px">
                            </div>


                            <div class="col-xs-7">
                                <h5><a href="#">Android development</a></h5>
                                <div class="rating">


                                    <p>Uitgaand tutor verzoek</p>


                                </div>

                            </div>

                            <div class="col-xs-3">
                                <i class="fa fa-check brown"></i>
                                <i class="fa fa-trash brown"></i>


                            </div>

                        </div>


                    </div>
                </article>
                <!-- End requests-->


                <!--  Requests-->
                <article class="item user-owned">
                    <header>Mijn tutees</header>
                    <div class="padding">


                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Johnny Smit</a></h5>
                                <div class="rating">


                                    <p>Android Development</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-comments brown"></i>


                            </div>

                        </div>

                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Johnny Smit</a></h5>
                                <div class="rating">


                                    <p>Android Development</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-comments brown"></i>


                            </div>

                        </div>

                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Johnny Smit</a></h5>
                                <div class="rating">


                                    <p>Android Development</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-comments brown"></i>


                            </div>

                        </div>

                    </div>
                </article>
                <!-- End requests-->


                <!-- Requests-->
                <article class="item user-owned">
                    <header>Mijn tutors</header>
                    <div class="padding">


                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Johnny Smit</a></h5>
                                <div class="rating">


                                    <p>Android Development</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-comments brown"></i>


                            </div>

                        </div>

                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Johnny Smit</a></h5>
                                <div class="rating">


                                    <p>Android Development</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-comments brown"></i>


                            </div>

                        </div>

                    </div>
                </article>
                <!-- End requests-->


            </div>


            <div class="content">
                <div id="tutoringcontent">

                    <div class="row">
                        <!-- Search form -->
                        <article class="col-lg-4  col-xs-12">
                            <div class="item col-lg-12">
                                <header>Wordt tutor</header>
                                <div class="padding">

                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas.</p>

                                </div>
                            </div>

                        </article>
                        <!-- Search form -->


                        <!-- Search form -->
                        <article class="col-lg-4  col-xs-12">
                            <div class="item col-lg-12">
                                <header>Hoe werkt het?</header>
                                <div class="padding">

                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas.</p>

                                </div>
                            </div>

                        </article>
                        <!-- Search form -->

                        <!-- Search form -->
                        <article class="col-lg-4  col-xs-12">
                            <div class="item col-lg-12">
                                <header>Vind een tutor</header>
                                <div class="padding">

                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas.</p>

                                </div>
                            </div>

                        </article>
                        <!-- Search form -->

                    </div>


                </div>

                <div class="row">
                    <!-- Search form -->
                    <article class="item col-xs-12">
                        <div class="padding">
                            <div class="row">
                                <div class="col-lg-3 col-xs-12">
                                    <div class="table">
                                        <div style="display: table-cell; width: 32px"><img
                                                    src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                    class="group_img"></div>
                                        <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                            <h6 style="margin: 0">Arno Stalpaert</h6>
                                            <h6 style="margin: 5px 0">Data Visualisatie</h6>
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




                                <div id="messages" class="col-lg-12">

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


                                    <div class="msg own col-lg-12">

                                        <div class="txt col-lg-11">
                                            <div class="table">
                                                <div style="display: table-cell;  float: left" >
                                                    <span>Donderdag om 14:43</span>
                                                </div>
                                                <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                    <span>ik</span>
                                                </div>
                                            </div>

                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                                        </div>

                                        <div class="picture col-lg-1">
                                            <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                        </div>





                                    </div>


                                    <div class="msg own col-lg-12">

                                        <div class="txt col-lg-11">
                                            <div class="table">
                                                <div style="display: table-cell;  float: left" >
                                                    <span>Donderdag om 14:43</span>
                                                </div>
                                                <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                    <span>ik</span>
                                                </div>
                                            </div>

                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                                        </div>

                                        <div class="picture col-lg-1">
                                            <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
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
                    <!-- Search form -->
                </div>
            </div>

        </div>
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection