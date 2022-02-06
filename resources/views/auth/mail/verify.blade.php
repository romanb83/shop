<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Подтверждение регистрации</title>

{{--    <style>--}}
{{--        body { margin: 0; padding: 0; background: #000; } a{ position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 200px; height: 60px; text-align: center; line-height: 60px; color: #fff; font-size: 24px; text-transform: uppercase; text-decoration: none; font-family: sans-serif; box-sizing: border-box; background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4); background-size: 400%; border-radius: 30px; z-index: 1; } a:hover { animation: animate 5s linear infinite; } @keyframes animate { 0% { background-position: 0%; } 100% { background-position: 400%; } } a:before { content: ''; position: absolute; top: -5px; left: -5px; right: -5px; bottom: -5px; z-index: -1; background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4); background-size: 400%; border-radius: 40px; opacity: 0; transition: 0.5s; } a:hover:before { filter: blur(20px); opacity:1; animation: animate 5s linear infinite; }--}}
{{--    </style>--}}
</head>


{{--<body>--}}
{{--<a href="#">Button</a>--}}
{{--</body>--}}

<body>
    <table>
        <tr>
            <td>Здравствуйте, {{ $user->username }}! <br>Чтобы подтвердить регистрацию перейдите по ссылке</td>
        </tr>
        <tr style="width: 200px; height: 30px">
            <td style="background-color: #718096">
                <a href="{{ route('register.verify', ['token' => $user->verify_token]) }}">Verify</a>
            </td>
        </tr>
    </table>
</body>
