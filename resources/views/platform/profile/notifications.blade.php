@extends('layouts.platform')
@section('pagetitle', 'Notificaties')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')
<section class="container">
    <div id="filter-results" class="item filecontainer files">
        <header><a class="header-title"><i class="fa fa-bell"></i> Mijn notificaties</a></header>
        <div class="padding">
            <ul class="all-notifications">
                @if(!(Auth::user()->notifs_unread->count() <= 0))
                    @foreach(Auth::user()->notifs as $notification)
                        @if($notification->isRead() == NULL)
                            <li class="unread">
                                <a href="{{ $notification->url }}" class="notification-title"><i class="fa fa-comment"></i>
                                    <strong>{{ $notification->from->first_name }}</strong> {{ $notification->text }}
                                </a>
                                <a class="notification-read"
                                   href="{{ route('notification-read', ['id' => $notification->id]) }}">Markeer als gelezen</a>
                                <h4 class="notification-date">{{ $notification->notificationcreated() }}</h4>
                            </li>
                        @else
                            <li>
                                <a href="{{ $notification->url }}" class="notification-title"><i class="fa fa-comment"></i>
                                    <strong>{{ $notification->from->first_name }}</strong> {{ $notification->text }}
                                </a>
                                <h4 class="notification-date">{{ $notification->notificationcreated() }}</h4>
                            </li>
                        @endif
                    @endforeach
                @else
                    U heeft (nog) geen meldingen ontvangen.
                @endif
            </ul>
        </div>
    </div>
</section>
@include('partials.footer')
@endsection