<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniHelp | Platform</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logo/favicon.png')}}"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.css') }}">

    <!-- own -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/platform.css') }}">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/nav.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ URL::asset('js/multistep.js') }}"></script>
    <!--<script src="{{ URL::asset('js/dropzone.js') }}"></script>-->

    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
    <!--<link rel="stylesheet" href="{{ URL::asset('css/dropzone.css') }}">-->

    <!-- TinyMCE editor-->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>





</head>
<body class="platform">
@yield('sidebar')
@yield('content')
</body>
</html>