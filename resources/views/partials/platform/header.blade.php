<header id="platform-header" class="clearfix">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="logo col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <a href="{{ route('sharing-index') }}"><img class="logo" src="{{ URL::asset('img/logo/favicon_white.png') }}"></a>
            </div>
            <!-- end logo -->

            <!-- user menu -->
            <div class="account col-lg-2 col-lg-push-8 col-md- col-md-push-8 col-sm-3 col-sm-push-7 col-xs-1 col-xs-push-6">
                <div class="row flex">
                    <!-- notifications -->
                    <div class="col-lg-6 hide-mobile">
                        <div class="user-notifications">
                            <i class="fa fa-bell dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i><span> {{count(auth()->user()->notifications())}} </span>
                            <!-- notifications dropdown -->
                            <ul id="notifications-dropdown" class="dropdown-menu col-xs-12" aria-labelledby="notifications-dropdown">
                                <li>
                                    <a href="{{route('profile-notifications')}}"><i class="fa fa-comment"></i> Notificatie 1
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('profile-notifications')}}"><i class="fa fa-bell"></i> Notificatie 2 </a>
                                </li>
                                <li>
                                    <a href="{{route('profile-notifications')}}"><i class="fa fa-life-ring"></i> Notificatie 3
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('profile-notifications')}}"><i class="fa fa-smile-o"></i> Notificatie 4
                                    </a>
                                </li>
                                <!--
                                <a class="user-info padding" href="{{ route('profile-notifications') }}">
                                    <div class="row flex no-margin">
                                        <h6>Bekijk alles</h6>
                                    </div>
                                </a>
                                -->
                            </ul>
                            <!-- end notifications dropdown -->
                        </div>
                    </div>
                    <!-- end notifications -->


                    <!-- profile -->
                    <div class="user-profile col-lg-6">
                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="account-img round-img" data-toggle="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" class="account_dropdown_btn">
                                <path d="M4.5 5.5a.5.5 0 0 1-.35-.14L0 1.4.7.5l3.8 3.62L8.3.5l.7.9-4.15 3.96a.5.5 0 0 1-.35.14z"></path>
                            </svg>
                        </div>
                        <!-- profile dropdown -->
                        <ul id="account-dropdown" class="dropdown-menu col-xs-12" aria-labelledby="account-dropdown">
                            <a class="user-info padding" href="{{ route('profile-index') }}">
                                <div class="row flex no-margin">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}"
                                             class="group-img round-img vertical-center" data-toggle="dropdown">
                                    </div>
                                    <div class="col-lg-9">
                                        <h6>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h6>
                                        <h6>Bekijk profiel</h6>
                                    </div>
                                </div>
                            </a>
                            <li>
                                <a href="{{ route('profile-downloads') }}"><i class="fa fa-download"></i> Mijn downloads
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('profile-uploads') }}"><i class="fa fa-upload"></i> Mijn uploads </a>
                            </li>

                            <li>
                                <a href="{{ route('profile-ratings') }}"><i class="fa fa-star"></i> Mijn beoordelingen
                                </a>
                            </li>

                            <li>
                                <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Uitloggen </a>
                            </li>
                        </ul>
                        <!-- end profile dropdown -->
                    </div>
                    <!-- end notifications -->
                </div>
            </div>
            <!-- end user menu -->
        </div>
    </div>
</header>