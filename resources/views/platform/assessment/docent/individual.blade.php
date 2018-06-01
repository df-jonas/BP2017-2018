@extends('layouts.platform')
@section('pagetitle', 'Peer Assessment')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container">
        <!-- begin profile message -->
    @include('partials.platform.message')
    <!-- end profile message -->
        <!-- begin assessment-->
        <div class="row">
            <section class="col-xs-12">



                <div class="item padding clearfix" style="padding:0 15px 0 15px">
                    <section class="content assessment">
                        <section class="assessment-group">
                            <div class="title col-lg-3">
                                <a href="#"><h2 class="group-title">Assessment titel 1</h2></a>
                            </div>
                            <div class="info col-lg-9">
                                <span class="assessments">Groep Moleskine</span>
                            </div>
                        </section>
                    </section>



                    <div class="row flex padding">
                        <!-- begin table -->
                        <table class="assessment individual">
                            <tr class="heading">
                                <th class="left top"><span class="large-th">Uitgedeelde scores</span> <br> <span class="mid-th">Stalpaert Arno</span></th>
                                <th class="skill-th">Aanwezigheid</th>
                                <th class="skill-th">Inzet en motivatie</th>
                                <th class="skill-th">Vaardigheden</th>
                                <th class="skill-th">Kwaliteit</th>
                                <th class="skill-th">Stoptheid</th>
                                <th class="skill-th">Verzorging</th>
                                <th class="skill-th">Deadlines</th>
                            </tr>

                            <tr>
                                <td class="left" rowspan="2">Janssens, Brent <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                            </tr>
                            <tr>
                                <td class="left" rowspan="2">Goeman, Sam <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img hide-tablet" alt="User profile image"></td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                                <td class="comment">Duo Reges: constructio interrete. Suo genere perveniant ad extremum; Et nemo nimium beatus est. </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <!-- end picture -->
        </div>
        <!-- end profile info -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
