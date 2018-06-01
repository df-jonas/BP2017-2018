@extends('layouts.platform')
@section('pagetitle', 'Peer Assessment')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container">
        <!-- begin profile message -->
    @include('partials.platform.message')
    <!-- end profile message -->

        <section class="content assessment">
            <section class="item clearfix">
                <div class="padding">
                    <section class="assessment-group">
                        <div class="title col-xs-12">
                            <a href="#"><h2 class="group-title">Project management</h2></a>
                        </div>
                    </section>
                    <form method="POST" action="#">
                        <!-- title -->
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="title">Assessment titel</label>
                                <input id="title" name="title" type="text" class="form-control col-xs-12">
                            </div>
                        </div>
                        <!-- end title -->
                        <div class="groups">
                        <!-- begin group -->
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="selectdiv">
                                <label for="title">Groep 1</label>
                                <select class="select form-control group-dropdown col-xs-12" name="group1[]" multiple="multiple">
                                    <option value="AL">Arno</option>
                                    <option value="WY">Jonas</option>
                                    <option value="WY">Brent</option>
                                    <option value="WY">Mike</option>
                                    <option value="WY">Ian</option>
                                    <option value="AL">Arno</option>
                                    <option value="WY">Jonas</option>
                                    <option value="WY">Brent</option>
                                    <option value="WY">Mike</option>
                                    <option value="WY">Ian</option>
                                    <option value="AL">Arno</option>
                                    <option value="WY">Jonas</option>
                                    <option value="WY">Brent</option>
                                    <option value="WY">Mike</option>
                                    <option value="WY">Ian</option>
                                    <option value="AL">Arno</option>
                                    <option value="WY">Jonas</option>
                                    <option value="WY">Brent</option>
                                    <option value="WY">Mike</option>
                                    <option value="WY">Ian</option>
                                    <option value="AL">Arno</option>
                                    <option value="WY">Jonas</option>
                                    <option value="WY">Brent</option>
                                    <option value="WY">Mike</option>
                                    <option value="WY">Ian</option>
                                </select>
                            </div>
                        </div>
                        <!-- end group -->
                        <!-- begin group -->
                        <div class="form-group col-xs-12 no-padding clearfix">
                                <div class="selectdiv">
                                    <label for="title">Groep 2</label>
                                    <select class="select form-control group-dropdown col-xs-12" name="group2[]" multiple="multiple">
                                        <option value="AL">Arno</option>
                                        <option value="WY">Jonas</option>
                                        <option value="WY">Brent</option>
                                        <option value="WY">Mike</option>
                                        <option value="WY">Ian</option>
                                        <option value="AL">Arno</option>
                                        <option value="WY">Jonas</option>
                                        <option value="WY">Brent</option>
                                        <option value="WY">Mike</option>
                                        <option value="WY">Ian</option>
                                        <option value="AL">Arno</option>
                                        <option value="WY">Jonas</option>
                                        <option value="WY">Brent</option>
                                        <option value="WY">Mike</option>
                                        <option value="WY">Ian</option>
                                        <option value="AL">Arno</option>
                                        <option value="WY">Jonas</option>
                                        <option value="WY">Brent</option>
                                        <option value="WY">Mike</option>
                                        <option value="WY">Ian</option>
                                        <option value="AL">Arno</option>
                                        <option value="WY">Jonas</option>
                                        <option value="WY">Brent</option>
                                        <option value="WY">Mike</option>
                                        <option value="WY">Ian</option>
                                    </select>
                                </div>
                            </div>
                        <!-- end group -->
                        </div>
                        <!-- new group -->
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <a id="new-assessment-group"><i class="fas fa-plus"></i> Nieuwe groep</a>
                        </div>
                        <!-- end group -->
                        <!-- begin skills-->
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="title">Attitudes (max 7)</label>
                                <select class="vaardigheden-dropdown col-xs-12" name="vaardigheden[]" multiple="multiple">
                                    <option value="AL">Vaardigheid 1</option>
                                    <option value="WY">Vaardigheid 2</option>
                                    <option value="WY">Vaardigheid 3</option>
                                    <option value="WY">Vaardigheid 4</option>
                                    <option value="WY">Vaardigheid 5</option>
                                </select>
                            </div>
                        </div>
                        <!-- end skills -->
                        <input id="submitall" type="submit" name="submit" class="download-button next col-lg-2  col-sm-4 col-xs-12" value="Voltooien">
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
@endsection
