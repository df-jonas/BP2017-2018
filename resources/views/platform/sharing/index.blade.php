@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')


    <div class="container">
        <div class="row">
            <div class="left sidebar col-lg-2">
                <article class="sidebar_item">
                    <header>Zoeken</header>
                </article>

                <article class="sidebar_item">
                    <header>Mijn bestanden</header>
                    <ul class="sidebar_favorites">
                        <li class="clearfix">
                            <div class="left col-xs-3">
                                <img src="img/logo/favicon.png">
                            </div>
                            <div class="right col-xs-9">
                                <h4>Titel</h4>
                                <p>Reacties:</p>
                            </div>

                        </li>

                        <li class="clearfix">
                            <div class="left col-xs-3">
                                <img src="img/logo/favicon.png">
                            </div>
                            <div class="right col-xs-9">
                                <h4>Titel</h4>
                                <p>Reacties:</p>
                            </div>

                        </li>
                        <li class="clearfix">
                            <div class="left col-xs-3">
                                <img src="img/logo/favicon.png">
                            </div>
                            <div class="right col-xs-9">
                                <h4>Titel</h4>
                                <p>Reacties:</p>
                            </div>

                        </li>
                        <li class="clearfix">
                            <div class="left col-xs-3">
                                <img src="img/logo/favicon.png">
                            </div>
                            <div class="right col-xs-9">
                                <h4>Titel</h4>
                                <p>Reacties:</p>
                            </div>

                        </li>

                        <li class="clearfix">
                            <div class="left col-xs-3">
                                <img src="img/logo/favicon.png">
                            </div>
                            <div class="right col-xs-9">
                                <h4>Titel</h4>
                                <p>Reacties:</p>
                            </div>

                        </li>


                    </ul>
                </article>


                <article class="sidebar_item">
                    <header>Filteren</header>
                </article>

            </div>


            <div class="right content col-lg-9 col-lg-push-1">
                <div class="content_files">
                

                    <article>
                        <header>Mijn bestanden</header>
                        <div class="row">
                            <div class="left col-xs-1">

                            </div>

                            <div class="right col-xs-11">
                                <h3>Titel</h3>
                                <p>dddd</p>
                            </div>

                        </div>
                    </article>

                </div>
            </div>

        </div>
    </div>

    
</div>

    @include('partials.platform.footer')
@endsection
