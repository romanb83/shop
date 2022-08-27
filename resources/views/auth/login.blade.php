@extends('layouts.layout')

@section('title', 'Вход')
@section('content')
<div>
    <form class="form" method="post" action="{{ route('login') }}">
        @csrf
        <div>
            <input class="input" type="email" name="email" placeholder="E-mail" required>
        </div>
        <div>
            <input class="input" type="password" name="password" placeholder="Пароль" required>
        </div>
        <div>
            <button class="btn" type="submit">Войти</button>
        </div>
    </form>
</div>
@endsection