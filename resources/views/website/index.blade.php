@extends('layouts.website')

@section('content')
@include('partials.website.header')


<div id="page_banner" class="col-xs-12">
    <div id="welcome" class="col-lg-6 col-lg-push-3 col-xs-12 col-xs-push-0">
        <h1>Welkom bij UniHelp</h1>
        <h4>Het slimme leerplatform om studenten altijd en overal te helpen.</h4>
        <section class="buttons col-lg-6 col-lg-push-3 col-md-10 col-md-push-1 col-xs-12">
            <a href="{{ route('website-login')}}"><button type="button" class="action-button">Inloggen</button></a>
            <a href="{{ route('website-login')}}"><button type="button" class="action-button register">Registreren</button></a>
        </section>
    </div>
    <div class="scroll">
        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
    </div>
</div>

<section id="how-it-works" class="what col-xs-12">
    <div class="container">
    <section class="title col-xs-12">
        <h1>Hoe werkt UniHelp?</h1>
    </section>
    <section class="items col-xs-12">

        <article class="item clearfix">
            <div class="row">

                <div class="left col-lg-6 col-xs-12">
                    <img src="img/backgrounds/alexis-brown-85793.jpg">
                </div>

                <div class="right col-lg-6 col-xs-12">
                    <h1>Met UniHelp kan je eenvoudig een
                        tutor vinden
                    </h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                        sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>

            </div>
        </article>


        <article class="item clearfix">
            <div class="row">

                <div class="left col-lg-6 col-lg-push-1 col-xs-12">
                    <h1>Deel samenvattingen met andere studenten.</h1>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                        sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>

                <div class="right col-lg-6 col-lg-push-1 col-xs-12">
                    <img src="img/backgrounds/alexis-brown-85793.jpg">
                </div>


            </div>
        </article>


        <article class="item clearfix">
            <div class="row">

                <div class="left col-lg-6 col-xs-12">
                    <img src="img/backgrounds/alexis-brown-85793.jpg">
                </div>

                <div class="right col-lg-6 col-xs-12">
                    <h1>Volg interessegroepen, blijf op de hoogte.</h1>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                        sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>

            </div>
        </article>



    </section>
    </div>
</section>


<section class="call-to-action col-xs-12">
    <h3>Wordt nu lid, geniet van tal van voordelen!</h3>
    <section class="buttons col-lg-6 col-lg-push-3 col-xs-12">
        <a href="{{ route('website-login') }}"><button type="button" class="action-button">Inloggen</button></a>
        <a href="{{ route('website-login')}}" ><button type="button" class="action-button">Registreren</button></a>
    </section>
</section>


@include('partials.footer')
@endsection