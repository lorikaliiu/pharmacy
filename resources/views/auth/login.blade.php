<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/logincss/login.css">
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        {{-- <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label> --}}
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form method="POST" action="{{ route('login') }}" class="user">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" class="form-style" placeholder="Email"
                                                        name="email" id="email">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" placeholder="Password"
                                                        name="password" id="password">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button {{ __('Anmelden') }} class="btn mt-4">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">Sign Up</h4>
                                            <form method="POST" action="{{ route('register') }}" class="user">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-style" placeholder="Full Name"
                                                        id="name" name="name">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" class="form-style" placeholder="Email"
                                                        id="email" name="email">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style" placeholder="Password"
                                                        name="password" id="password">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style"
                                                        placeholder="Reapet Password" name="password_confirmation"
                                                        id="password_confirmation">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button {{ __('Register') }} class="btn mt-4">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
