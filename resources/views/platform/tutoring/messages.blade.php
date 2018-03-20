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
            <div class="content">


                <div class="item clearfix">
                    <div class="padding">


                        <!-- Search form -->
                        <article class="item padding col-xs-12">
                            <div class="padding clearfix">


                                <div class="col-lg-3 col-xs-12">


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

                                <div class="col-lg-9 col-xs-12">
                                    <div class="actions col-lg-12 col-xs-12" style="text-align: center">

                                        <div class="row">

                                            <div class="col-lg-4">
                                                <a class="action col-lg-12" href="{{route('tutoring-messages', ['id' => '1'])}}">Chatten</a>
                                            </div>

                                            <div class="col-lg-4">
                                                <a class="action col-lg-12" href="{{route('tutoring-planning', ['id' => '1']) }}">Planning</a>
                                            </div>

                                            <div class="col-lg-4">
                                                <a class="action col-lg-12" href="#">Tutoring stoppen</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>




                                <div class="col-xs-12">
                                    <h3>Berichten</h3>
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
    <script src="{{asset("js/zabuto_calendar.min.js")}}"></script>
    <script type="application/javascript">
        $(document).ready(function () {


            var eventData = [
                {"date":"2018-03-10", "title": "test 1", "classname":"item-herinnering"},
                {"date":"2018-03-20", "title":"Test 2", "classname":"item-taak"}
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
            var parms = $("#" + id).data();

            //console.log(parms);

            var hasEvent = $("#" + id).data("hasEvent");
            if (!hasEvent && !fromModal) {
                return false;
            }
            //$("#date-popup-content").html('You clicked on date ' + date);
            $('#date-modal #date').html(date);
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