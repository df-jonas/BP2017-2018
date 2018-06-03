@extends('layouts.platform')
@section('pagetitle', 'Instellingen')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container profile">
        <!-- begin profile message -->
    @include('partials.platform.message')
    <!-- end profile message -->
        <!-- Avatar upload modal -->
        <div class="modal fade" id="avatar-modal" role="dialog">
            <form action="{{ route('profile-update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <section class="modal-dialog ">
                    <!-- Modal content-->
                    <section class="modal-content">
                        <section class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Kies een avatar</h4>
                        </section>
                        <section class="modal-body">
                            <div class="form-group clearfix col-xs-12">
                                <br>
                                <div class="form-group clearfix col-xs-12">
                                    <div class="profile-img-container col-xs-12">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                             class="account-img round-img" id="register-img">
                                        <a href="#"><span class="fa fa-upload fa-5x"></span></a>
                                        <input id="picture-input" type="file" name="avatar"/>
                                        @if ($errors->has('avatar'))
                                            <span class="help-block"><strong>{{ $errors->first('avatar') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="modal-footer">
                            <input type="submit" class="download-button col-lg-2" value="Opslaan">
                        </section>
                    </section>
                </section>
            </form>
        </div>
        <!-- end Avatar upload modal -->
        <!-- begin profile info -->
        <div class="row">
            <!-- picture -->
            <section class="col-xs-12 padding">
                <div class="item padding left-border clearfix">
                    <section class="headline">
                        <div class="row flex">
                            <section class="left col-lg-1 col-sm-2 col-xs-12">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img"
                                     data-toggle="modal" data-target="#avatar-modal" alt="User profile image">
                                <br>
                            </section>
                            <section class="right col-lg-11 col-sm-10 col-xs-12">
                                <h4 class="user-title">{{ $user->first_name. " " .$user->last_name }}</h4>
                                <h4 style="margin-top: 0">
                                    <small>{{ $email }}</small>
                                </h4>
                            </section>
                        </div>
                    </section>
                </div>
            </section>
            <!-- end picture -->
        </div>
        <!-- end profile info -->
        <!-- left -->
        <div class="col-md-6 col-xs-12 no-padding">
            <!-- instellingen -->
            <section class="col-xs-12 no-padding-left">
                <div class="item padding clearfix">
                    <h2 class="settings-title">Profiel instellingen</h2>
                    <form action="{{ route('profile-update') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="selectdiv">
                                <label for="fos">Welke studierichting volgt u?</label>
                                <select class="select col-xs-12" id="fos" name="fos" tabindex="1">
                                    @foreach($foses as $fos)
                                        <option value="{{ $fos->id }}" {{ ($user->fosid == $fos->id ? "selected" : " ") }}>{{ $fos->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('fos'))
                                    <span class="help-block"><strong>{{ $errors->first('fos') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group  col-xs-12 no-padding clearfix">
                            <div class="selectdiv">
                                <label for="campus">Aan welke campus studeert u?</label>
                                <select class="select col-xs-12" id="campus" name="campus" tabindex="2">
                                    @foreach($campuses as $campus)
                                        <option value="{{ $campus->id }}" {{ ($user->campus->id == $campus->id ? "selected" : " ") }}>{{ $campus->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('campus'))
                                    <span class="help-block"><strong>{{ $errors->first('campus') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv clearfix">
                                <label for="woonplaats">Woonplaats</label>
                                <input id="woonplaats" name="woonplaats" type="text" class="form-control col-xs-12"
                                       value="{{ $user->address}}"
                                       tabindex="3">
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>
                    </form>
                </div>
            </section>
            <!-- end instellingen -->
            <!-- vakken -->
            <section class="col-xs-12 no-padding-left">
                <div class="item padding clearfix">
                    <h2 class="settings-title">Mijn vakken</h2>
                    <form>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <ul class="vakken">
                                @foreach($usercourses as $usercourse)
                                    <li>{{ $usercourse->course->name }}<span>
                                            <a href="{{ route('course-remove', ['id' => $usercourse->id]) }}"><i
                                                        class="fa fa-trash"></i></a></span></li>
                                @endforeach
                            </ul>
                        </div>


                        <h4 class="settings-title">Vak toevoegen</h4>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="inner-addon left-addon">
                                <input type="text" id="search" name="search" class="form-control filterlistener"
                                       placeholder="zoekterm"/>
                                <input type="hidden" class="filterlistener" name="_token" id="token"
                                       value="{{ csrf_token() }}">
                                <!-- <i class="glyphicon glyphicon-search"></i> -->
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <section id="filter-results" class="col-xs-12">

                            </section>
                        </div>


                    </form>

                </div>
            </section>
            <!-- end vakken -->
        </div>
        <!-- end left -->
        <!-- right -->
        <div class="col-md-6 col-xs-12 no-padding">
            <!-- voorkeuren -->
            <section class="col-xs-12 no-padding-right">
                <div class="item padding clearfix">
                    <h2 class="settings-title">Thema</h2>
                    <form>
                        <div class="form-group col-sm-4 col-xs-12 no-padding">
                            <div id="default" class="color-choose col-xs-12 {{ Variable::theme("default") }}" data-theme="default">
                                <label>Primary</label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4 col-xs-12 no-padding">
                            <div id="light" class="color-choose col-xs-12 {{ Variable::theme("light") }}" data-theme="light">
                                <label>Light</label>
                            </div>
                        </div>
                        <div class="form-group col-sm-4 col-xs-12 no-padding">
                            <div id="dark" class="color-choose col-xs-12 {{ Variable::theme("dark") }}" data-theme="dark">
                                <label>Dark</label>
                            </div>
                        </div>
                        <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}">
                    </form>


                    <h4 class="settings-title">Meldingen</h4>
                    <form>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="notification-choose col-lg-4 left col-md-4 col-sm-5 col-xs-12 {{ Variable::notif("comment") }}" data-notification="comment">
                                <label>Reacties</label>
                            </div>
                            <div class="notification-choose col-lg-4 right col-md-4 col-md-push-0 col-sm-5 col-sm-push-2 col-xs-12 {{ Variable::notif("likes") }}" data-notification="likes">
                                <label>Likes</label>
                            </div>
                            <div class="notification-choose col-lg-4 left col-md-4 col-sm-5 col-xs-12  {{ Variable::notif("tutoring") }}" data-notification="tutoring">
                                <label>Tutoring</label>
                            </div>
                        </div>
                    </form>
                </div>

            </section>
            <!-- end voorkeuren -->
            <!-- account -->
            <section class="col-xs-12 no-padding-right">
                <div class="item padding clearfix">
                    <h2 class="settings-title">Account instellingen</h2>
                    <form action="{{ route('profile-update') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv clearfix">
                                <label for="voornaam">Voornaam</label>
                                <input id="voornaam" name="firstname" type="text" class="form-control col-xs-12"
                                       value="{{ $user->first_name }}" tabindex="5">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv clearfix">
                                <label for="achternaam">Achternaam</label>
                                <input id="achternaam" name="lastname" type="text" class="form-control col-xs-12"
                                       value="{{ $user->last_name }}" tabindex="6">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv clearfix">
                                <label for="e-mail">E-mailadres</label>
                                <input id="e-mail" name="email" type="text" class="form-control col-xs-12"
                                       value="{{ $email }}" tabindex="7">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>
                    </form>
                </div>
            </section>
            <!-- end account -->
            <!-- close account -->
            <section class="col-xs-12 no-padding-right">
                <div class="item padding clearfix">
                    <h2 class="settings-title">Account sluiten</h2>
                    <form action="{{route('profile-close')}}" method="POST">
                        <div class="form-group clearfix col-xs-12">
                            <label class="checkbox-container remember col-xs-12">
                                <input type="checkbox" name="account_close">Ik ben er zeker van dat ik mijn account en
                                alle gegevens wil verwijderen.
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12"
                                   value="Account sluiten">
                        </div>
                    </form>
                </div>
            </section>
            <!-- end close account -->
        </div>
        <!-- end right -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection

@section("scripts")
    <script src="{{ asset("js/course-filter.js") }}"></script>
    <script src="{{ asset("js/change-theme.js") }}"></script>
    <script src="{{ asset("js/change-preference.js") }}"></script>
@endsection
