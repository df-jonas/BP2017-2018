@extends('layouts.innerpage')
@section('pagetitle', 'Sitemap')
@section('content')
    @include('partials.website.header')
    @include('partials.website.breadcrumb')

    <div id="main-content" class="padding col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
        <h1>Sitemap </h1>

        <br/>
    </div>
    <!-- footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
