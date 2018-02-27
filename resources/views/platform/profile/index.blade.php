@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <!-- user uploaded items -->
        <article class="item user-owned">
            <header>Mijn uploads</header>


            <div class="padding">

               Test
            </div>

        </article>
        <!-- user items -->

    </div>


    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
