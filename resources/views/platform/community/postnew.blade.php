@extends('layouts.platform')
@section('pagetitle', 'Community')
@section('content')
@include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <form method="POST">



                <div class="content">
                    <div id="groupcontainer" class="groups">

                        <div class="item group-detail clearfix">
                            <header><a class="header-title">Post aanmaken</a></header>
                            </header>

                            <article class="item group">
                                <div class="padding">

                                    {{ csrf_field() }}
                                    <input type="hidden" name="url" value="{{ $group->url }}">
                                    <div class="form-group col-xs-12 no-padding">
                                        <div class="textdiv">
                                            <label for="title">Titel</label>
                                            <input id="title" name="title" type="text" class="form-control col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12 no-padding">
                                        <label for="content">Inhoud</label>
                                        <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                                    </div>

                                        <input type="submit" name="submit" class="download-button next col-lg-2 col-sm-4 col-xs-12"  value="Opslaan">
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

        </form>
    </div>

    @include('partials.footer')
@endsection
@section("scripts")
@endsection
