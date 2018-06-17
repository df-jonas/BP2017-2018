@extends('layouts.innerpage')
@section('pagetitle', 'Vraag een demo aan')
@section('content')
    @include('partials.website.header')
    @include('partials.website.breadcrumb')
    <section id="main-content" class="padding col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
        <h1>Demo aanvragen</h1>
        <p>Heeft u, als bedrijf of onderwijsinstelling, interesse in meer uitleg over UniHelp? Vul uw vraag in
            onderstaand formulier in en wij nemen zo snel we kunnen
            contact op met u.</p>
        <br>
        <!-- begin form message -->
    @include('partials.platform.message')
    <!-- end form message -->
        <form action="{{ route('website-demo') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group col-lg-6 col-xs-12 clearfix">
                <div class="textdiv clearfix">
                    <label for="voornaam">Voornaam</label>
                    <input id="voornaam" name="firstname" type="text" class="form-control col-xs-12" tabindex="1">
                </div>
            </div>
            <div class="form-group col-lg-6 col-xs-12 clearfix">
                <div class="textdiv clearfix">
                    <label for="achternaam">Achternaam</label>
                    <input id="achternaam" name="lastname" type="text" class="form-control col-xs-12" tabindex="2">
                </div>
            </div>
            <div class="form-group col-lg-6 col-xs-12 clearfix">
                <div class="textdiv clearfix">
                    <label for="bedrijfsnaam">Bedrijfsnaam</label>
                    <input id="bedrijfsnaam" name="company" type="text" class="form-control col-xs-12" tabindex="3">
                </div>
            </div>
            <div class="form-group col-lg-6 col-xs-12 clearfix">
                <div class="textdiv clearfix">
                    <label for="email">E-mail adres</label>
                    <input id="email" name="email" type="text" class="form-control col-xs-12" tabindex="4">
                </div>
            </div>
            <div class="form-group col-xs-12 clearfix">
                <label for="desc">Wat wilt u zien tijdens deze demo?</label>
                <textarea class="form-control" rows="5" id="desc" name="desc" tabindex="5"></textarea>
            </div>
            <div class="form-group col-xs-12 clearfix">
                <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Versturen" tabindex="6">
            </div>
        </form>
    </section>
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