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

    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.css') }}">

    <!-- mailchimp -->
    <link rel="stylesheet" href="{{ URL::asset('css/mailchimp-horizontal-slim-10_7.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">

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
<body class="innerpage">

@yield('content')
@include('cookieConsent::index')

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/nav.js') }}"></script>
<script src="{{ URL::asset('js/jquery.slicknav.js') }}"></script>
<script>
    $(function(){
        $('#menu').slicknav({
            label: ' ',
            duration: 200,
            prependTo:'#menu'
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


</body>
</html>