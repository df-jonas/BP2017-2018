<header id="platform_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-xs-3" style="padding:0">
                <a href="{{ route('website-index') }}"><img class="logo"
                                                            src="{{ URL::asset('img/logo/favicon_white.png') }}"></a>
            </div>

            <div class="account">

                <img src="{{ URL::asset('img/avatars/empty.png') }}" class="account_img">
                <div class="account_username">{{Auth::user()->name}}</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6"
                     class="account_dropdown_btn">
                    <path d="M4.5 5.5a.5.5 0 0 1-.35-.14L0 1.4.7.5l3.8 3.62L8.3.5l.7.9-4.15 3.96a.5.5 0 0 1-.35.14z"></path>
                </svg>


                <div class="dropdown-content col-xs-12" style="padding: 0;">
                    <ul>
                        <li><a href="#">Instellingen</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="{{route('logout')}}">Uitloggen</a></li>
                    </ul>

                </div>

            </div>


        </div>
    </div>


</header>