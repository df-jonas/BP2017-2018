@extends('layouts.platform')
@section('pagetitle', 'Nieuwe groep')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        <!-- begin profile message -->
    @include('partials.platform.message')
    <!-- end profile message -->
        <form method="POST" action="{{ route('admin-groups-update-post') }}">
            {{ csrf_field() }}
            <div class="item group-detail clearfix">
                <header><a class="header-title">Groep aanmaken</a></header></header>
                <section class="item group">
                    <div class="padding">
                        <div class="form-group col-xs-12 no-padding">
                            <div class="textdiv">
                                <label for="title">Naam</label>
                                <input id="title" name="title" type="text" class="form-control col-xs-12" value="{{ $group->name }}">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding">
                            <div class="textdiv">
                                <label for="desc">Beschrijving</label>
                                <textarea id="desc" name="desc" type="text" class="form-control col-xs-12" rows="2">{{ $group->shortdesc }}</textarea>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding">
                            <div class="textdiv">
                                <label for="url">url</label>
                                <input id="url" name="url" type="text" class="form-control col-xs-12" value="{{ $group->url }}">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 no-padding">
                            <div class="selectdiv">
                                <label for="categories">Categorie</label>
                                <select id="categories" class="select form-control col-xs-12" name="categories">
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id === $group->category_id? 'selected' : '' }}>{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input id="id" name="id" type="hidden" value="{{ $group->id }}">
                        <input type="submit" name="submit" class="download-button next col-lg-2 col-sm-4 col-xs-12" value="Aanmaken">
                    </div>
                </section>
            </div>
        </form>
    </div>
    @include('partials.footer')
@endsection

