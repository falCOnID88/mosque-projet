<!DOCTYPE html>
<html>
    <head lang="{{ config('app.locale') }}">
        <!-- meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- title -->
        <title>@yield('title')</title>

        <!-- Bootstrap css -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Font-Awesome css -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

        <!-- Custom css -->
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    </head>
    <body>
        <!-- sidebar -->
        @include('layouts._sidebar')

        <!-- content -->
        <div id="mainPage" class="container">
            @yield('content')
        </div>

        <!-- footer -->
        @include('layouts._footer')

        @include('layouts._script')
    </body>
</html>
