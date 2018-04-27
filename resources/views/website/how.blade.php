@extends('layouts.website')

@section('content')
@section('pagetitle', 'Hoe werkt het')
@include('partials.website.header')
<!-- page banner -->
<div id="page-banner" class="col-xs-12">
    <div id="welcome" class="col-xs-12 no-padding">
        <div class="container">
            <div class="col-lg-6 col-md-8 col-xs-12 no-padding">
                <h1>Welkom bij UniHelp voor studenten</h1>
                <p>Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipiscing <a href="#">elit</a>. Quod ea non
                    occurrentia fingunt, vincunt
                    Aristonem Duo Reges.</p>

                <section class="buttons col-lg-8 col-md-10 col-xs-12">
                    <div class="row">
                        <a href="{{ route('register')}}">
                            <button type="button"
                                    class="action-button left register col-lg-6 col-lg-push-0 col-sm-5 col-xs-12">
                                Registreren
                            </button>
                        </a>
                        <a href="{{ route('login')}}">
                            <button type="button"
                                    class="action-button right login col-lg-6 col-lg-push-0 col-sm-5 col-sm-push-2 col-xs-12">
                                Inloggen
                            </button>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- end page banner -->

<!-- how -->
<div id="how" class="col-xs-12">
    <div class="container no-padding">

        <div class="intro col-lg-8 col-lg-push-2">
            <h2>Nulla erit controversia.</h2>
            <p>Bonum valitudo: miser morbus. Qualem igitur hominem natura inchoavit? Bonum incolumis acies: misera
                caecitas. Nescio quo modo praetervolavit oratio. Maximus dolor, inquit, brevis est. </p>
            <img src="img/mockups/macbook.png">
        </div>

        <ul class="steps col-lg-10 col-lg-push-1 col-xs-12 no-padding">
            <li class="col-lg-3 col-xs-12">
                <div class="step col-xs-12">
                    <i class="fa fa-users"></i>
                    <h4>Blijf steeds op de hoogte</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
                </div>
            </li>

            <li class="col-lg-3 col-xs-12">
                <div class="step col-xs-12">
                    <i class="fa fa-file"></i>
                    <h4>Wissel samenvattingen uit</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
                </div>
            </li>

            <li class="col-lg-3 col-xs-12">
                <div class="step col-xs-12">
                    <i class="fa fa-life-ring"></i>
                    <h4>Vind de geknipte tutor</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
                </div>
            </li>

            <li class="col-lg-3 col-xs-12">
                <div class="step col-xs-12">
                    <i class="fa fa-clipboard"></i>
                    <h4>Geef elkaar een peer score</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- end how -->

<!-- how it works -->
<!--
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
-->

<!-- call to action -->
@include('partials.website.call-to-action')
<!-- end call to action -->

<!-- newsletter -->
@include('partials.website.newsletter')
<!-- end newsletter -->

<!-- footer -->
@include('partials.footer')
<!-- end footer -->

@endsection
