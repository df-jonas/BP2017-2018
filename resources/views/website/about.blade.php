@extends('layouts.website')

@section('content')
@section('pagetitle', 'Over ons')
@include('partials.website.header')

<!-- page banner -->
<div id="innerpage-banner" class="col-xs-12">
    <div id="welcome" class="col-xs-12 no-padding">
        <div class="container">
            <div class="col-md-6 col-md-push-3 col-xs-12 no-padding">
                <h3>Over UniHelp</h3>
                <p>UniHelp is een platform dat gemaakt werd door 2 studenten.</p>
            </div>
        </div>
    </div>
</div>
<!-- end page banner -->

<!-- begin unihelp intro -->
<div id="intro" class="col-xs-12">
    <div class="container">
        <div class="col-lg-8 col-lg-push-2">
            <h2>Waarom UniHelp?</h2>
            <h4 class="quote">
                Ik was al een tijdje op zoek naar een geschikt platform dat de beste functionaliteiten van Canvas, Desiderius, Facebook en WeTransfer kon bundelen tot één geheel.
            </h4>
        </div>
    </div>
</div>
<!-- end unihelp intro -->

<!-- begin goals block -->
<div id="goal" class="col-xs-12 padding">
    <div class="container">
        <div class="col-lg-6 col-xs-12">
            <div class="col-lg-10 col-lg-push-1 col-xs-12">
                <h3>Helemaal gratis</h3>
                <p>
                    Dit platform is bedoeld om het leven van een hardwerkende student heel wat draaglijker en aangenamer te maken.
                    Hiervoor moeten studenten niets betalen, het is geheel gratis.
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="col-lg-10 col-lg-push-1 col-xs-12">
                <h3>Gebruiksvriendelijk</h3>
                <p>
                    Er zijn heel wat bevragingen gebeurd om de noden van alle studenten te analyseren. Op basis van deze analyses en testen hebben wij UniHelp opgebouwd.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end goals block -->

<!-- begin person -->
<div class="container">
    <section class="about-person col-xs-12">
        <div class="row flex">
            <div class="left col-lg-2 col-lg-push-1 col-md-2 col-md-push-1 col-xs-12">
                <img src="img/team/arno.png" class="round-img">
            </div>
            <div class="right col-lg-8 col-lg-push-1 col-md-8 col-md-push-2 col-xs-12">
                <h3>Arno Stalpaert</h3>
                <h4>Multec student
                    <small>(Mobile App &amp; Web development)</small>
                </h4>
                <p>Hallo, ik ben Arno en ik zit in mijn laatste jaar Multimedia- en communicatie technologie aan de
                    Erasmushogeschool Brussel. Vorig jaar koos ik er voor om mij te specialiseren in Mobile App en Web
                    development.
                    Hier leerde ik onder andere veel over design, front-end, back-end, User Experience, website
                    development, enzovoort. Om deze reden koos ik voor een veelzijdig project waar al deze zaken aan bod
                    zouden komen. Tijdens dit project zal
                    ik mij vooral focussen op het front-end, design en UX gedeelte.
                </p>
            </div>
        </div>
    </section>
</div>
<!-- end person -->

<!-- begin action block -->
<div id="action" class="col-xs-12 padding clearfix">
    <div class="container padding">
        <div class="col-lg-6 col-lg-push-3 padding">
            <div class="col-lg-10 col-lg-push-1">
                <h3>Probeer het gratis!</h3>
                <a href="{{ route('register') }}" class="col-xs-12">Als IT studenten zagen wij in studentenplatformen ruimte voor verbetering.</a>
            </div>
        </div>
    </div>
</div>
<!-- end action block -->

<!-- begin person -->
<div class="container">
    <section class="about-person col-xs-12">
        <div class="row flex">
            <div class="left col-lg-2 col-lg-push-1 col-md-2 col-md-push-1 col-xs-12">
                <img src="img/team/jonas.png" class="round-img">
            </div>
            <div class="right col-lg-8 col-lg-push-1 col-md-8 col-md-push-2 col-xs-12">
                <h3>Jonas De Frère</h3>
                <h4>Dig-X student
                    <small>(Network &amp; Security)</small>
                </h4>
                <p>Hallo, mijn naam is Jonas De Frère, laatstejaarsstudent Dig-X (toegepaste informatica) aan de
                    Erasmushogeschool Brussel. Ik volg de specialisatie Netwerken & Security, waardoor ik een grote
                    kennis heb over servers, beveiliging en back-end.
                    Tijdens mijn opleiding leerde ik aan de slag gaan met back-end development. Belangrijk hierbij is
                    het aspect snelheid, optimalisatie en beveiliging. Deze competenties laat ik zien in in ons eigen
                    platform, UniHelp.</p>
            </div>
        </div>
    </section>
</div>
<!-- end person -->

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
