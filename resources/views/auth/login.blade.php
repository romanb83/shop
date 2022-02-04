<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>
</head>
<body>
<div>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <label for="email">E-mail
            <input type="email" name="email">
        </label>
        <label for="password">Пароль
            <input type="password" name="password">
        </label>
        <button type="submit">Войти</button>
    </form>
</div>
</body>
