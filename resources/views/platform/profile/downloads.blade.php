@extends('layouts.platform')

@section('pagetitle', 'Mijn downloads')

@section('content')

    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <section class="container">
        <div id="filter-results" class="item filecontainer files">
            <header><a class="header-title"><i class="fa fa-download"></i> Mijn downloads</a></header>
            <div class="padding">
                @if(sizeof($downloads) > 0)
                    <ul class="all-downloads">
                        @foreach($downloads as $download)
                            <li>
                                <a href="{{ $download->file->detailUrl() }}" class="download-title">
                                    <strong>{{ $download->file->title }}</strong>
                                </a>
                                <a class="download-read" href="{{ $download->file->detailUrl() }}">Bekijk</a>
                                <h4 class="download-campus">{{ $download->file->field->name }}</h4>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Je hebt nog geen bestanden gedownload.</p>
                @endif
            </div>
        </div>
    </section>

    <!-- footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection