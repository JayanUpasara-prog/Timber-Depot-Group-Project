<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ownership Change</title>
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
            <h2>Ownership Change</h2>
          </div>
          </br>

          <div id="main_div">
            <div class="d-flex p-2 bg-light">
              <div class="p-6">
                <h4 class="text-black-50">Make a Ownership Change Request : </h4>
              </div>
            </div>
            <br>

          <div class="container mt-3">

          <h5 class="text-black-50" title="Registered Owner's details">Registered Owner : </h5>

          <div class="mb-3 mt-3">
            <div class="row">
            <div class="col-sm-4">
    <label for="uid">User ID : TD-{{ $user->id }}</label>
</div>
                
              <div class="col-sm-8">
                <label for="fname">Full Name : {{ $RegisteredUser->fname }}</label>
              </div>
            </div>
          </div>
          </br>
          
          <h5 class="text-black-50" title="Details of Prospective(New) owner!">Prospective Owner's Personal Details : </h5>

            @foreach($errors->all() as $error)
              <div class="alert alert-danger" role="alert">
                {{$error}}
              </div>
            @endforeach

            <form method="POST" action="store_data" enctype="multipart/form-data" class="was-validated">
            @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("post")

              <div class="mb-3 mt-3">
                <div class="row">

      

                                   
                  <div class="col-sm-3">
                    <label for="userid">Registered User ID : </label>        
                    <input type="text" class="form-control" value="{{$RegisteredUser->id}}" readonly name="userid" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Should be equal to Registerd User ID of above</div>
                  </div>
                  <div class="col-sm-4">
                    <label for="fname">Full Name : </label>
                    <input type="text" class="form-control" value="" name="fname" oninput="convertToUppercase()" required pattern="[A-Za-z\s]+" required title="Name should contain only alphabetic characters and spaces.">
                  </div>
                  <div class="col-sm-4">
                    <label for="address">Address : </label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="address" oninput="convertToUppercase()" required>
                  </div>
                  <br>
                </div>
                <div class="row">
                  
                  <div class="col-sm-3">
                    <label for="idno">ID No.(NIC) : </label>
                    <input type="text" class="form-control" placeholder="Enter NIC number" name="idno" required>                    
                  </div>
                  <div class="col-sm-3">
                    <label for="contact">Contact Number : </label>
                    <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact" required>                    
                  </div>
                  <div class="col-sm-3">
                    <label for="Email">Email : </label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="Email" required>
                  </div>
                </div>
              </div>
              <br>          

              <input type="submit" class="btn btn-success" value="Send Request">
              </br><br>

            </form>


          </div>
        </div>
        
      </main>
  </div>
</div>

<!-- ======= Footer ======= -->
@include('footer')
<!-- End  Footer -->

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