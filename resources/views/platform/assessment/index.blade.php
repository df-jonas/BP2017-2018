@extends('layouts.platform')
@section('pagetitle', 'Peer Assessment')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container">
        <!-- begin profile message -->
    @include('partials.platform.message')
    <!-- end profile message -->
        <!-- begin go back -->
    @include('partials.platform.go-back')
    <!-- end go back-->
        <!-- begin table -->
        <section class="table">
            <!-- begin sidebar -->
            <aside class="sidebar">


                <!-- User items -->
                <section class="item user-owned hide-mobile">
                    <header><a class="header-title">Beschikbare assessments</a></header>
                    <div class="padding">
                        <div class="row flex">
                            <section class="col-xs-10">
                                <h2 class="item-title"><a href="#">Android project</a></h2>
                                <div class="rating col-xs-12 no-padding clearfix">
                                    <div class="col-xs-12 no-padding">
                                        geldig tot 12 juni
                                    </div>
                                </div>
                            </section>
                            <div class="col-xs-2">
                                <i class="fa fa-user-plus brown"></i>
                            </div>
                        </div>
                        <div class="row flex">
                            <section class="col-xs-10">
                                <h2 class="item-title"><a href="#">Android project</a></h2>
                                <div class="rating col-xs-12 no-padding clearfix">
                                    <div class="col-xs-12 no-padding">
                                        geldig tot 12 juni
                                    </div>
                                </div>
                            </section>
                            <div class="col-xs-2">
                                <i class="fa fa-user-plus brown"></i>
                            </div>
                        </div>
                        <div class="row flex">
                            <section class="col-xs-10">
                                <h2 class="item-title"><a href="#">Android project</a></h2>
                                <div class="rating col-xs-12 no-padding clearfix">
                                    <div class="col-xs-12 no-padding">
                                        geldig tot 12 juni
                                    </div>
                                </div>
                            </section>
                            <div class="col-xs-2">
                                <i class="fa fa-user-plus brown"></i>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end User items -->

                <!-- User items -->
                <section class="item user-owned hide-mobile">
                    <header><a class="header-title">Voltooide assessments</a></header>
                    <div class="padding">
                        <div class="row flex">
                            <section class="col-xs-10">
                                <h2 class="item-title"><a href="#">Android project</a></h2>
                                <div class="rating col-xs-12 no-padding clearfix">
                                    <div class="col-xs-12 no-padding">
                                       ongeldige deelname
                                    </div>
                                </div>
                            </section>
                            <div class="col-xs-2">
                                <i class="fa fa-wrench brown"></i>
                            </div>
                        </div>
                        <div class="row flex">
                            <section class="col-xs-10">
                                <h2 class="item-title"><a href="#">Android project</a></h2>
                                <div class="rating col-xs-12 no-padding clearfix">
                                    <div class="col-xs-12 no-padding">
                                        geldig tot 12 juni
                                    </div>
                                </div>
                            </section>
                            <div class="col-xs-2">
                                <i class="fa fa-user-plus brown"></i>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end User items -->
            </aside>
            <!-- end sidebar -->
            <!-- begin content -->
            <section class="content assessment overview">
                <section class="item clearfix">
                    <header><a class="header-title">Android project</a></header>
                    <div class="padding">
                        <table class="assessment-overview">


                            <tr>
                                <td class="bold">Peer assessment</td>
                                <td class="static-course">Android project assessment</td>
                            </tr>



                            <tr>
                                <td class="bold">Aantal leden</td>
                                <td class="static-course">12</td>
                            </tr>


                            <tr>
                                <td class="bold">Einddatum</td>
                                <td class="static-course">21 juni 2018 om 23:59</td>
                            </tr>

                            <tr>
                                <td class="bold">Geschatte tijd</td>
                                <td class="static-title">7 minuten</td>
                            </tr>




                            <tr>
                                <td class="bold">Aantal beurten</td>
                                <td class="static-course">1</td>
                            </tr>

                            <tr>
                                <td class="bold">Instructies</td>
                                <td class="static-course">Geef iedere student een score</td>
                            </tr>


                        </table>
                        <a href="#"><button class="download-button col-lg-2 col-sm-4 col-xs-12" value="Starten">Starten</button></a>

                    </div>
                </section>
            </section>
            <!-- end content -->
        </section>
        <!-- end table -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
