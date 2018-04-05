@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Modal -->
                <div class="modal fade" id="date-modal" role="dialog">
                    <div class="modal-dialog ">

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
                                <div class="form-group col-xs-12 clearfix">
                                    <input type="button" class="download-button next col-lg-2 col-sm-4 col-xs-12"  data-dismiss="modal" value="Sluiten">
                                </div>
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
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px"><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 style="margin: 0">Jonas De Frère</h6>
                                        <h6 style="margin: 5px 0">Data Visualisatie</h6>
                                    </div>
                                </div>
                            </div>


                            <div class="actions col-lg-4 col-md-4 col-sm-6 col-xs-12" style="text-align: center">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="action col-lg-12 col-xs-12" href="{{route('tutoring-messages', ['id' => '1']) }}">Chatten</a>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="action col-lg-12 col-xs-12" href="{{route('tutoring-planning', ['id' => '1']) }}">Agenda</a>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="action col-lg-12 col-xs-12" href="#">Stopzetten</a>
                                </div>

                            </div>

                        </div>

                        <!-- Search form -->
                        <br>

                        <div class="col-xs-12">
                            <h3>Planning</h3>

                            <div class="row">
                                <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                    <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <span class="bold">12</span><br>
                                        <small>Maart</small>
                                    </div>
                                    <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <h5 class="col-xs-12 vertical-center">Test activiteit</h5>
                                    </div>
                                </div>


                                <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                    <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <span class="bold">12</span><br>
                                        <small>Maart</small>
                                    </div>
                                    <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <h5 class="col-xs-12 vertical-center">Test activiteit</h5>
                                    </div>
                                </div>


                                <div class="overview-calendar col-lg-6 col-md-6 col-sm-6 col-xs-12 left">
                                    <div class="date col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <span class="bold">12</span><br>
                                        <small>Maart</small>
                                    </div>
                                    <div class="reminder col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <h5 class="col-xs-12 vertical-center">Test activiteit</h5>
                                    </div>
                                </div>

                            </div>
                            <br>
                        </div>




            <!-- content -->
            </article>
        </div>
        </div>
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