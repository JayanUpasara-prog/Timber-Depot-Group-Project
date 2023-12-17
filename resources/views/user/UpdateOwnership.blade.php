<!DOCTYPE html>
<html lang="en">

<head>
  <title>Update Ownership</title>
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
  <!-- *** must include livechat...... *** -->
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

  <div class="container-fluid">
    <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

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
                          <span class="text-danger">@error('name') {{ $message }} @enderror</span>
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

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End  Footer -->

</body>

</html>