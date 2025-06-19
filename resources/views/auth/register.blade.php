<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link id="changeable-colors" rel="stylesheet" href="{{ asset('css/colors/orange.css') }}">
    <script src="{{ asset('js/modernizer.js') }}"></script>
    <style>
        body {
            background-image: url('{{ asset('images/banner.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-wrapper {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 30px;
            border-radius: 8px;
            color: white;
            width: 100%;
            max-width: 500px;
        }

        .form-title {
            font-size: 2rem;
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label,
        .form-control {
            color: white;
        }

        .form-control {
            background-color: #333;
            border-color: #555;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .form-footer {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="form-wrapper">
        <h2 class="form-title ft-title color-white">Register</h2>

        @if ($errors->any())
            <div class="alert alert-danger text-white">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="d-flex justify-content-between align-items-center form-footer">
                <a href="{{ route('login') }}" style="color: white; text-decoration: underline;">Already registered?</a>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
