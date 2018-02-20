@extends('layouts.website')

@section('content')
    @include('partials.website.header')

    <section id="about_banner" class="col-xs-12 clearfix">
        <h1>Over UniHelp</h1>
        <div class="left col-lg-4 col-lg-push-2 col-xs-12">
            <p>Studenten hebben al wel vaker gemerkt: vragen over leerstof die net niet belangrijk genoeg zijn om ermee
                naar de docent te trekken, informatie over een opdracht die je niet zo duidelijk lijkt, een buddy zoeken
                bij een project, samenvattingen zoeken, etc. Het zijn maar enkele voorbeelden van situaties die elke
                student wel eens meemaakt, maar soms niet aan gepaste hulp geraakt.
                In de huidige maatschappij is zo goed als iedereen continu beschikbaar, hetzij mobiel, hetzij via de
                computer. We kunnen hiervan gebruik maken door een uniek en gespecialiseerd platform (met mobiele
                ondersteuning) aan te bieden voor studenten.</p>

            <p>In deze bachelorproef doen we aan zelfstudie voor ongekende frameworks en technologieën, onderzoeken we
                vereisten in dergelijk platform, bevragen we studenten en ontwikkelen we een web-platform om studenten
                te ondersteunen gedurende hun studietraject. De bedoeling is om een gecentraliseerd punt te voorzien
                waarop studenten hulp en informatie kunnen krijgen, contact kunnen zoeken met medestudenten en
                school-gerelateerd materiaal kunnen aanbieden.
            </p>


        </div>

        <div class="right col-lg-4 col-lg-push-2 col-xs-12">
            <p>Een samenwerking tussen studenten van de richtingen Dig-X en Multec opent vele luiken. Wij willen hiervan
                optimaal gebruik maken door het beste van beide richtingen te combineren. Bij het ontwikkelen van het
                platform houden we daar in alle opzichten rekening mee. Dit door onder andere een gebruiksvriendelijke
                front-end, performante back-end en server-side optimalisatie met caching/veiligheid te voorzien. Hierbij
                gebruiken we onder meer Laravel, Redis, API authentication, rate-limiting en meer, veelal frameworks en
                technologieën die door ons nog niet gekend zijn. Hiervoor zullen we dus zelfstudie uitvoeren.</p>

            <p>De Dig-X student zal zich verdiepen in de back-end ontwikkeling (PHP). Ook zal hij zorgen voor snelle
                responses door gebruik te maken van Redis in het Laravel platform. Aangezien Jonas De Frère zich
                specialiseert in netwerken en beveiliging spreekt het voor zich dat hij de beveiliging van het platform
                onder handen zal nemen door middel van rate-limiting en functionele middleware.
                Anderzijds zal de student Multec andere aspecten op zich nemen zoals de front-end ontwikkeling van het
                platform. Arno Stalpaert specialiseert zich in mobile app & web development en zal de gehele branding
                (ontwerp logo, kleuren, design,..) voor zich nemen. Ook de ontwikkeling in PHP en Laravel maken hiervan
                deel uit. Om dit front-end gedeelte zo optimaal mogelijk af te stemmen op de gebruiker zal er ook een
                Usability en User experience onderzoek worden opgestart.
            </p>
        </div>
    </section>

    <section id="about_person_1" class="about_person col-xs-12">
        <div class="row">
            <div class="left col-lg-2 col-lg-push-2 col-xs-6 col-xs-push-3">
                <img src="img/team/arno.png" class="round_img">
            </div>


            <div class="right col-lg-6 col-lg-push-2 col-xs-12">
                <h3>Arno Stalpaert</h3>
                <h5>Multec student
                    <small>(Mobile App &amp; Web development)</small>
                </h5>
                <p>Hallo, ik ben Arno en ik zit in mijn laatste jaar Multimedia- en communicatie technologie aan de Erasmushogeschool Brussel. Vorig jaar koos ik er voor om mij te specialiseren in Mobile App en Web development.
                Hier leerde ik onder andere veel over design, front-end, back-end, User Experience, website development, enzovoort. Om deze reden koos ik voor een veelzijdig project waar al deze zaken aan bod zouden komen. Tijdens dit project zal
                    ik mij vooral focussen op het front-end, design en UX gedeelte.
                </p>

            </div>
        </div>

    </section>

    <section id="about_quote" class="col-xs-12 clearfix">
        <div class="quote col-lg-6 col-lg-push-3 col-xs-12">
            <h1>“Als IT studenten zagen wij in studentenplatformen ruimte voor verbetering.”</h1>
        </div>
    </section>


    <section id="about_person_2" class="about_person col-xs-12">
        <div class="row">


            <div class="right col-lg-2 col-lg-push-8 col-xs-6 col-xs-push-3">
                <img src="img/team/jonas.png" class="round_img">
            </div>

            <div class="left col-lg-6  col-xs-12">
                <h3>Jonas De Frère</h3>
                <h5>Dig-X student
                    <small>(Network &amp; Security)</small>
                </h5>
                <p>Hallo, ik ben Arno en ik zit in mijn laatste jaar Multimedia- en communicatie technologie aan de Erasmushogeschool Brussel. Vorig jaar koos ik er voor om mij te specialiseren in Mobile App en Web development. Hier leerde ik onder andere veel over design, front-end, back-end, User Experience, website development, enzovoort. Om deze reden koos ik voor een veelzijdig project waar al deze zaken aan bod zouden komen. Tijdens dit project zal ik mij vooral focussen op het front-end, design en UX gedeelte. </p>

            </div>


        </div>

    </section>

    @include('partials.footer')
@endsection
