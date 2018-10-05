<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href = "{{asset('css/etalage.css')}}" rel = "stylesheet">
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src = "{{asset('js/jquery.etalage.min.js')}}"></script>



    <script>


        $(document).ready(function(){

            $(".outer").mouseenter(function(){

                $(this).children(".inner").css({"display":"block"});

            });
            $(".outer").mouseleave(function(){

                $(this).children(".inner").css({"display":"none"});

            });



        });
    </script>
</head>
<body>

@include('includes.navbar')


@yield('content')

@yield('script')




</body>
</html>
