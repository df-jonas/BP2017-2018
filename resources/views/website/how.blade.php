@extends('layouts.website')

@section('content')
@section('pagetitle', 'Hoe werkt het')
    @include('partials.website.header')
    <div class="breadcrumb-banner col-xs-12">
        <div id="breadcrumb">
            <ul class="breadcrumb">
                <li><a href="/">Home</a> <span class="divider">-></span></li>
                <li>Hoe werkt het?</li>
            </ul>
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
@include('partials.newsletter')
    @include('partials.footer')
@endsection
