@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')


    <form>
    <div class="container table">
        <div class="sidebar">


            <article class="item">
                <header>Groepen</header>
                <ul class="highlight">

                    <li class="clearfix">
                        <div class="clearfix">
                            <form action="" method="">

                                <label class="checkbox-label col-xs-12">
                                    <input type='checkbox'>
                                    <span></span>
                                    3 Multec
                                </label>


                                <label class="checkbox-label col-xs-12">
                                    <input type='checkbox'>
                                    <span></span>
                                    3 Multec
                                </label>



                                <label class="checkbox-label col-xs-12">
                                    <input type='checkbox'>
                                    <span></span>
                                    3 Multec
                                </label>



                                <label class="checkbox-label col-xs-12">
                                    <input type='checkbox'>
                                    <span></span>
                                    3 Multec
                                </label>


                                <label class="checkbox-label col-xs-12">
                                    <input type='checkbox'>
                                    <span></span>
                                    3 Multec
                                </label>





                            </form>
                        </div>


                    </li>




                </ul>
            </article>


            <article class="item">
                <header>Bestand toevoegen</header>
                <ul class="highlight">

                    <li class="clearfix">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nieuw bestand kiezen

                    </li>


                </ul>
            </article>


            <article class="item">
                <header>Previews toevoegen</header>
                <ul class="highlight">

                    <li class="clearfix">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Nieuwe afbeelding kiezen

                    </li>


                </ul>
            </article>


        </div>


        <div class="content">
            <div class="files">


                <article class="file new clearfix">
                    <header>Bestand uploaden</header>

                    <div class="padding">
                        <h4>Titel</h4>
                        <input type="text" class="col-xs-12">
                        <h4>Korte omschrijving</h4>
                        <input type="text" class="col-xs-12">
                        <h4>Inhoud</h4>

                        <textarea></textarea>


                        <form>
                            <button type="submit" class="download col-lg-2">Opslaan</button>
                        </form>

                        <form>
                            <button type="submit" class="download col-lg-2">Opslaan</button>
                        </form>
                    </div>

                </article>

            </div>
        </div>

    </div>
    </div>


    @include('partials.footer')

@endsection