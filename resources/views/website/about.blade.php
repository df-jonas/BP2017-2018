@extends('layouts.website')

@section('content')
    @include('partials.website.header')

    <section id="about_banner" class="col-xs-12 clearfix">
        <h1>Over UniHelp</h1>
        <div class="left col-lg-4 col-lg-push-2 col-xs-12">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

        </div>

        <div class="right col-lg-4 col-lg-push-2 col-xs-12">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
    </section>

    <section id="about_person_1" class="about_person col-xs-12">
        <div class="row">
            <div class="left col-lg-2 col-lg-push-2 col-xs-6 col-xs-push-3">
                <img src="img/team/arno.png" class="round_img">
            </div>

            <div class="right col-lg-6 col-lg-push-2 col-xs-12">
                <h3>Arno Stalpaert</h3>
                <h5>Multec student</h5>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum
                    tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                    egestas
                    semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum
                    tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                    egestas
                    semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

            </div>
        </div>

    </section>

    <section id="about_quote" class="col-xs-12 clearfix">
        <div class="quote col-lg-6 col-lg-push-3 col-xs-12">
            <h1>“Als IT studenten vonden wij dat
                ons platform aan verbetering
                toe was ”</h1>
        </div>
    </section>


    <section id="about_person_2" class="about_person col-xs-12">
        <div class="row">


            <div class="left col-lg-6 col-lg-push-2 col-xs-12">
                <h3>Jonas De Frère</h3>
                <h5>Dig-X student</h5>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum
                    tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                    egestas
                    semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum
                    tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                    egestas
                    semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

            </div>

            <div class="right col-lg-2 col-lg-push-2 col-xs-6 col-xs-push-3">
                <img src="img/team/jonas.JPG" class="round_img">
            </div>
        </div>

    </section>

    @include('partials.footer')
@endsection
