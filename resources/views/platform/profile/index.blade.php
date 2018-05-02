@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Profiel')
@include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
    @include('partials.platform.message')
         <!-- Avatar upload modal -->
        <div class="modal fade" id="avatar-modal" role="dialog">
            <form action="{{ route('profile-update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-dialog ">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Kies een avatar</h4>
                        </div>
                        <div class="modal-body">
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
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="download-button col-lg-2" value="Opslaan">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end Avatar upload modal -->

        <div class="row">
            <!-- picture -->
            <article class="col-xs-12">
                <div class="item padding clearfix">
                    <div class="headline">
                        <div class="row flex">
                            <div class="left col-lg-1 col-sm-2 col-xs-12">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img"
                                     data-toggle="modal" data-target="#avatar-modal">
                                <br>
                            </div>
                            <div class="right col-lg-11 col-sm-10 col-xs-12">
                                <h4>{{ $user->first_name. " " .$user->last_name }}</h4>
                                <h4 style="margin-top: 0">
                                    <small>{{ $email }}</small>
                                </h4>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </article>
            <!-- end picture -->
        </div>


        <div class="row">
            <!-- instellingen -->
            <article class="col-lg-6 col-xs-12">
                <div class="item padding clearfix">
                    <h4>Profiel instellingen</h4>
                    <form action="{{ route('profile-update') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group  col-xs-12 no-padding clearfix">
                            <div class="selectdiv">
                                <label for="fos">Welke studierichting volgt u?</label>
                                <select class="select col-xs-12" id="fos" name="fos">
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
                                <select class="select col-xs-12" id="campus" name="campus">
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
                            <div class="textdiv">
                                <label for="woonplaats">Woonplaats</label>
                                <input id="woonplaats" name="woonplaats" type="text" class="form-control col-xs-12">
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>
                    </form>
                </div>
            </article>
            <!-- end instellingen -->

            <!-- voorkeuren -->
            <article class="col-lg-6 col-xs-12">
                <div class="item padding clearfix">
                    <h4>Thema</h4>
                    <form>
                        <div class="form-group col-sm-3 col-xs-12 no-padding">
                            <div class="color-choose col-xs-12" style="background: #505457"></div>
                        </div>

                        <div class="form-group col-sm-3 col-xs-12 no-padding">
                            <div class="color-choose col-xs-12" style="background: #62868e"></div>
                        </div>
                        <div class="form-group col-sm-3 col-xs-12 no-padding">
                            <div class="color-choose col-xs-12" style="background: #d6b83a"></div>
                        </div>
                        <div class="form-group col-sm-3 col-xs-12 no-padding">
                            <div class="color-choose col-xs-12" style="background: #d6b83a"></div>
                        </div>
                    </form>

                    <h4>Meldingen</h4>
                    <form>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="notification-choose col-lg-3 left col-md-3 col-sm-5 col-xs-12">
                                <header></header>
                                <p><i class="fa fa-bell-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose col-lg-3 right col-md-3 col-md-push-0 col-sm-5 col-sm-push-2 col-xs-12 disabled">
                                <header></header>
                                <p><i class="fa fa-bell-slash-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose col-lg-3 left col-md-3 col-sm-5 col-xs-12 disabled">
                                <header></header>
                                <p><i class="fa fa-bell-slash-o"></i></p>
                                <label>Test</label>
                            </div>
                            <div class="notification-choose col-lg-3 right col-md-3 col-md-push-0 col-sm-5 col-sm-push-2 col-xs-12">
                                <header></header>
                                <p><i class="fa fa-bell-o"></i></p>
                                <label>Test</label>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>
                    </form>
                </div>

            </article>
            <!-- end voorkeuren -->
        </div>

        <div class="row">
            <!-- vakken -->
            <article class="col-lg-6 left col-xs-12">
                <div class="item padding clearfix">
                    <h4>Mijn vakken</h4>
                    <form>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <ul class="vakken">
                                <li>Online marketing <span><i class="fa fa-trash"></i></span></li>
                                <li>Cross Media Design <span><i class="fa fa-trash"></i></span></li>
                                <li>Motion Design <span><i class="fa fa-trash"></i></span></li>
                                <li>Advanced web development <span><i class="fa fa-trash"></i></span></li>
                            </ul>
                        </div>

                        <h4>Vak toevoegen</h4>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="inner-addon left-addon">
                                <input type="text" id="vak-zoeken" name="search" class="form-control filterlistener"
                                       placeholder="zoekterm"/>
                                <!-- <i class="glyphicon glyphicon-search"></i> -->
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <ul class="vakken-nieuw">
                                <li>Enterpreneurship <span><input type="submit" class="download-button"
                                                                  value="Toevoegen"></span></li>
                                <li>Enterpreneurship 2 <span><input type="submit" class="download-button"
                                                                    value="Toevoegen"></span>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </article>
            <!-- end vakken -->

            <!-- account -->
            <article class="col-lg-6 right col-xs-12">
                <div class="item padding clearfix">
                    <h4>Account instellingen</h4>
                    <form action="{{ route('profile-update') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="gebruikersnaam">Gebruikersnaam</label>
                                <input id="gebruikersnaam" name="username" type="text" class="form-control col-xs-12"
                                       value="{{ $username }}">
                            </div>
                        </div>

                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="voornaam">Voornaam</label>
                                <input id="voornaam" name="firstname" type="text" class="form-control col-xs-12"
                                       value="{{ $user->first_name }}">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="achternaam">Achternaam</label>
                                <input id="achternaam" name="lastname" type="text" class="form-control col-xs-12"
                                       value="{{ $user->last_name }}">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <div class="textdiv">
                                <label for="e-mail">E-mailadres</label>
                                <input id="e-mail" name="email" type="text" class="form-control col-xs-12"
                                       value="{{ $email }}">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding clearfix">
                            <input type="submit" class="download-button col-lg-4 col-sm-4 col-xs-12" value="Opslaan">
                        </div>
                    </form>
                </div>
            </article>
            <!-- end account -->
        </div>
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
