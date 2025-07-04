<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Eksekutif - SISADAM</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('login_eksekutif/login_eksekutif.css') }}">
</head>
<body>
    <div class="background-pattern"></div>
    <div class="login-card">
        <div class="card-header">
            <img src="{{ asset('image/logo_sisadam.png') }}" alt="SISADAM Logo" class="logo-image">
            <h1 class="welcome-title">SISADAM</h1>
            <p class="welcome-subtitle">Silakan masuk ke akun Anda</p>
        </div>

        <div class="card-body">
            
            <form class="login-form" method="POST" action="{{ route('login.eksekutif') }}">
                @csrf
                
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <div class="input-wrapper">
                        <input 
                            type="text" 
                            id="username"
                            name="username" 
                            class="form-input @error('username') error @enderror" 
                            placeholder="Masukkan username" 
                            value="{{ old('username') }}"
                            required 
                            autofocus
                        >
                        <div class="input-border"></div>
                    </div>
                    @error('username')
                        <span class="field-error" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Kata Sandi</label>
                    <div class="input-wrapper">
                        <input 
                            type="password" 
                            id="password"
                            name="password" 
                            class="form-input @error('password') error @enderror" 
                            placeholder="Masukkan kata sandi" 
                            required
                        >
                        <div class="input-border"></div>
                    </div>
                    @error('password')
                        <span class="field-error" style="color: red; font-size: 0.875rem;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-options">
                    <label class="checkbox-container">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember" 
                            class="checkbox-input"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label">Ingat saya</span>
                    </label>
                </div>

                <button type="submit" class="submit-btn">
                    <span class="btn-text">Masuk Sekarang</span>
                    <div class="btn-gradient"></div>
                </button>
            </form>
        </div>

        @if (Route::has('register'))
        <div class="card-footer">
            <p class="signup-text">
                Belum memiliki akun? 
                <a href="{{ route('register') }}" class="signup-link">Buat akun baru</a>
            </p>
        </div>
        @endif
    </div>

    <!-- Scripts -->
    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        alert.remove();
                    }, 300);
                }, 5000);
            });

            // Add loading state to submit button
            const form = document.querySelector('.login-form');
            const submitBtn = document.querySelector('.submit-btn');
            const btnText = document.querySelector('.btn-text');
            
            form.addEventListener('submit', function() {
                submitBtn.disabled = true;
                btnText.textContent = 'Memproses...';
            });
        });
    </script>
</body>
</html>