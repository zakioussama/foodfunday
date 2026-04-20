<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

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

    <style>
        .btn-orange {
            background-color: #e75b1e;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 16px;
            padding: 10px 25px;
            border: none;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .btn-orange:hover {
            background-color: #fff;
            color: #e75b1e;
            border: 2px solid #e75b1e;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<!-- Full-screen banner with background -->
<div class="bg-image" style="background-image: url('{{ asset('images/banner.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div style="background-color: rgba(0, 0, 0, 0.85); padding: 40px; border-radius: 10px; width: 100%; max-width: 600px;">
        <h2 class="ft-title color-white text-center mb-4">Welcome to supemir</h2>
        <p class="text-center text-white mb-4">Please login or register to continue.</p>

        <div class="button-group">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn-orange">Log In</a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn-orange">Register</a>
            @endif
        </div>
    </div>
</div>

</body>
</html>
