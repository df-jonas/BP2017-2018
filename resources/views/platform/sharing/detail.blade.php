@extends('layouts.platform')
@section('content')
@section('pagetitle', 'Sharing - ' . $file->title)
@include('partials.platform.header')
@include('partials.platform.subheader')
<section class="container">
    <!-- go back -->
@include('partials.platform.go-back')
<!-- end go back-->
    <!-- begin table -->
    <section class="table">
        <!-- begin sidebar -->
        <aside class="sidebar">
            <!-- User items -->
            <section class="item user-owned hide-mobile">
                <header> <a class="header-title"><i class="fa fa-download"></i> Mijn downloads</a></header>
                <section class="padding">
                    @foreach($userdownloads as $userdownload)
                        <div class="row flex">
                            <div class="icon col-lg-2 col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . $userdownload->user->image )}}" class="account-img round-img" alt="User profile image">
                            </div>
                            <div class="col-lg-10 col-md-8 col-xs-8">
                                <h2 class="item-title col-xs-12 no-padding">
                                    <a href="{{ $userdownload->file->detailUrl() }}"> {{$userdownload->file->title}}</a>
                                </h2>
                                <div class="rating col-xs-12 no-padding">
                                    <small>Gedownload {{ $userdownload->humantimestamp() }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </section>
            <!-- end User items -->
        </aside>
        <!-- end sidebar -->
        <!-- begin content -->
        <section class="content sharing detail">
                <article class="file item clearfix">
                    <header>  <a class="header-title">{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}</a><a href="{{ $file->downloadUrl() }}" class="header-title"><i class="fa fa-download"></i></a></header>
                    <section class="padding clearfix">
                        <div class="col-xs-12">
                            <section class="col-lg-10 col-md-9 col-sm-9 col-xs-12 no-padding">
                                <div class="table">
                                    <div style="display: table-cell; width: 32px"><img src="{{ asset('img/avatars/' . $file->user->image) }}" class="account-img round-img" alt="User profile image"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 style="margin: 0">{{ $file->user->first_name }} {{ $file->user->last_name }}</h6>
                                        <h6 style="margin: 5px 0">{{ $file->humantimestamp() }}</h6>
                                    </div>
                                </div>
                            </section>

                            <section class="col-lg-2 col-md-3 col-sm-3 col-sm-push-0 col-xs-8 col-xs-push-1">
                                <section class="rating">
                                    <input hidden type="hidden" id="csrftoken" value="{{csrf_token()}}">
                                    <input type="hidden" id="fileid" hidden name="fileid" value="{{ $file->id }}">
                                    <!--<label for="rev_stars">Uw rating:</label>-->
                                    <input min="1" max="5" type="number" name="stars" id="rev_stars" class="rating" data-active-icon="fa fa-star checked" data-inactive-icon="fa fa-star" data-max="5" data-min="1" data-empty-value="5" data-inline
                                           value="
                                            @if ($userrating == null)
                                                   0
@else
                                           {{ $userrating->rating }}
                                           @endif
                                                   "/>
                                </section>
                            </section>
                        </div>


                        <section class="col-xs-12">
                            <h1>{{ $file->title }}</h1>
                            <p>{{ $file->filedescription }}</p>
                        </section>

                        <section class="details col-xs-12">
                            <div class="detail col-sm-3 col-xs-12">
                                <i class="fa fa-file"><span>{{ $file->doctype->name }}</span></i>
                            </div>
                            <div class="detail col-sm-3 col-xs-12">
                                <i class="fa fa-graduation-cap"><span>{{ $file->field->name }}</span></i>
                            </div>
                            <div class="detail col-sm-3 col-xs-12">
                                <i class="fa fa-archive"><span>{{ $file->degree->name }}</span></i>
                            </div>
                            <div class="detail col-sm-3 col-xs-12">
                                <i class="fa fa-book"><span>{{ $file->course->name }}</span></i>
                            </div>
                        </section>

                        <div class="col-xs-12">
                            <a class="download-button col-lg-2 col-sm-4 col-xs-12" href="{{ $file->downloadUrl() }}">Download</a>
                        </div>
                    </section>
                </article>
        </section>
        <!-- end content -->
    </section>
    <!-- end table -->
</section>
<!-- begin footer -->
@include('partials.footer')
<!-- end footer -->
@endsection

@section("scripts")
    <script src="{{ asset("js/bootstrap-rating-input.min.js") }}"></script>
    <script src="{{ asset("js/sharing-detail.js") }}"></script>
@endsection