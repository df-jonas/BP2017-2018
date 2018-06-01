@extends('layouts.platform')
@section('pagetitle', 'Sharing')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')

<section class="container">
    <!-- begin table -->
    <section class="table">
        <!-- begin sidebar -->
        <aside class="sidebar">
            <!-- Upload button -->
            <section class="item button">
                <a href="{{route('sharing-new')}}">
                    <button>Bestand toevoegen</button>
                </a>
            </section>
            <!-- end Upload button -->

            <!-- Search form -->
            <section class="item search">
                <!-- TODO Arno geen link? -->
                <header><a class="header-title"><i class="fa fa-search"></i> Zoeken</a></header>

                <div class="inner-addon left-addon">
                    <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm" tabindex="1"/>
                </div>
            </section>
            <!-- Search form -->

            <!-- filter menu -->
            <section class="item filter">
                <!-- TODO Arno geen link? -->
                <header><a class="header-title"><i class="fa fa-filter"></i> Bestanden filteren</a></header>
                <section class="padding">
                    <div class="form-group col-xs-12 no-padding clearfix">
                        <div class="selectdiv">
                            <label for="fos">Kies opleiding</label>
                            <select id="fos" name="fos" class="select col-xs-12 filterlistener" tabindex="2">
                                <option value="-1" selected>Geen selectie</option>
                                @foreach($foses as $fos)
                                    <option value="{{ $fos->id }}">{{ $fos->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xs-12 no-padding clearfix">
                        <div class="selectdiv">
                            <label for="course">Kies vak</label>
                            <select id="course" name="course" class="select col-xs-12 filterlistener" tabindex="3">
                                <option value="-1" selected>Geen selectie</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <label>Geschreven in</label>
                    <br>
                    <div class="form-group clearfix">
                        @foreach($pubyears as $pubyear)
                            <label class="checkbox-container col-xs-12">{{ $pubyear->name }}
                                <input type="checkbox" name="pubyear[]" value="{{ $pubyear->id }}" class="filterlistener" tabindex="4" checked>
                                <span class="checkmark"></span>
                            </label>
                        @endforeach
                    </div>
                    <!-- TODO [JONAS] Getting file types asynchronous -->
                    <label>Type bestand</label>
                    <br>
                    <div class="form-group clearfix">
                        @foreach($types as $type)
                            <label class="checkbox-container col-xs-12">{{ $type->name }}
                                <input type="checkbox" name="type[]" value="{{ $type->id }}" class="filterlistener" checked>
                                <span class="checkmark"></span>
                            </label>
                        @endforeach
                    </div>
                    <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                </section>
            </section>
            <!-- filter menu -->

            <!-- User items -->
            <section class="item user-owned">
                <header><a class="header-title"><i class="fa fa-upload"></i> Mijn uploads</a></header>
                <div class="padding">
                    @foreach($userfiles as $file)
                        @php
                            $rating = $file->averageRating()
                        @endphp
                        <div class="row flex">
                            <div class="icon col-lg-2 col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . $file->user->image )}}"
                                     class="account-img round-img">
                            </div>
                            <div class="col-lg-8 col-md-8 col-xs-8">
                                <h2 class="item-title col-xs-12 no-padding"><a href="{{ $file->detailUrl() }}"> {{ str_limit($file->title, 15) }}</a></h2>
                                <div class="rating col-xs-12 no-padding">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if($i <= $rating)
                                            <span class="fa fa-star checked"></span>
                                        @else
                                            <span class="fa fa-star"></span>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- end User items -->
        </aside>
        <!-- end sidebar -->
        <!-- begin content -->
        <section class="content sharing overview">
            <section id="filter-results" class="filecontainer files">
                <span id="filter-details" class="item padding col-xs-12">Er werden {{ $files->count() }} resultaten gevonden.</span><br><br>
                <!-- TODO Jonas: kan je deze berekening in controller doen? -->
                @foreach($files as $file)
                    @php
                        $rating = $file->averageRating()
                    @endphp
                    <article class="file item clearfix">
                        <a href="{{ $file->detailUrl() }}" class="header-title">
                            <header>
                                {{$file->course->name}}<i class="fa fa-download"></i>
                            </header>
                        </a>
                        <div class="padding">
                            <div class="row flex">
                                <section class="col-lg-1 col-md-2 col-sm-2 col-xs-2">
                                    <img src="{{asset('img/icons/001-file.png')}}" class="account-img">
                                </section>
                                <section class="col-lg-5 col-md-6 col-sm-6 col-xs-10">
                                    <h2 class="item-title no-margin"><a href="{{ $file->detailUrl() }}"> {{ $file->title }}</a></h2>
                                    <h3 class="item-campus">Erasmushogeschool Brussel</h3>
                                </section>
                                <section class="col-lg-6 col-lg-push-0 col-md-4 col-sm-4 col-sm-push-0 col-xs-8 col-xs-push-2">
                                    <div class="rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if($i <= $rating)
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </div>
                                </section>
                            </div>
                        </div>
                    </article>
                @endforeach
                {{ $files->links() }}
            </section>
        </section>
        <!-- end content -->
    </section>
    <!-- end table -->
</section>

<!-- footer -->
@include('partials.footer')
<!-- end footer -->
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection