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
                    <input type="text" class="form-control" placeholder="Username"/>
                </div>
            </article>


            <article class="item">
                <header>Mijn bestanden</header>
                <ul class="highlight">

                    <li class="clearfix">
                        <div class="left col-xs-3 clearfix">
                            <img src="img/logo/favicon.png">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Project</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>

                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="img/logo/favicon.png">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>
                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="img/logo/favicon.png">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>
                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="img/logo/favicon.png">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>

                    <li class="clearfix">
                        <div class="left col-xs-3">
                            <img src="img/logo/favicon.png">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Titel</h4>
                            <p>Downloads:</p>
                        </div>

                    </li>


                </ul>
            </article>


            <article class="item">
                <header>Filteren</header>
            </article>


            <article class="item">
                <header>Statistieken</header>
            </article>

        </div>


        <div class="content">
            <div class="files">


                <article class="file clearfix">
                    <header><i class="fa fa-file"></i>Multec > 1ba > Project Management</header>
                    <div class="left">
                        <img src="img/logo/favicon.png">
                    </div>

                    <div class="right">

                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h3>Project Management hoorcollege 1</h3>
                        <p>Erasmushogeschool - Multec</p>
                        <p>door Arno Salpaert</p>


                    </div>

                </article>


                <article class="file clearfix">
                    <header><i class="fa fa-file"></i>Multec > 1ba > Project Management</header>
                    <div class="left">
                        <img src="img/logo/favicon.png">
                    </div>

                    <div class="right">

                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h3>Project Management hoorcollege 1</h3>
                        <p>Erasmushogeschool - Multec</p>
                        <p>door Arno Salpaert</p>


                    </div>

                </article>


                <article class="file clearfix">
                    <header><i class="fa fa-file"></i>Multec > 1ba > Project Management</header>
                    <div class="left">
                        <img src="img/logo/favicon.png">
                    </div>

                    <div class="right">

                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h3>Project Management hoorcollege 1</h3>
                        <p>Erasmushogeschool - Multec</p>
                        <p>door Arno Salpaert</p>


                    </div>

                </article>

            </div>
        </div>

    </div>
    </div>



    @include('partials.platform.footer')
@endsection
