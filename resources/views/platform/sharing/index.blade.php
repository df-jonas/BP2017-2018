@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
            <div class="sidebar">

                <article class="item button clearfix">
                    <a href="{{ route("sharing-new") }}">
                        <button>
                            Nieuw bestand toevoegen
                        </button>
                    </a>

                </article>

                <article class="item clearfix">
                    <header>Zoeken</header>
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-search"></i>
                        <input type="text" id="search" name="search" class="form-control filterlistener"
                               placeholder="zoekterm"/>
                    </div>
                </article>

                <article class="item">
                    <header>Filteren</header>
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
                        <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </article>

                <article class="item uploads">
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
                                    <h5><a href="{{ $file->detailUrl() }}"> {{$file->title}}</a></h5>
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
            </div>

            <div class="content">
                <div id="filecontainer" class="files">
                    @foreach($files as $file)
                        @php
                            $rating = $file->averageRating()
                        @endphp
                        <article class="file clearfix">
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
                                        <h6 class="brown">Erasmushogeschool - Multec</h6>
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