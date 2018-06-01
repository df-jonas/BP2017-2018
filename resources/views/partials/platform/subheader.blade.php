<nav class="subheader">
    <section class="container">
        <ul>
            <li class="{{ ActiveHelper::getState(route('community-index', [], false)) }}"><a href="{{ route("community-index") }}"><span><i class="fa fa-users" aria-hidden="true"></i></span>Community</a></li>
            <li class="{{ ActiveHelper::getState(route('sharing-index', [], false)) }}"><a href="{{ route("sharing-index") }}"><span><i class="fa fa-archive aria-hidden="true"></i></span>Bestanden</a></li>
            <li class="{{ ActiveHelper::getState(route('tutoring-index', [], false)) }}"><a href="{{ route("tutoring-index") }}"><span><i class="fa fa-life-ring" aria-hidden="true"></i></span>Tutoring<span class="badge">{{ Variable::tutoringCount() }}</span></a></li>
            <!--<li class="{{ ActiveHelper::getState(route('assessment-index', [], false)) }}"><a href="{{ route("assessment-index") }}"><span><i class="fa fa-calendar" aria-hidden="true"></i></span>Peer Assessment</a></li>-->
        </ul>
    </section>
</nav>