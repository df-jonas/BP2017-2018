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
        <!-- begin assessment-->
        <div class="row">

            <section class="col-xs-12">
                <!-- begin go back -->
            @include('partials.platform.go-back')
            <!-- end go back-->
            </section>


            <!-- Assessment titel -->
            <section class="col-xs-12">


                <div class="item clearfix">
                    <header><a class="header-title">Assessment groep</a></header>
                    <div class="padding">
                        <section class="content assessment">
                            <section class="assessment-group">
                                <div class="title col-lg-3">
                                    <a href="#"><h2 class="group-title">Assessment titel 1</h2></a>
                                </div>
                                <div class="info col-lg-9">
                                    <span class="assessments">Groep Moleskine</span>
                                </div>
                            </section>
                        </section>
                        <!-- end assessment titel -->
                        <div class="row flex padding">
                            <!-- begin table -->
                            <table class="assessment group">
                                <tr class="heading">
                                    <th class="left top"><span class="large-th">Groep overzicht</span></th>
                                    <th class="skill-th">Gemiddelde score</th>
                                    <th class="skill-th">Uitgedeelde scores</th>
                                    <!--<th class="skill-th">Ontvangen scores</th>-->
                                </tr>
                                <tr>
                                    <td class="left"><a href="#">Stalpaert, Arno</a><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img hide-tablet" alt="User profile image"></td>
                                    <td>5</td>
                                    <td><a href="#">Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a>
                                    </td>
                                    <!--<td><a href="#">Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>-->
                                </tr>
                                <tr>
                                    <td class="left"><a href="#">De Frère, Jonas</a> <img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img hide-tablet" alt="User profile image"></td>
                                    <td>4</td>
                                    <td><a href="#">Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a>
                                    </td>
                                    <!--<td><a href="#">Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>-->
                                </tr>
                                <tr>
                                    <td class="left"><a href="#">Goeman, Sam </a><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img hide-tablet" alt="User profile image"></td>
                                    <td>2</td>
                                    <td><a href="#">Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a>
                                    </td>
                                    <!--<td><a href="#">Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>-->
                                </tr>
                                <tr>
                                    <td class="left"><a href="#">Janssens, Brent </a><img
                                                src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                                class="group-img round-img hide-tablet" alt="User profile image"></td>
                                    <td>4</td>
                                    <td><a href="#">Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a>
                                    </td>
                                    <!--<td><a href="#">Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>-->
                                </tr>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
