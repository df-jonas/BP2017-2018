@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">

        <div class="row">
            <article class="item col-xs-12">
                <div class="padding">
                    <div class="headline">
                        <div class="row flex">
                            <div class="left col-lg-1 col-sm-2 col-xs-12">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img">
                                <br>
                                <p class="wijzigen">wijzigen</p>
                            </div>


                            <div class="right col-lg-11 col-sm-10 col-xs-12">
                                <h4>Arno Stalpaert</h4>
                                <h4 style="margin-top: 0">
                                    <small>arno.stalpaert@hotmail.com</small>
                                </h4>
                            </div>


                        </div>
                        <br>

                    </div>
                </div>

            </article>


            <article class="item col-lg-6 left col-xs-12">


                <div class="padding">

                    <h4>Profiel instellingen</h4>

                    <form>

                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="selectdiv">
                                <label for="studierichting">Studierichting</label>
                                <select id="studierichting" name="studierichting" class="select col-xs-12">
                                    <option value="1" selected>Geen selectie</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="selectdiv">
                                <label for="campus">Campus</label>
                                <select id="campus" name="campus" class="select col-xs-12">
                                    <option value="1" selected>Geen selectie</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="woonplaats">Woonplaats</label>
                                <input id="woonplaats" name="woonplaats" type="text" class="form-control col-xs-12">
                            </div>
                        </div>

                        <br>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>

                    </form>


                </div>


            </article>


            <article class="item col-lg-6 right col-xs-12">


                <div class="padding">

                    <h4>Voorkeuren</h4>
                    <form>
                        <h4>Accentkleur</h4>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="color-choose col-lg-4 col-md-4 col-sm-4 col-xs-12"
                                 style="background: #505457"></div>
                            <div class="color-choose col-lg-4 col-md-4 col-sm-4 col-xs-12"
                                 style="background: #62868e"></div>
                            <div class="color-choose col-lg-4 col-md-4 col-sm-4 col-xs-12"
                                 style="background: #d6b83a"></div>
                        </div>
                        <h4>Meldingen</h4>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="notification-choose col-lg-3 left col-md-3 col-sm-5 col-xs-12">
                                <header></header>
                                <p><i class="fa fa-bell-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose col-lg-3 right col-md-3 col-md-push-0 col-sm-5 col-sm-push-2 col-xs-12 disabled">
                                <header></header>
                                <p><i class="fa fa-bell-slash-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose col-lg-3 left col-md-3 col-sm-5 col-xs-12 disabled">
                                <header></header>
                                <p><i class="fa fa-bell-slash-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose col-lg-3 right col-md-3 col-md-push-0 col-sm-5 col-sm-push-2 col-xs-12">
                                <header></header>
                                <p><i class="fa fa-bell-o"></i></p>
                                <label>Test</label>
                            </div>
                        </div>


                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>


                    </form>
                </div>

            </article>


            <article class="item col-lg-6 left col-xs-12">


                <div class="padding">
                    <h4>Mijn vakken</h4>

                    <form>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <ul class="vakken">
                                <li>Online marketing <span><i class="fa fa-trash"></i></span></li>
                                <li>Cross Media Design <span><i class="fa fa-trash"></i></span></li>
                                <li>Motion Design <span><i class="fa fa-trash"></i></span></li>
                                <li>Advanced web development <span><i class="fa fa-trash"></i></span></li>
                            </ul>
                        </div>


                        <h4>Vak toevoegen</h4>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="inner-addon left-addon">
                                <input type="text" id="vak-zoeken" name="search" class="form-control filterlistener"
                                       placeholder="zoekterm"/>
                                <!-- <i class="glyphicon glyphicon-search"></i> -->
                            </div>
                        </div>

                        <div class="form-group col-xs-12 no-padding clearfix">
                            <ul class="vakken-nieuw">
                                <li>Enterpreneurship <span><input type="submit" class="download-button"
                                                                  value="Toevoegen"></span></li>
                                <li>Enterpreneurship 2 <span><input type="submit" class="download-button"
                                                                    value="Toevoegen"></span></li>
                            </ul>
                        </div>


                    </form>
                </div>

            </article>


            <article class="item col-lg-6 right col-xs-12">


                <div class="padding">
                    <h4>Account instellingen</h4>
                    <form>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="gebruikersnaam">Gebruikersnaam</label>
                                <input id="gebruikersnaam" name="gebruikersnaam" type="text"
                                       class="form-control col-xs-12">
                            </div>
                        </div>


                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="e-mail">E-mailadres</label>
                                <input id="e-mail" name="e-mail" type="text" class="form-control col-xs-12">
                            </div>
                        </div>


                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>

                    </form>
                </div>

            </article>


        </div>

    </div>


    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
