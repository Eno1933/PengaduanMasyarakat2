<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                            @csrf
                            <!-- NIK Input -->
                            <div class="form-group">
                                <label for="nik"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nik" id="nik" placeholder="Your NIK" value="{{ old('nik') }}" required />
                            </div>
                            <!-- Nama Input -->
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Your Name" value="{{ old('nama') }}" required />
                            </div>
                            <!-- Username Input -->
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" value="{{ old('username') }}" required />
                            </div>
                            <!-- Password Input -->
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                            <!-- Password Confirmation Input -->
                            <div class="form-group">
                                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" required />
                            </div>
                            <!-- No. Telepon Input -->
                            <div class="form-group">
                                <label for="telp"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="telp" id="telp" placeholder="Your Phone Number" value="{{ old('telp') }}" />
                            </div>
                            <!-- Alamat Textarea -->
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Your Address" value="{{ old('alamat') }}" />                            </div>
                            <!-- Submit Button -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <!-- Signup Image Section -->
                    <div class="signup-image">
                        <figure><img src="{{ asset('images/signup-image.jpg') }}" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></scrip>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>