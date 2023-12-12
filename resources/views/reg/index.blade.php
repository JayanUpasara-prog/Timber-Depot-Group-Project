<!DOCTYPE html>
<html lang="en">

<head>
<title>Index</title>
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

<body class="bg-success"><nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage">
      <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="text-success">Forest Department,</span>
      Melsiripura
    </a>
    <form class="d-flex mx-auto text-right" role="search" method="GET" action="{{ route('search2') }}">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

    <div class="btn-group">
      <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/dashboardImg/face.jpg" alt="Profile Photo" class="rounded-circle" width="20" height="20">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">My Profile</a></li>
          <li><a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a></li>      </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
      @include('adminSideNav')
      </nav>


      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-4">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('AdminDashboard') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Registerd Users List</h5>
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->name }}</td>
                            <td>{{ $registration->email }}</td>
                            <td>
                                <a href="{{ route('reg.edit', ['registration' => $registration]) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                            </td>
                            <td>


                                <form id="deleteForm"
                                    action="{{ route('reg.destroy', ['registration' => $registration->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete({{ $registration->id }})">Delete</button>
                                </form>

                                <script>
                                    function confirmDelete(id) {
                                        var result = window.confirm("Are you sure you want to delete this record?");

                                        if (result) {
                                            // User clicked "OK", update the form action with the correct ID
                                            document.getElementById('deleteForm').action = "{{ url('destroy') }}" + '/' + id;
                                            document.getElementById('deleteForm').submit();
                                        } else {

                                        }
                                    }
                                </script>


                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </main>
        </div>
    </div>
             <!-- ======= Footer ======= -->
@include('footer')<!-- End  Footer -->                   
</body>

</html>