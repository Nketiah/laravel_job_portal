<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalid"/>
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Job Portal</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    @livewireScripts
    
   <style>
        body {
            font-family: Arial, Helvetica, sans-serif
        }

        #menu-toggle:checked + #menu{
            display: block;
        }
    </style>

</head>
<body class="bg-gray-200 h-screen relative " x-data="{ nav_open: false }"
      :class="{ 'sm:':nav_open === true }" x-data="{btn-apply: false}">
    @include('header.navbar')
    
     
     @yield('content')
     
     <script src="{{ asset('js/app.js') }}" defer></script>
     
</body>
</html>