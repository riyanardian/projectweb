<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Perpustakaan Daerah</title>
</head>

<body>
    <div id="container">
        @if (!isset($hideHeader) || !$hideHeader)
        <div id="header">
            <nav class="navbar navbar-expand-lg" style="background: rgb(63, 60, 214)">
                <div class="container">
                    <a class="navbar-brand" href="/beranda">
                        <img src="{{ asset('assets/css/img/logo1.png') }}" width="70px" height="70px">
                    </a>
                    <span class="navbar-text" style="color: white; font-weight: bold; font-size: 24px;">
                        Perpustakaan Daerah
                    </span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                                    Selamat datang kembali, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li class="nav-item">
                                <button class="btn btn-sm btn-primary" type="button"
                                    onclick="window.location.href='/login'">Login</button>
                            </li>
                            <li class="nav-item">
                                <button class="btn btn-sm btn-outline-warning" type="button" style="margin-left: 10px"
                                    onclick="window.location.href='/register'">Register</button>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @endif

        <div class="container mt-4" id="body">
            @yield('container')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
