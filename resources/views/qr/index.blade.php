<!DOCTYPE html>
<html>
<head>
  <title>OnePay QR – One QR. All Payments | SparkMinds Tech</title>

<!-- Basic Meta -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="OnePay QR by SparkMinds Tech, in collaboration with Sujan Ghimire, lets businesses accept payments from all major banks, wallets, and ConnectIPS using one unified QR code. Simple, secure, and future-ready digital payments QR in Nepal.">
<meta name="keywords" content="OnePay QR, Unified QR Nepal, NepalPay, FonePay, ConnectIPS, QR Payment Nepal, Digital Payments, SparkMinds Tech, One QR All Payments">
<meta name="author" content="SparkMinds Tech, Sujan Ghimire">
<meta name="robots" content="index, follow">

<!-- Canonical -->
<link rel="canonical" href="https://oneqr.sparkminds.com.np">

<!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
<meta property="og:title" content="OnePay QR – One QR. All Payments">
<meta property="og:description" content="Accept payments from banks, wallets, and ConnectIPS with one unified QR. An innovative unified QR payment solution by SparkMinds Tech, in collaboration with Sujan Ghimire.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://oneqr.sparkminds.com.np">
<meta property="og:image" content="https://oneqr.sparkminds.com.np/assets/smtech.png">
<meta property="og:site_name" content="OnePay QR">

<!-- Twitter / X -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="OnePay QR – One QR. All Payments">
<meta name="twitter:description" content="Unified QR payment system for Nepal. Works with banks, wallets & ConnectIPS.">
<meta name="twitter:image" content="https://oneqr.sparkminds.com.np/assets/smtech.png">
<meta name="twitter:creator" content="@sparkmindstech">

<!-- Mobile / PWA -->
<meta name="theme-color" content="#ff5722">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="OnePay QR">

<!-- Favicon (using SparkMinds logo) -->
<link rel="icon" type="image/png" href="/assets/smtech-logo.png">
<link rel="apple-touch-icon" href="/assets/smtech-logo.png">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { padding-top: 80px; background: linear-gradient(135deg, #f5f7fa, #c3cfe2); font-family: 'Segoe UI', sans-serif; }
    
    /* Navbar */
    .navbar-brand { font-weight: 700; font-size: 1.6rem; color: #ff5722 !important; }
    .nav-link { font-weight: 500; color: #555 !important; transition: 0.2s; }
    .nav-link:hover { color: #ff5722 !important; }

    /* QR Cards */
    .qr-card { transition: 0.3s; border-radius: 10px; }
    .qr-valid { border: 2px solid #28a745 !important; background-color: #d4edda; color:#155724; }
    .qr-invalid { border: 2px solid #dc3545 !important; background-color: #f8d7da; color:#721c24; }
    .qr-preview {
      min-height: 80px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:0.9rem;
      color:#6c757d;
      overflow-y: auto;
      word-break: break-word;
      padding: 0.5rem;
      border-radius: 5px;
      background: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    /* Section Titles */
    h1, h5 { color: #ff5722; }

    /* Footer */
    footer { background: #343a40; color:#fff; padding: 1.5rem 0; }
    footer a { color: #ff5722; text-decoration: none; }
    footer a:hover { text-decoration: underline; }

    /* Buttons */
    .btn-dark { background: #ff5722; border: none; }
    .btn-dark:hover { background: #e64a19; }

    /* Instructions */
    .instructions { background: #fff3e0; border-left: 5px solid #ff5722; padding: 1rem; border-radius: 10px; }

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
        <li class="nav-item"><a class="nav-link" href="#instructions">How it Works</a></li>
        <li class="nav-item"><a class="nav-link" href="https://smtech.com.np/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container py-5">
  <div class="text-center mb-4">
    <h1 class="fw-bold">OnePay QR </h1>
    <p class="slogan">“One QR. All Payments.”</p>
    <p class="text-muted fs-6">
      Upload your <strong>NepalPay</strong> and <strong>FonePay</strong> QR codes to generate a <strong>Unified QR</strong> poster.
      Works with all major banks, wallets, and ConnectIPS.
    </p>
  </div>

  <!-- QR Form -->
  <form action="{{ route('qr.generate') }}" method="POST" enctype="multipart/form-data" class="card shadow-sm p-4 mb-5">
    @csrf
    <div class="row g-4">

      <!-- NepalPay QR -->
      <div class="col-md-6">
        <div class="qr-card card p-3 text-center" id="nepalCard">
          <h5 class="fw-bold mb-2">NepalPay QR</h5>
          <input type="file" name="nepalpay" id="nepalpay" class="form-control mb-2" accept="image/*" required>
          <div class="qr-preview" id="nepalPreview" title="Full QR content will appear here.">Waiting for upload...</div>
        </div>
      </div>

      <!-- FonePay QR -->
      <div class="col-md-6">
        <div class="qr-card card p-3 text-center" id="foneCard">
          <h5 class="fw-bold mb-2">FonePay QR</h5>
          <input type="file" name="fonepay" id="fonepay" class="form-control mb-2" accept="image/*" required>
          <div class="qr-preview" id="fonePreview" title="Full QR content will appear here.">Waiting for upload...</div>
        </div>
      </div>

      <!-- Options -->
      <div class="col-md-6">
        <label class="form-label fw-bold">MCC Source Priority</label>
        <select name="priority" class="form-select" required>
          <option value="nepalpay">NepalPay First</option>
          <option value="fonepay">FonePay First</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label fw-bold">Business Name Mode</label>
        <select name="nameMode" id="nameMode" class="form-select" required>
          <option value="auto">Auto from QR</option>
          <option value="custom">Custom</option>
        </select>
        <input type="text" name="customName" id="customName" class="form-control mt-2" placeholder="Enter Business Name" style="display:none;">
      </div>

      <!-- Submit -->
      <div class="col-12 text-center">
        <button class="btn btn-dark w-50 py-2 fw-bold">Generate QR </button>
      </div>
    </div>
  </form>

  <!-- Instructions -->
  <div class="instructions mb-5" id="instructions">
    <h5 class="fw-bold mb-2">How it works:</h5>
    <ul class="list-unstyled ms-3 mb-0">
      <li>1. Upload your NepalPay and FonePay QR images.</li>
      <li>2. MCC, Name, and City sources can be prioritized for correct routing.</li>
      <li>3. QR previews show <span class="text-success">green</span> for valid QR, <span class="text-danger">red</span> for invalid QR.</li>
      <li>4. Click "Generate" to create a unified QR poster readable by all apps.</li>
    </ul>
  </div>
</div>

<!-- Footer -->
<footer class="py-4">
  <div class="container text-center">
    <p class="mb-1 small">© 2026 OnePay QR. All rights reserved.</p>

    <p class="mb-1 small">
      Powered by <strong>SparkMinds Tech Pvt. Ltd.</strong>
    </p>

    <p class="mb-0 small">
      Developed by
      <a href="https://www.sujanghimirey.com.np" target="_blank" rel="noopener">
        Sujan Ghimire
      </a>
    </p>
  </div>
</footer>


<!-- QR Scanner -->
<script type="module">
 // Core QR merging logic removed for public repository.
// This file demonstrates structure only.
// Contact for collaboration or technical discussion.
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
