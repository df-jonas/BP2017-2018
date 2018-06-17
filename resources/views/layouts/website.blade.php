<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- mobile responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniHelp | @yield('pagetitle')</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logo/favicon.png')}}"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.css') }}">
    <!-- own css -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/inputs.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.css') }}">
    <!-- mailchimp -->
    <link rel="stylesheet" href="{{ URL::asset('css/mailchimp-horizontal-slim-10_7.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

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
<body>
<div class="wrap">
@yield('content')
@include('cookieConsent::index')

<!-- jquery -->
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ URL::asset('js/nav.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.slicknav.js') }}"></script>
    <script>
        $(function () {
            $('#menu').slicknav({
                label: ' ',
                duration: 200,
                prependTo: '#menu'
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