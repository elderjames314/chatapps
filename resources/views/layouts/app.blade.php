<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="ChatsApp" value="notranslate">
    <meta name="application-name" content="ChatsApp">
    <meta name="description" content="Chatting your customer with one click - powered by ReallyGreatTech.com">
    <!--favicon-->
    <link rel="icon" href="{{asset('storage/assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('storage/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('storage/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('storage/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('storage/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('storage/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('storage/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('storage/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/assets/css/header-colors.css')}}" />

    <title>Instant Messaging Application</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




</head>
<body>
    <div id="app">

        @yield('content');


    </div>






    <script src="{{asset('storage/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('storage/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('storage/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('storage/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('storage/assets/js/app-chat-box.js')}}"></script>

    <script src="{{asset('storage/assets/js/app.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
