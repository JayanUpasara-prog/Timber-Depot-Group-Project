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

          <h5 class="text-black-50" title="Registered Owner's details">Registered Owner : </h5>

          <div class="mb-3 mt-3">
            <div class="row">
              <div class="col-sm-4">
                <label for="uid">User ID : TD-{{ $user->id }}</label>
                <!-- above Full Name part should change this as "$registered_user->name".... -->
              </div>                
              <div class="col-sm-8">
                <label for="fname">Full Name : {{ $user->name }}</label>
                <!-- above Full Name part should change this as "$registered_user->name".... -->
              </div>
            </div>
          </div>
          </br>
          
          <h5 class="text-black-50" title="Details of Prospective(New) owner!">Prospective Owner's Personal Details : </h5>

            <form method="POST" action="store_data" enctype="multipart/form-data" class="was-validated">
              @csrf
              @method('post')

              <div class="mb-3 mt-3">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="fname">Full Name : </label>
                    <input type="text" class="form-control" placeholder="Enter Full Name" name="fname" oninput="convertToUppercase()" required pattern="[A-Za-z\s]+" required title="Name should contain only alphabetic characters and spaces.">
                  </div>
                  <div class="col-sm-6">
                    <label for="address">Address : </label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="address" oninput="convertToUppercase()" required>
                  </div>
                  <br>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <label for="idno">National Identity Card No. : </label>
                    <input type="text" class="form-control" placeholder="Enter NIC number" name="idno" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="contact">Contact Number : </label>
                    <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="Email">Email : </label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="Email" required>
                  </div>
                </div>                                                                            
              </div>
              <br>

              <!-- <h5 class="text-black-50" title="Details of old owner!">Registered Owner</h5>

              <div class="mb-3 mt-3">
                <div class="row">
                  <div class="col">
                    <label for="user_id">User ID : </label>
                    <input type="text" class="form-control" placeholder="Enter Full Name" name="ro_fullName">
                  </div>
                  <div class="col">
                    <label for="reg_no.">Timber Depot Registration No. : </label>
                    <input type="text" class="form-control" placeholder="Enter Registration No." name="td_regNo" required>
                  </div>                  
                </div>
              </div>
              </br>
              
              <div class="row">
                <div class="col">
                  <h5 class="text-black-50">Prospective Owner's Statement about StockBook Records : </h5>
                </div>
                <div class="col">
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-success" disabled>View Stock Book : </button>
                    <a href="StockBookUpdate" class="btn btn-outline-success">&#128065; StockBook</a>
                  </div>
                </div>  
              </div>
              </br>

              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                <label class="form-check-label" for="radio1">I checked StockBook and there is no issues on it.</label>            
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" data-bs-toggle="collapse" data-bs-target="#demo" checked>
                <label class="form-check-label" for="radio2">I checked StockBook and there are some issues on it.</label>                
              </div>

              <div id="collapse">
                <div class="input-group mb-3 mt-3">                
                  <label for="statement">Statement of Prospective Owner about : </label>                  
                  <textarea name="text" id="comment" cols="120" rows="4"></textarea>
                </div>
              </div>
              </br> -->

              <input type="submit" class="btn btn-outline-success" value="Send Request">
              </br>

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

//relavant field must be only block letters
function convertToUppercase() {
  var inputFields = document.querySelectorAll(".form-control");
    inputFields.forEach(function(input) {
      input.value = input.value.toUpperCase();
  });
}

</script>

</body>
</html>