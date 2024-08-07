<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
/* Container */
.container {
    padding: 20px;
    max-width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Membuat container memenuhi tinggi viewport */
}

/* Card */
.card {
    width: 200%; /* Lebar card menjadi 200% dari lebar kontainer */
    max-width: 1000px; /* Membatasi lebar maksimum card untuk mencegah terlalu besar pada layar lebar */
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    margin-left: -50%; /* Menggeser card ke kiri untuk memusatkan di halaman */
    position: relative; /* Agar margin-left bekerja dengan baik */
}

/* Card Body */
.card-body {
    padding: 20px;
}

/* Image */
.login-image {
    max-width: 150px;
    height: auto;
    display: block;
    margin: 0 auto 20px; /* Mengatur gambar agar berada di tengah dan memberi jarak bawah */
}

/* Form Elements */
.form-group {
    margin-bottom: 15px;
}

.form-label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}

.input:focus {
    border-color: #4e73df;
    outline: none;
    box-shadow: 0 0 0 2px rgba(78, 115, 223, 0.25);
}

.is-invalid {
    border-color: #dc3545;
}

.feedback {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
    display: block;
}

/* Checkbox */
.form-check {
    margin-bottom: 15px;
}

.check {
    margin-right: 5px;
}

.check-label {
    font-size: 16px;
}

/* Button */
.btn {
    background-color: #4e73df;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #2e59d9;
}

/* Link */
.link {
    display: inline-block;
    margin-top: 10px;
    color: #4e73df;
    text-decoration: none;
    font-size: 16px;
}

.link:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Gambar di atas card -->
            <div class="text-center mb-4">
                <img src="{{ asset('img/klipaa-logo.png') }}" alt="Logo" class="login-image">
            </div>

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input class="check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
