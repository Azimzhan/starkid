@extends('layouts.auth')

@section('content')

<div class="w-full max-w-xs">
    <form method="POST" action="{{ route('register') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-thin mb-2" for="name">
                 Имя
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Имя">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-thin mb-2" for="last_name">
                 Фамилия
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Фамилия">
        </div>
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
        <input class="shadow appearance-none border {{ $errors->has('password') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required autocomplete="new-password" placeholder="******************">
        
        @if ($errors->has('password'))
            <p class="text-red-500 text-xs italic py-2">{{ $errors->first('password') }}</p>
        @endif
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-thin mb-2" for="password-confirm">
        Подверждение пароля
        </label>
        <input id="password-confirm" type="password" class="shadow appearance-none border {{ $errors->has('password') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation"  required autocomplete="new-password"   placeholder="******************">
        
        @if ($errors->has('password'))
            <p class="text-red-500 text-xs italic py-2">{{ $errors->first('password') }}</p>
        @endif
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-btn hover:bg-blue-600 text-white font-thin py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Войти
        </button>
    
    </div>
    <a class="inline-block align-baseline font-thin pt-5 text-sm text-btn hover:text-blue-800" href="{{ route('login') }}">
        {{ __('У меня уже есть аккаунт') }}
    </a>
    </form>
    <p class="text-center text-gray-500 text-xs">
    &copy;2020 Stark-edu.kz. Все права защишены.
    </p>
</div>

@endsection
