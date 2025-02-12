<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="main">
        <!-- Login form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <!-- Image Section -->
                    <div class="signin-image">
                        <figure><img src="{{ asset('images/signin-image.jpg') }}" alt="Sign in image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                    </div>

                    <!-- Form Section -->
                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        
                        <!-- Error Messages -->
                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Login Form -->
                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                            @csrf
                            <!-- Username Input -->
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" required />
                            </div>
                            <!-- Password Input -->
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                            <!-- Remember Me Checkbox -->
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term">
                                    <span><span></span></span>Remember me
                                </label>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>

                        <!-- Social Login -->
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>