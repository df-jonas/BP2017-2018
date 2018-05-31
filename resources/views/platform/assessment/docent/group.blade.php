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



                <div class="item padding clearfix" style="padding:0 15px 0 15px">
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



                    <div class="row flex padding">
                        <!-- begin table -->
                        <table class="assessment">
                            <tr>
                                <td class="left">Stalpaert, Arno <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td>5</td>
                                <td><a>Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a></td>
                                <td><a>Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td class="left">Stalpaert, Arno <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td>5</td>
                                <td><a>Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a></td>
                                <td><a>Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td class="left">Stalpaert, Arno <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td>5</td>
                                <td><a>Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a></td>
                                <td><a>Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>
                            </tr>
                            <tr>
                                <td class="left">Stalpaert, Arno <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td>5</td>
                                <td><a>Bekijk uitgedeelde scores <i class="fas fa-arrow-right"></i></a></td>
                                <td><a>Bekijk ontvangen scores <i class="fas fa-arrow-right"></i></a></td>
                            </tr>
                        </table>
                    </div>
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
