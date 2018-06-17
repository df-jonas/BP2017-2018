@extends('layouts.platform')

@section('pagetitle', 'Notificaties')

@section('content')

    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <section class="container">
        <div id="filter-results" class="item filecontainer files">
            <header>
                <a class="header-title"><i class="fa fa-bell"></i> Mijn notificaties</a>
                @if($all)
                    <a class="header-title" style="float: right;" href="?all=false"><i class="fa fa-eye-slash"></i>Enkel ongelezen</a>
                @else
                    <a class="header-title" style="float: right;" href="?all=true"><i class="fa fa-eye"></i>Alle weergeven</a>
                @endif
            </header>
            <div class="padding">
                <ul class="all-notifications">
                    @if(sizeof($notifications) > 0)
                        @foreach($notifications as $notification)
                            <li class="{{ $notification->isRead() ? "" : "unread" }}">
                                <a href="{{ $notification->url }}" class="notification-title">
                                    <i class="fa fa-comment"></i>
                                    <strong>{{ $notification->from->first_name }} {{ $notification->from->last_name }}</strong>
                                    {{ $notification->text }}
                                </a>
                                @if(!$notification->isRead())
                                    <a class="notification-read"
                                       href="{{ route('notification-read', ['id' => $notification->id]) }}">Markeer als
                                        gelezen</a>
                                @endif
                                <h4 class="notification-date">{{ $notification->notificationcreated() }}</h4>
                            </li>
                        @endforeach
                    @else
                        U heeft geen nieuwe meldingen ontvangen.
                    @endif
                </ul>
                {{ $notifications->appends(request()->except('page'))->links() }}
            </div>
        </div>
    </section>

    @include('partials.footer')

@endsection