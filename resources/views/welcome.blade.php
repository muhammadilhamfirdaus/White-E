<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



    <style>
        /* Additional styles to handle sidebar visibility */
        #sidebar {
            transition: margin 0.3s ease;
        }

        /* Hide sidebar initially */
        .hide-sidebar {
            margin-left: -250px;
        }

        /* Adjust main content to full width when sidebar is hidden */
        .expand-content {
            margin-left: 0 !important;
        }

        /* Rotate icon when collapsed is open */
        .rotate-icon {
            transition: transform 0.3s ease;
        }

        .rotate-icon.collapsed {
            transform: rotate(-90deg);
        }

        /* Align search bar and profile */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-area {
            display: flex;
            align-items: center;
        }

        .profile-area .username {
            margin-right: 10px;
        }

        .profile-area .dropdown-menu {
            right: 0;
            left: auto;
        }

        /* Smaller hamburger button */
        #toggle-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 7px;
            border-radius: 5px;
        }

        .dashboard-section h4 {
            margin-bottom: 20px;
        }

        .dashboard-section {
            margin-bottom: 30px;
        }

        .shortcut-group {
            margin-bottom: 10px;
        }

        .shortcut-group a {
            display: block;
            margin-bottom: 5px;
        }

        .list-group-item {
            border: none;
            padding: 0.5rem 0;
        }

        .list-group-item a {
            text-decoration: none;
            color: #000;
        }

        .btn-group {
            margin-top: 20px;
        }

        /* Background for the main content with a semi-transparent overlay */
        #sidebar {
            background-image: url("{{ asset('images/main-content.jpg') }}");
            /* Replace with your image URL */
            /* background-size: cover; */
            background-position: center;
            position: relative;
            z-index: 1;
        }

        /* Semi-transparent overlay */
        #sidebar::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.2);
            /* Adjust transparency level */
            z-index: -1;
        }

        /* Text color adjusted for contrast */
        #sidebar h4,
        #sidebar .list-group-item a {
            color: white;
            /* Adjust to ensure good contrast with the background */
        }

        .container-sections {
            display: flex;
            height: 40vh;
        }

        .section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .section-1 {
            background: url("{{ asset('images/bg1.jpg') }}") no-repeat center center/cover;
        }

        .section-2 {
            background: url("{{ asset('images/bg2.jpg') }}") no-repeat center center/cover;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 1.1rem;
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>


<body>

    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">WHITE-E</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to Oracle</h5>
                        <p>Power your innovation with cloud solutions</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Scalable Cloud Solutions</h5>
                        <p>Optimize your business with high performance solutions</p>
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
        <div class="container my-5">
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

        <!-- Footer -->
        <footer class="bg-dark text-white py-4">
            <div class="container text-center">
                <p>&copy; 2023 Oracle. All Rights Reserved.</p>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="mx-2"><a href="#" class="text-white">Privacy Policy</a></li>
                    <li class="mx-2"><a href="#" class="text-white">Terms of Use</a></li>
                    <li class="mx-2"><a href="#" class="text-white">Contact Us</a></li>
                </ul>
            </div>
        </footer>
    </section>

    <script>
        // JavaScript to handle sidebar toggle
        document.getElementById('toggle-btn').addEventListener('click', function() {
            let sidebar = document.getElementById('sidebar');
            let mainContent = document.getElementById('main-content');

            // Toggle sidebar visibility
            sidebar.classList.toggle('hide-sidebar');

            // Adjust main content when sidebar is hidden
            mainContent.classList.toggle('expand-content');
        });
    </script>

</body>

</h>