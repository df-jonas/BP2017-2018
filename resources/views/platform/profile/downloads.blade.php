@extends('layouts.platform')
@section('content')
@section('pagetitle', 'Sharing')
@include('partials.platform.header')
@include('partials.platform.subheader')
<section class="container">
    <!-- begin table -->
    <section class="table">
        <!-- begin sidebar -->
        <aside class="sidebar">
            <!-- Search form -->
            <section class="item search">
                <header>
                    <a class="header-title"> <i class="fa fa-search"></i> Zoeken</a></header>

                <div class="inner-addon left-addon">
                    <input type="text" id="search" name="search" class="form-control filterlistener" placeholder="zoekterm" tabindex="1"/>
                </div>
            </section>
            <!-- Search form -->

        </aside>
        <!-- end sidebar -->
        <!-- begin content -->
        <section class="content sharing overview">
            <section id="filter-results" class="filecontainer files">
                {{--
                @foreach($userdownloads as $file)
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
                                    <h2 class="item-title no-margin"><a href="{{ $file->detailUrl() }}"> {{$file->title}}</a></h2>
                                    <h3 class="item-campus">Erasmushogeschool Brussel</h3>
                                    {{--
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="item-user">
                                                door {{$file->user->first_name}} {{$file->user->last_name}}</h4>
                                        </div>
                                    </div>
                                    --}}
                {{--
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
            --}}
            </section>
        </section>
        <!-- end content -->
    </section>
    <!-- end table -->
</section>

<!-- footer -->
@include('partials.footer')
<!-- end footer -->@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection