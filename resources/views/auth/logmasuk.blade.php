<!DOCTYPE html>
<html class="perfect-scrollbar-off">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Pipeline Network Sdn. Bhd." />
    <meta name="author" content="Pipeline Network Sdn. Bhd." />
    <title>
        MOT - Automated Awareness Security Safety System
    </title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/jata-logo.png')}}" type="image/png" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />

    <!--TODO: changes-->
    <link href="{{ asset('plugins/icons/_dripicons.scss')}}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('plugins/icons/_materialdesignicons.scss')}}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('plugins/icons/_unicons.scss')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css-sass/app.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <!-- <link href="{{ asset('css/vendor/select.bootstrap5.css')}}" rel="stylesheet" type="text/css" /> -->
    <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <style>
        .logo-box {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo1 {
            max-height: auto;
        }

        .auth-content {
            background-color: #172b4d;
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 100vh;
            overflow: auto;
        }

        .custom-control-label {
            vertical-align: none !important;
        }

        .error-message {
            color: #f5365c;
            text-align: right;
            font-size: 0.8em;
            padding-top: 5px;
            padding-bottom: 0;
            margin-bottom: 0;
        }
    </style>
</head>

<body class="g-sidenav-show g-sidenav-pinned">

    <div class="main-content auth-content d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="logo-box">
                                <img class="logo1" src="{{ asset('images/jata-logo.png')}}">
                            </div>
                            <form>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning">
                                                <i class="uil-envelope-alt text-white"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" formControlName="username" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning">
                                                <i class="uil-lock-alt text-white"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Kata Laluan" type="password" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckLogin" type="checkbox" />
                                            <label class="custom-control-label text-white" for="customCheckLogin">
                                                <span>Ingat saya?</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right" style="text-align: right;">
                                        <label class="forget-label text-white">
                                            <span>Lupa Kata Laluan</span>
                                        </label>
                                    </div>
                                </div>
                            </form>

                            <div class="text-center">
                                <a href="/dashboard" type="button" class="btn btn-warning my-4 w-100">
                                    Log Masuk
                                </a>
                            </div>

                            <div>
                                <button type="button" class="btn btn-outline-warning w-100 my-2">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>