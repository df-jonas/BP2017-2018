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


              <article class="item" >
                            <header>Filteren</header>
                            <div class="padding">
                            <form>

                                <div class="form-group clearfix">
                                    <div class="selectdiv">
                                        <label for="doctype">Kies opleiding</label>
                                        <select id="doctype" name="documenttype" class="select col-xs-12">
                                                <option value="multec">Multec</option>
                                                <option value="test">test</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="selectdiv">
                                        <label for="doctype">Kies vak</label>
                                        <select id="doctype" name="documenttype" class="select col-xs-12">
                                            <option value="">Project Management</option>
                                            <option value="">test</option>
                                        </select>
                                    </div>
                                </div>



                                <label>Geschreven in</label>
                                <br>

                                <div class="form-group clearfix">
                                    <label class="checkbox-container">2017-2018
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkbox-container">2016 - 2017
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="checkbox-container">2015 - 2016
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>


                            </form>
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
