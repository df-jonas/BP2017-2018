<nav class="subheader">
    <div class="container">
        <ul>
            <li class="{{ ActiveHelper::getState(route('community-index', [], false)) }}"><a href="{{ route("community-index") }}"><span><i class="fa fa-users" aria-hidden="true"></i></span>Community</a></li>
            <li class="{{ ActiveHelper::getState(route('sharing-index', [], false)) }}"><a href="{{ route("sharing-index") }}"><span><i class="fa fa-file" aria-hidden="true"></i></span>Bestanden</a></li>
            <!-- <li><a href="#"><span><i class="fa fa-clipboard" aria-hidden="true"></i></span>Peer Assessment</a></li> -->
            <li class="{{ ActiveHelper::getState(route('tutoring-index', [], false)) }}"><a href="{{ route("tutoring-index") }}"><span><i class="fa fa-life-ring" aria-hidden="true"></i></span>Tutoring<span class="badge">3</span></a></li>
        </ul>
    </div>
</nav>