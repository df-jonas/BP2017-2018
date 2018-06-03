@extends('layouts.website')
@section('pagetitle', 'Registreren')
@section('content')
    <main class="auth-page">
        <!-- Progress Bar -->



        <section class="auth-box col-lg-4 col-lg-push-4 col-md-6 col-md-push-6 col-sm-8 col-sm-push-2 col-xs-12">
            <section class="progress-box col-lg-4 col-lg-push-4 col-md-6 col-md-push-6 col-sm-8 col-sm-push-2 col-xs-12">
                <ul id="progressbar">
                    <li class="active"><span>1</span></li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </section>
            <a href="{{route('website-index')}}"><img class="logo" src="img/logo/favicon.png"></a>
            <!-- multistep form -->
            <form id="msform" class="register clearfix col-xs-12" method="post" enctype="multipart/form-data" action="{{ route('register') }}">
                 {{ csrf_field() }}


                <div class="content">
                    <!-- Multistep Form -->
                    <div class="main">
                        <form action="" class="regform" method="get">
                            <!-- Fieldsets -->
                            <fieldset id="first">
                                <p class="subtitle">Step 1</p>
                                <input class="text_field" name="email" placeholder="Email" type="text">
                                <input class="text_field" name="pass" placeholder="Password" type="password">
                                <input class="text_field" name="cpass" placeholder="Confirm Password" type="password">
                                <input class="next_btn" name="next" type="button" value="Next">
                            </fieldset>
                            <fieldset>
                                <p class="subtitle">Step 2</p>
                                <select class="options">
                                    <option>--Select Education--</option>
                                    <option>Post Graduate</option>
                                    <option>Graduate</option>
                                    <option>HSC</option>
                                    <option>SSC</option>
                                </select>
                                <input class="text_field" name="marks" placeholder="Marks Obtained" type="text">
                                <input class="text_field" name="pyear" placeholder="Passing Year" type="text">
                                <input class="text_field" name="univ" placeholder="University" type="text">
                                <input class="pre_btn" name="previous" type="button" value="Previous">
                                <input class="next_btn" name="next" type="button" value="Next">
                            </fieldset>
                            <fieldset>
                                <p class="subtitle">Step 3</p>
                                <input class="text_field" name="fname" placeholder="First Name" type="text">
                                <input class="text_field" name="lname" placeholder="Last Name" type="text">
                                <input class="text_field" name="cont" placeholder="Contact" type="text">
                                <label>Gender</label>
                                <input class="rad" name="gender" type="radio">Male
                                <input class="rad" name="gender" type="radio">Female
                                <textarea name="address" placeholder="Address"></textarea>
                                <input class="pre_btn" type="button" value="Previous">
                                <input class="submit_btn" type="submit" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>



                <!--end multistep form -->
                     <div class="form-group clearfix col-xs-12">
                     @if ($errors->has('first_name'))
                         <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
                     @endif
                     @if ($errors->has('last_name'))
                         <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                     @endif
                     @if ($errors->has('email'))
                         <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                     @endif
                     @if ($errors->has('campus'))
                         <span class="help-block"><strong>{{ $errors->first('campus') }}</strong></span>
                     @endif
                     @if ($errors->has('fos'))
                         <span class="help-block"><strong>{{ $errors->first('fos') }}</strong></span>
                     @endif
                     @if ($errors->has('avatar'))
                         <span class="help-block"><strong>{{ $errors->first('avatar') }}</strong></span>
                     @endif
                     @if ($errors->has('password'))
                         <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                     @endif
                     @if ($errors->has('password_confirmation'))
                         <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                     @endif
                     @if ($errors->has('tnc'))
                         <br><span class="help-block"><strong>{{ $errors->first('tnc') }}</strong></span>
                     @endif
                     </div>
            </form>
            <footer class="row">
                <a href="{{route('login')}}" class="text-muted">Reeds een account?</a>
                <!--
                <div class="form-group clearfix col-xs-12">
                    <input type="submit" class="action-button canvas disabled col-xs-12" value="LOGIN MET CANVAS" disabled readonly title="Inloggen met Canvas is innenkort beschikbaar">
                </div>
                -->
            </footer>
        </section>
    </main>
    <!-- Multistep script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ URL::asset('js/register.js') }}"></script>
@endsection