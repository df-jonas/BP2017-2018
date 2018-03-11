@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">
        <!-- Sidebar -->
        <div class="sidebar">

            <article class="item">
                <header>Informatie</header>
                <div class="padding">
                    <ul class="highlight">
                        <li class="clearfix"><i class="fa fa-university" aria-hidden="true"><span
                                        class="static-campus">{{ $campus }}</span></i></li>
                        <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                        class="static-fos">{{ $fos }}</span></i></li>
                        <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                        class="static-course">Vak</span></i></li>
                        <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                        class="static-type">Type</span></i></li>
                        <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                        class="static-degree">Graad</span></i></li>
                        <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                        class="static-publicationyear">Jaar</span></i></li>
                        <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                        class="static-book">Boek</span></i></li>
                    </ul>
                </div>
            </article>
            <!-- sidebar -->
        </div>


        <!-- content -->
        <div class="content">
            <!-- files -->
            <div class="files">

                <!-- multistep form -->
                <form id="msform" class="clearfix" method="post" enctype="multipart/form-data"
                      action="{{route('sharing-new')}}">

                {{ csrf_field() }}

                <!-- progressbar -->
                    <article class="item file new clearfix">
                        <div class="padding">
                            <ul id="progressbar">
                                <li data-title="Kies Vak" class="active"></li>
                                <li data-title="Beschrijving"></li>
                                <li data-title="Studiemateriaal"></li>
                                <li data-title="Overzicht"></li>
                            </ul>
                        </div>
                    </article>
                    <!-- progressbar -->

                    <!-- step 1 -->
                    <fieldset>

                        <article class="item file new clearfix">
                            <div class="padding">
                                <div class="form-group clearfix">
                                    <div class="selectdiv">
                                        <label for="course">Voor welk vak wil je een bestand uploaden?</label>
                                        <select id="course" class="select col-xs-12 form-control" name="course">
                                            @foreach ($courses as $course)
                                                <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="item file new clearfix">
                            <div class="padding">
                                <label>Bestanden uploaden</label>
                            </div>

                            <div class="dropzone clearfix" style="margin-top: 2em">
                                <input type="file" id="file" name="file" class="inputFile" accept="application/pdf"
                                       data-multiple-caption="{count} files selected">
                                <label for="file"><span>Kies een bestand</span></label>
                                <h5>Of sleep uw bestand hier</h5>
                            </div>

                            <div class="padding">
                                <input type="button" class="next col-lg-2" value="Volgende"/>
                            </div>
                        </article>

                    </fieldset>
                    <!-- step 1 -->

                    <!-- step 2 -->
                    <fieldset>
                        <article class="item file new clearfix">
                            <div class="padding">

                                <div class="form-group clearfix">
                                    <div class="textdiv">
                                        <label for="title">Titel</label>
                                        <input id="title" name="title" type="text" class="form-control col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label for="filedesc">Omschrijving bestand</label>
                                    <textarea class="form-control" rows="5" id="filedesc" name="filedescription"></textarea>
                                </div>

                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="doctype">Type document</label>
                                        <select id="doctype" name="documenttype" class="form-control select col-xs-12">
                                            @foreach($doctypes as $doctype)
                                                <option value="{{$doctype->id}}">{{$doctype->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="degree">Studiejaar</label>
                                        <select id="degree" name="degree" class="form-control select col-xs-12">
                                            @foreach($degrees as $degree)
                                                <option value="{{$degree->id}}">{{$degree->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="originaldate">Geschreven in</label>
                                        <select id="originaldate" name="originaldate" class="form-control select col-xs-12">
                                            @foreach($pubyears as $pubyear)
                                                <option value="{{$pubyear->id}}">{{$pubyear->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                                <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>


                            </div>
                        </article>
                    </fieldset>
                    <!-- step 2 -->

                    <!-- step 3 -->
                    <fieldset>
                        <article class="item file new clearfix">
                            <div class="padding">

                                <div class="form-group clearfix">

                                    <div class="selectdiv">
                                        <label for="book">Is er een boek gekoppeld aan dit vak?</label>
                                        <select id="book" name="hasbook" class="select col-xs-12 form-control">
                                            <option value="0" selected>Neen</option>
                                            <option value="1">Ja</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="textdiv">
                                        <label for="booktitle">Welk boek?</label>
                                        <input id="booktitle" name="booktitle" type="text" class="form-control">
                                    </div>

                                </div>

                                <input type="button" name="next" class="next col-lg-2" value="Volgende"/>
                                <input type="button" name="previous" class="previous col-lg-2" value="Vorige"/>
                            </div>
                        </article>
                    </fieldset>
                    <!-- step 3 -->

                    <!-- step 4 -->
                    <fieldset>
                        <article class="item file new clearfix">
                            <div class="padding">

                                <label>Document eigenschappen</label>

                                <table class="file-overview">

                                    <tr class="spacer" style="height: 2em;">
                                        <td></td>
                                    </tr>

                                    <tr style="margin-bottom: 2em">
                                        <td class="bold">Campus</td>
                                        <td class="static-campus">{{ $campus }}</td>
                                        <td class="small">Bewerken</td>
                                    </tr>

                                    <tr class="spacer">
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bold">Richting</td>
                                        <td class="static-fos">{{ $fos }}</td>
                                        <td class="small">Bewerken</td>
                                    </tr>

                                    <tr class="spacer">
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bold">Vak</td>
                                        <td class="static-course">Project management</td>
                                        <td class="small">Bewerken</td>
                                    </tr>

                                    <tr class="spacer">
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bold">Titel bestand</td>
                                        <td class="static-title">Hoorcollege 1</td>
                                        <td class="small">Bewerken</td>
                                    </tr>


                                    <tr class="spacer">
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bold">Titel boek</td>
                                        <td class="static-book">Onbekend</td>
                                        <td></td>
                                    </tr>

                                    <tr class="spacer">
                                        <td></td>
                                    </tr>

                                </table>


                                <input type="submit" name="submit" class="next col-lg-2" value="Versturen"/>
                                <input type="button" id="submitall" name="previous" class="previous col-lg-2"
                                       value="Vorige"/>



                            </div>
                        </article>
                    </fieldset>
                    <!-- step 4 -->
                    <!-- multistep form -->
                </form>
                <!-- files -->
            </div>
        </div>
        <!-- content -->
    </div>
    <!-- container -->
    </div>

    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{asset("js/sharing-new.js")}}"></script>
@endsection