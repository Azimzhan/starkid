<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}" />
    <title>Stark-Edu</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
</head>
<body class="bg-gray-100 h-screen">
      <nav class="flex items-center justify-between flex-wrap bg-gray-400 p-6 shadow-sm">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <a href="{{ url('/')}}"><img class="w-1/5" src="{{ asset('img/logo-full.png')}}" alt="Starkid"></a> 
        </div>
      </nav>
    <div class="flex h-full flex-wrap bg-gray-200 items-center justify-center">
        @yield('content')
    </div>
    {{-- <div class="container mx-auto px-2 bg-indigo-700">
        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
</body>
</html>
