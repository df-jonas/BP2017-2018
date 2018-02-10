@extends('layouts.website')

@section('content')
    @include('partials.website.header')

    <div id="login_page">
        <div class="login_box col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1">
            <div class="row">
                <div class="auth col-lg-8 col-md-8 col-xs-12">

                    <h1>Registreren</h1>

                    <form class="register" action="{{ route('register') }}" method="post">

                        {{csrf_field()}}

                        <div class="table" style="display: table">
                            <div style="display: table-cell; width: 32px; position:relative;">
                                <img src="{{ asset('img/avatars/empty.png') }}" class="account_img">
                                <div class="account_img edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div style="display: table-cell; padding-left: 32px; vertical-align: middle">
                                <h6 style="margin: 0">{{$name}}</h6>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label for="email">Uw e-mailadres</label>
                            <input type="email" class="form-control col-lg-6" id="email" name="email"
                                   aria-describedby="emailHelp">
                        </div>


                        <div class="form-group clearfix">
                            <label for="username">Kies een gebruikersnaam</label>
                            <input type="text" class="form-control col-lg-6" id="username" name="username"
                                   aria-describedby="usernameHelp">
                        </div>

                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="campus">Aan welke campus studeert u?</label>

                                <select class="select col-xs-12" id="campus" name="campus">
                                    @foreach($campuses as $campus)
                                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group clearfix">

                            <div class="selectdiv">
                                <label for="fos">Welke studierichting volgt u?</label>
                                <select class="select col-xs-12" id="fos" name="fos">
                                    @foreach($foses as $fos)
                                        <option value="{{ $fos->id }}">{{ $fos->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="tnc" class="form-check-input">
                                Ik aanvaard de algemene voorwaarden.
                            </label>
                        </div>
                        <button type="submit" class="action-button register long col-lg-12">Registreren</button>
                    </form>
                </div>

                <div class="info col-lg-4 col-md-4 col-xs-12">
                    <h4>Waarom UniHelp gebruiken?</h4>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
