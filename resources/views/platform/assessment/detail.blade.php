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
        <!-- begin assessment-->
        <div class="row">
            <section class="col-xs-12">
                <!-- comment modal -->
                <div class="modal fade assessment" id="assessment-modal" role="dialog">
                    <section class="modal-dialog">
                        <!-- Modal content-->
                        <section class="modal-content">
                            <section class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4>Toelichting</h4>
                            </section>
                            <section class="modal-body padding" style="padding: 10px">
                                <span class="large-th col-xs-12">Stalpaert Arno</span>
                                <span class="mid-th col-xs-12">Aanwezigheid</span>
                                <textarea class="col-xs-12" rows="5"></textarea>
                            </section>
                            <section class="modal-footer">
                                <input type="submit" class="download-button col-lg-2" value="Opslaan">
                            </section>
                        </section>
                    </section>
                </div>
                <!-- end comment modal -->
                <div class="item clearfix">
                    <header><a class="header-title">Peer Assessment</a></header>
                    <div class="padding">
                    <div class="row flex">
                        <!-- begin table -->
                        <table class="assessment">
                            <tr class="heading">
                                <th class="left top"><span class="large-th">Integration: Android</span> <br> <span class="mid-th">Team "Moleskine"</span></th>
                                <th colspan="7"><span class="large-th">Attitudes</span> <br><span class="mid-th">Gelieve een eerlijke score in te vullen</span></th>
                            </tr>
                            <tr class="heading">
                                <th class="left top"></th>
                                <th class="skill-th">Aanwezigheid</th>
                                <th class="skill-th">Inzet en motivatie</th>
                                <th class="skill-th">Vaardigheden</th>
                                <th class="skill-th">Kwaliteit</th>
                                <th class="skill-th">Stiptheid</th>
                                <th class="skill-th">Verzorging</th>
                                <th class="skill-th">Deadlines</th>
                            </tr>
                            <tr>
                                <td class="left">Stalpaert, Arno <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                            </tr>
                            <tr>
                                <td class="left">Jannsens, Brent <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                            </tr>
                            <tr>
                                <td class="left">Goeman, Sam <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                            </tr>
                            <tr>
                                <td class="left">De Frère, Jonas <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                            </tr>
                            <tr class="selected">
                                <td class="left">De Bauw, Axel <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value=""></td>
                                <td><input type="number" value=""></td>
                                <td><input type="number" value=""></td>
                                <td><input type="number" value=""></td>
                                <td><input type="number" value=""></td>
                                <td><input type="number" value=""></td>
                                <td><input type="number" value=""></td>
                            </tr>
                            <tr>
                                <td class="left">Stalpaert, Jelle <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                            </tr>
                            <tr>
                                <td class="left">Janssens, Dirk <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                            </tr>
                            <tr>
                                <td class="left">Dehenau, Peter <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                            </tr>
                            <tr>
                                <td class="left">Fritssen, Mark <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value=""></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value="5"> <span class="more" data-toggle="modal" data-target="#assessment-modal"></span></td>
                                <td><input type="number" value=""></td>
                            </tr>
                        </table>
                        <div class="col-xs-12">
                            <a class="download-button col-lg-2 col-sm-4 col-xs-12" href="#">Indienen</a>
                        </div>
                    </div>
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
