@extends('layouts.innerpage')
@section('pagetitle', 'Veelgestelde vragen')
@section('content')
    @include('partials.website.header')
    @include('partials.website.breadcrumb')
    <section id="main-content" class="padding col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
        <h1>Veelgestelde vragen</h1>
        <section class="widget-accordion">
            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>UniHelp kan gebruikt worden door elke student. Het platform is momenteel in bèta testfase, waardoor
                    enkel studenten van Erasmushogeschool Brussel hiervan gebruik kunnen maken. </p>
            </section>
            <button class="accordion">Is UniHelp gratis?</button>
            <section class="panel">
                <p>Ja, UniHelp is 100% gratis voor elke student!</p>
            </section>
            <button class="accordion">Wat kan ik allemaal?</button>
            <section class="panel">
                <p>Als student kan je gebruik maken van onze online community, file share, tutoring en peer assessment
                    functionaliteiten.</p>
            </section>
            <button class="accordion">Wie heeft dit platform gemaakt?</button>
            <section class="panel">
                <p>Dit platform is gemaakt door 2 laatstejaarsstudenten, door De Frère Jonas (Dig-X) en Stalpaert Arno
                    (Multec)</p>
            </section>
            <button class="accordion">Wat gebeurt er met mijn gegevens?</button>
            <section class="panel">
                <p>UniHelp verzamelt enkel de gegevens die nodig zijn om van dit platform gebruik te kunnen maken. Er
                    wordt zeer veilig omgegaan met uw gegevens en daarom zullen deze nooit gedeeld worden met
                    derden.</p>
            </section>
            <button class="accordion">Wat te doen bij problemen of bugs?</button>
            <section class="panel">
                <p>Bij problemen, vragen of bugs kan je terecht op onze <a href="{{ route('website-contact') }}">contact</a> pagina. HEt melden van bugs en problemen wordt erg geapprecieerd!</p>
            </section>
        </section>
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
@section('scripts')
    <script src="{{ URL::asset('js/faq.js') }}"></script>
@endsection