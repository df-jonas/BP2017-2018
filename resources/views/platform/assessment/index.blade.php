@extends('layouts.platform')
@section('pagetitle', 'Peer Assessment')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container profile">
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
                                <span class="large-th col-xs-12">Stalpaert Arno</span>
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
                <div class="item padding clearfix" style="padding:0 15px 0 15px">
                    <div class="row flex">
                        <!-- begin table -->
                       assessment overzicht
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
