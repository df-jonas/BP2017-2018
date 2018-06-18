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
        <!-- begin go back -->
    @include('partials.platform.go-back')
    <!-- end go back-->
        <!-- begin assessment-->

        <div class="row">
            <section class="col-xs-12">
                <!-- comment modal -->
                <div class="modal fade assessment" id="assessment-modal" role="dialog">
                    <section class="modal-dialog">
                        <!-- Modal content-->
                        <section class="modal-content">
                            <section class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4>Toelichting</h4>
                            </section>
                            <section class="modal-body padding" style="padding: 10px">
                                <span class="large-th col-xs-12">Arno Stalpaert</span>
                                <span class="mid-th col-xs-12">Aanwezigheid</span>
                                <textarea class="col-xs-12" rows="5"></textarea>
                            </section>
                            <section class="modal-footer">
                                <input type="submit" class="download-button col-lg-2" value="Opslaan">
                            </section>
                        </section>
                    </section>
                </div>
                <!-- end comment modal -->
                <div class="item clearfix">
                    <header><a class="header-title">Peer Assessment</a></header>
                    <div class="padding">
                        <div class="row flex">
                            <form method="POST" action="{{ route('assessment-detail', ['assessment_id' => $id ]) }}"
                                  style="width: 100%;">
                            {{ csrf_field() }}
                            <!-- begin table -->
                                <table class="assessment">
                                    <tr class="heading">
                                        <th class="left top"><span
                                                    class="large-th">{{ $groupuser->assessmentgroup->assessment->course->name }}</span>
                                            <br> <span class="mid-th">{{ $groupuser->assessmentgroup->name }}</span>
                                        </th>
                                        <th colspan="{{ sizeof($groupuser->assessmentgroup->assessment->assessmentskills) }}">
                                            <span class="large-th">Attitudes</span> <br><span class="mid-th">Gelieve een eerlijke score in te vullen</span><br/><span class="mid-th">3: beter dan de rest van de groep, 2: gemiddelde van de groep, 1: net niet als het gemiddelde van de groep, 0: geen hulp voor de groep, -1: hinder voor de groep)</span>
                                        </th>
                                    </tr>
                                    <tr class="heading">
                                        <th class="left top"></th>
                                        @foreach($groupuser->assessmentgroup->assessment->assessmentskills as $assessmentskill)
                                            <th class="skill-th">{{ $assessmentskill->skill->name }}</th>
                                        @endforeach
                                    </tr>
                                    @foreach($groupuser->assessmentgroup->assessmentgroupusers as $groupuser)
                                        <tr>
                                            <td class="left"><img
                                                        src="{{ asset('/img/avatars/' . $groupuser->user->image )}}"
                                                        class="group-img round-img hide-tablet"
                                                        alt="User profile image">{{ $groupuser->user->last_name }}
                                                , {{ $groupuser->user->first_name }}</td>
                                            @foreach($groupuser->assessmentgroup->assessment->assessmentskills as $assessmentskill)
                                                <td>
                                                    <input type="number"
                                                           name="score[{{ $groupuser->id }}][{{ $assessmentskill->id }}][grade]"
                                                           placeholder="0" min="-1" max="3"
                                                           style="padding: 0; text-align: center">
                                                    <input type="hidden"
                                                           name="score[{{ $groupuser->id }}][{{ $assessmentskill->id }}][comment]">
                                                    <span class="more" data-toggle="modal"
                                                          data-target="#assessment-modal"></span>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </table>
                                <br/>
                                <div class="col-xs-12 clearfix">
                                    <button type="submit" class="download-button col-lg-2 col-sm-4 col-xs-12">Indienen</button>
                                </div>
                            </form>
                        </div>
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
