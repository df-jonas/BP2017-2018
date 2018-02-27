@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')



    <div class="container">
        <div class="table">
        <div class="sidebar">


            <!-- Upload button -->
            <article class="item button">
                <a href="{{route('sharing-new')}}">
                    <button>
                        <i class="glyphicon glyphicon-plus-sign"></i> Nieuw bestand
                    </button>
                </a>


            </article>
            <!-- end Upload button -->

            <!-- user downloaded items -->
            <article class="item user-owned">
                <header>Mijn downloads</header>


                <div class="padding">

                    @foreach($userdownloads as $userdownload)



                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-12">
                                <img src="{{asset('img/icons/001-file.png')}} "
                                     style="width: 36px; height: 36px">
                            </div>


                            <div class="col-md-10 col-xs-12">
                                <h5><a href="{{ $userdownload->file->detailUrl() }}"> {{$userdownload->file->title}}</a></h5>

                                <small>Gedownload {{ $userdownload->humantimestamp() }}</small>
                            </div>



                        </div>
                    @endforeach
                </div>

            </article>
            <!-- user items -->


        </div>

        <div class="content">
            <div class="files">
                <article class="file detail item clearfix">
                    <header>{{$file->field->name}} > {{$file->degree->name}} > {{$file->course->name}}<a
                                href="{{ $file->downloadUrl() }}"><i class="fa fa-download"></i></a>
                    </header>
                    <div class="padding">

                        <div class="row flex">
                            <div class="col-lg-3 col-xs-12">
                                <div class="table">
                                    <div style="display: table-cell; width: 32px"><img
                                                src="{{ URL::asset('img/avatars/1518557547_bday.jpg') }}"
                                                class="account_img"></div>
                                    <div style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                        <h6 style="margin: 0">Arno Stalpaert</h6>
                                        <h6 style="margin: 5px 0">Donderdag om 14:43</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 col-xs-12">
                                <div class="rating">
                                    <input hidden type="hidden" id="csrftoken" value="{{csrf_token()}}">
                                    <input type="hidden" id="fileid" hidden name="fileid" value="{{ $file->id }}">
                                    <!--<label for="rev_stars">Uw rating:</label>-->
                                    <input min="1" max="5" type="number" name="stars" id="rev_stars" class="rating"
                                           data-active-icon="fa fa-star checked"
                                           data-inactive-icon="fa fa-star"
                                           data-max="5" data-min="1" data-empty-value="5" data-inline
                                           value="
                                            @if ($userrating == null)
                                                   0
@else
                                           {{ $userrating->rating }}
                                           @endif
                                                   "/>
                                </div>

                            </div>









                        <div class="notes col-xs-12">
                            <h3>{{ $file->title }}</h3>
                            <p>{{ $file->filedescription }}</p>
                        </div>

                        <div class="details col-xs-12">
                            <div class="row">
                            <div class="detail col-lg-3 col-xs-6">
                                <h5>Type document</h5>
                                <i class="fa fa-file"><span>{{ $file->doctype->name }}</span></i>
                            </div>
                            <div class="detail col-lg-3 col-xs-6">
                                <h5>Studierichting</h5>
                                <i class="fa fa-graduation-cap"><span>{{ $file->field->name }}</span></i>
                            </div>
                            <div class="detail col-lg-3 col-xs-6">
                                <h5>Studiejaar</h5>
                                <i class="fa fa-archive"><span>{{ $file->degree->name }}</span></i>
                            </div>
                            <div class="detail col-lg-3 col-xs-6">
                                <h5>Vak</h5>
                                <i class="fa fa-book"><span>{{ $file->course->name }}</span></i>
                            </div>
                            </div>

                        </div>

                        <a class="download col-lg-2" href="{{ $file->downloadUrl() }}">Download</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        </div>
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/bootstrap-rating-input.min.js") }}"></script>
    <script src="{{ asset("js/sharing-detail.js") }}"></script>
@endsection