@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')



    <div class="container table">
        <div class="sidebar">

            <article class="item clearfix">
                <header>Zoeken</header>
                <div class="inner-addon left-addon">
                    <i class="glyphicon glyphicon-search"></i>
                    <input type="text" class="form-control" placeholder="zoekterm"/>
                </div>
            </article>


            <article class="item">
                <header>Mijn downloads</header>
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




        </div>


        <div class="content">
            <div class="files">


                <article class="file detail clearfix">
                    <header>Project Management > Hoorcollege 1</header>

                    <div class="padding">

                        <div class="left">

                            <div class="table">
                                <div style="display: table-cell; width: 32px"><img
                                            src="{{ URL::asset('img/team/arno.png') }}" class="account_img"></div>
                                <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                    <h6 style="margin: 0">Arno Stalpaert</h6>
                                    <h6 style="margin: 5px 0">Donderdag om 14:43</h6>
                                </div>
                            </div>


                        </div>

                        <div class="right">
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>

                        </div>
                        <div class="notes">
                            <h4>Notities</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.
                                Vestibulum
                                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                amet quam
                                egestas
                                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>


                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.
                                Vestibulum
                                tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                                amet quam
                                egestas
                                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>

                        <div class="details clearfix">

                            <div class="detail">
                                <h4>Type document</h4>
                                <i class="glyphicon glyphicon-search"><span>Lalaa</span></i>
                            </div>



                            <div class="detail">
                                <h4>Studierichting</h4>
                                <i class="glyphicon glyphicon-search"><span>Lalaa</span></i>
                            </div>



                            <div class="detail">
                                <h4>Studiejaar</h4>
                                <i class="glyphicon glyphicon-search"><span>Lalaa</span></i>
                            </div>


                            <div class="detail">
                                <h4>Datum bestand</h4>
                                <i class="glyphicon glyphicon-search"><span>Lalaa</span></i>
                            </div>


                            <div class="detail">
                                <h4>Aantal pagina's</h4>
                                <i class="glyphicon glyphicon-search"><span>Lalaa</span></i>
                            </div>

                        </div>


                        <button type="submit" class="download col-lg-2">Download</button>


                    </div>
                </article>


            </div>
        </div>

    </div>
    </div>


    @include('partials.footer')

@endsection