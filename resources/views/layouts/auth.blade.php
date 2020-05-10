<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}" />
    <title>Starkid</title>

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
          <a href="{{ url('/')}}"><img class="w-1/5" src="img/logo-full.png" alt="Starkid"></a> 
        </div>
      </nav>
    <div class="flex h-full flex-wrap bg-gray-200 items-center justify-center">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-thin mb-2" for="username">
                  Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Email">
              </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-thin mb-2" for="password">
                  Пароль
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic">Введите пароль.</p>
              </div>
              <div class="flex items-center justify-between">
                <button class="bg-btn hover:bg-blue-600 text-white font-thin py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                  Войти
                </button>
                <a class="inline-block align-baseline font-thin text-sm text-btn hover:text-blue-800" href="#">
                  Забыли пароль?
                </a>
              </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
              &copy;2020 Starkid.kz. Все права защишены.
            </p>
          </div>
    </div>
    {{-- <div class="container mx-auto px-2 bg-indigo-700">
        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
</body>
</html>
