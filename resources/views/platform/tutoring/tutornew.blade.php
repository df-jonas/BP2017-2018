@extends('layouts.platform')
@section('pagetitle', 'Word tutor')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')
<div class="container">
    <div class="content">
        <div class="files">
            <form id="form" class="col-xs-12 no-padding clearfix" method="post"
                  action="{{route('tutoring-tutor-new')}}">
                {{ csrf_field() }}
                <article class="item">
                    <header><a class="header-title"><i class="fa fa-life-bouy"></i> Word tutor</a></header>
                    <div class="padding">
                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="course">Voor welk vak wil je graag tutoring geven?</label>
                                <select id="course" class="select col-xs-12 form-control" name="course">
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group padding clearfix">
                        <input type="submit" class="download-button col-lg-2 col-sm-4 col-xs-12" value="Wordt tutor!">
                    </div>
                </article>
            </form>
        </div>
    </div>
</div>
@include('partials.footer')
@endsection

@section("scripts")
    <script src="{{asset("js/sharing-new.js")}}"></script>
@endsection