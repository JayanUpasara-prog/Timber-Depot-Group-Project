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
  @include('livechat')
</head>
<body>

@include('userHeadNav')

</br>

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("post")
      <div class="container mt-2">
        <form>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/images/dashboardImg/face.jpg" alt="User Profile" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">TD-{{ $user->id }}</p>
                            <button type="button" class="btn btn-primary">Edit Profile</button>
                            <button type="button" class="btn btn-primary">
        <a href="{{ route('reg.edit', ['registration' => auth()->user()->id]) }}" style="color: white; text-decoration: none;">Edit Profile</a>
    </button>
                                <button type="button" class="btn btn-primary">
                            <a href="{{ url('/logout') }}"
                                style="color: white; text-decoration: none;">LogOut</a>
                        </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
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
                            <!-- <div class="mb-3">
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
                            </div> -->
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
@include('footer')
<!-- End  Footer -->

</body>
</html>
