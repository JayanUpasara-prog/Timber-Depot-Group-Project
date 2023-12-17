<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Registered Users</title>
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
  <style>
  body {
      /* Set the background image */
      background-image: url('assets/img/4907157.jpg'); /* Adjust the path accordingly */      
      /* Set background image size */
      background-size: cover; /* or contain, or specific dimensions */
      
      /* Specify background color in case the image is not available or doesn't cover the whole body */
      background-color: #f0f0f0; /* Choose a suitable background color */
      
      /* Other background properties, if needed */
      background-repeat: no-repeat;
      background-position: center center;
      /* Add more styles as necessary */
    }
    </style>
</head>

<body>

  <!-- <div class="p-2 bg-light text-black text-center">
  <img src="Srilanka.jpg" class="float-start img-fluid" alt="Srilanka" width="100" height="100">
  <h1 class="text-success text-start">Forest Department,</h1>
  <p class="text-dark text-start">Melsiripura</p> 
</div> -->

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
          <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Photo" class="rounded-circle" width="20"
            height="20">
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
                <!-- <td><button class ="btn btn-primary">view</button></td> -->
                <td><a href="/ViewRecords/{{$ViewRegisteredRecords->id}}."><button
                      class="btn btn-primary">view</button></a></td>
              </tr>
              @endforeach

            </table>

          </div>
      </main>
    </div>
  </div>


  <!-- <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
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
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div> -->

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