<header id="page-header" class="large">
    <div class="row">
        <div class="container">
            <div class="col-xs-12 no-padding">
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-2" style="z-index: 999">
                    <a href="{{ route('website-index') }}"><img class="logo" src="img/logo/favicon.png"></a>
                </div>
                <ul id="menu" class="links col-lg-8 col-sm-10 col-xs-12">
                    <a href="{{ route('website-index') }}">
                        <li>Home</li>
                    </a>
                    <a href="{{ route('website-about') }}">
                        <li>Over</li>
                    </a>
                    <a href="{{ route('website-how') }}">
                        <li>Hoe het werkt</li>
                    </a>
                    @if (Auth::check())
                        <a href="{{ route('logout') }}">
                            <li>Uitloggen</li>
                        </a>
                        <a href="{{ route('login') }}">
                            <li class="register">Platform</li>
                        </a>
                    @else
                        <a href="{{ route('login') }}">
                            <li>Inloggen</li>
                        </a>
                        <a href="{{ route('register') }}">
                            <li class="register">Registreren</li>
                        </a>
                    @endif
                </ul>
            </div>
        </div>
    </div>

</header>

