<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nivora Technology">
    <link rel="icon" href="{{ asset('back/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('back/assets/images/favicon.png') }}" type="image/x-icon">
    <title>Nivora Technology OÜ - Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('back/assets/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/responsive.css') }}">
</head>
<body>
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div>
                        <a class="logo" href="/">
                            <img class="img-fluid for-light" src="{{ asset('front/images/logo.png') }}" alt="Nivora Technology">
                            <img class="img-fluid for-dark" src="{{ asset('front/images/logo.png') }}" alt="Nivora Technology">
                        </a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h3>Sign in to account</h3>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label" for="email">Email Address</label>
                                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" id="password" name="password" required autocomplete="current-password" placeholder="*********">
                                </div>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="remember_me" type="checkbox" name="remember">
                                    <label class="text-muted" for="remember_me">Remember password</label>
                                </div>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('back/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('back/assets/js/config.js') }}"></script>
    <script src="{{ asset('back/assets/js/script.js') }}"></script>
</div>
</body>
</html>
