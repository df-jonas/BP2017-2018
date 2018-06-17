@extends('layouts.platform')
@section('pagetitle', 'Word tutee')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        <div class="table">
            <!-- Sidebar -->
            <aside class="sidebar">
                <section class="item">
                    <header><a class="header-title"><i class="fa fa-info-circle"></i> Informatie</a></header>
                    <div class="padding">
                        <ul class="highlight">
                            <li class="clearfix"><i class="fa fa-university" aria-hidden="true"><span class="static-course">Vak</span></i></li>
                            <li class="clearfix"><i class="fa fa-font" aria-hidden="true"><span class="static-description">Beschrijving</span></i></li>
                            <li class="clearfix static-exercises" style="display: none"><i class="fa fa-tasks" aria-hidden="true"><span>Oefeningen</span></i></li>
                            <li class="clearfix static-explanation" style="display: none"><i class="fa fa-tasks" aria-hidden="true"><span>Uitleg</span></i></li>
                            <li class="clearfix static-studying" style="display: none"><i class="fa fa-tasks" aria-hidden="true"><span>Studiehulp</span></i>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- sidebar -->
            </aside>
            <!-- content -->
            <div class="content">
                <!-- files -->
                <div class="files">
                    <!-- multistep form -->
                    <form id="msform" class="col-xs-12 no-padding clearfix" method="post" enctype="multipart/form-data" action="{{route('tutoring-tutee-new')}}">
                    {{ csrf_field() }}
                    <!-- progressbar -->
                        <section class="item clearfix">
                            <div class="padding">
                                <ul id="progressbar">
                                    <li data-title="Kies Vak" class="active"></li>
                                    <li data-title="Beschrijving"></li>
                                    <li data-title="Voorkeuren"></li>
                                    <li data-title="Overzicht"></li>
                                </ul>
                            </div>
                        </section>
                        <!-- progressbar -->
                        <!-- step 1 -->
                        <fieldset>
                            <section class="item clearfix">
                                <div class="padding">
                                    <div class="form-group clearfix">
                                        <div class="selectdiv">
                                            <label for="course">Voor welk vak wil je tutoring krijgen?</label>
                                            <select id="course" class="select col-xs-12 form-control" name="course">
                                                @foreach($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group padding clearfix">
                                    <input type="button" class="download-button next col-lg-2 col-sm-4 col-xs-12"
                                           value="Volgende">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 1 -->
                        <!-- step 2 -->
                        <fieldset>
                            <section class="item clearfix">
                                <div class="padding">
                                    <div class="form-group clearfix">
                                        <label for="description">Waarom heb je tutoring nodig voor dit vak?</label>
                                        <textarea class="form-control" rows="5" id="description"
                                                  name="description"></textarea>
                                    </div>
                                    <input type="button" class="download-button next col-lg-2  col-sm-4 col-xs-12"
                                           value="Volgende">
                                    <input type="button"
                                           class="download-button previous col-lg-2 col-lg-pull-1 col-sm-4 col-sm-pull-1 col-xs-12"
                                           value="Vorige">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 2 -->
                        <!-- step 3 -->
                        <fieldset>
                            <section class="item clearfix">
                                <div class="padding">
                                    <div class="form-group clearfix">
                                        <label>Kies uw persoonlijke voorkeuren</label>
                                        <label class="checkbox-container col-xs-12">Extra oefeningen
                                            <input type="checkbox" name="exercises" id="exercises" value="oefeningen">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container col-xs-12">Nood aan extra uitleg
                                            <input type="checkbox" name="explanation" id="explanation" value="uitleg">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container col-xs-12">Studiehulp
                                            <input type="checkbox" name="studying" id="studying" value="studiehulp">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <input type="button" class="download-button next col-lg-2  col-sm-4 col-xs-12"
                                           value="Volgende">
                                    <input type="button"
                                           class="download-button previous col-lg-2 col-lg-pull-1 col-sm-4 col-sm-pull-1 col-xs-12"
                                           value="Vorige">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 3 -->
                        <!-- step 4 -->
                        <fieldset>
                            <section class="item clearfix">
                                <div class="padding">
                                    <label>Verzoek eigenschappen</label>
                                    <table class="file-overview">
                                        <tr class="spacer" style="height: 2em;">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Vak</td>
                                            <td class="static-course">Project management</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Beschrijving</td>
                                            <td class="static-description">Lorem ipsum</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr class="static-exercises">
                                            <td class="bold">Voorkeur</td>
                                            <td class="static-preference">Extra oefeningen</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr class="static-studying">
                                            <td class="bold">Voorkeur</td>
                                            <td class="static-preference">Studiehulp</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr class="static-explanation">
                                            <td class="bold">Voorkeur</td>
                                            <td class="static-preference">Uitleg</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                    </table>
                                    <input id="submitall" type="submit" name="submit" class="download-button next col-lg-2  col-sm-4 col-xs-12" value="Aanvraag versturen">
                                    <input type="button" class="download-button previous col-lg-2 col-lg-pull-1 col-sm-4 col-sm-pull-1 col-xs-12" value="Vorige">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 4 -->
                        <!-- multistep form -->
                    </form>
                    <!-- files -->
                </div>
            </div>
            <!-- content -->
        </div>
        <!-- container -->
    </div>
    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{asset("js/tutee-new.js")}}"></script>
@endsection