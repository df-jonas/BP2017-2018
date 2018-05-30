@extends('layouts.platform')
@section('pagetitle', 'Mijn uploads')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')
<section class="container">
    <div id="filter-results" class="item filecontainer files">
        <header><a class="header-title"><i class="fa fa-download"></i> Mijn uploads</a></header>
        <div class="padding">
            <ul class="all-downloads">
                <li>
                    <a href="#" class="download-title">
                        <strong>Bestand titel</strong>
                    </a>
                    <a class="download-read"
                       href="#">Beheren</a>
                    <h4 class="download-campus">Campus Design & Technologie</h4>
                </li>
                <li>
                    <a href="#" class="download-title">
                        <strong>Bestand titel</strong>
                    </a>
                    <a class="download-read"
                       href="#">Beheren</a>
                    <h4 class="download-campus">Campus Design & Technologie</h4>
                </li>
                <li>
                    <a href="#" class="download-title">
                        <strong>Bestand titel</strong>
                    </a>
                    <a class="download-read"
                       href="#">Beheren</a>
                    <h4 class="download-campus">Campus Design & Technologie</h4>
                </li>
                <li>
                    <a href="#" class="download-title">
                        <strong>Bestand titel</strong>
                    </a>
                    <a class="download-read"
                       href="#">Beheren</a>
                    <h4 class="download-campus">Campus Design & Technologie</h4>
                </li>
            </ul>
        </div>
    </div>
</section>
    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
