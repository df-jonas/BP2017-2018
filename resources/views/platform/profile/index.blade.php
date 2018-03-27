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
                            <div class="left col-lg-1">
                                <img src="/img/team/arno.png" class="round_img">
                                <br>
                                <p class="wijzigen">wijzigen</p>
                            </div>


                            <div class="right col-lg-11">
                                <h4>Arno Stalpaert</h4>
                                <h4 style="margin-top: 0"><small>arno.stalpaert@hotmail.com</small></h4>

                            </div>

                        </div>

                    </div>
                </div>

            </article>


            <article class="item col-lg-6 left col-xs-12">


                <div class="padding">

                    <h3>Profiel instellingen</h3>

                    <form>

                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Populariteit</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>
                                    <option value="-1" selected>Geen selectie</option>
                                    <option value="-1" selected>Geen selectie</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Populariteit</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Populariteit</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <input type="submit" class="download-button" value="Opslaan">

                        </div>

                    </form>


                </div>


            </article>


            <article class="item col-lg-6 right col-xs-12">


                <div class="padding">

                    <h3>Voorkeuren</h3>
                    <form>
                        <h4>Accentkleur</h4>
                        <div class="form-group clearfix">
                            <div class="color-choose" style="background: #505457"></div>
                            <div class="color-choose" style="background: #62868e"></div>
                            <div class="color-choose" style="background: #d6b83a"></div>
                        </div>
                        <h4>Meldingen</h4>
                        <div class="form-group clearfix">
                            <div class="notification-choose">
                                <header></header>
                                <p><i class="fa fa-bell-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose disabled">
                                <header></header>
                                <p><i class="fa fa-bell-slash-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose disabled">
                                <header></header>
                                <p><i class="fa fa-bell-slash-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose">
                                <header></header>
                                <p><i class="fa fa-bell-o"></i></p>
                                <label>Test</label>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <input type="submit" class="download-button" value="Opslaan">

                        </div>

                    </form>
                </div>

            </article>


            <article class="item col-lg-6 left col-xs-12">


                <div class="padding">
                    <h3>Mijn vakken</h3>

                    <form>
                        <div class="form-group clearfix">
                            <ul class="vakken">
                                <li>Online marketing <span><i class="fa fa-trash"></i></span></li>
                                <li>Online marketing <span><i class="fa fa-trash"></i></span></li>
                                <li>Online marketing <span><i class="fa fa-trash"></i></span></li>
                                <li>Online marketing <span><i class="fa fa-trash"></i></span></li>

                            </ul>
                        </div>


                        <h4>Vak toevoegen</h4>
                        <div class="form-group clearfix">
                            <div class="inner-addon left-addon">
                                <input type="text" id="vak-zoeken" name="search" class="form-control filterlistener" placeholder="zoekterm"/>
                                <!-- <i class="glyphicon glyphicon-search"></i> -->
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <ul class="vakken-nieuw">
                                <li>Online marketing <span><input type="submit" class="download-button" value="Toevoegen"></span></li>
                                <li>Online marketing <span><input type="submit" class="download-button" value="Toevoegen"></span></li>

                            </ul>
                        </div>



                    </form>
                </div>

            </article>


            <article class="item col-lg-6 right col-xs-12">


                <div class="padding">

                    <h3>Account instellingen</h3>


                    <form>

                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Populariteit</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>
                                    <option value="-1" selected>Geen selectie</option>
                                    <option value="-1" selected>Geen selectie</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Populariteit</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <input type="submit" class="download-button" value="Opslaan">

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
