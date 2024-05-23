<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="form">
        <div class="title">
            <h2 class="title-text">ERP System</h2>
        </div>
        <form action="{{ route('register.submit') }}" method="post">
            @csrf <!-- Tambahkan CSRF token untuk keamanan -->
            <div class="form-group" style="margin-top:50px; margin-left:50px;">
                <label class="user-login" for="username">Username</label>
                <input class="input-user" type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            <div class="form-group" style="margin-top:20px;margin-left:50px;">
                <label class="user-login" for="password">Password</label>
                <input class="input-user" type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <div class="btn-container">
                <button class="btn-submit" type="submit" class="btn btn-primary">REGISTER</button>
            </div>
        </form>
    </div>
    <footer class="footer-login">
        <p>&copy; Yohana Cindy Elsanjaya - 2024</p>
    </footer>
</body>
</html>
