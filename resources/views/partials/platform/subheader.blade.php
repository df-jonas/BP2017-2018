<nav class="subheader">
    <div class="container">
        <ul>
            <li class="{{ ActiveHelper::getState(route('community-index', [], false)) }}"><a href="{{ route("community-index") }}"><span><i class="fa fa-users" aria-hidden="true"></i></span>Community</a></li>
            <li class="{{ ActiveHelper::getState(route('sharing-index', [], false)) }}"><a href="{{ route("sharing-index") }}"><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>Bestanden</a></li>
            <li class="{{ ActiveHelper::getState(route('tutoring-index', [], false)) }}"><a href="{{ route("tutoring-index") }}"><span><i class="fa fa-life-ring" aria-hidden="true"></i></span>Tutoring</a></li>
        </ul>
    </div>
</nav>