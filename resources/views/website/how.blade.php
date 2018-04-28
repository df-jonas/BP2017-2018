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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
<!-- end page banner -->

<!-- how it works steps-->
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
                <div class="step padding col-xs-12">
                    <i class="fa fa-users"></i>
                    <h4>Blijf steeds op de hoogte</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
                </div>
            </li>
            <li class="col-lg-3 col-xs-12">
                <div class="step padding col-xs-12">
                    <i class="fa fa-file"></i>
                    <h4>Wissel samenvattingen uit</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
                </div>
            </li>
            <li class="col-lg-3 col-xs-12">
                <div class="step padding col-xs-12">
                    <i class="fa fa-life-ring"></i>
                    <h4>Vind de geknipte tutor</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
                </div>
            </li>
            <li class="col-lg-3 col-xs-12">
                <div class="step padding col-xs-12">
                    <i class="fa fa-clipboard"></i>
                    <h4>Geef elkaar een peer score</h4>
                    <p>Sed tamen intellego quid velit. Que Manilium, ab iisque M. Erat enim res aperta.</p>
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
