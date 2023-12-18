<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  <style>
  body {
      
      background-image: url('assets/img/4907157.jpg');   
    
      background-size: cover; 
      
     
      background-color: #f0f0f0; 
      
    
      background-repeat: no-repeat;
      background-position: center center;
     
    }
    </style>
</head>
<body>



<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/#####') }}">
      <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="text-success">Forest Department,</span>
      Melsiripura
    </a>
   
    <div class="btn-group">
      <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Photo" class="rounded-circle" width="20" height="20">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ url('/AdminDashboard') }}">My Profile</a></li>
          <li><a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a></li>
        </ul>
  </div>
</nav>


</br>

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
      @include('adminSideNav')
      </nav>

<!-- Main Content -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        <div class="row">
            <!-- Stripe Account Box -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Stripe Account</h5>
                        <p class="card-text">Username: baiscope00@gmail.com</p>
                        <p class="card-text">Password: Asitha@99</p>
                        <p class="card-text">Website: <a href="https://stripe.com" target="_blank">Stripe Website</a></p>
                      
                    </div>
                </div>
            </div>

            <!-- Intercom Account Box -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Intercom Account</h5>
                        <p class="card-text">Username: YourIntercomUsername</p>
                        <p class="card-text">Password: YourIntercomPassword</p>
                        <p class="card-text">Website: <a href="https://www.intercom.com" target="_blank">Intercom Website</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
 

  </div>
</div>



<!-- ======= Footer ======= -->
@include('footer')<!-- End  Footer -->

</body>
</html>
