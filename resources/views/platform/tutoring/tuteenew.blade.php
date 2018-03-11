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
                        <ul class="highlight">
                            <li class="clearfix"><i class="fa fa-university" aria-hidden="true"><span
                                            class="static-campus">t</span></i></li>
                            <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                            class="static-fos">t</span></i></li>
                            <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                            class="static-course">Vak</span></i></li>
                            <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                            class="static-type">Type</span></i></li>
                            <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                            class="static-degree">Graad</span></i></li>
                            <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                            class="static-publicationyear">Jaar</span></i></li>
                            <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                            class="static-book">Boek</span></i></li>
                        </ul>
                    </div>
                </article>
                <!-- sidebar -->
            </div>


            <!-- content -->
            <div class="content">
                <!-- files -->
                <div class="files">

                    <!-- multistep form -->
                    <form id="msform" class="clearfix" method="post" enctype="multipart/form-data"
                          action="{{route('sharing-new')}}">

                    {{ csrf_field() }}

                    <!-- progressbar -->
                        <article class="item file new clearfix">
                            <div class="padding">
                                <ul id="progressbar">
                                    <li data-title="Kies Vak" class="active"></li>
                                    <li data-title="Beschrijving"></li>
                                    <li data-title="Voorkeuren"></li>
                                    <li data-title="Overzicht"></li>
                                </ul>
                            </div>
                        </article>
                        <!-- progressbar -->

                        <!-- step 1 -->
                        <fieldset>

                            <article class="item file new clearfix">
                                <div class="padding">
                                    <div class="form-group clearfix">
                                        <div class="selectdiv">
                                            <label for="course">Voor welk vak wil je tutoring krijgen?</label>
                                            <select id="course" class="select col-xs-12 form-control" name="course">
                                                <option value="1">Test</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="padding">
                                    <input type="button" class="next col-lg-2" value="Volgende"/>

                                </div>

                            </article>



                        </fieldset>
                        <!-- step 1 -->

                        <!-- step 2 -->
                        <fieldset>
                            <article class="item file new clearfix">
                                <div class="padding">



                                    <div class="form-group clearfix">
                                        <label for="filedesc">Waarom heb je tutoring nodig voor dit vak?</label>
                                        <textarea class="form-control" rows="5" id="filedesc" name="filedescription"></textarea>
                                    </div>







                                    <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                                    <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>

                                </div>
                            </article>
                        </fieldset>
                        <!-- step 2 -->

                        <!-- step 3 -->
                        <fieldset>
                            <article class="item file new clearfix">
                                <div class="padding">

                                    <div class="form-group clearfix">

                                        <label>Kies uw persoonlijke voorkeuren</label>


                                        <label class="checkbox-container col-xs-12">extra oefeningen
                                            <input type="checkbox" name="pubyear[]" value="1"
                                                   class="filterlistener">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="checkbox-container col-xs-12">nood aan extra uitleg
                                            <input type="checkbox" name="pubyear[]" value="1"
                                                   class="filterlistener">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="checkbox-container col-xs-12">studiehulp
                                            <input type="checkbox" name="pubyear[]" value="1"
                                                   class="filterlistener">
                                            <span class="checkmark"></span>
                                        </label>





                                    </div>



                                    <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                                    <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>
                                </div>
                            </article>
                        </fieldset>
                        <!-- step 3 -->

                        <!-- step 4 -->
                        <fieldset>
                            <article class="item file new clearfix">
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
                                            <td class="bold">Beschrijvingen</td>
                                            <td class="static-title">Lorem ipsum</td>
                                            <td class="small">Bewerken</td>
                                        </tr>


                                        <tr class="spacer">
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td class="bold">Voorkeuren</td>
                                            <td class="static-book">Extra oefeningen</td>
                                            <td class="small">Bewerken</td>
                                        </tr>

                                        <tr class="spacer">
                                            <td></td>
                                        </tr>

                                    </table>

                                    <input type="submit" name="submit" class="next col-lg-2" value="Versturen"/>
                                    <input type="button" id="submitall" name="previous" class="previous col-lg-2"
                                           value="Vorige"/>


                                </div>
                            </article>
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
    <script src="{{asset("js/sharing-new.js")}}"></script>
@endsection