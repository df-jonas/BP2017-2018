@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <!-- Sidebar -->
            <div class="sidebar">


                <!--
                <div id="date-popup" class="modal col-lg-4 col-lg-push-4" style="">
                    <div id="date-popup-content" class="modal-content"></div>
                </div>
                -->


                <!-- Modal -->
                <div class="modal fade" id="date-modal" role="dialog">
                    <div class="modal-dialog  ">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Herinnering - oefeningen</h4>
                            </div>
                            <div class="modal-body">
                                <p id="date"></p>
                                <p>Oefeningen afwerken en verbeteren.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="download-button" data-dismiss="modal">Sluit</button>
                            </div>
                        </div>

                    </div>
                </div>


                <article class="item">
                    <header>Planning</header>
                    <div id="date-calendar">

                    </div>

                </article>
                <!-- sidebar -->
            </div>
            <!-- content -->
            <div class="content clearfix">
                <!-- Search form -->
                <article class="item padding col-xs-12">
                    <br>
                    <div class="padding clearfix">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 style="margin: 0">Jonas De Frère</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>


                            <div class="actions  col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: center">
                                <div class="col-xs-12">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12"
                                           href="{{route('tutoring-messages', ['id' => '1']) }}">Chatten</a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12"
                                           href="{{route('tutoring-planning', ['id' => '1']) }}">Agenda</a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <a class="action col-lg-12 col-xs-12" href="#">Stopzetten</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="messages" class="item col-lg-12">

                            <h3>Berichten</h3>
                            <br>

                            <div class="msg clearfix col-lg-12">
                                <div class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                </div>
                                <div class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">
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

                            <div class="msg own clearfix col-lg-12">

                                <div class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">
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

                                <div class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                </div>
                            </div>

                            <div class="msg clearfix col-lg-12">
                                <div class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                </div>
                                <div class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">
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



                    </div>

                    <div id="comment-box" class="row flex padding">
                        <div class="picture hide-mobile col-sm-1 col-xs-0">
                            <img src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                 class="account_img">
                        </div>
                        <form id="comment-form" class="col-sm-11 col-xs-12" method="POST"
                              action="#">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="txt col-sm-11 col-xs-10">
                                <input type="text" name="comment" id="commentfield" class="col-xs-11"
                                       placeholder="reactie toevoegen">
                            </div>
                            <div class="icon col-sm-1 col-xs-2">
                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- content -->
                </article>
            </div>
            <!-- container -->
        </div>

        @include('partials.footer')
        @endsection

        @section("scripts")
            <script src="{{asset("js/zabuto_calendar.min.js")}}"></script>
            <script type="application/javascript">
                $(document).ready(function () {


                    var eventData = [
                        {"date": "2018-03-10", "body": "test 1", "title": "test 1", "classname": "item-herinnering"},
                        {"date": "2018-03-20", "body": "Test 2", "title": "Test 2", "classname": "item-taak"}
                    ];


                    $("#date-calendar").zabuto_calendar({
                        language: "nl",
                        show_previous: false,
                        show_next: 3,
                        today: true,
                        action: function () {
                            return myDateFunction(this.id, false);
                        },
                        action_nav: function () {
                            return myNavFunction(this.id);
                        },
                        ajax: {
                            url: "show_data.php?action=1",
                            modal: true
                        },
                        legend: [
                            {type: "block", label: "Herinnering", classname: "cal-herinnering"},
                            {type: "spacer"},
                            {type: "block", label: "Taak", classname: "cal-taak"},
                            {type: "spacer"},
                        ],
                        data: eventData
                    });
                });

                function myDateFunction(id, fromModal) {
                    $("#date-modal").hide();
                    if (fromModal) {
                        $("#" + id + "_modal").modal("hide");
                    }
                    var date = $("#" + id).data("date");
                    var title = $("#" + id).data("header");

                    //console.log(parms);

                    var hasEvent = $("#" + id).data("hasEvent");
                    if (!hasEvent && !fromModal) {
                        return false;
                    }
                    //$("#date-popup-content").html('You clicked on date ' + date);
                    $('#date-modal #date').html(title);
                    console.log(id);
                    console.log(date);
                    console.log($("#" + id));
                    $("#date-modal").modal();
                    return true;
                }

                function myNavFunction(id) {
                    $("#date-modal").hide();
                    var nav = $("#" + id).data("navigation");
                    var to = $("#" + id).data("to");
                }
            </script>
@endsection