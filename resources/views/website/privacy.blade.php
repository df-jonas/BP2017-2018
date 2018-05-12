@extends('layouts.innerpage')
@section('pagetitle', 'Privacy policy')
@section('content')
    @include('partials.website.header')
    @include('partials.website.breadcrumb')

    <div id="main-content" class="padding col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
        <h1>Privacy policy </h1>
        <p>Privacy policy voor UniHelp, eigenaar van www.unihelp.be</p>
        <h2>Waarborgen Privacy</h2>
        <p>Het waarborgen van de privacy van bezoekers van www.unihelp.be is een belangrijke taak voor ons. Daarom
            beschrijven we in onze privacy policy welke informatie we verzamelen en hoe we deze informatie
            gebruiken.</p>
        <h2>Toestemming</h2>
        <p>Door de informatie en de diensten op www.unihelp.be te gebruiken, gaat u akkoord met onze privacy policy en
            de voorwaarden die wij hierin hebben opgenomen.</p>
        <h2>Vragen</h2>
        <p>Als u meer informatie wilt ontvangen, of vragen hebt over de privacy policy van UniHelp en specifiek
            www.unihelp.be, kun u ons benaderen via e-mail. Ons e-mailadres is info@unihelp.be.</p>
        <h2>Monitoren gedrag bezoeker</h2>
        <p>www.unihelp.be maakt gebruik van verschillende technieken om bij te houden wie de website bezoekt, hoe deze
            bezoeker zich op de website gedraagt en welke pagina’s worden bezocht. Dat is een gebruikelijke manier van
            werken voor websites omdat het informatie oplevert op die bijdraagt aan de kwaliteit van de
            gebruikerservaring. De informatie die we, via cookies, registreren, bestaat uit onder meer IP-adressen, het
            type browser en de bezochte pagina’s.

            Tevens monitoren we waar bezoekers de website voor het eerst bezoeken en vanaf welke pagina ze vertrekken.
            Deze informatie houden we anoniem bij en is niet gekoppeld aan andere persoonlijke informatie, .</p>
        <h2>Gebruik van cookies</h2>
        <p>www.unihelp.be plaatst cookies bij bezoekers. Dat doen we om informatie te verzamelen over de pagina’s die
            gebruikers op onze website bezoeken, om bij te houden hoe vaak bezoekers terug komen en om te zien welke
            pagina’s het goed doen op de website. Ook houden we bij welke informatie de browser deelt. Meer informatie
            is terug te vinden in onze <a href="{{route('website-cookies')}}">Cookie policy</a>.</p>
        <br/>
    </div>
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
