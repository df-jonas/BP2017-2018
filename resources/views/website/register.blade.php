@extends('layouts.website')

@section('content')
    @include('partials.website.header')

    <div id="login_page">
        <div class="login_box">


            <form class="register" action="{{ route('register') }}" method="post" enctype="multipart/form-data">

                {{csrf_field()}}


                <div class="form-group clearfix col-xs-12">
                    <div class="profile-img-container col-xs-12">
                        
                        <img src="{{ asset('img/avatars/empty.png') }}" class="account_img">
                        <a href="#"><span class="fa fa-upload fa-5x"></span></a>
                        <input id="picture-input" type="file" name="avatar"/>
                    </div>
                    <h6 class="account_username">{{$name}}</h6>
                </div>

                <div class="form-group clearfix col-xs-12">
                    <label for="username">Kies een gebruikersnaam</label>
                    <input type="text" class="form-control col-lg-6" id="username" name="username"
                           aria-describedby="usernameHelp">
                </div>


                <div class="form-group clearfix col-xs-12">
                    <label for="username">E-mail adres</label>
                    <input type="text" class="form-control col-lg-6" id="username" name="email"
                           aria-describedby="usernameHelp">
                </div>

                <div class="form-group clearfix col-xs-12">
                    <div class="selectdiv">
                        <label for="campus">Aan welke campus studeert u?</label>

                        <select class="select col-xs-12" id="campus" name="campus">
                            @foreach($campuses as $campus)
                                <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group clearfix col-xs-12">

                    <div class="selectdiv">
                        <label for="fos">Welke studierichting volgt u?</label>
                        <select class="select col-xs-12" id="fos" name="fos">
                            @foreach($foses as $fos)
                                <option value="{{ $fos->id }}">{{ $fos->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


                <div class="form-group clearfix col-xs-12">
                    <label class="form-check-label">
                        <input type="checkbox" name="tnc" class="form-check-input">
                        Ik aanvaard de algemene voorwaarden.
                    </label>

                </div>



                    <button type="submit" class="action-button register">Registreren</button>


            </form>
        </div>

    </div>

    @include('partials.footer')
@endsection
