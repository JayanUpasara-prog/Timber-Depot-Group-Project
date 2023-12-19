
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
  
  #inlineRadio2.form-check-input {
    border-color: #ff0000; 
  }

  #inlineRadio2.form-check-input:checked {
    background-color: #ff0000; 
  }

  
  #inlineRadio1.form-check-input {
    border-color: #0000ff; 
  }

  #inlineRadio1.form-check-input:checked {
    background-color: #0000ff; 
  }
</style>
  
<style>
    .highlight {
        background-color: yellow;
    }
</style>
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
            window.location.href = url;
        } else {
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
