<!DOCTYPE html>
<html>

<head>
    <title>Online Shopping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @yield('css')
    <script src="{{asset('assets/js/uikit.min.js')}}"></script>
    <script src="{{asset('assets/js/uikit-icons.min.js')}}"></script>
</head>

<body>