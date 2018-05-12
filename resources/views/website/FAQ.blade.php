@extends('layouts.innerpage')
@section('pagetitle', 'Veelgestelde vragen')
@section('content')
    @include('partials.website.header')
    @include('partials.website.breadcrumb')
    <div id="main-content" class="padding col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
        <button class="accordion">Section 1</button>
        <div class="panel">
            <p>Lorem ipsum...</p>
        </div>

        <button class="accordion">Section 2</button>
        <div class="panel">
            <p>Lorem ipsum...</p>
        </div>

        <button class="accordion">Section 3</button>
        <div class="panel">
            <p>Lorem ipsum...</p>
        </div>
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
