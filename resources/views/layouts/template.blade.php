<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @if(View::hasSection('page_title'))
            @yield('page_title') - HelloTreeTest
        @else
            Home - HelloTreeTest
        @endif
    </title>
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/bootstrap-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/main.css') }}" />
</head>
<body>

<div class="page_wrapper">
    @include('components.flash-message')
    @yield('content')
</div>

<script type="text/javascript" src="{{url('/assets/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/main.js')}}"></script>
</body>
</html>