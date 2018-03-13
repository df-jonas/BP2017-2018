@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <!-- Sidebar -->
            <div class="sidebar">
                <article class="item">
                    <header>Informatie</header>
                    <div class="padding">

                    </div>
                </article>
                <!-- sidebar -->
            </div>

            <!-- content -->
            <div class="content">


                <div class="item clearfix">
                    <div class="padding">


                            <!-- Search form -->
                            <article class="item padding col-xs-12">
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
                                            <div class="actions col-lg-8 col-lg-push-4 col-xs-12" style="text-align: center">

                                                <div class="row">

                                                    <div class="col-lg-4">
                                                        <a class="action col-lg-12" href="#">Chatten</a>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <a class="action col-lg-12" href="#">Download</a>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <a class="action col-lg-12" href="#">Tutoring stoppen</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </article>
                            <!-- Search form -->



                        <div id="messages" class="col-lg-12">

                            <div class="msg col-lg-12">

                                <div class="picture col-lg-1">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                </div>

                                <div class="txt col-lg-11">
                                    <div class="table">
                                        <div style="display: table-cell;  float: left">
                                            <span>Jeffrey Thor</span>
                                        </div>
                                        <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                            <span>Donderdag om 14:43</span>
                                        </div>
                                    </div>

                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                        tempor sit amet, ante. </p>
                                </div>


                            </div>


                            <div class="msg own col-lg-12">

                                <div class="txt col-lg-11">
                                    <div class="table">
                                        <div style="display: table-cell;  float: left">
                                            <span>Donderdag om 14:43</span>
                                        </div>
                                        <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                            <span>ik</span>
                                        </div>
                                    </div>

                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                        tempor sit amet, ante. </p>
                                </div>

                                <div class="picture col-lg-1">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                </div>


                            </div>


                            <div class="msg own col-lg-12">

                                <div class="txt col-lg-11">
                                    <div class="table">
                                        <div style="display: table-cell;  float: left">
                                            <span>Donderdag om 14:43</span>
                                        </div>
                                        <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                            <span>ik</span>
                                        </div>
                                    </div>

                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                        tempor sit amet, ante. </p>
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
                                        <div style="display: table-cell;  float: left">
                                            <span>Jeffrey Thor</span>
                                        </div>
                                        <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                            <span>Donderdag om 14:43</span>
                                        </div>
                                    </div>

                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                        tempor sit amet, ante. </p>
                                </div>


                            </div>


                        </div>

                        <div id="comment-box" class="flex padding col-lg-12">
                            <div class="picture col-lg-1">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                     class="account_img">
                            </div>

                            <form method="post" action="#">
                                <div class="txt col-lg-10">
                                    <input type="text" name="comment" class="col-lg-12"
                                           placeholder="bericht versturen">

                                </div>

                                <div class="icon col-lg-1">

                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>


                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
        </div>
        <!-- container -->
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{asset("js/sharing-new.js")}}"></script>
@endsection