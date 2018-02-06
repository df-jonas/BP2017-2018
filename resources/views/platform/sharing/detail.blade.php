@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')



    <div class="container table">
        <div class="sidebar">
            <!--<article class="item clearfix">
                <header>Zoeken</header>
                <div class="inner-addon left-addon">
                    <i class="glyphicon glyphicon-search"></i>
                    <input type="text" class="form-control" placeholder="zoekterm"/>
                </div>
            </article>-->

            <article class="item">
                <header>Mijn downloads</header>
                <ul class="highlight">
                <!--<li class="clearfix">
                        <div class="left col-xs-3 clearfix">
                            <img src="{{asset('img/logo/favicon.png')}}">
                        </div>
                        <div class="right col-xs-9">
                            <h4>Project</h4>
                            <p>Downloads:</p>
                        </div>
                    </li>-->
                </ul>
            </article>
        </div>

        <div class="content">
            <div class="files">
                <article class="file detail clearfix">
                    <header>{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}<a
                                href="https://static-unihelp.eu/{{$file->public_id}}"><i class="fa fa-download"></i></a>
                    </header>
                    <div class="padding">
                        <div class="left">
                            <div class="table">
                                <div style="display: table-cell; width: 32px"><img
                                            src="{{ URL::asset('img/avatars/empty.png') }}" class="account_img"></div>
                                <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                    <h6 style="margin: 0">{{ $file->user->name }}</h6>
                                    <h6 style="margin: 5px 0">{{ $file->created_at }}</h6>
                                </div>
                            </div>
                        </div>

                        <div class="right">
                            <div class="rating">
                                <input hidden type="hidden" id="csrftoken" value="{{csrf_token()}}">
                                <input min="1" max="5" type="number" name="stars" id="rev_stars" class="rating"
                                       data-active-icon="fa fa-star checked"
                                       data-inactive-icon="fa fa-star"
                                       data-max="5" data-min="1" data-empty-value="5" data-inline value="3"/>
                            </div>
                        </div>

                        <div class="notes">
                            <h4>{{ $file->doctype->name }}</h4>
                            <p>{{ $file->filedescription }}</p>
                        </div>

                        <div class="details clearfix">
                            <div class="detail">
                                <h4>Type document</h4>
                                <i class="glyphicon glyphicon-search"><span>{{ $file->doctype->name }}</span></i>
                            </div>
                            <div class="detail">
                                <h4>Richting</h4>
                                <i class="glyphicon glyphicon-search"><span>{{ $file->field->name }}</span></i>
                            </div>
                            <div class="detail">
                                <h4>Studiejaar</h4>
                                <i class="glyphicon glyphicon-search"><span>{{ $file->degree->name }}</span></i>
                            </div>
                            <div class="detail">
                                <h4>Vak</h4>
                                <i class="glyphicon glyphicon-search"><span>{{ $file->course->name }}</span></i>
                            </div>
                            <div class="detail">
                                <h4>Uploaddatum</h4>
                                <i class="glyphicon glyphicon-search"><span>{{ $file->created_at }}</span></i>
                            </div>
                        </div>

                        <a class="download col-lg-2" href="https://static-unihelp.eu/{{$file->public_id}}">Download</a>

                    </div>
                </article>
            </div>
        </div>
    </div>

    @include('partials.footer')

@endsection

@section("scripts")
    <script src="{{ asset("js/bootstrap-rating-input.min.js") }}"></script>
    <script src="{{ asset("js/sharing-detail.js") }}"></script>
@endsection