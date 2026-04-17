<!DOCTYPE html>
<html>
<head>
    <title>Login Failed</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="title">
        <h4>Sorry, login failed!</h4>
        <p>Invalid email or password. Please try again.</p>
    </div>

    <div class="center-link">
        <p><a href="{{ route('home') }}">Back to Introduction</a></p>
    </div>

    <div class="center-link">
        <p><a href="{{ route('login') }}">Back to Login</a></p>
    </div>

</body>
</html>
