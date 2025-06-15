<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Satu Data Mahasiswa')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('navbar/navbar_footer.css') }}">
    
    @stack('styles') {{-- Changed from @yield('styles') to @stack('styles') --}}
    @yield('styles') {{-- Keep this for backward compatibility --}}
</head>
<body>
    <div class="header">
        <a href="{{ route('dashboardPublic') }}" class="logo-link"> 
            <div class="logo">
                <img src="{{ asset('image/logo_sisadam.png') }}" alt="Logo">
                <div class="brand">Satu Data <br> Mahasiswa</div>
            </div>
        </a>
        
        <div class="header-right-nav">
            <a href="#" class="nav-link">About Us</a>
            <a href="#" class="nav-link">Dataset</a>
            <a href="{{ route('login.eksekutif') }}" class="login-button">Login Eksekutif</a>
        </div>
    </div>

    @yield('content') {{-- Slot untuk konten utama halaman --}}

    <div class="footer">
        <div class="left-text">
            <div class="footer-title">SISADAM</div>
            <div class="footer-subtitle">Sistem Satu Data Mahasiswa</div>
        </div>
        <div class="right-text">
            Made With Love By Sempol Itik
        </div>
    </div>

    @stack('scripts') {{-- Changed from @yield('scripts') to @stack('scripts') --}}
    @yield('scripts') {{-- Keep this for backward compatibility --}}
</body>
</html>