<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
</head>
<body>
    <div>
        <form method="post" action="{{ route('register') }}">
            @csrf
            <label for="name">Имя
                <input type="text" name="username">
            </label>
            <label for="email">E-mail
                <input type="email" name="email">
            </label>
            <label for="password">Пароль
                <input type="password" name="password">
            </label>
            <label for="password_confirmation">Повторите пароль
                <input type="password" name="password_confirmation">
            </label>
            <button type="submit">Зарегистрировать</button>
        </form>
    </div>
</body>
</html>
