@extends('layouts.website')
@section('pagetitle', 'Registreer')
@section('content')

    <div class="auth-page">
        <div class="auth-box col-lg-4 col-lg-push-4 col-md-6 col-md-push-6 col-sm-8 col-sm-push-2  col-xs-12">
            <img class="logo" src="img/logo/favicon.png">
            <form id="msform" class="register clearfix" method="post" enctype="multipart/form-data"
                  action="{{ route('register') }}">

            {{ csrf_field() }}
            <!-- step 1 -->
                <fieldset>
                    <article>
                        <div class="box">

                            <div class="form-group clearfix col-xs-12">
                                <label for="first_name">Voornaam</label>
                                <input type="text" class="form-control col-lg-6" id="first_name" name="first_name"
                                       aria-describedby="first_nameHelp" required value="{{ old('first_name') }}">
                                @if ($errors->has('first_name'))
                                    <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group clearfix col-xs-12">
                                <label for="last_name">Achternaam</label>
                                <input type="text" class="form-control col-lg-6" id="last_name" name="last_name"
                                       aria-describedby="last_nameHelp" required value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                                @endif
                            </div>

                            <input type="button" class="action-button login next col-xs-12" value="VOLGENDE">
                        </div>


                    </article>

                </fieldset>
                <!-- step 1 -->

                <!-- step 2 -->
                <fieldset>

                    <article>
                        <div class="box">

                            <div class="form-group clearfix col-xs-12">
                                <label for="email">E-mailadres</label>
                                <input type="email" class="form-control col-lg-6" id="email" name="email"
                                       aria-describedby="usernameHelp" required value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>


                            <div class="form-group clearfix col-xs-12">
                                <div class="selectdiv">
                                    <label for="campus">Aan welke campus studeert u?</label>

                                    <select class="select col-xs-12" id="campus" name="campus">
                                        @foreach($campuses as $campus)
                                            <option value="{{ $campus->id }}" {{ (old("campus") == $campus->id ? "selected":"") }}>{{ $campus->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('campus'))
                                        <span class="help-block"><strong>{{ $errors->first('campus') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group clearfix col-xs-12">

                                <div class="selectdiv">
                                    <label for="fos">Welke studierichting volgt u?</label>
                                    <select class="select col-xs-12" id="fos" name="fos">
                                        @foreach($foses as $fos)
                                            <option value="{{ $fos->id }}" {{ (old("fos") == $fos->id ? "selected":"") }}>{{ $fos->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('fos'))
                                        <span class="help-block"><strong>{{ $errors->first('fos') }}</strong></span>
                                    @endif
                                </div>
                            </div>


                            <input type="button" class="action-button login next col-xs-12" value="VOLGENDE">
                        </div>

                    </article>
                </fieldset>
                <!-- step 2 -->


                <!-- step 3 -->
                <fieldset>

                    <article>
                        <div class="box">

                            <div class="form-group clearfix col-xs-12">
                                <div class="profile-img-container col-xs-12">
                                    <img src="{{ asset('img/avatars/empty.png') }}" class="account-img round-img"
                                         id="register-img">
                                    <a href="#"><span class="fa fa-upload fa-5x"></span></a>
                                    <input id="picture-input" type="file" name="avatar"/>
                                    @if ($errors->has('avatar'))
                                        <span class="help-block"><strong>{{ $errors->first('avatar') }}</strong></span>
                                    @endif
                                    <h6 style="text-align: center">Klik om een avatar te kiezen.</h6>
                                </div>
                            </div>

                            <div class="form-group clearfix col-xs-12">
                                Kies uw favoriete kleur
                            </div>


                            <input type="button" class="action-button login next col-xs-12" value="VOLGENDE">


                        </div>
                    </article>
                </fieldset>
                <!-- step 3 -->


                <!-- step 3 -->
                <fieldset>

                    <article>
                        <div class="box">

                            <div class="form-group clearfix col-xs-12">
                                <label for="password">Wachtwoord</label>
                                <input type="password" class="form-control col-lg-6" id="password" name="password"
                                       aria-describedby="last_nameHelp" required>
                                @if ($errors->has('password'))
                                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group clearfix col-xs-12">
                                <label for="password_confirmation">Wachtwoord bevestigen</label>
                                <input type="password" class="form-control col-lg-6" id="password_confirmation"
                                       name="password_confirmation" aria-describedby="last_nameHelp" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                                @endif
                            </div>

                            <div class="form-group clearfix col-xs-12">
                                <label class="form-check-label">
                                    <input type="checkbox" name="tnc" class="form-check-input"
                                           value="{{ old('tnc', 'on') }}">
                                    Ik aanvaard de algemene voorwaarden.
                                    @if ($errors->has('tnc'))
                                        <br><span class="help-block"><strong>{{ $errors->first('tnc') }}</strong></span>
                                    @endif
                                </label>
                            </div>


                            <input type="button" class="action-button login previous col-xs-12" name="previous"
                                   value="VORIGE">
                            <input type="submit" class="action-button login submit col-xs-12" value="VOLTOOIEN">


                        </div>
                    </article>
                </fieldset>
                <!-- step 3 -->


                <!-- multistep form -->
            </form>
        <!--
            <footer class="col-xs-12 clearfix">

                <h5 class="green">Heb je wel al een UniHelp account?</h5>
                <br/>
                <a href="{{ route('login') }}">
                    <input type="button" class="action-button register" value="Inloggen">
                </a>
                <!-- TODO JONAS Canvas register -->
            <!--
            <a href="#">
                <input type="button" class="action-button register" value="Registreer met canvas">
            </a>
        </footer>
        -->
            <!-- files -->
        </div>
    </div>

@endsection
