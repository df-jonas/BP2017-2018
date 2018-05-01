@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Tutoring - Help')
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
                        <article class="col-lg-12 col-xs-12">
                            <div class="item col-lg-12">
                                <header>Hoe werkt het?</header>
                                <div class="padding">

                                    <img src="{{ asset('img/icons/003-whiteboard.svg' )}}">
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas.</p>

                                </div>
                            </div>

                        </article>
                        <!-- Search form -->




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