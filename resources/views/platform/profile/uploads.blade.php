@extends('layouts.platform')

@section('pagetitle', 'Mijn uploads')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <section class="container">
        <div id="filter-results" class="item filecontainer files">
            <header><a class="header-title"><i class="fa fa-download"></i> Mijn uploads</a></header>
            <div class="padding">
                @if(sizeof($uploads) > 0)
                    <ul class="all-downloads">
                        @foreach($uploads as $upload)
                            <li>
                                <a href="{{ $upload->detailUrl() }}" class="download-title">
                                    <strong>{{ $upload->title }}</strong>
                                </a>
                                <a class="download-read" href="{{ $upload->detailUrl() }}">Beheren</a>
                                <h4 class="download-campus">{{ $upload->field->name }}</h4>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Je hebt nog geen bestanden geupload.</p>
                @endif
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection
