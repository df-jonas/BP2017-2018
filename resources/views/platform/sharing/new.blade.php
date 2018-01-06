@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')


    <div class="container table">
        <div class="sidebar">


            <article class="item">
                <header>Informatie</header>
                <ul class="highlight">

                    <li class="clearfix">
                        <i class="fa fa-university" aria-hidden="true">Design &amp; Technology</i>

                    </li>
                    <li class="clearfix">
                        <i class="fa fa-graduation-cap" aria-hidden="true">Multec</i>
                    </li>


                </ul>
            </article>


        </div>


        <div class="content">
            <div class="files">


                <!-- multistep form -->
                <form id="msform" class="clearfix" enctype="multipart/form-data">


                    <article class="file new clearfix">
                        <div class="padding">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li data-title="Kies Vak" class="active"></li>
                                <li data-title="Beschrijving"></li>
                                <li data-title="Studiemateriaal"></li>
                                <li data-title="Overzicht"></li>
                            </ul>
                        </div>
                    </article>


                    <!-- fieldsets -->
                    <fieldset>

                        <article class="file new clearfix">
                            <div class="padding">
                                <div class="selectdiv">
                                    <label for="exampleInputPassword1">Voor welk vak wil je een bestand
                                        uploaden?</label>
                                    <select class="select col-xs-12">
                                        <option selected>Advanced Web Development</option>
                                        <option>Cross Media Design</option>
                                    </select>
                                </div>

                            </div>
                        </article>


                        <article class="file new clearfix">
                            <div class="padding">
                                <h5>Advvanced Web Development</h5>
                            </div>
                            <div class="upload-zone">
                            </div>

                            <div class="padding">
                                <input type="button" name="next" class="next col-lg-2" value="Volgende"/>


                            </div>


                        </article>

                    </fieldset>


                    <fieldset>
                        <article class="file new clearfix">
                            <div class="padding">
                                <h2 class="fs-title">2</h2>

                                <div class="form-group">
                                    Omschrijving bestand
                                    <textarea></textarea>
                                </div>


                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="exampleInputPassword1">Type document</label>
                                        <select class="select col-xs-12">
                                            <option selected>Multimedia &amp; Communicatie Technologie</option>
                                            <option>Dig-X</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="exampleInputPassword1">Studiejaar</label>
                                        <select class="select col-xs-12">
                                            <option selected>Multimedia &amp; Communicatie Technologie</option>
                                            <option>Dig-X</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="exampleInputPassword1">Geschreven in</label>
                                        <select class="select col-xs-12">
                                            <option selected>Multimedia &amp; Communicatie Technologie</option>
                                            <option>Dig-X</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="exampleInputPassword1">Aantal pagina's</label>
                                        <select class="select col-xs-12">
                                            <option selected>Multimedia &amp; Communicatie Technologie</option>
                                            <option>Dig-X</option>
                                        </select>
                                    </div>
                                </div>


                            <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                            <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>

                            </div>
                        </article>
                    </fieldset>


                    <fieldset>
                        <article class="file new clearfix">
                            <div class="padding">

                        <h2 class="fs-title">3</h2>
                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="exampleInputPassword1">Is er een boek gekoppeld aan dit vak?</label>
                                        <select class="select col-xs-12">
                                            <option selected>Multimedia &amp; Communicatie Technologie</option>
                                            <option>Dig-X</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                                <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>
                            </div>
                        </article>
                    </fieldset>


                    <fieldset>
                        <article class="file new clearfix">
                            <div class="padding">

                            <h2 class="fs-title">4</h2>
                        Document eigenschappen


                                <input type="submit" name="submit" class="next col-lg-2" value="Versturen"/>
                                <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>


                            </div>
                        </article>
                    </fieldset>
                </form>




            </div>
        </div>

    </div>
    </div>


    @include('partials.footer')

@endsection