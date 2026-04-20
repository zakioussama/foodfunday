<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Reservations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Color CSS -->
    <link id="changeable-colors" rel="stylesheet" href="{{ asset('css/colors/orange.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('js/modernizer.js') }}"></script>
</head>
<body>

<!-- Background image and content -->
<div class="bg-image" style="background-image: url('{{ asset('images/banner.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; padding: 40px 0;">
    <div class="container text-white position-relative">
        
        <!-- Logout Button Top Right -->
        <div style="position: absolute; top: 20px; right: 20px;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="book-btn-boob" style="font-size: 1rem; padding: 8px 16px; min-width: auto;">
                    Logout
                </button>
            </form>
        </div>

        <div class="text-center mb-5">
            <h2 class="ft-title color-white">Admin Panel - Reservations</h2>
            <p>Manage all incoming reservations here.</p>
        </div>

        @foreach($reservations as $reservation)
            <div style="background-color: rgba(44, 44, 45, 0.6); padding: 20px; margin-bottom: 25px; border-radius: 8px;">
                <h4 style="color: white; font-size: 1.6rem;">{{ $reservation->form_name }}</h4>
                <p style="color: white; font-size: 1.2rem;"><strong>Email:</strong> {{ $reservation->email }}</p>
                <p style="color: white; font-size: 1.2rem;"><strong>Phone:</strong> {{ $reservation->phone }}</p>
                <p style="color: white; font-size: 1.2rem;"><strong>No. of Persons:</strong> {{ $reservation->no_of_persons }}</p>
                <p style="color: white; font-size: 1.2rem;"><strong>Date:</strong> {{ $reservation->date }}</p>
                <p style="color: white; font-size: 1.2rem;"><strong>Time:</strong> {{ $reservation->time }}</p>
                <p style="color: white; font-size: 1.2rem;"><strong>Preferred Food:</strong> {{ $reservation->preferred_food }}</p>
                <p style="color: white; font-size: 1.2rem;"><strong>Occasion:</strong> {{ $reservation->occasion }}</p>

                <a href="{{ route('admin.reservations.delete', $reservation->id) }}"
                onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this reservation?')) document.getElementById('delete-form-{{ $reservation->id }}').submit();"
                style="color: #ff4d4d; text-decoration: underline; cursor: pointer; font-size: 1.1rem;">
                Delete
                </a>

                <form id="delete-form-{{ $reservation->id }}" action="{{ route('admin.reservations.delete', $reservation->id) }}" method="POST" style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        @endforeach

        <div class="d-flex justify-content-center mt-4">
            {{ $reservations->links() }}
        </div>
    </div>
</div>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- ALL PLUGINS -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
