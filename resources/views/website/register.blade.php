@extends('layouts.website')

@section('content')
    @include('partials.website.header')
    <div id="login_page" class="col-xs-12">
        <div class="login_box col-lg-4 col-lg-push-4 col-xs-12">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Registreren</h1>

                    <form class="register" action="{{ route('sharing-index') }}">


                        <div class="table" style="display: table">
                            <div style="display: table-cell; width: 32px; position:relative;">
                                <img src="{{ URL::asset('img/team/arno.png') }}" class="account_img">
                                <div class="account_img edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div style="display: table-cell; padding-left: 32px; vertical-align: middle">
                                <h6 style="margin: 0">Arno Stalpaert</h6>
                                <h6 style="margin: 5px 0">arno.stalpaert@student.ehb.be</h6>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <label for="exampleInputEmail1">Kies een gebruikersnaam</label>
                            <input type="email" class="form-control col-lg-6" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Arno">
                        </div>


                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="exampleInputPassword1">Aan welke campus studeert u?</label>

                                <select class="select col-xs-12">
                                    <option selected>Design &amp; Technology</option>
                                    <option>Dansaert</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group clearfix">

                            <div class="selectdiv">
                                <label for="exampleInputPassword1">Welke studierichting volgt u?</label>
                                <select class="select col-xs-12">
                                    <option selected>Multimedia &amp; Communicatie Technologie</option>
                                    <option>Dig-X</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Ik aanvaard de algemene voorwaarden.
                            </label>
                        </div>
                        <button type="submit" class="action-button register long col-lg-12">Registreren</button>
                    </form>
                </div>


                <div class="col-lg-4 info">
                    <h4>Waarom UniHelp gebruiken?</h4>
                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')
@endsection
