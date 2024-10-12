@extends('layouts.app')

@section('content')
<!-- Carousel -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <div>
                    <h1>Oracle Cloud</h1>
                    <h2>Applications</h2>
                    <p>A complete suite of cloud applications delivering consistent processes and data across your business</p>
                    <a href="{{ route('home') }}"> <button class="btn">APP LAUCH</button> </a>
                </div>
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
@endsection
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