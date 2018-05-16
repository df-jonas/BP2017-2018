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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
            </section>

            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
            </section>
            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
            </section>
            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
            </section>
            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
            </section>
            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
            </section>
            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
            </section>
            <button class="accordion">Wie kan UniHelp gebruiken?</button>
            <section class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Summus dolor plures dies manere non potest?
                    Tanta vis admonitionis inest in locis; Quis non odit sordidos, vanos, leves, futtiles? Duo Reges:
                    constructio interrete. Aliter autem vobis placet. Sed ad haec, nisi molestum est, habeo quae velim.
                    Venit ad extremum; </p>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/faq.js') }}"></script>
