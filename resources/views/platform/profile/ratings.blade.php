@extends('layouts.platform')
@section('pagetitle', 'Mijn beoordelingen')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <section class="container">
        <div id="filter-results" class="item filecontainer files">
            <header><a class="header-title"><i class="fa fa-star"></i> Mijn beoordelingen</a></header>
            <div class="padding">
                <ul class="all-ratings">
                    @foreach($ratings as $rating)
                        <li>
                            <a href="{{ $rating->file->detailUrl() }}" class="rating-title">
                                <strong>{{ $rating->file->title }}</strong>
                            </a>
                            <a class="rating-read" href="{{ $rating->file->detailUrl() }}">Beheren</a>
                            <h4 class="rating-stars">
                                Jouw rating: {{ $rating->rating }}/5 -
                                @for ($i = 1; $i <= 5; $i++)
                                    @if($i <= $rating->file->averageRating())
                                        <span class="fa fa-star checked"></span>
                                    @else
                                        <span class="fa fa-star"></span>
                                    @endif
                                @endfor
                            </h4>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection