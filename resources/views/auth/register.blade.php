@extends('layouts.layout')

@section('title', 'Регистрация')
@section('content')
    <div>
        <form class="form" method="post" action="{{ route('register') }}">
            @csrf
            <div>
                    <input class="input" type="text" name="username" placeholder="Имя пользователя">
                    @error('username')
                    <strong>{{ $message }}</strong>
                    @enderror
            </div>
            <div>
                    <input class="input" type="email" name="email" placeholder="E-mail">
                    @error('email')
                    <strong>{{ $message }}</strong>
                    @enderror
            </div>
            <div>
                    <input class="input" type="password" name="password" placeholder="Пароль">
                    @error('password')
                    <strong>{{ $message }}</strong>
                    @enderror
            </div>
            <div>
                    <input class="input" type="password" name="password_confirmation" placeholder="Повторите пароль">
                    @error('password_confirmation')
                    <strong>{{ $message }}</strong>
                    @enderror
            </div>
            <div>
                <button class="btn" type="submit">Зарегистрировать</button>
            </div>
        </form>
    </div>
@endsection
