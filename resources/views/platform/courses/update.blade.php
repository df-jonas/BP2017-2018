@extends('layouts.platform')
@section('pagetitle', 'Update vak')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        <!-- begin profile message -->
    @include('partials.platform.message')
    <!-- end profile message -->
        <form method="POST" action="{{ route('admin-course-update-post') }}">
            {{ csrf_field() }}
            <div class="item group-detail clearfix">
                <header><a class="header-title">Vak aanmaken</a></header></header>
                <section class="item group">
                    <div class="padding">
                        <div class="form-group col-xs-12 no-padding">
                            <div class="textdiv">
                                <label for="title">Naam</label>
                                <input id="title" name="title" type="text" class="form-control col-xs-12" value="{{ $course->name }}">
                                <input id="id" name="id" type="hidden" value="{{ $course->id }}">
                            </div>
                        </div>
                        <input type="submit" name="submit" class="download-button next col-lg-2 col-sm-4 col-xs-12" value="Updaten">
                    </div>
                </section>
            </div>
        </form>
    </div>
    @include('partials.footer')
@endsection

