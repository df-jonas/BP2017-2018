@extends('layouts.website')

@section('content')
    @include('partials.website.header')
    <div id="login_page" class="col-xs-12">
        <div class="login_box col-lg-4 col-lg-push-4 col-xs-12">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Registreren</h1>
                    <form action="{{ route('website-register') }}" method="post">
                        {{csrf_field()}}
                        <div class="form-group col-lg-12" style="padding-left: 0;">
                            <label for="name">Naam</label>
                            <input type="text" class="form-control col-lg-12" id="name" name="name"
                                   aria-describedby="nameHelp" value="{{$name}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   aria-describedby="emailHelp" value="{{$email}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="username">Gebruikersnaam</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   aria-describedby="usernameHelp"
                                   placeholder="Gebruikersnaam">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="tnc" class="form-check-input">
                                Ik aanvaard de algemene voorwaarden.
                            </label>
                        </div>
                        <button type="submit" class="action-button register">Registreren</button>
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
