<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Lumirix">
    <meta name="keywords" content="Lumirix , Lumirix App">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title -->
    <title>Lumirix</title>

    <link rel="shortcut icon" type="image/ico" href="{{asset('/front-end/images/fav.ico')}}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/front-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/front-end/fonts/fontawesome/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('/front-end/css/style.css')}}">
</head>

<body>

    @yield("content")

    @include("layouts.footer")



</body>

</html>