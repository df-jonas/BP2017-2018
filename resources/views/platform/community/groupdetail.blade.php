@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">

            <div class="sidebar">

                <article class="item button clearfix">
                    <a href="#">
                        <button>
                            Nieuwe post toevoegen
                        </button>
                    </a>

                </article>

                <article class="item clearfix">
                    <header>Zoeken</header>
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-search"></i>
                        <input type="text" id="search" name="search" class="form-control filterlistener"
                               placeholder="zoekterm"/>
                    </div>
                </article>



                <article class="item">
                    <header>Mijn posts</header>
                    <ul class="highlight">


                    </ul>
                </article>

                <article class="item">
                    <header>Statistieken</header>
                    <ul class="highlight">


                    </ul>
                </article>
            </div>

            <div class="content">
                <div id="groupcontainer" class="groups">

                    <div class="group-type clearfix">
                        <header>Posts in klachten<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img" data-toggle="dropdown">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Teveel springuren</h4>
                                        <div class="row icons">

                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>



                                        </div>

                                    </div>
                                    <div class="info col-lg-6" style="text-align: right">
                                        <h6>16 februari 2018</h6>
                                        <h6>door <span>Arno Stalpaert</span></h6>
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img" data-toggle="dropdown">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Microgolf kapot</h4>
                                        <div class="row icons">

                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <h6>16 februari 2018</h6>
                                        <h6>door Arno Stalpaert</h6>
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
