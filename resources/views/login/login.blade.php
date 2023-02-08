<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- ==== STYLE.CSS ==== -->
        <link rel="stylesheet" href="{{ asset('assets/css/stylel.css') }}" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/flow.png') }}"/>
</head>
<body>
    <form class="text-left" method="GET" action="/dashboard">
        @csrf

            <div class="login">
                <div class="login-triangle"></div>
                
                <h2 class="login-header">Log in</h2>
            
                <form class="login-container">
                <p><input type="email" placeholder="Email"></p>
                <p><input type="password" placeholder="Password"></p>
                <p><input type="submit" value="Login"></p>
                </form>
            </div>
</body>
</html>