@extends('layouts.platform')

@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')

<div class="container">
    <div class="table">

        <div class="sidebar">




            <article class="item">
                <header>Categorieën</header>
                <form>

                    <div class="form-group clearfix">
                        <div class="row">
                            <button>test</button>
                            <button>test</button>
                        </div>

                    </div>

                    <div class="form-group clearfix">

                        <label class="checkbox-container col-xs-12">Design
                            <input type="checkbox" name="pubyear[]" value="1"
                                   class="filterlistener" checked>
                            <span class="checkmark"></span>
                        </label>

                        <label class="checkbox-container col-xs-12">Development
                            <input type="checkbox" name="pubyear[]" value="1"
                                   class="filterlistener">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container col-xs-12">Server &amp; networking
                            <input type="checkbox" name="pubyear[]" value="1"
                                   class="filterlistener">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                </form>
            </article>
        </div>

        <div class="content">
            <div id="groupcontainer" class="groups">

                <div class="group-detail clearfix">
                    <header>Post aanmaken<a href=""><i class="fa fa-angle-up"></i></a>
                    </header>

                    <article class="group">
                        <div class="padding">


                        <form>


                            <div class="form-group clearfix">
                                <div class="textdiv">
                                    <label for="title">Titel</label>
                                    <input id="title" name="title" type="text" class="form-control col-xs-12">
                                </div>
                            </div>




                            <div class="form-group clearfix">
                                <label for="filedesc">Inhoud</label>
                                <textarea class="form-control" rows="5" id="filedesc" name="filedescription"></textarea>
                            </div>



                            <input type="submit" name="submit" class="next col-lg-2" value="Versturen"/>
                            <input type="button" id="submitall" name="previous" class="previous col-lg-2"
                                   value="Vorige"/>

                        </form>

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
