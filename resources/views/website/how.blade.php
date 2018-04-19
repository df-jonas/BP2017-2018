@extends('layouts.website')

@section('content')
    @include('partials.website.header')
    <div class="breadcrumb-banner col-xs-12">
        <div class="background-image"></div>
        <div class="inner-content vertical-center col-lg-12">
            <h1>Hoe werkt het?</h1>
        </div>
    </div>
    <!-- Galerij -->
    <div id="gallery" class="row clearfix">
        <div class="container">
            <div class="col-sm-2 col-xs-12">
                <div class="box">
                    <img src="img/backgrounds/wat-1.png">
                </div>
                <div class="box">
                    <img src="img/backgrounds/wat-2.png">
                </div>
                <div class="box">
                    <img src="img/backgrounds/wat-3.png">
                </div>
                <div class="box">
                    <img src="img/backgrounds/wat-1.png">
                </div>
            </div>
            <div class="col-sm-10 hide-mobile">
                <div class="full-image">
                    <img src="img/backgrounds/wat-3.png">
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('partials.footer')
@endsection
