<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/forgot.css') }}">
</head>
<body>
@include('layouts.toastr')
    <div class="card">
        <h2>Forgot Your Password?</h2>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <label>Email Address:</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <button type="submit">Send Reset Link</button>
        </form>
    </div>
</body>
</html>
