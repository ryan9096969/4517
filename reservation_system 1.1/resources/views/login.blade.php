<!DOCTYPE html>
<html>
<head>
    <title>Login to Reserve</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="title">
        <h1>Login to Reserve Your Table</h1>
    </div>

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <div class="Row">
            <div class="cola">
                <label>Email:</label>
            </div>
            <div class="colb">
                <input type="email" name="email" required>
            </div>
        </div>

        <div class="Row">
            <div class="cola">
                <label>Password:</label>
            </div>
            <div class="colb">
                <input type="password" name="password" required>
            </div>
        </div>

        <div class="Row">
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <div class="Row">
            <button type="submit">Login</button>
        </div>

        <div class="Row">
            <a href="#">Forgot password?</a>
        </div>
    </form>
</body>
</html>
