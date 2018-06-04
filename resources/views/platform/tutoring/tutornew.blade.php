@extends('layouts.platform')
@section('pagetitle', 'Word tutor')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')
<div class="container">
    <div class="content">
            <form id="tutor-form" class="col-xs-12 no-padding clearfix" method="post" action="{{route('tutoring-tutor-new')}}">
                {{ csrf_field() }}
                <section class="item">
                    <header><a class="header-title"><i class="fa fa-life-bouy"></i> Word tutor</a></header>
                    <div class="padding">
                        <div class="form-group clearfix">
                            <p>Door je kandidaat te stellen als tutor voor een bepaald vak, kan je gematcht worden met studenten die hulp nodig hebben voor dit zelfde vak. Als je tutor wil zijn voor meerdere vakken, kan je je voor elk van deze vakkan kandidaat stellen.</p>
                        </div>
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
                        <input type="submit" class="download-button col-lg-2 col-sm-4 col-xs-12" value="Word tutor!">
                    </div>
                </section>
            </form>
        </div>
</div>
@include('partials.footer')
@endsection