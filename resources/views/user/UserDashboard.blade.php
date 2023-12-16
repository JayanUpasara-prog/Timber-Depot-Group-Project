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

@include('userHeadNav')

</br>

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

      <!-- Main Content -->
      <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      
      
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
                    <img src="{{ Storage::url($user->profile_picture) }}" alt="User Profile" class="card-img-top">

                  
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">TD-{{ $user->id }}</p>
                             Add this form below the existing form in UserDashboard.blade.php 
                            

                            <div class="mb-3">
                            <div class="row">
                            <label for="profile_picture" class="form-label">Update Profile Picture</label>
                            <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                    
                        <button type="submit" class="btn btn-primary">Update Profile Picture</button>
                    


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
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </main> -->
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
                                    <img src="{{ Storage::url($user->profile_picture) }}" alt="User Profile"
                                        class="card-img-top" style="object-fit: contain; width: 100%; max-height: 200px;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $user->name }}</h5>
                                        <p class="card-text">TD-{{ $user->id }}</p>

                                        <div class="mb-3">
                                            <label for="profile_picture" class="form-label">Update Profile
                                                Picture</label>
                                            <input type="file" class="form-control" id="profile_picture"
                                                name="profile_picture">
                                        </div>
                                        <div class="row mt-3">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Update Profile Picture</button>
        </div>
    </div>

    <!-- Second row for other two buttons -->
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
                                            <label for="fullName" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="fullName"
                                                value="{{ $user->name }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                value="{{ $user->email }}" readonly>
                                        </div>
                                        <!-- Add more user data fields here as needed -->
                                        <div class="mb-3">
                              <label for="nic" class="form-label">NIC Number</label>
                              <input type="text" class="form-control" id="nic" value="{{ $RegisteredUser->idno ?? 'N/A' }}" readonly>
                            </div>
                            <div class="mb-3">
                              <label for="contact" class="form-label">Contact</label>
                              <input type="text" class="form-control" id="contact" value="{{ $RegisteredUser->contact ?? 'N/A' }}" readonly>
                            </div>
                            <div class="mb-3">
                              <label for="address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="address" value="{{ $RegisteredUser->address ?? 'N/A' }}" readonly>
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
@include('footer')
<!-- End  Footer -->

</body>
</html>
