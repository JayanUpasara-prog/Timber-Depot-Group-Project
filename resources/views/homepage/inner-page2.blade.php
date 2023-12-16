<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forest Department, Melsiripura.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo" class="logo-container">
        <a href="{{ url('/#####') }}"><img src="assets/img/favicon.jpg" alt="" title="" class="image-size"  /></a>

        <h1><a href="{{ url('/#####') }}"><span>Forest Department,</span> Melsiripura.</a></h1>
       </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/#####') }}">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="margin-top: 20px;">Notices &amp; Gazzets</h2>
          <ol>
            <li><a href="{{ url('/#####') }}">Home</a></li>
            <li>Notices &amp; Gazzets</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page pt-4">
      <div class="container">

        <div class="notice">
          <h3>Notices are Here!</h3>
          <br>

          <ul>
            <li>Prevent Forest Fires - Follow the Rules!
              With the dry season approaching, it's crucial to follow
              fire safety guidelines in the forest. Do not light open fires, discard cigarettes responsibly, and report any signs of wildfires immediately to [037-2260500].
              &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="">Read More></a>
            </li>
            @foreach($viewNotice as $notice)
                <li>{{ $notice->notice }}</li>
            @endforeach
          </ul>
        </div>

        


        <br><br>
        <div class="notice">
    <h3>You can download the gazettes here!</h3><br>
    
    {{-- Check if there are any gazettes --}}
    @if ($viewNotice->isNotEmpty())
        {{-- Get the latest gazette --}}
        @php
            $latestGazette = $viewNotice->last();
        @endphp

        {{-- Display the latest gazette --}}
        <embed src="{{ asset("storage/gazettes/{$latestGazette->gazette}") }}" type="application/pdf" width="100%" height="500px">

        <!-- Add a Download Button for the latest gazette -->
        <a href="{{ asset("storage/gazettes/{$latestGazette->gazette}") }}" download="{{ $latestGazette->gazette }}">
            <button>Download PDF</button>
        </a>
    @else
        <p>No gazettes available.</p>
    @endif
</div>

    </section>

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  @include('backtotop')

</body>

</html>