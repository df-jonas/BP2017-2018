<header id="page_header">
    <div class="row">

        <!-- logo -->
        <div class="col-lg-6 col-md-2 col-sm-2 col-xs-12">
            <a href="{{ route('website-index') }}"><img class="logo" src="img/logo/favicon.png"></a>
        </div>

        <!-- menu -->
        <div class="col-lg-6 col-md-10 col-sm-10 col-xs-12">
            <ul class="links">
                <a href="{{ route('website-index') }}">
                    <li>Home</li>
                </a>
                <a href="{{ route('website-about') }}">
                    <li>Over UniHelp</li>
                </a>
                <a href="{{ route('website-how') }}">
                    <li>Hoe werkt het?</li>
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

    <!-- responsive menu buttons -->
    <div>
        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>
    </div>


</header>