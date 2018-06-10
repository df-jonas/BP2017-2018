@extends('layouts.platform')
@section('pagetitle', 'Tutoring - Chat')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        @include('partials.platform.go-back')
        <div class="table">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div id="date-popup" class="modal col-lg-4 col-lg-push-4" style="">
                    <div id="date-popup-content" class="modal-content"></div>
                </div>

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

                <section class="item">
                    <header><a class="header-title"><i class="fa fa-calendar"></i> Kalender</a></header>
                    <div id="date-calendar"></div>
                </section>
                <!-- sidebar -->
            </aside>
            <!-- content -->
            <section class="content clearfix">
                <!-- Search form -->
                <section class="item col-xs-12">
                    <div class="padding clearfix">
                        @php
                            $subject = ($tutoringsession->tutee->user->id == Auth::id()) ? $tutoringsession->tutor : $tutoringsession->tutee;
                        @endphp
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                <div class="table">
                                    <div style="display: table-cell; width: 42px">
                                        <a href="{{ $subject->user->url() }}" class="profile-url"><img src="{{ asset('img/avatars/' . $subject->user->image )}}" class="group-img round-img"></a>
                                    </div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <a href="{{ $subject->user->url() }}" class="profile-url"><h6 style="margin: 0">{{ $subject->user->first_name . ' ' . $subject->user->last_name }}</h6></a>
                                        <h6 style="margin: 5px 0">{{ $tutor->course->name }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="actions col-lg-6 col-md-8 col-sm-6 col-xs-12" style="text-align: center">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="action col-lg-12 col-xs-12"
                                       href="{{route('tutoring-index')}}">Overzicht</a>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="action col-lg-12 col-xs-12" href="#">Agenda</a>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="action col-lg-12 col-xs-12" href="#">Stopzetten</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="item col-xs-12">
                    <div class="padding clearfix">
                        <div class="row">
                            <!-- comment -->
                            <section id="chat-box" class="comment-box col-lg-12 flex padding">
                                <div class="picture hide-mobile col-sm-1 col-xs-0">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="account-img round-img">
                                </div>
                                <form id="chat-form" class="col-sm-11 col-xs-12" method="POST"
                                      action="{{ route('tutoring-add-chat', ['session_id' => $tutoringsession->id]) }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="txt col-sm-11 col-xs-10">
                                        <input type="text" name="comment" id="chat-field" class="col-xs-11"
                                               placeholder="reactie toevoegen">
                                    </div>
                                    <div class="icon col-sm-1 col-xs-2">
                                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </section>
                            <!-- comment -->
                            <section id="chats" class="item messages col-lg-12">
                                <br>
                                @foreach ($chats as $chat)
                                    @php
                                        $own = ($chat->user->id == Auth::id()) ? "own" : "";
                                    @endphp
                                    @if($own)
                                        <div class="msg own clearfix col-lg-12">
                                            <div class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">
                                                <div class="table">
                                                    <div style="display: table-cell;  float: left">
                                                        <span>{{ $chat->chatcreated() }}</span>
                                                    </div>
                                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                        <span>ik</span>
                                                    </div>
                                                </div>
                                                <p>{{ $chat->message }}</p>
                                            </div>

                                            <div class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">
                                                <a href="{{ $subject->user->url() }}" class="profile-url"><img src="{{ asset('img/avatars/' . $chat->user->image  )}}"
                                                                                           class="group-img round-img"></a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="msg clearfix col-lg-12">
                                            <div class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">
                                                <a href="{{ $subject->user->url() }}" class="profile-url"><img src="{{ asset('img/avatars/' . $chat->user->image )}}"
                                                                                           class="group-img round-img"></a>
                                            </div>
                                            <div class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">
                                                <div class="table">
                                                    <div style="display: table-cell;  float: left">
                                                        <span><a href="{{ $subject->user->url() }}" class="profile-url">{{ $chat->user->first_name . ' ' . $chat->user->last_name }}</a></span>
                                                    </div>
                                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                        <span>{{ $chat->chatcreated() }}</span>
                                                    </div>
                                                </div>
                                                <p>{{ $chat->message }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                {{ $chats->links() }}
                            </section>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <!-- container -->
    </div>
    @include('partials.footer')
@endsection
@section("scripts")
    <script src="{{ asset("js/tutoring-chat.js") }}"></script>
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