@extends('layouts.platform')
@section('pagetitle', 'Mijn beoordelingen')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <section class="container">
        <div id="filter-results" class="item filecontainer files">
            <header><a class="header-title"><i class="fa fa-star"></i> Mijn beoordelingen</a></header>
            <div class="padding">
                <ul class="all-ratings">
                    <li>
                        <a href="#" class="rating-title">
                            <strong>Bestand titel</strong>
                        </a>
                        <a class="rating-read"
                           href="#">Beheren</a>
                        <h4 class="rating-stars"><span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"> <span class="fa fa-star-half checked"></span></span>
                        </h4>
                    </li>
                    <li>
                        <a href="#" class="rating-title">
                            <strong>Bestand titel</strong>
                        </a>
                        <a class="rating-read"
                           href="#">Beheren</a>
                        <h4 class="rating-stars"><span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"> <span class="fa fa-star-half checked"></span></span>
                        </h4>
                    </li>
                    <li>
                        <a href="#" class="rating-title">
                            <strong>Bestand titel</strong>
                        </a>
                        <a class="rating-read"
                           href="#">Beheren</a>
                        <h4 class="rating-stars"><span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"> <span class="fa fa-star-half checked"></span></span>
                        </h4>
                    </li>
                    <li>
                        <a href="#" class="rating-title">
                            <strong>Bestand titel</strong>
                        </a>
                        <a class="rating-read"
                           href="#">Beheren</a>
                        <h4 class="rating-stars"><span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"> <span class="fa fa-star-half checked"></span></span>
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
