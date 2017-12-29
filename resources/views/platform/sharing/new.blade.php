@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')



    <div class="container table">
        <div class="sidebar">


            <article class="item">
                <header>Groepen</header>
                <ul class="highlight">

                    <li class="clearfix">
                        <div class="left col-xs-3 clearfix">
                            <img src="{{asset('img/logo/favicon.png')}}">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Project</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>

                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="{{asset('img/logo/favicon.png')}}">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>
                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="{{asset('img/logo/favicon.png')}}">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>
                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="{{asset('img/logo/favicon.png')}}">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>

                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="{{asset('img/logo/favicon.png')}}">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>


                </ul>
            </article>


            <article class="item">
                <header>Bestand toevoegen</header>
                <ul class="highlight">

                    <li class="clearfix">
                        Nieuw bestand kiezen

                    </li>

                    <li class="clearfix">
                        Nieuw bestand kiezen
                    </li>


                </ul>
            </article>


        </div>


        <div class="content">
            <div class="files">


                <article class="file new clearfix">
                    <header>Bestand uploaden</header>

                    <div class="padding">
                        <h4>Titel</h4>
                        <input type="text" class="col-xs-12">
                        <h4>Korte omschrijving</h4>
                        <input type="text" class="col-xs-12">
                        <h4>Inhoud</h4>

                        <textarea></textarea>


                        <button type="submit" class="download col-lg-2">Opslaan</button>
                    </div>

                </article>

            </div>
        </div>

    </div>
    </div>


    @include('partials.footer')

@endsection