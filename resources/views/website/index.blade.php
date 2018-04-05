@extends('layouts.website')

@section('content')

    <!-- header -->
    @include('partials.website.header')

    <!-- banner -->
    <div id="page-banner" class="col-xs-12">
        <div id="welcome" class="col-lg-6 col-lg-push-3 col-xs-12">
            <h1>Welkom bij UniHelp</h1>
            <h3>Het slimme leerplatform om studenten altijd en overal te helpen.</h3>

            <section class="buttons col-sm-8 col-sm-push-2">
                <div class="row">
                    <a href="{{ route('login')}}">
                        <button type="button" class="action-button  left register col-lg-6 col-sm-6 col-xs-12 col-xs-push-0">Registreren</button>
                    </a>
                    <a href="{{ route('login')}}">
                        <button type="button" class="action-button right login col-lg-6 col-sm-6  col-xs-12 col-xs-push-0">Inloggen</button>
                    </a>
                </div>
            </section>

        </div>

        <!-- scroll down -->
        <div class="scroll">
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        </div>

    </div>

    <!-- how it works -->
    <section id="how-it-works" class="what col-xs-12">
        <div class="container">

            <section class="title col-xs-12">
                <h1>Hoe werkt <span>UniHelp?</span></h1>
            </section>

            <section class="items col-xs-12">

                <article class="item clearfix">
                    <div class="row row-fluid">
                        <div class="right col-lg-6 col-lg-push-6 col-xs-12">
                            <h2>Met UniHelp kan je eenvoudig een
                                tutor vinden
                            </h2>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                                libero
                                sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.</p>
                        </div>

                        <div class="left col-lg-6 col-lg-pull-6 col-xs-12">
                            <img src="img/backgrounds/wat-1.png">
                        </div>

                    </div>
                </article>


                <article class="item clearfix">
                    <div class="row">
                        <div class="left col-lg-6 col-xs-12">
                            <h2>Deel samenvattingen met andere studenten.</h2>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                                libero
                                sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.</p>
                        </div>

                        <div class="right col-lg-6 col-xs-12">
                            <img src="img/backgrounds/wat-2.png">
                        </div>
                    </div>
                </article>


                <article class="item clearfix">
                    <div class="row">
                        <div class="right col-lg-6 col-lg-push-6 col-xs-12">
                            <h2>Volg interessante groepen, blijf op de hoogte.</h2>

                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.
                                Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                                libero
                                sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.</p>
                        </div>
                        <div class="left col-lg-6 col-lg-pull-6 col-xs-12">
                            <img src="img/backgrounds/wat-3.png">
                        </div>
                    </div>
                </article>


            </section>
        </div>
    </section>




    <!-- call to action slogan -->
    <section class="call-to-action col-xs-12">
        <h2>Word nu lid, geniet als student van tal van voordelen!</h2>
        <div class="col-lg-6 col-lg-push-3 col-xs-12">
            <section class="buttons col-sm-8 col-sm-push-2">
                <div class="row">
                    <a href="{{ route('login')}}">
                        <button type="button" class="action-button  left login col-lg-6 col-sm-6 col-xs-12 col-xs-push-0">Registreren</button>
                    </a>
                    <a href="{{ route('login')}}">
                        <button type="button" class="action-button right login col-lg-6 col-sm-6  col-xs-12 col-xs-push-0">Inloggen</button>
                    </a>
                </div>
            </section>

        </div>

    </section>


    <!-- footer -->
    @include('partials.footer')
@endsection