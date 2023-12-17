<!DOCTYPE html>
<html lang="en">
<head>
  <title>Permit Request</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  @include('livechat')
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

@include('userHeadNav')

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
          <div class="p-3 mb-2 bg-success text-white">
            <h2>Permit Request Form</h2>
          </div>
          <br>

          <div id="main_div">

            <div class="container mt-3">

              <form action="{{ url('/storepermit') }}" method="POST">
              @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("post")

                <div class="row mb-3">
                  <div class="col-sm-6">
                    <label for="national_id_number" class="form-label">National ID Number:</label>
                    <input type="text" class="form-control" name="national_id_number" value="{{ $RegisteredUser->idno }}" readonly required>
                  </div>
                  <div class="col-sm-6">
                    <label for="contact_number" class="form-label">Contact Number:</label>
                    <input type="text" class="form-control" value="{{ $RegisteredUser->contact }}" readonly name="contact_number" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <div class="col-sm-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly required>
                  </div>
                  <div class="col-sm-6">
                    <label for="traveling_date" class="form-label">Traveling Date:</label>
                    <input type="date" class="form-control" name="traveling_date" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-6">
                    <label for="traveling_distance" class="form-label">Traveling Distance:</label>
                    <input type="text" class="form-control" name="traveling_distance" required>
                  </div>
                  <div class="col-sm-6">
                    <label for="receiver_address" class="form-label">Receiver Address:</label>
                    <input type="text" class="form-control" name="receiver_address" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-6">
                    <label for="vehicle_number" class="form-label">Vehicle Number:</label>
                    <input type="text" class="form-control" name="vehicle_number" required>
                  </div>
                  <div class="col-sm-6">
                    <label for="timber_type" class="form-label">Timber Type:</label>
                    <input type="text" class="form-control" name="timber_type" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-6">
                    <label for="length" class="form-label">Length:</label>
                    <input type="text" class="form-control" name="length" required>
                  </div>
                  <div class="col-sm-6">
                    <label for="width" class="form-label">Width:</label>
                    <input type="text" class="form-control" name="width" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-6">
                    <label for="thickness" class="form-label">Thickness:</label>
                    <input type="text" class="form-control" name="thickness" required>
                  </div>
                  <div class="col-sm-6">
                    <label for="count" class="form-label">Count:</label>
                    <input type="text" class="form-control" name="count" required>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

              <br><br>

            </div>
          </div>

      </main>
  </div>
</div>

<!-- ======= Footer ======= -->
@include('footer')
<!-- End Footer -->

<script>
  function convertToUppercase() {
    var inputFields = document.querySelectorAll(".form-control");
    inputFields.forEach(function(input) {
      input.value = input.value.toUpperCase();
    });
  }
</script>

</body>
</html>
