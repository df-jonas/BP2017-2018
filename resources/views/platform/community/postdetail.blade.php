@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">

            <div class="sidebar">


                <article class="item">
                    <header>Mijn posts</header>
                    <ul class="highlight">


                    </ul>
                </article>

                <article class="item">
                    <header>Statistieken</header>
                    <ul class="highlight">


                    </ul>
                </article>
            </div>

            <div class="content">
                <div id="groupcontainer" class="groups">

                    <div class="group-detail clearfix">
                        <header>Studentenraad > klachten<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="table">
                                            <div style="display: table-cell; width: 32px"><img
                                                        src="{{ URL::asset('img/avatars/1518557547_bday.jpg') }}"
                                                        class="account_img"></div>
                                            <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                                <h6 style="margin: 0">Arno Stalpaert</h6>
                                                <h6 style="margin: 5px 0">Donderdag om 14:43</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="actions col-lg-6 col-lg-push-6" style="text-align: center">
                                            <div class="col-lg-4" style="border: 1px solid darkgray"><i
                                                        class="fa fa-thumbs-up"></i> Upvote
                                            </div>
                                            <div class="col-lg-4" style="border: 1px solid darkgray"><i
                                                        class="fa fa-thumbs-down"></i> Downvote
                                            </div>
                                            <div class="col-lg-4" style="border: 1px solid darkgray"><i
                                                        class="fa fa-bookmark"></i> Volgen
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <h3>Teveel springuren</h3>
                                <p>
                                    Een broodrooster is een huishoudelijk apparaat waarmee brood kan worden geroosterd.
                                    Een geroosterde snee brood noemt men ook wel toast. Een snee brood werd traditioneel
                                    geroosterd aan een lange vork of in een klem van metaaldraad boven open vuur. In
                                    1893 werd het elektrisch broodrooster uitgevonden door de Schot Alan MacMasters.[1]
                                    Albert Marsh ontwikkelde in 1905 de nichrome verwarmingsdraden bestaande uit een
                                    nikkel-chroomlegering die nog steeds in broodroosters worden toegepast.
                                </p>

                                <p>
                                    Het bekende ‘pop-up’ broodrooster, die automatisch de broodjes uit de rooster gooit,
                                    werd in 1919 door Charles Strite gepatenteerd. Er zijn ook broodroosters waarmee
                                    tosti’s gemaakt kunnen worden. Deze hebben daarvoor een uitneembare houder, waar de
                                    tosti in geplaatst wordt.
                                    Sindsdien zijn er nog veel verbeteringen en aanpassingen aan het broodrooster
                                    gedaan.
                                </p>

                                <div class="info" style="margin-top: 5%">
                                    <ul>
                                        <li>Reacties: 44</li>
                                        <li>Upvotes: 44</li>
                                        <li>Downvotes: 44</li>
                                    </ul>
                                </div>

                                <hr>

                                <div class="row flex">
                                    <div class="col-lg-1">

                                    </div>

                                    <div class="col-lg-10">
                                        <p>Reactie toevoegen</p>


                                    </div>

                                    <div class="col-lg-1">
                                        <i class="fa fa-reply"></i>


                                    </div>
                                </div>

                            </div>

                        </article>


                    </div>


                    <div class="group-detail clearfix">


                        <article class="group">
                            <div class="padding">
                                <h3>Reacties</h3>
                            </div>

                        </article>


                    </div>

                </div>


            </div>

        </div>
    </div>


    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
