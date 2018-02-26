@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')



    <div class="container">
        <div class="table">
        <div class="sidebar">
            <!--<article class="item clearfix">
                <header>Zoeken</header>
                <div class="inner-addon left-addon">
                    <i class="glyphicon glyphicon-search"></i>
                    <input type="text" class="form-control" placeholder="zoekterm"/>
                </div>
            </article>-->




            <article class="item uploads">
                <header>Mijn downloads</header>


                <div class="padding">

                    @foreach($userdownloads as $userdownload)



                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-12">
                                <img src="{{asset('img/icons/001-file.png')}} "
                                     style="width: 36px; height: 36px">
                            </div>


                            <div class="col-md-10 col-xs-12">
                                <h5><a href="{{ $userdownload->file->detailUrl() }}"> {{$userdownload->file->title}}</a></h5>

                                <small>Gedownload {{ $userdownload->humantimestamp() }}</small>
                            </div>



                        </div>
                    @endforeach
                </div>

            </article>


        </div>

        <div class="content">
            <div class="files">
                <article class="file detail clearfix">
                    <header>{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}<a
                                href="{{ $file->downloadUrl() }}"><i class="fa fa-download"></i></a>
                    </header>
                    <div class="padding">
                        <div class="left">
                            <div class="table">
                                <div style="display: table-cell; width: 32px">
                                    <img src="{{ asset('img/avatars/' . $file->user->image )}}" class="account_img">

                                </div>
                                <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                    <h6 style="margin: 0">{{ $file->user->name }}</h6>
                                    <h6 style="margin: 5px 0">{{ $file->humantimestamp() }}</h6>
                                </div>
                            </div>
                        </div>



                        <div class="right">
                            <div class="rating">
                                <input hidden type="hidden" id="csrftoken" value="{{csrf_token()}}">
                                <input type="hidden" id="fileid" hidden name="fileid" value="{{ $file->id }}">
                                <!--<label for="rev_stars">Uw rating:</label>-->
                                <input min="1" max="5" type="number" name="stars" id="rev_stars" class="rating"
                                       data-active-icon="fa fa-star checked"
                                       data-inactive-icon="fa fa-star"
                                       data-max="5" data-min="1" data-empty-value="5" data-inline
                                       value="
                                            @if ($userrating == null)
                                               0
                                            @else
                                       {{ $userrating->rating }}
                                       @endif
                                               "/>
                            </div>
                        </div>

                        <div class="notes">
                            <h3>{{ $file->title }}</h3>
                            <p>{{ $file->filedescription }}</p>
                        </div>

                        <div class="details clearfix">
                            <div class="row">
                            <div class="detail col-lg-3">
                                <h5>Type document</h5>
                                <i class="fa fa-file"><span>{{ $file->doctype->name }}</span></i>
                            </div>
                            <div class="detail col-lg-3 ">
                                <h5>Studierichting</h5>
                                <i class="fa fa-graduation-cap"><span>{{ $file->field->name }}</span></i>
                            </div>
                            <div class="detail col-lg-3">
                                <h5>Studiejaar</h5>
                                <i class="fa fa-archive"><span>{{ $file->degree->name }}</span></i>
                            </div>
                            <div class="detail col-lg-3">
                                <h5>Vak</h5>
                                <i class="fa fa-book"><span>{{ $file->course->name }}</span></i>
                            </div>
                            </div>

                        </div>

                        <a class="download col-lg-2" href="{{ $file->downloadUrl() }}">Download</a>
                    </div>
                </article>
            </div>
        </div>
        </div>
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/bootstrap-rating-input.min.js") }}"></script>
    <script src="{{ asset("js/sharing-detail.js") }}"></script>
@endsection