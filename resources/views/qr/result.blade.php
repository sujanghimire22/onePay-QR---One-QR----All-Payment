<!DOCTYPE html>
<html>
<head>
  <title>OnePay QR by SparkMinds Tech</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { 
      padding-top: 80px; 
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2); 
      font-family: 'Segoe UI', sans-serif; 
    }
    
    /* Navbar */
    .navbar-brand { font-weight: 700; font-size: 1.6rem; color: #ff5722 !important; }
    .nav-link { font-weight: 500; color: #555 !important; transition: 0.2s; }
    .nav-link:hover { color: #ff5722 !important; }

    /* QR Card */
    .qr-card { 
      transition: 0.3s; 
      border-radius: 10px; 
      max-width: 500px; 
      margin: auto; 
      padding: 20px; 
      background-color: #fff; 
      box-shadow: 0 5px 15px rgba(0,0,0,0.1); 
    }
    .qr-card img {
      width: 100%;      /* Scale to container width */
      height: auto;     /* Maintain aspect ratio */
      display: block;
      border-radius: 8px;
    }

    /* Buttons */
    .btn-lg { width: 100%; margin-bottom: 10px; }
    @media (min-width: 576px) { .btn-lg { width: auto; } }

    /* Footer */
    footer { background: #343a40; color:#fff; padding: 1.5rem 0; }
    footer a { color: #ff5722; text-decoration: none; }
    footer a:hover { text-decoration: underline; }

    /* Slogan */
    .slogan { font-size: 1.3rem; font-weight: 600; color: #ff5722; margin-top: 10px; }

  </style>
</head>
<body>

<!-- Header Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">OnePay QR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/#instructions">How it Works</a></li>
        <li class="nav-item"><a class="nav-link" href="https://smtech.com.np/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container py-2 d-flex flex-column align-items-center">
  <div class="text-center mb-2">
    <h2 class="fw-bold text-primary">Your QR Code is Ready!</h2>
  </div>

  <div class="qr-card text-center">
    <img src="{{ asset('generated/'.$filename) }}" alt="QR Poster">

    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-center gap-2">
      <a class="btn btn-success btn-lg fw-bold" href="{{ asset('generated/'.$filename) }}" download>
        Download QR Code
      </a>
      <a href="{{ route('qr.index') }}" class="btn btn-outline-primary btn-lg fw-bold">
        Generate Another
      </a>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="py-4">
  <div class="container text-center">
    <p class="mb-1 small">© 2026 OnePay QR. All rights reserved.</p>
    <p class="mb-1 small">Powered by <strong>SparkMinds Tech Pvt. Ltd.</strong></p>
    <p class="mb-0 small">
      Developed by <a href="https://www.sujanghimirey.com.np" target="_blank" rel="noopener">Sujan Ghimire</a>
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
