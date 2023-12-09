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

            <form action="/action_page.php" class="was-validated" target="_blank" method="POST">
              <h5 class="text-black-50">Registered Owner</h5>

              <div class="mb-3 mt-3">
                <label for="fullname">Full Name : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="uname" required>
              </div>

              <div class="mb-3 mt-3">
                <div class="row">
                  <div class="col">
                    <label for="reg_no.">Timber Depot Registration No. : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter Registration No." name="uname" required>
                  </div>
                  <div class="col">
                    <label for="user_id">User ID : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter User ID" name="uname" required>
                  </div>
                  <div class="col">
                    <label for="nic_no.">National Identity Card No. : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter National Identity Card No." name="uname" required>
                  </div>
                </div>
              </div>            

              <div class="mb-3 mt-3">
                <label for="address">Address : </label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Home No." required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Address Line 1,Address Line 2">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                </div>
              </div>          
              <br>

              <h5 class="text-black-50">Prospective Owner</h5>

              <div class="mb-3 mt-3">
                <label for="fullname">Full Name : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="uname" required>
              </div>

              <div class="mb-3 mt-3">
                <div class="row">                  
                  <div class="col">
                    <label for="user_id">User ID : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter User ID" name="uname" required>
                  </div>
                  <div class="col">
                    <label for="nic_no.">National Identity Card No. : </label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter National Identity Card No." name="uname" required>
                  </div>
                </div>
              </div>              

              <div class="mb-3 mt-3">
                <label for="address">Address : </label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Home No." required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Address Line 1,Address Line 2">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                </div>
              </div>    
              
              <p class="text-muted">Prospective Owner's Statement about StockBook Records : </p>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                <label class="form-check-label" for="radio1">I checked StockBook and there is no issues on it.</label>            
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" data-bs-toggle="collapse" data-bs-target="#demo" checked>
                <label class="form-check-label" for="radio2">I checked StockBook and there are some issues on it.</label>
                <div id="demo" class="collapse">
                  <div class="input-group mb-3 mt-3">                
                    <label for="statement">Statement of Prospective Owner : </label>                  
                    <textarea name="text" id="comment" cols="120" rows="4"></textarea>
                  </div>
                </div>
              </div>

              <br>
              <button type="submit" class="btn btn-outline-success">Send Request</button>
              <br>

              

            </form>
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
