@extends('layouts.website')

@section('content')
    @include('partials.website.header')
    <div id="login_page" class="col-xs-12">
        <div class="login_box col-lg-4 col-lg-push-4 col-xs-12">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Registreren</h1>

                    <form action="{{ route('sharing-index') }}">

                        <div class="form-group col-lg-6" style="padding-left: 0;">
                            <label for="exampleInputEmail1">Voornaam</label>
                            <input type="email" class="form-control col-lg-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Arno" disabled>
                        </div>


                        <div class="form-group col-lg-6" style="padding-right: 0;">
                            <label for="exampleInputEmail1">Achternaam</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stalpaert" disabled>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="arno.stalpaert@student.ehb.be" disabled>
                            <small id="emailHelp" class="form-text text-muted">Dit is uw Canvas e-mailadres.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Gebruikersnaam</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Gebruikersnaam">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
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


    @include('partials.website.footer')
@endsection
