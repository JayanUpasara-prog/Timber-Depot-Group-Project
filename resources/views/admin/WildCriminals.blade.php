<!DOCTYPE html>
<html lang="en">

<head>
  <title>Wild Criminals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Style for the login card */
    .card {
      background-color: rgba(255, 255, 255, 0.8);
      /* Add a semi-transparent white background to the card */
    }
  </style>
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
      <form class="d-flex mx-auto text-right" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
          <li><a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a></li>        </ul>
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
      @include('adminSideNav')
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4  bg-black">


        <div class="container">
          <div class="mt-5">



            <div class="container mt-5">

              <div class="row justify-content-center align-items-center">

                <div class="col-md-6">

                  <!-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                 @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->




                  <div class="card" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-header bg-success" style="text-align: center; font-size: 30px;  color: white;">
                      Criminal Records
                    </div>
                    <div class="card-body">
                      <form id="WildCriminalForm" method="post" action="{{ route('admin.WildCriminalsPost') }}">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        @method("post")


                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                          <span class="text-danger">@error('name') <span class="text-danger">The name may only contain letters, spaces, and dots.</span> @enderror</span>
                        </div>

                        
                        <div class="mb-3">
                          <label for="idnum" class="form-label">NIC Number</label>
                          <input type="text" class="form-control" id="idnum" name="idnum" placeholder="Enter NIC" required>
                          <span class="text-danger">@error('idnum') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                          <label for="Address" class="form-label">Address</label>
                          <input type="text" class="form-control" id="Address" name="Address" placeholder="Address"
                            required>
                          <span class="text-danger">@error('Address') {{$message}} @enderror</span>
                          <br>

                        </div>
                        <div class="row">
                          <div class="col-6">
                            <input type="submit" class="btn btn-success" value="Add">
                          </div>
                          <div class="col-6 text-end">
                            <button type="button" class="btn btn-success">
                              <a href="{{ url('/CriminalView') }}" style="color: white; text-decoration: none;">View</a>
                            </button>
                          </div>
                        </div>


                      </form>
                    </div>
                  </div>
                </div>

              </div>
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
  @include('footer')<!-- End  Footer -->

</body>

</html>