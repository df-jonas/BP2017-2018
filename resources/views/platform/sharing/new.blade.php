@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')


    <div class="container table">
        <!-- Sidebar -->
        <div class="sidebar">

            <article class="item">
                <header>Informatie</header>
                <div class="padding">
                    <ul class="highlight">
                        <li class="clearfix">
                            <i class="fa fa-university" aria-hidden="true"><span>Design &amp; Technology</span></i>
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-graduation-cap" aria-hidden="true"><span>Multec</span></i>
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-graduation-cap" aria-hidden="true"><span>Advanced web development</span></i>
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-graduation-cap" aria-hidden="true"><span>Samenvatting</span></i>
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-graduation-cap" aria-hidden="true"><span>3e bachelor</span></i>
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-graduation-cap" aria-hidden="true"><span>2017 - 2018</span></i>
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-graduation-cap" aria-hidden="true"><span>33 pagina's</span></i>
                        </li>

                        <li class="clearfix">
                            <i class="fa fa-graduation-cap" aria-hidden="true"><span>Geen boek</span></i>
                        </li>
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
                <form id="msform" class="clearfix" method="post" enctype="multipart/form-data" action="/file/post">


                    <!-- progressbar -->
                    <article class="file new clearfix">
                        <div class="padding">
                            <ul id="progressbar">
                                <li data-title="Kies Vak" class="active"></li>
                                <li data-title="Beschrijving"></li>
                                <li data-title="Studiemateriaal"></li>
                                <li data-title="Overzicht"></li>
                            </ul>
                        </div>
                    </article>
                    <!-- progressbar -->


                    <!-- step 1 -->
                    <fieldset>

                        <article class="file new clearfix">
                            <div class="padding">
                                <div class="form-group clearfix">
                                    <div class="selectdiv">
                                        <label>Voor welk vak wil je een bestand uploaden?</label>
                                        <select class="select col-xs-12">
                                            <option selected>Advanced Web Development</option>
                                            <option>Cross Media Design</option>
                                            <option>Data Visualisation</option>
                                            <option>Mobile Game Development</option>
                                            <option>Enterpreneurship</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article class="file new clearfix">
                            <div class="padding">
                                <label>Bestanden uploaden</label>
                            </div>

                            <script>
                                //do not delete
                                //zodat dropzone deze al niet automatisch zou aanmaken
                                Dropzone.autoDiscover = false;
                            </script>

                            <div class="clsbox-1" runat="server"  style="margin-top: 2em">
                                <div class="dropzone clsbox" id="sharingDropZone">
                                </div>
                            </div>


                            <div class="padding">
                                <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                            </div>
                        </article>

                    </fieldset>
                    <!-- step 1 -->

                    <!-- step 2 -->
                    <fieldset>
                        <article class="file new clearfix">
                            <div class="padding">

                                <div class="form-group clearfix">
                                    <label>Omschrijving bestand</label>
                                    <textarea></textarea>
                                </div>


                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label>Type document</label>
                                        <select class="select col-xs-12">
                                            <option selected>Samenvatting</option>
                                            <option>Notities</option>
                                            <option>Oefeningen</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label>Studiejaar</label>
                                        <select class="select col-xs-12">
                                            <option selected>3 bachelor</option>
                                            <option>2 bachelor</option>
                                            <option>1 bachelor</option>
                                            <option>1 master</option>
                                            <option>2 master</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label>Geschreven in</label>
                                        <select class="select col-xs-12">
                                            <option selected>2017-2018</option>
                                            <option>2016-2017</option>
                                            <option>2015-2016</option>
                                        </select>
                                    </div>
                                </div>





                                <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                                <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>

                            </div>
                        </article>
                    </fieldset>
                    <!-- step 2 -->


                    <!-- step 3 -->
                    <fieldset>
                        <article class="file new clearfix">
                            <div class="padding">

                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label>Is er een boek gekoppeld aan dit vak?</label>
                                        <select class="select col-xs-12">
                                            <option selected>Neen</option>
                                            <option>Ja</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="textdiv">
                                        <label>Welk boek?</label>
                                        <input type="text">
                                    </div>

                                </div>

                                <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                                <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>
                            </div>
                        </article>
                    </fieldset>
                    <!-- step 3 -->


                    <!-- step 4 -->
                    <fieldset>
                        <article class="file new clearfix">
                            <div class="padding">

                                <label>Document eigenschappen</label>


                                <!-- post csrf token -->
                                {{ csrf_field() }}

                                <input type="submit" name="submit" class="next col-lg-2" value="Versturen"/>
                                <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>


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