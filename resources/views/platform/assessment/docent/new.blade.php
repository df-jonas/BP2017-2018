@extends('layouts.platform')

@section('pagetitle', 'Nieuw peer assessment')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <!-- begin container -->
    <section class="container">
        <!-- begin profile message -->

    @include('partials.platform.message')

    <!-- end profile message -->
        <section class="col-xs-12">
            <!-- begin go back -->
        @include('partials.platform.go-back')
        <!-- end go back-->
        </section>

        <section class="col-xs-12 content assessment">
            <section class="item clearfix">
                <header><a class="header-title">Nieuwe assessment</a></header>
                <div class="padding">
                    <form method="POST" action="{{ route('assessment-docent-new') }}">
                    {{ csrf_field() }}
                    <!-- title -->
                        <div class="form-group col-xs-12 clearfix">
                            <div class="selectdiv">
                                <label for="course">Vak</label>
                                <select id="course" name="course_id" class="form-control col-xs-12">
                                    @foreach($usercourses as $usercourse)
                                        <option value="{{ $usercourse->course->id }}">{{ $usercourse->course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 clearfix">
                            <div class="textdiv">
                                <label for="title">Assessment titel</label>
                                <input id="title" name="title" type="text" class="form-control col-xs-12">
                            </div>
                        </div>
                        <!-- end title -->
                        <!-- time -->
                        <div class="form-group col-lg-6 col-xs-12  clearfix">
                            <div class="textdiv">
                                <label for="time">Benodigde tijd</label>
                                <input id="time" name="time" type="number" placeholder="7 minuten"
                                       class="form-control col-xs-12">
                            </div>
                        </div>
                        <!-- time -->
                        <!-- date -->
                        <div class="form-group col-lg-6 col-xs-12  clearfix">
                            <div class="textdiv">
                                <label for="date">Einddatum</label>
                                <input id="date" name="enddate" type="date" class="form-control col-xs-12">
                            </div>
                        </div>
                        <!-- date -->
                        <!-- explanation -->
                        <div class="form-group col-xs-12 ">
                            <label for="explanation">Uitleg</label>
                            <textarea class="form-control" rows="2" id="explanation" name="explanation"></textarea>
                        </div>
                        <!-- explanation -->
                        <div class="groups">
                            <!-- begin group -->
                            <div class="form-group col-xs-12 clearfix">
                                <div class="selectdiv">
                                    <label for="firstgroup">Groep 1</label>
                                    <select id="firstgroup" class="select form-control group-dropdown col-xs-12"
                                            name="group[0][]" multiple="multiple">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->first_name . " " . $user->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end group -->
                            <!-- begin group -->
                            <div class="form-group col-xs-12 clearfix">
                                <div class="selectdiv">
                                    <label>Groep 2</label>
                                    <select class="select form-control group-dropdown col-xs-12" name="group[1][]"
                                            multiple="multiple">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->first_name . " " . $user->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end group -->
                        </div>
                        <!-- new group -->
                        <div class="form-group col-xs-12  clearfix">
                            <a id="new-assessment-group"><i class="fas fa-plus"></i> Nieuwe groep</a>
                        </div>
                        <!-- new group -->
                        <!-- begin skills-->
                        <div class="form-group col-xs-12 clearfix">
                            <div class="textdiv">
                                <label for="skills">Attitudes (max 7)</label>
                                <select class="vaardigheden-dropdown col-xs-12" name="skills[]" multiple="multiple">
                                    @foreach ($skills as $skill)
                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- end skills -->
                        <input id="submitall" type="submit" name="submit"
                               class="download-button next col-lg-2  col-sm-4 col-xs-12" value="Voltooien">
                    </form>
                </div>
            </section>
        </section>
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
@section("scripts")
    <script src="{{asset("js/select2.full.min.js")}}"></script>
    <script src="{{asset("js/i18n/nl.js")}}"></script>
    <script src="{{asset("js/assessment.js")}}"></script>
    <script>
        var users = $users;
    </script>
@endsection
