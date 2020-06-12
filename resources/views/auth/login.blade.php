@extends('layouts.auth')

@section('content')
    <div class="w-full max-w-xs">
        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-thin mb-2" for="username">
            Email
            </label>
            <input class="shadow appearance-none border rounded w-full {{ $errors->has('email') ? 'border-red-500' : '' }} py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic py-2">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-thin mb-2" for="password">
            Пароль
            </label>
            <input class="shadow appearance-none border {{ $errors->has('password') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required autocomplete="current-password" placeholder="******************">
            
            @if ($errors->has('password'))
                <p class="text-red-500 text-xs italic py-2">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-btn hover:bg-blue-600 text-white font-thin py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Войти
            </button>
            
            @if (Route::has('password.request'))
                <a class="inline-block align-baseline font-thin text-sm text-btn hover:text-blue-800" href="{{ route('password.request') }}">
                    {{ __('Забыли пароль?') }}
                </a>
            @endif
        </div>
        <a class="inline-block align-baseline font-thin pt-5 text-sm text-btn hover:text-blue-800" href="{{ route('register') }}">
            {{ __('У меня нет аккаунта') }}
        </a>
        </form>
        <p class="text-center text-gray-500 text-xs">
        &copy;2020 Stark-edu.kz. Все права защишены.
        </p>
    </div>
                    
@endsection
