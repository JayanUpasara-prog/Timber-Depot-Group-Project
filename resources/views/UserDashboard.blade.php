<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style> -->
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
</head>
<body>

<!-- <div class="p-2 bg-light text-black text-center">
  <img src="Srilanka.jpg" class="float-start img-fluid" alt="Srilanka" width="100" height="100">
  <h1 class="text-success text-start">Forest Department,</h1>
  <p class="text-dark text-start">Melsiripura</p> 
</div> -->

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="text-success">Forest Department,</span>
      Melsiripura
    </a>
    <form class="d-flex mx-auto text-right" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="btn-group">
      <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/dashboardImg/face.jpg" alt="Profile Photo" class="rounded-circle" width="20" height="20">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">My Profile</a></li>
          <li><a class="dropdown-item" href="#">Log Out</a></li>
      </ul>
  </div>
</nav>

<!-- <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->
</br>

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
          <div class="position-sticky">
              <ul class="nav flex-column nav-pills nav-stacked">
                  <li class="nav-item">
                      <a class="nav-link bg-success active" href="UserDashboard">
                          Dashboard/My Profile
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Registration">
                          Registration
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Renew">
                          Renew
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="OwnershipChange">
                        Ownership Change
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="PermitRequest">
                        Permit Request
                    </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="StockBookUpdate">
                        StockBook Update
                     </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="help">
                        Help
                    </a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link" href="UserLogout">
                       Logout
                  </a>
               </li>
              </ul>
          </div>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
        
      <div class="container mt-2">
        <form>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/dashboardImg/face.jpg" alt="User Profile" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">TD-XXXX</p>
                            <button type="button" class="btn btn-primary">Edit Profile</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Information</h5>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" value="John Doe" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="john@example.com" readonly>
                            </div>
                            <div class="mb-3">
                              <label for="nic" class="form-label">NIC Number</label>
                              <input type="text" class="form-control" id="nic" value="99xxxxxxxv" readonly>
                            </div>
                            <div class="mb-3">
                              <label for="contact" class="form-label">Contact</label>
                              <input type="text" class="form-control" id="contact" value="0712345678" readonly>
                            </div>
                            <div class="mb-3">
                              <label for="address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="address" value="Srilanka" readonly>
                            </div>
                            <!-- Add more user data fields here as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </main>
 </div>
</div>  


<!-- ======= Footer ======= -->
<footer class="footer mt-2">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-4">
        <div class="footer-logo">

          <a class="navbar-brand" href="#">Forest Department,<br>Melsiripura.</a>
          <p> HF4C+JG4, Ibbagamuwa, <br> Melsiripura.<br>
              info@example.com<br>
              0372259591</p>
        </div>
      </div>


      <div class="col-md-12 col-lg-4">
        <div class="list-menu">

          <h4>About Us</h4>

       <p>In our island's forests, we enjoy nature's gifts: fresh air, pure water,diverse life, and vital ecosystem services. The Forest Department diligently safeguards these invaluable landscapes. It also serves the public at headquarters and in the field. Together, we nurture our natural treasures for all to cherish.</p>
        </div>
      
      </div>



      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Quick Links</h4>
      
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Sign in</a></li>
            <li><a href="#">My Account</a></li>
          </ul>

        </div>
      </div>

    
      
      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Follow Us</h4>
      
          <ul class="list-unstyled">
            <li><a href="" class="twitter"><i class="bi bi-twitter"></i></a></li>
            <li> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#" class="instagram"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#" class="gmail"><i class="bi bi-google"></i></a></li>
          </ul>

        </div>
      </div>


    </div>
  </div>

  

</footer><!-- End  Footer -->

</body>
</html>
