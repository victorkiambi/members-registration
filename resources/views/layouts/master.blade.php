<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
    </div>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
