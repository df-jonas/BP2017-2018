@extends('layouts.platform')

@section('content')
@section('pagetitle', 'Sharing - ' . $file->title)
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        @include('partials.platform.go-back')
        <div class="table">
            <div class="sidebar">
                <!-- Upload button -->
                <article class="item button">
                    <a href="{{route('sharing-new')}}">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Nieuw bestand
                        </button>
                    </a>
                </article>
                <!-- end Upload button -->
                <!-- User items -->
                <article class="overview item user-owned">
                    <header><i class="fa fa-download"></i> Mijn downloads</header>
                    <div class="padding">
                        @foreach($userdownloads as $userdownload)
                            <div class="row flex">
                                <div class="icon col-lg-2 col-md-2 col-xs-2">
                                    <img src="{{ asset('img/avatars/' . $userdownload->user->image )}}" class="account-img round-img">
                                </div>
                                <div class="col-lg-10 col-md-8 col-xs-8">
                                    <h5 class="title col-xs-12 no-padding"><a href="{{ $userdownload->file->detailUrl() }}"> {{$userdownload->file->title}}</a></h5>
                                    <div class="rating col-xs-12 no-padding">
                                        <small>Gedownload {{ $userdownload->humantimestamp() }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </article>
                <!-- end User items -->
            </div>
            <div class="content">
                <div class="files">
                    <article class="file detail item clearfix">
                        <header>{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}<a
                                    href="{{ $file->downloadUrl() }}"><i class="fa fa-download"></i></a>
                        </header>
                        <div class="padding clearfix">
                            <div class="row flex">

                                <div class="info col-lg-10 col-md-9 col-sm-9 col-xs-12">
                                    <div class="table">
                                        <div style="display: table-cell; width: 32px"><img
                                                    src="{{ asset('img/avatars/' . $file->user->image) }}"
                                                    class="account-img round-img"></div>
                                        <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                            <h6 style="margin: 0">{{ $file->user->first_name }} {{ $file->user->last_name }}</h6>
                                            <h6 style="margin: 5px 0">{{ $file->humantimestamp() }}</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-3 col-sm-3 col-sm-push-0 col-xs-8 col-xs-push-1">
                                    <div class=" rating">
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
                            </div>


                            <div class="notes col-xs-12">
                                <h4>{{ $file->title }}</h4>
                                <p>{{ $file->filedescription }}</p>
                            </div>

                            <div class="details col-xs-12">
                                    <div class="detail col-sm-3 col-xs-12">
                                        <h6>Type document</h6>
                                        <i class="fa fa-file"><span>{{ $file->doctype->name }}</span></i>
                                    </div>
                                    <div class="detail col-sm-3 col-xs-12">
                                        <h6>Studierichting</h6>
                                        <i class="fa fa-graduation-cap"><span>{{ $file->field->name }}</span></i>
                                    </div>
                                    <div class="detail col-sm-3 col-xs-12">
                                        <h6>Studiejaar</h6>
                                        <i class="fa fa-archive"><span>{{ $file->degree->name }}</span></i>
                                    </div>
                                    <div class="detail col-sm-3 col-xs-12">
                                        <h6>Vak</h6>
                                        <i class="fa fa-book"><span>{{ $file->course->name }}</span></i>
                                    </div>
                            </div>

                            <div class="col-xs-12">
                                <a class="download-button col-lg-2 col-sm-4 col-xs-12"
                                   href="{{ $file->downloadUrl() }}">Download</a>
                            </div>
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