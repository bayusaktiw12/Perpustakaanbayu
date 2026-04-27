<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 3 BANJAR</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- CSS tambahan untuk full screen -->
    <style>
        /* Reset dasar */
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Semua parent full height */
        .container-scroller,
        .page-body-wrapper,
        .full-page-wrapper,
        .content-wrapper {
            height: 100vh !important;
            width: 100vw !important;
            min-height: 100vh !important;
            min-width: 100vw !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        /* Background login full screen */
        .login-bg {
        width: 100vw;
        height: 100vh;
        background-image: url('{{ asset("assets/images/auth/lockscreen-bg.jpg") }}'); /* path harus sesuai public */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
}

        /* Card responsif */
        .card {
            max-width: 400px;
            width: 90%;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0 justify-content-center">
            <div class="content-wrapper d-flex align-items-center justify-content-center login-bg">
                <div class="card mx-auto">
                    <div class="card-body px-5 py-5">

                        <h3 class="card-title text-center mb-4">PERPUSTAKAANKU</h3>

                        {{-- ALERT ERROR --}}
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- FORM LOGIN --}}
                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf

                            <div class="form-group">
                                <label>Email</label>
                                <input 
                                    type="text" 
                                    name="email" 
                                    class="form-control p_input" 
                                    placeholder="Masukkan email"
                                    required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input 
                                    type="password" 
                                    name="password" 
                                    class="form-control p_input" 
                                    placeholder="Masukkan password"
                                    required>
                            </div>

                            <div class="form-group d-flex align-items-center justify-content-between">
                                <a href="#" class="forgot-pass">Lupa Password</a>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">
                                    Masuk
                                </button>
                            </div>

                            <p class="sign-up text-center mt-3">
                                Belum punya akun? <a href="#">Daftar</a>
                            </p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
</body>
</html>