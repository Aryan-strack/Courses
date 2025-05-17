@extends('layouts.app')

@section('content')
<div class="contact-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                <p class="lead text-muted">Have questions? We're here to help!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Send us a message</h3>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Contact Information</h3>
                        <div class="mb-4">
                            <h4 class="h6"><i class="bi bi-geo-alt-fill text-primary me-2"></i> Address</h4>
                            <p class="ms-4">Pir Murad, Vehari, Punjab, Pakistan</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="h6"><i class="bi bi-telephone-fill text-primary me-2"></i> Phone</h4>
                            <p class="ms-4">+92 51 111 001 007</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="h6"><i class="bi bi-envelope-fill text-primary me-2"></i> Email</h4>
                            <p class="ms-4">info@comsats.edu.pk</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="h6"><i class="bi bi-clock-fill text-primary me-2"></i> Office Hours</h4>
                            <p class="ms-4">Monday - Friday: 8:30 AM - 4:30 PM</p>
                        </div>
                        <div class="mt-4">
                            <h4 class="h6 mb-3">Follow Us</h4>
                            <div class="d-flex gap-3">
                                <a href="#" class="text-primary"><i class="bi bi-facebook fs-4"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-twitter fs-4"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-linkedin fs-4"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-instagram fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection