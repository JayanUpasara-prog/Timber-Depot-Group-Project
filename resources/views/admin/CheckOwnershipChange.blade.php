<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check Ownership Change</title>
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


<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/#####') }}">
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
          <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Photo" class="rounded-circle" width="20" height="20">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">My Profile</a></li>
          <li><a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a></li>      </ul>
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
        
        <div class="container">

          @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('success2'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
              @csrf
              @method("post")

          <div class="p mb-2 bg-success text-white text-center">
            <h2>Check Ownership Change</h2>      
          </div>
          <br>

          <div class="d-flex p-2 bg-light">
            <div class="p-6">
              <h5 class="text-black-50">Ownership Change Request List : </h5>
            </div>
          </div>
          <br>
          
          <div>
            <table class="table table-bordered border-success" style="text-align:center; ">
              <thead class="table-success" style="border:1px solid darkgreen;">
                <tr>
                  <th>User ID</th>
                  <th>Full Name</th>
                  <th>Address</th>
                  <th>NIC</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Check</th>
                </tr>
              </thead>
              <tbody>
                @foreach($CheckOwnershipChange as $CheckOwnershipChange)
                  <tr>
                      <td>{{ $CheckOwnershipChange->id }}</td>
                      <td>{{ $CheckOwnershipChange->fname }}</td>
                      <td>{{ $CheckOwnershipChange->address }}</td>
                      <td>{{ $CheckOwnershipChange->idno }}</td>
                      <td>{{ $CheckOwnershipChange->contact }}</td>
                      <td>{{ $CheckOwnershipChange->Email }}</td>
                      <td><a href="/CheckOwnershipChange/{{$CheckOwnershipChange->id}}"><button class ="btn btn-primary">view</button></a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>


        </div>      


      </main>

  </div>
</div>



<!-- ======= Footer ======= -->
@include('footer')<!-- End  Footer -->

</body>
</html>
