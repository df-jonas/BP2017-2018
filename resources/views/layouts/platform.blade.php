<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniHelp | @yield('pagetitle')</title>
    <!-- mobile responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo/favicon.png') }}"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
    <!-- own css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!--<link rel="stylesheet" href="{{ asset('css/themes/default.css') }}">-->
    <link rel="stylesheet" href="{{ asset('css/themes/' .  Auth::user()->preference->theme . '.css' ) }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.css') }}">
    <!-- mailchimp -->
    <link rel="stylesheet" href="{{ asset('css/mailchimp-horizontal-slim-10_7.css') }}">
    <!-- font -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <!-- TinyMCE editor -->
    <!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>-->
    <!-- calendar -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.min.css') }}"/>
    <!-- BugHerd script -->
    <script type='text/javascript'>
        (function (d, t) {
            var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
            bh.type = 'text/javascript';
            bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=koh1utlymsn5ax0z3vqtia';
            s.parentNode.insertBefore(bh, s);
        })(document, 'script');
    </script>
</head>
<body class="platform">
<div class="wrap">
@yield('sidebar')
@yield('content')
<!-- jquery -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/nav.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ URL::asset('js/multistep.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.slicknav.js') }}"></script>
    <script>
        $(function () {
            $('#mobile-header').slicknav({
                label: ' ',
                duration: 200,
                prependTo: '#platform-header .container'
            });
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-47689548-7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-47689548-7');
    </script>
    <!-- Hotjar Tracking Code for https://unihelp.be/ -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 737039, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    @yield('scripts')
</div>
</body>
</html>