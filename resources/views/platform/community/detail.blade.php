@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">

            <div class="sidebar">






                <article class="item">
                    <header>Mijn posts</header>
                    <ul class="highlight">


                    </ul>
                </article>

                <article class="item">
                    <header>Statistieken</header>
                    <ul class="highlight">


                    </ul>
                </article>
            </div>

            <div class="content">
                <div id="groupcontainer" class="groups">

                    <div class="group-detail clearfix">
                        <header>Studentenraad > klachten<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                               Teveel springuren - detail
                            </div>

                        </article>




                    </div>





                </div>


            </div>

        </div>
    </div>


    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
