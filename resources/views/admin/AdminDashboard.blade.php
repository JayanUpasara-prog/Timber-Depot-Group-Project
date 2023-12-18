<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Dashboard</title>
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
      
      
      <div class="btn-group">
      <button type="button" class="btn btn-success">
          <a href="{{ url('/#####') }}" style="color: white; text-decoration: none;">Home</a>
        </button>
        <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="{{ Storage::url($user->profile_picture) }}" alt="User Profile" class="rounded-circle" width="20"
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
        @include('adminSideNav')
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif

        @method("post")
        <div class="container mt-2">
          <form action="{{ route('update.profile.picture') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <img src="{{ Storage::url($user->profile_picture) }}" alt="User Profile" class="card-img-top"
                    style="object-fit: contain; width: 100%; max-height: 200px;">
                  <div class="card-body text-center">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">TD-{{ $user->id }}</p>

                    <div class="mb-3">
                      <label for="profile_picture" class="form-label">Update Profile
                        Picture</label>
                      <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update Profile Picture</button>
                      </div>
                    </div>


                    <div class="row mt-3">
                      <div class="col-md-6">
                        <button type="button" class="btn btn-primary">
                          <a href="{{ route('reg.edit', ['registration' => auth()->user()->id]) }}"
                            style="color: white; text-decoration: none;">Edit Profile</a>
                        </button>
                      </div>
                      <div class="col-md-6">
                        <button type="button" class="btn btn-primary">
                          <a href="{{ url('/logout') }}" style="color: white; text-decoration: none;">LogOut</a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">User Information</h5>
                    <div class="mb-3">
                      <label for="fullName" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="fullName" value="{{ $user->name }}" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="mb-3">
                      <label for="nic" class="form-label">NIC Number</label>
                      <input type="text" class="form-control" id="nic" value="{{ $RegisteredUser->idno ?? 'N/A' }}"
                        readonly>
                    </div>
                    <div class="mb-3">
                      <label for="contact" class="form-label">Contact</label>
                      <input type="text" class="form-control" id="contact"
                        value="{{ $RegisteredUser->contact ?? 'N/A' }}" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address"
                        value="{{ $RegisteredUser->address ?? 'N/A' }}" readonly>
                    </div>

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
    @include('footer')

  </footer><!-- End  Footer -->

</body>

</html>