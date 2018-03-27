@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">

        <div class="row">
            <article class="item col-xs-12" style="height: 200px">


                <div class="padding">

                    Test
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
                            <input type="submit" class="download-button" value="Verzenden">

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
                            <input class="color-choose" value="kleur-1" style="background: #505457">
                            <input class="color-choose" value="kleur-1" style="background: #62868e">
                            <input class="color-choose" value="kleur-1" style="background: #d6b83a">
                        </div>

                        <h4>Meldingen</h4>
                        <div class="form-group clearfix">
                            <input class="notification-choose" value="kleur-1">
                            <input class="notification-choose" value="kleur-1">
                            <input class="notification-choose" value="kleur-1">
                            <input class="notification-choose" value="kleur-1">
                        </div>



                        <div class="form-group clearfix">
                            <input type="submit" class="download-button" value="Verzenden">

                        </div>

                    </form>
                </div>

            </article>


            <article class="item col-lg-6 left col-xs-12" style="height: 550px">


                <div class="padding">

                    <h3>Mijn vakken</h3>
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
                            <input type="submit" class="download-button" value="Verzenden">

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
