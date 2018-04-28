@extends('layouts.website')
@section('content')
@section('pagetitle', 'Een slim studentenplatform')

<!-- header -->
    @include('partials.website.header')
    <!-- end header -->

    <!-- page banner -->
    <div id="page-banner" class="col-xs-12">
        <div id="welcome" class="col-xs-12 no-padding">
            <div class="container">
                <div class="col-lg-6 col-md-8 col-xs-12 no-padding">
                    <h1>Welkom bij UniHelp voor studenten</h1>
                    <p>Lorem ipsum dolor sit <a href="#">amet</a>, consectetur adipiscing <a href="#">elit</a>. Quod ea non occurrentia fingunt, vincunt
                        Aristonem Duo Reges.</p>

                    <section class="buttons col-lg-8 col-md-10 col-sm-10 col-xs-12">
                        <div class="row">
                            <a href="{{ route('register')}}">
                                <button type="button" class="action-button left register col-lg-6 col-lg-push-0 col-sm-5 col-xs-12">
                                    Registreren
                                </button>
                            </a>
                            <a href="{{ route('login')}}">
                                <button type="button" class="action-button right login col-lg-6 col-lg-push-0 col-sm-5 col-sm-push-2 col-xs-12">
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

    <!-- features -->
    <div id="features" class="padding clearfix col-xs-12">
        <div class="container no-padding">
            <a href="{{ route('login')}}">
                <div class="col-lg-4 col-xs-12">
                    <div class="feature no-padding col-xs-12">
                        <img src="img/backgrounds/wat-1.png">
                        <p>Tutoring</p>
                        <h3>Lorem ipsum dolor sit <br> amet.</h3>
                        <a class="meer col-lg-4 col-md-3 col-xs-6">Ga van start</a>
                    </div>
                </div>
            </a>
            <a href="{{ route('login')}}">
                <div class="col-lg-4 col-xs-12">
                    <div class="feature no-padding col-xs-12">
                        <img src="img/backgrounds/wat-2.png">
                        <p>Bestanden delen</p>
                        <h3>Lorem ipsum dolor sit <br> amet.</h3>
                        <a class="meer col-lg-4 col-md-3 col-xs-6">Ga van start</a>
                    </div>
                </div>
            </a>
            <a href="{{ route('login')}}">
                <div class="col-lg-4 col-xs-12">
                    <div class="feature no-padding col-xs-12">
                        <img src="img/backgrounds/wat-3.png">
                        <p>Community</p>
                        <h3>Lorem ipsum dolor sit <br> amet.</h3>
                        <a class="meer col-lg-4 col-md-3 col-xshttp://localhost:3000/login-6">Ga van start</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="promo">
            <h2><strong>Nulla erit controversia.</strong> Urgent tamen et nihil remittunt. Prave, nequiter, turpiter cenabat. Sint ista Graecorum.</h2>
        </div>
    </div>
    <!-- end features -->

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