<footer class="row">
    <section class="top padding clearfix">
        <div class="container">
            <div class="module no-padding clearfix col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <h4>Navigatie</h4>
                <ul>
                    <li><a href="{{ route('website-index') }}">Home</a></li>
                    <li><a href="{{ route('website-about') }}">Over UniHelp</a></li>
                    <li><a href="{{ route('website-how') }}">Hoe het werkt</a></li>
                </ul>
            </div>
            <!--
            <div class="module clearfix col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <h4>Bedrijven</h4>
                <ul>
                    <li><a href="#">Word lid</a></li>
                    <li><a href="#">Boek een demonstratie</a></li>
                </ul>
            </div>
            -->
            <div class="module clearfix col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <h4>Account</h4>
                <ul>
                    <li><a href="{{ route('login') }}">Inloggen</a></li>
                    <li><a href="{{ route('register') }}">Registreren</a></li>
                    <li><a href="#">Wachtwoord vergeten</a></li>
                </ul>
            </div>
            <div class="module  clearfix col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <h4>Sociaal</h4>
                <ul>
                    <li><a href="https://www.facebook.com/unihelp.be/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/UniHelp_BE" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://blog.unihelp.be/" target="_blank"><i class="fa fa-globe"></i> Blog</a></li>
                </ul>
            </div>
            <div class="module clearfix col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <h4>Wettelijk</h4>
                <ul>
                    <li><a href="{{ route('website-terms') }}">Algemene voorwaarden</a></li>
                    <li><a href="{{ route('website-cookies') }}">Cookie policy</a></li>
                    <li><a href="{{ route('website-privacy') }}">Privacy policy</a></li>
                </ul>
            </div>
            <div class="module  clearfix col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <h4>Help &amp; support</h4>
                <ul>
                    <li>
                        <a href="{{route('website-contact')}}">Contacteer ons</a>
                    </li>
                    <li>
                        <a href="{{route('website-faq')}}">Veelgestelde vragen</a>
                    </li>
                    <li>
                        <a href="{{route('website-demo')}}">Boek een demo</a>
                    </li>
                </ul>
            </div>
            <div class="module  clearfix col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <h4>Updates</h4>
                <ul>
                    <li>
                        <a href="">Changelog</a>
                    </li>
                    <li>
                        <a href="">Geplande updates</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="bottom no-padding clearfix">
        <div class="container">
            <div class="col-xs-12 no-padding-left">
                <a href=""><h6>Copyright &copy; 2018 UniHelp. Alle rechten voorbehouden - <a href="{{route('website-sitemap')}}">Sitemap</a> </h6>
                </a>
            </div>
        </div>
    </section>
</footer>