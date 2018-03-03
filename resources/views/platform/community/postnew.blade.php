@extends('layouts.platform')

@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')

<div class="container">
    <div class="table">

        <div class="sidebar">



            <!-- filter menu -->
            <article class="item cats">
                <header>Posts categorie</header>
                <div class="padding">


                    <div class="form-group clearfix">

                        <label>Studentenraad</label>

                        <label class="checkbox-container col-xs-12">Klachten
                            <input type="checkbox" name="pubyear[]" value="1"
                                   class="filterlistener">
                            <span class="checkmark"></span>
                        </label>

                        <label class="checkbox-container col-xs-12">Evenementen
                            <input type="checkbox" name="pubyear[]" value="1"
                                   class="filterlistener">
                            <span class="checkmark"></span>
                        </label>


                        <br>
                        <label>Interessegroepen</label>
                        <label class="checkbox-container col-xs-12">Design
                            <input type="checkbox" name="pubyear[]" value="1"
                                   class="filterlistener" checked>
                            <span class="checkmark"></span>
                        </label>

                        <label class="checkbox-container col-xs-12">Server & networking
                            <input type="checkbox" name="pubyear[]" value="1"
                                   class="filterlistener">
                            <span class="checkmark"></span>
                        </label>




                    </div>
                    <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                </div>
            </article>
            <!-- filter menu -->


            <!-- filter menu -->
            <article class="item options">
                <header>Post opties</header>
                <div class="padding">
                    <div class="form-group clearfix">
                        <div class="selectdiv">
                            <label for="fos">Zichtbaarheid</label>
                            <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                <option value="-1" selected>Openbaar</option>
                                <option value="2" selected>Verborgen</option>

                            </select>
                        </div>
                    </div>
                    <label>Uitgesteld publiceren</label>
                    <br>

                    <div class="form-group clearfix">

                        <input type="date" name="publication" class="col-xs-12">



                    </div>
                    <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                </div>
            </article>
            <!-- filter menu -->


            <!--
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
            -->
        </div>

        <div class="content">
            <div id="groupcontainer" class="groups">

                <div class="item group-detail clearfix">
                    <header>Post aanmaken<a href=""><i class="fa fa-angle-up"></i></a>
                    </header>

                    <article class="item group">
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



                            <input type="submit" name="submit" class="next col-lg-2" value="Opslaan"/>


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
