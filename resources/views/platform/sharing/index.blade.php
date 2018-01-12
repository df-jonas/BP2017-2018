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

            <article class="item">
                <header>Filteren</header>
            </article>


        </div>


        <div class="content">
            <div class="files">
                @foreach($files as $file)
                    <article class="file clearfix">
                        <header><i class="fa fa-file"></i>{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}</header>
                        <div class="padding">
                        <!--
                        <div class="left">
                                <img src="{{asset('img/logo/favicon.png')}}">
                            </div>
                           -->
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
    </div>



    @include('partials.footer')
@endsection
