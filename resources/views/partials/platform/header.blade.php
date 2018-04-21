<header id="platform-header" class="clearfix">
    <div class="container">
        <div class="row">

            <div class="logo col-lg-2 col-sm-2 col-xs-4" style="z-index: 999">
                <a href="{{ route('sharing-index') }}"><img class="logo" src="{{ URL::asset('img/logo/favicon_white.png') }}"></a>
            </div>

            <div class="dropdown col-lg-10 col-sm-10 col-xs-12 clearfix">
                <div class="account">
                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="account-img round-img" data-toggle="dropdown">
                    <div class="account_username" data-toggle="dropdown"><h6>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h6></div>
                    <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6"
                             class="account_dropdown_btn">
                            <path d="M4.5 5.5a.5.5 0 0 1-.35-.14L0 1.4.7.5l3.8 3.62L8.3.5l.7.9-4.15 3.96a.5.5 0 0 1-.35.14z"></path>
                        </svg>
                    </div>
                    <ul id="account-dropdown" class="dropdown-menu col-xs-12" aria-labelledby="dropdownMenu1" style="z-index: 999999">
                        <li>
                            <a href="{{ route('profile-index') }}"><i class="fa fa-dashboard"></i> Mijn profiel </a>
                        </li>

                        <li>
                            <a href="{{ route('profile-downloads') }}"><i class="fa fa-download"></i> Mijn downloads </a>
                        </li>

                        <li>
                            <a href="{{ route('profile-uploads') }}"><i class="fa fa-upload"></i> Mijn uploads </a>
                        </li>

                        <li>
                            <a href="{{ route('profile-ratings') }}"><i class="fa fa-star"></i> Mijn beoordelingen </a>
                        </li>

                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Uitloggen </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>