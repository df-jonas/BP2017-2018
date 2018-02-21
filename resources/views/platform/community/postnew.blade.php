@extends('layouts.platform')

@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')

<div class="container">

    Nieuwe post

</div>


@include('partials.footer')
@endsection

@section("scripts")
<script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
