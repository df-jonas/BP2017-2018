@extends('layouts.website')

@section('content')
@section('pagetitle', 'Hoe werkt het')
@include('partials.website.header')

<!-- page banner -->
<div id="innerpage-banner" class="col-xs-12">
    <div id="welcome" class="col-xs-12 no-padding">
        <div class="container">
            <div class="col-md-6 col-md-push-3 col-xs-12 no-padding">
                <h3>Hoe het werkt</h3>
                <p>UniHelp bevat enkele onmisbare functionaliteiten en is heel eenvoudig in gebruik.</p>
            </div>
        </div>
    </div>
</div>
<!-- end page banner -->

<!-- how it works steps-->
<div id="how" class="col-xs-12">
    <div class="container no-padding">
        <div class="intro col-lg-8 col-lg-push-2">
            <h2>Uniek platform</h2>
            <p>Unihelp is een uniek en gespecialiseerd platform (met mobiele ondersteuning) voor studenten. In deze bachelorproef doen we aan zelfstudie voor ongekende frameworks en technologieën, onderzoeken we vereisten in dergelijk platform, bevragen we studenten en ontwikkelen we een web-platform om studenten te ondersteunen gedurende hun studietraject.</p>
            <img src="img/mockups/003-MacBook-Space-Gray.png">
        </div>
        <ul class="steps col-lg-10 col-lg-push-1 col-xs-12 no-padding">
            <li class="col-lg-3 col-xs-12">
                <div class="step padding col-xs-12">
                    <i class="fa fa-life-ring"></i>
                    <h4>Vind de geknipte tutor</h4>
                    <p>Krijg instant en eenvoudig de hulp die jij nodig hebt. Help anderen door te tutoren.</p>
                </div>
            </li>
            <li class="col-lg-3 col-xs-12">
                <div class="step padding col-xs-12">
                    <i class="fa fa-users"></i>
                    <h4>Blijf steeds op de hoogte</h4>
                    <p>Sluit je aan bij een van de vele topics naar keuze. Deel al je vragen en nieuwtjes!</p>
                </div>
            </li>
            <li class="col-lg-3 col-xs-12">
                <div class="step padding col-xs-12">
                    <i class="fa fa-file"></i>
                    <h4>Wissel samenvattingen uit</h4>
                    <p>Bestanden kunnen op een veilige en snelle manier uitgewisseld worden met medestudenten.</p>
                </div>
            </li>
            <li class="col-lg-3 col-xs-12">
                <div class="step padding col-xs-12">
                    <i class="fa fa-smile-o"></i>
                    <h4>Geef elkaar een score</h4>
                    <p>Beoordeel al je teamleden en medestudenten op een snelle manier.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- end how it works steps -->

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
