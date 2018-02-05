@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container table">
        <div class="sidebar">

            <article class="item clearfix">
                <header>Nieuw bestand</header>
                <div>
                    <a href="{{ route("sharing-new") }}">Nieuw bestand toevoegen.</a>
                </div>
            </article>

            <article class="item clearfix">
                <header>Zoeken</header>
                <div class="inner-addon left-addon">
                    <i class="glyphicon glyphicon-search"></i>
                    <input type="text" class="form-control" placeholder="zoekterm"/>
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
                            <label for="doctype">Kies vak</label>
                            <select id="doctype" name="documenttype" class="select col-xs-12 filterlistener">
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
                                <input type="checkbox" value="{{ $pubyear->id }}" class="filterlistener" checked>
                                <span class="checkmark"></span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </article>

            <article class="item">
                <header>Mijn uploads</header>
                <ul class="highlight">

                    @foreach($userfiles as $userfile)
                        <li class="clearfix">
                        <!--<div class="left col-xs-3 clearfix">
                            <img src="{{asset('img/logo/favicon.png')}}">
                        </div>-->
                            <div class="col-xs-12">
                                <h4>{{$userfile->title}}</h4>
                                <p>Downloads: 0</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </article>
        </div>

        <div class="content">
            <div class="files">
                @foreach($files as $file)
                    <article class="file clearfix">
                        <header>{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}<a
                                    href="https://static-unihelp.eu/{{$file->public_id}}"><i class="fa fa-download"></i></a>
                        </header>
                        <div class="padding">
                            <div class="right">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <h3>{{$file->title}}</h3>
                                <p>door {{$file->user->name}}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
