
<!-- At the beginning of your blade file -->
@php
    $searchTerm = isset($searchTerm) ? $searchTerm : '';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  

  <style>
  /* Style for Incorrect button */
  #inlineRadio2.form-check-input {
    border-color: #ff0000; /* Red color */
  }

  #inlineRadio2.form-check-input:checked {
    background-color: #ff0000; /* Red color for background when selected */
  }

  /* Style for Correct button */
  #inlineRadio1.form-check-input {
    border-color: #0000ff; /* Blue color */
  }

  #inlineRadio1.form-check-input:checked {
    background-color: #0000ff; /* Blue color for background when selected */
  }
</style>
  
<style>
    .highlight {
        background-color: yellow;
    }
</style>
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

<!-- <div class="p-2 bg-light text-black text-center">
  <img src="Srilanka.jpg" class="float-start img-fluid" alt="Srilanka" width="100" height="100">
  <h1 class="text-success text-start">Forest Department,</h1>
  <p class="text-dark text-start">Melsiripura</p> 
</div> -->

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/#####') }}">
      <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="text-success">Forest Department,</span>
      Melsiripura
    </a>
    <form class="d-flex mx-auto text-right" role="search" method="GET" action="">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

    <div class="btn-group">
      <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Photo" class="rounded-circle" width="20" height="20">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ url('/AdminDashboard') }}">My Profile</a></li>
          <li><a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a></li>
        </ul>
  </div>
</nav>

<!-- <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->
</br>
@if(Session::has('success'))
                      <div class="alert alert-success">
                        {{ Session::get('success') }}
                      </div>
                @endif

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="p mb-2 bg-success text-white text-center"> 
            <h2>Ownership Update</h2>
        </div>

        <form method="POST" action="{{ url('/ownership-change') }}" enctype="multipart/form-data" class="was-validated">

            @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("post")

              <div class="mb-3 mt-3">
                

      

                                   
                  <div class="col-sm-3">
                    <label for="userid">Registered User ID : </label>        
                    <input type="text" class="form-control" value="{{$data->userid}}" readonly name="userid" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Should be equal to Registerd User ID of above</div>
                  </div><br>
                  <div class="col-sm-4">
                    <label for="fname">Full Name : </label>
                    <input type="text" class="form-control" value="{{$data->fname}}" readonly name="fname" oninput="convertToUppercase()" required pattern="[A-Za-z\s]+" required title="Name should contain only alphabetic characters and spaces.">
                  </div><br>
                  <div class="col-sm-4">
                    <label for="address">Address : </label>
                    <input type="text" class="form-control" placeholder="Enter Address" readonly value="{{$data->address}}" name="address" oninput="convertToUppercase()" required>
                  </div>
                  <br>
                
                
                  
                  <div class="col-sm-3">
                    <label for="idno">ID No.(NIC) : </label>
                    <input type="text" class="form-control" placeholder="Enter NIC number" value="{{$data->idno}}" readonly name="idno" required>                    
                  </div><br>
                  <div class="col-sm-3">
                    <label for="contact">Contact Number : </label>
                    <input type="text" class="form-control" placeholder="Enter Contact Number" value="{{$data->contact}}" readonly name="contact" required>                    
                  </div><br>
                  <div class="col-sm-3">
                    <label for="Email">Email : </label>
                    <input type="email" class="form-control" placeholder="Enter Email" value="{{$data->Email}}" name="Email" readonly required>
                  </div>
                </div>
              </div>
              <br>          

              <input type="submit" class="btn btn-success" value="Update">
              </br><br>

            </form>


          </div>
        </div>
        
      </main>
    <script>
    function confirmAction(url) {
        var isConfirmed = confirm("Are you sure you want to proceed?");
        if (isConfirmed) {
            // The user clicked "OK" in the confirmation dialog
            // You can redirect to the specified URL or perform other actions
            window.location.href = url;
        } else {
            // The user clicked "Cancel" in the confirmation dialog
            // You can handle this case or leave it empty
        }
    }
</script>
</table>
  

 


<br><br>

        </div>
    </div>
</main>

      
  </div>
</div>



<!-- ======= Footer ======= -->

</body>
</html>
