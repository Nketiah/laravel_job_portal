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
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}">
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
<body class="bg-gray-200 antialiased h-screen relative overflow-y-hidden" x-data="{ nav_open: false }"
      :class="{ 'sm:':nav_open === true }">
    @include('header.navbar')
    @auth
          @include('header.sidebar')
    @endauth
    
     
     @yield('content')

     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
    @if (Session::has('job-added'))
        <script>
            
            swal("Good job!", "{!! Session::get('job-added') !!}", "success");
       </script>
    @endif

    @if (Session::has('job-applied'))
         <script>
             swal("Good job!", "{!! Session::get('job-applied') !!}", "success");
         </script>
    @endif

</body>
</html>