<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title>UniHelp | Platform</title>

    <script src="{{ URL::asset('js/loader.js') }}"></script>

    <!-- mobile responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logo/favicon.png')}}"/>

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.css') }}">

    <!-- own css -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/platform.css') }}">

    <!-- mailchimp -->
    <link rel="stylesheet" href="{{ URL::asset('css/mailchimp-horizontal-slim-10_7.css') }}">

    <!-- font -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">

    <!-- TinyMCE editor -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>

    <!-- calendar -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/zabuto_calendar.min.css') }}" />

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
<!--
preloader
<div class="se-pre-con"></div>
-->

@yield('sidebar')

@yield('content')

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/nav.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/multistep.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47689548-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-47689548-7');
</script>


@yield('scripts')

</body>

</html>