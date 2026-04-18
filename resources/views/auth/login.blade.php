<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Favicon and Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link id="changeable-colors" rel="stylesheet" href="{{ asset('css/colors/orange.css') }}">

    <!-- JS -->
    <script src="{{ asset('js/modernizer.js') }}"></script>
</head>
<body>

<div class="bg-image" style="background-image: url('{{ asset('images/banner.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div style="background-color: rgba(0, 0, 0, 0.8); padding: 40px; border-radius: 10px; width: 100%; max-width: 500px;">
        <h2 class="ft-title color-white text-center mb-4">Login</h2>

            <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success" style="color: white;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label" style="color: white;">Email</label>
                <input id="email" class="form-control" style="color: white; background-color: #333; border-color: #555;" type="email" name="email" value="{{ old('email') }}" required autofocus />
                @error('email')
                    <small style="color: white;">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label" style="color: white;">Password</label>
                <input id="password" class="form-control" style="color: white; background-color: #333; border-color: #555;" type="password" name="password" required />
                @error('password')
                    <small style="color: white;">{{ $message }}</small>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me" style="color: white;">Remember Me</label>
            </div>

            <!-- Actions -->
            <div class="d-flex justify-content-between align-items-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" style="color: white; text-decoration: underline;">Forgot Password?</a>
                @endif
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </form>


    </div>
</div>

</body>
</html>
