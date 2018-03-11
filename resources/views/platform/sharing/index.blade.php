@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <div class="sidebar">
                <!-- Upload button -->
                <article class="item button">
                    <a href="{{route('sharing-new')}}">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Bestand toevoegen
                        </button>
                    </a>


                </article>
                <!-- end Upload button -->

                <!-- Search form -->
                <article class="item search">
                    <header>Zoeken</header>
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-search"></i>
                        <input type="text" id="search" name="search" class="form-control filterlistener"
                               placeholder="zoekterm"/>
                    </div>
                </article>
                <!-- Search form -->

                <!-- filter menu -->
                <article class="item filter">
                    <header>Bestanden filteren</header>
                    <div class="padding">
                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Kies opleiding</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>
                                    @foreach($foses as $fos)
                                        <option value="{{ $fos->id }}">{{ $fos->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="course">Kies vak</label>
                                <select id="course" name="course" class="select col-xs-12 filterlistener">
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
                                    <input type="checkbox" name="pubyear[]" value="{{ $pubyear->id }}"
                                           class="filterlistener" checked>
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>

                        <!-- todo: bestands types ophalen (samenvatting; notities) -->
                        <label>Type bestand</label>
                        <br>
                        <div class="form-group clearfix">

                            <label class="checkbox-container col-xs-12">Type 1
                                <input type="checkbox" name="pubyear[]" value="type 1"
                                       class="filterlistener" checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox-container col-xs-12">Type 2
                                <input type="checkbox" name="pubyear[]" value="type 1"
                                       class="filterlistener" checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox-container col-xs-12">Type 3
                                <input type="checkbox" name="pubyear[]" value="type 1"
                                       class="filterlistener" checked>
                                <span class="checkmark"></span>
                            </label>

                        </div>

                        <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </article>
                <!-- filter menu -->

                <!-- user uploaded items -->
                <article class="item user-owned">
                    <header>Mijn uploads</header>


                    <div class="padding">

                        @foreach($userfiles as $file)
                            @php
                                $rating = $file->averageRating()
                            @endphp


                            <div class="row flex">
                                <div class="icon col-md-2 col-xs-12">
                                    <img src="{{asset('img/icons/001-file.png')}} "
                                         style="width: 36px; height: 36px">
                                </div>


                                <div class="col-md-8 col-xs-12">
                                    <h5 class="title"><a href="{{ $file->detailUrl() }}"> {{$file->title}}</a></h5>
                                    <div class="rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if($i <= $rating)
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star"></span>
                                            @endif
                                        @endfor
                                    </div>

                                </div>

                                <div class="col-md-2 col-xs-12">
                                    <i class="fa fa-pencil brown"></i>


                                </div>

                            </div>
                        @endforeach
                    </div>

                </article>
            <!-- user items -->
            </div>
            <div class="content">
                <div id="filecontainer" class="files">
                    @foreach($files as $file)
                        @php
                            $rating = $file->averageRating()
                        @endphp
                    <!--
                        <article class="file item clearfix">
                            <header>{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}<a
                                        href="{{ $file->downloadUrl() }}"><i class="fa fa-download"></i></a>
                            </header>
                            <div class="padding">

                                <div class="row flex">
                                    <div class="icon col-md-1 col-xs-12">
                                        <img src="{{asset('img/icons/001-file.png')}} "
                                             style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-md-5 col-xs-12">
                                        <h3><a href="{{ $file->detailUrl() }}"> {{$file->title}}</a></h3>
                                        <p>door {{$file->user->first_name}} {{$file->user->last_name}}</p>
                                    </div>
                                    <div class="col-md-6 col-xs-12" style="text-align: right">
                                        <div class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if($i <= $rating)
                                                    <span class="fa fa-star checked"></span>
                                                @else
                                                    <span class="fa fa-star"></span>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
-->


                        <article class="file item">
                            <a href="{{ $file->detailUrl() }}">
                            <header>
                               {{$file->course->name}}<i class="fa fa-download"></i>
                            </header>
                            </a>
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                        <img src="{{asset('img/icons/001-file.png')}} "
                                             style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4 class="title"><a href="{{ $file->detailUrl() }}"> {{$file->title}}</a></h4>
                                        <div class="row icons">
                                            <!--
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                            -->
                                            <div class="col-xs-12">
                                                door {{$file->user->first_name}} {{$file->user->last_name}}
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-xs-12" style="text-align: right">

                                        <div class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if($i <= $rating)
                                                    <span class="fa fa-star checked"></span>
                                                @else
                                                    <span class="fa fa-star"></span>
                                                @endif
                                            @endfor
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </article>

                        @endforeach
                </div>
            </div>

        </div>
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection