@extends('layouts.app')

@section('content')
<div class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">About COMSATS Courses</h1>
                <p class="lead mb-4">COMSATS University Islamabad is a public university in Pakistan offering quality education in various disciplines.</p>
                <p>Our course management system provides students and faculty with a seamless platform to manage academic activities, track progress, and enhance the learning experience.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary me-2">Learn More</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/comsats.jpg') }}" alt="COMSATS Campus" class="img-fluid rounded shadow">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-book text-primary fs-1 mb-3"></i>
                        <h3 class="h5">100+ Courses</h3>
                        <p class="text-muted">Wide range of undergraduate and graduate programs</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-people text-primary fs-1 mb-3"></i>
                        <h3 class="h5">Expert Faculty</h3>
                        <p class="text-muted">Highly qualified and experienced teaching staff</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-laptop text-primary fs-1 mb-3"></i>
                        <h3 class="h5">Modern Facilities</h3>
                        <p class="text-muted">State-of-the-art labs and learning resources</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection