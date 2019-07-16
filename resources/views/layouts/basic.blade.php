<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{!! \App\AppConfig::mainPageTitle() !!}</title>

        <!-- STYLE -->
        @include('layouts.basic-top-styling')


        <!-- Browser Support -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
</head>

<body>
        <!-- Page Content -->
        @yield('content')
</body>
</html>