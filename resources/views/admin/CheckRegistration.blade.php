<!DOCTYPE html>
<html lang="en">

<head>
  <title>Check Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
</head>

<body>



  <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24"
          class="d-inline-block align-text-top">
        <span class="text-success">Forest Department,</span>
        Melsiripura
      </a>
      <form class="d-flex mx-auto text-right" method="GET" action="{{ route('check.registration.search') }}">
        @csrf
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <div class="btn-group">
        <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="assets/images/dashboardImg/face.jpg" alt="Profile Photo" class="rounded-circle" width="20"
            height="20">
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">My Profile</a></li>
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
            <h2>Check Registration</h2>
          </div>

          <div>
            <table class="table table-bordered border-primary">
              <tr>
                <th>No.</th>
                <th>NIC No.</th>
                <th>Name</th>
                <th>Check</th>
              </tr>
              @foreach($CheckRegistration as $CheckRegistration)
              <tr>
                <td>{{ $CheckRegistration->id }}</td>
                <td>{{ $CheckRegistration->idno }}</td>
                <td>{{ $CheckRegistration->fname }}</td>
                <td><a href="/view_record/{{$CheckRegistration->id}}"><button class="btn btn-primary">view</button></a>
                </td>
              </tr>
              @endforeach

            </table>

          </div>
      </main>
    </div>
  </div>




  <!-- ======= Footer ======= -->
  @include('footer')<!-- End  Footer -->

</body>

</html>