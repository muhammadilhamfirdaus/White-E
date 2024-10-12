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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!-- <link href="resources/css/ " rel="stylesheet" /> -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])



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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ route('welcome2') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="" width="100 " height="50">
                </a>
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <form class="d-flex me-4" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
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
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

        <main>
            @yield('content')
        </main>
    </div>

    <script>
        // Toggle the side navigation
        const sidebarToggle = document.body.querySelector('#sidebarToggle');
        if (sidebarToggle) {
            // Uncomment Below to persist sidebar toggle between refreshes
            // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
            //     document.body.classList.toggle('sb-sidenav-toggled');
            // }
            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.toggle('sb-sidenav-toggled');
                localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

</body>

</html>