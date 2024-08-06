<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
/* Global Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fc;
    margin: 0;
    padding: 0;
}

/* Container */
.container {
    margin-top: 50px;
    display: flex;
    justify-content: center;
}

/* Card Styles */
.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

/* Card Body */
.card-body {
    padding: 20px;
}

/* Form Styles */
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
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.input.is-invalid {
    border-color: #dc3545;
}

.feedback {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 5px;
}

.form-check {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.check {
    margin-right: 10px;
}

.check-label {
    font-weight: normal;
}

/* Button Styles */
.btn {
    background-color: #4e73df;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    text-align: center;
    display: inline-block;
    text-decoration: none;
}

.btn:hover {
    background-color: #2e59d9;
}

.link {
    color: #007bff;
    text-decoration: none;
    font-size: 0.875rem;
}

.link:hover {
    text-decoration: underline;
}

/* Image Styles */
.login-image {
    max-width: 100px;
    height: auto;
    display: block;
    margin: 0 auto 20px auto;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .container {
        margin-top: 20px;
    }

    .card {
        margin: 0 15px;
    }
}

@media (max-width: 576px) {
    .btn {
        width: 100%;
        padding: 12px;
        font-size: 1.125rem;
    }

    .link {
        font-size: 0.75rem;
    }
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