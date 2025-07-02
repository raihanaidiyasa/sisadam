<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Satu Data Mahasiswa')</title>

    <link rel="icon" type="image/png" href="{{ asset('image/logo_sisadam.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('navbar/navbar_eksekutif.css') }}">
    @stack('styles')
    @yield('styles')
</head>
<body>

<header class="header">
    <a href="{{ route('dashboard.eksekutif') }}" class="logo-link">
        <div class="logo-section">
            <img src="{{ asset('image/logo_sisadam.png') }}" class="logo-img" alt="Logo SISADAM">
            <div class="logo-text">Satu Data<br>Mahasiswa</div>
        </div>
    </a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="dashboard-public-btn">Logout</button>
    </form>
</header>

{{-- Konten utama dibungkus di sini agar bisa mendorong footer --}}
<div class="main-content">
    @yield('content')
</div>

<div class="footer">
    <div class="left-text">
        <div class="footer-title">SISADAM</div>
        <div class="footer-subtitle">Sistem Satu Data Mahasiswa</div>
    </div>
    <div class="right-text">
        Made With Love By Sempol Itik
    </div>
</div>

@stack('scripts')
@yield('scripts')
</body>
</html>