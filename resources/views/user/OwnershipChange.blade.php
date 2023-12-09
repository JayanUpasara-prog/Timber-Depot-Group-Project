<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ownership Change</title>
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
  @include('livechat')
</head>
<body>

<!-- <div class="p-2 bg-light text-black text-center">
  <img src="Srilanka.jpg" class="float-start img-fluid" alt="Srilanka" width="100" height="100">
  <h1 class="text-success text-start">Forest Department,</h1>
  <p class="text-dark text-start">Melsiripura</p> 
</div> -->

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage">
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
      @include('userSideNav')

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
          <div class="p-3 mb-2 bg-success text-white">
            <h2>Ownership Change</h2>
          </div>
          </br>

          <!--start from here main division of form-->
          <div id="main_div">
            <div class="d-flex p-2 bg-light">  
              <div class="p-6">
                <h4 class="text-black-50">Make a Ownership Change Request : </h4>
              </div>
            </div>
          <br>

          <div class="container mt-3">

            <form action="/action_page.php" class="was-validated" target="_blank" method="POST">
              <h5 class="text-black-50">Registered Owner</h5>

              <div class="mb-3 mt-3">
                <label for="fullname">Full Name : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="uname" required>
              </div>

              <div class="mb-3 mt-3">
                <div class="row">
                  <div class="col">
                    <label for="reg_no.">Timber Depot Registration No. : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter Registration No." name="uname" required>
                  </div>
                  <div class="col">
                    <label for="user_id">User ID : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter User ID" name="uname" required>
                  </div>
                  <div class="col">
                    <label for="nic_no.">National Identity Card No. : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter National Identity Card No." name="uname" required>
                  </div>
                </div>
              </div>            

              <div class="mb-3 mt-3">
                <label for="address">Address : </label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Home No." required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Address Line 1,Address Line 2">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                </div>
              </div>          
              <br>

              <h5 class="text-black-50">Prospective Owner</h5>

              <div class="mb-3 mt-3">
                <label for="fullname">Full Name : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="uname" required>
              </div>

              <div class="mb-3 mt-3">
                <div class="row">                  
                  <div class="col">
                    <label for="user_id">User ID : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter User ID" name="uname" required>
                  </div>
                  <div class="col">
                    <label for="nic_no.">National Identity Card No. : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter National Identity Card No." name="uname" required>
                  </div>
                </div>
              </div>              

              <div class="mb-3 mt-3">
                <label for="address">Address : </label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Home No." required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Address Line 1,Address Line 2">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                </div>
              </div>    
              
              <p class="text-muted">Prospective Owner's Statement about StockBook Records : </p>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                <label class="form-check-label" for="radio1">I checked StockBook and there is no issues on it.</label>            
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" data-bs-toggle="collapse" data-bs-target="#demo" checked>
                <label class="form-check-label" for="radio2">I checked StockBook and there are some issues on it.</label>
                <div id="demo" class="collapse">
                  <div class="input-group mb-3 mt-3">                
                    <label for="statement">Statement of Prospective Owner : </label>                  
                    <textarea name="text" id="comment" cols="120" rows="4"></textarea>
                  </div>
                </div>
              </div>

              <br>
              <button type="submit" class="btn btn-outline-success">Send Request</button>
              <br>

              <!-- <div class="alert alert-success">
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
              </div> -->

            </form>
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
@include('footer')

<!-- End  Footer -->

</body>
</html>
