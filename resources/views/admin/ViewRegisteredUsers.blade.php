<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Registered Users</title>
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
        <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24"
          class="d-inline-block align-text-top">
        <span class="text-success">Forest Department,</span>
        Melsiripura
      </a>
      <form class="d-flex mx-auto text-right" role="search" method="GET" action="{{ route('search1') }}">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="{{ asset('storage/default.jpg') }}" alt="Profile Photo" class="rounded-circle" width="20"
            height="20">
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
        <!-- Side Navigation Bar -->
        @include('adminSideNav')
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
          <div class="p mb-2 bg-success text-white text-center">
            <h2>View Registered Users</h2>
          </div>

          <div>
            <table class="table table-bordered border-primary">
              <tr>
                <th>No.</th>
                <th>NIC No.</th>
                <th>Name</th>
                <th>View</th>
              </tr>
              @foreach($ViewRegisteredRecords as $ViewRegisteredRecords)
              <tr>
                <td>{{ $ViewRegisteredRecords->id }}</td>
                <td>{{ $ViewRegisteredRecords->idno }}</td>
                <td>{{ $ViewRegisteredRecords->fname }}</td>
             
                <td><a href="/ViewRecords/{{$ViewRegisteredRecords->id}}."><button
                      class="btn btn-primary">view</button></a></td>
              </tr>
              @endforeach

            </table>

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

            <p>In our island's forests, we enjoy nature's gifts: fresh air, pure water,diverse life, and vital ecosystem
              services. The Forest Department diligently safeguards these invaluable landscapes. It also serves the
              public at headquarters and in the field. Together, we nurture our natural treasures for all to cherish.
            </p>
          </div>

        </div>



        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Quick Links</h4>

            <ul class="list-unstyled">
              <li><a href="{{ url('/#####') }}">Home</a></li>
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