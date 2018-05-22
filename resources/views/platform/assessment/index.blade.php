@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Peer Assessment')
@include('partials.platform.header')
@include('partials.platform.subheader')
<!-- begin container -->
<section class="container profile">
    <!-- begin profile message -->
@include('partials.platform.message')
<!-- end profile message -->


    <!-- begin profile info -->
    <div class="row">
        <!-- picture -->
        <section class="col-xs-12">
            <div class="item padding clearfix">
                <section class="headline">
                    <div class="row flex">
                        <section class="left col-lg-1 col-sm-2 col-xs-12">
                            <br>
                        </section>

                    </div>
                    <br>
                </section>
            </div>
        </section>
        <!-- end picture -->
    </div>
    <!-- end profile info -->

</section>
<!-- end container -->
<!-- begin footer -->
@include('partials.footer')
<!-- end footer -->
@endsection
