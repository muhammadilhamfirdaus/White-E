<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .custom-bg {
            background-color: #6c757d !important;
            /* Ganti dengan warna yang diinginkan */
        }

        .container {
            padding-left: 0;
            padding-right: 0;
        }

        .bg-white {
            background-color: white;
        }

        .bg-light-gray {
            background-color: #f8f9fa;
            /* Warna abu-abu muda */
        }

        .hero-image {
            max-width: 100%;
            height: auto;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
        }

        .hero-text {
            max-width: 400px;
        }
    </style>
</head>

<body>

    <section class="m-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">WHITE-E</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Carousel -->
        <div id="mainCarousel" class="carousel slide bg-black" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/crl2.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h1>Oracle Cloud</h1>
                        <h2>Applications</h2>
                        <p>A complete suite of cloud applications delivering consistent processes and data across your business</p> -->
                        <a href="{{ route('home') }}"><button class="btn btn-dark">APP LAUNCH</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/crl3.png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="{{ route('home') }}"><button class="btn btn-dark">APP LAUNCH</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/mt1.png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="{{ route('home') }}"><button class="btn btn-dark">APP LAUNCH</button></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Content Section -->
        <div class="bg-white min-vh-100 d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6">
                        <h1>WHITE-E: Revolutionizing ERP Solutions</h1>
                        <p class="lead">WHITE-E offers cutting-edge ERP software, streamlining operations with advanced features and real-time insights.</p>
                        <a href="#" class="btn btn-primary">Discover ERPInspire</a>
                        <a href="#" class="btn btn-secondary">Get ERP Solutions</a>
                    </div>
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="ERP Dashboard">
                    </div>
                </div>
            </div>
        </div>

        <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center">
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="{{ asset('images/W3.png') }}" alt="ERP Inspire Image" class="hero-image">
                    </div>
                    <div class="col-md-6 hero-content">
                        <div class="hero-text">
                            <h1>WHITE-E leads with a decentralized Transaction, Crypto, NFT.</h1>
                            <p>Experience the power of WHITE-E decentralized system, enabling global connectivity and financial inclusivity without traditional banking barriers.</p>
                            <a href="#" class="btn btn-primary">Start Your Journey</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solutions Section -->
        <div class="container my-5 bg-white">
            <h2 class="text-center mb-4">Our Solutions</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Solution 1">
                        <div class="card-body">
                            <h5 class="card-title">Cloud Solutions</h5>
                            <p class="card-text">Empower your business with scalable and secure cloud solutions.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Solution 2">
                        <div class="card-body">
                            <h5 class="card-title">Data Management</h5>
                            <p class="card-text">Optimize your data and make informed decisions with Oracle.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Solution 3">
                        <div class="card-body">
                            <h5 class="card-title">Security</h5>
                            <p class="card-text">Protect your data and business with advanced security solutions.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>