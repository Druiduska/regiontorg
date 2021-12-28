<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @csrf
        <title>Auth</title>

        <style>
            .login_container{
                display: block;
                width: 20rem;
            }

            .login_field {
                display: block;
                text-align: right;
            }

            .login_button{
                display: block;
                text-align: right;
            }

        </style>
    </head>
    <body>
        <div id="app_login" class="login_container">
            <div class="login_button">
                <button onclick="f_enter()">Enter</button>
                <button onclick="f_logout()">Logout</button>
                <button onclick="f_register()">Register</button> 
            </div>
    </body>
    @include('auth.js')
</html>
