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
  
</head>
<body>

<!-- <div class="p-2 bg-light text-black text-center">
  <img src="Srilanka.jpg" class="float-start img-fluid" alt="Srilanka" width="100" height="100">
  <h1 class="text-success text-start">Forest Department,</h1>
  <p class="text-dark text-start">Melsiripura</p> 
</div> -->

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="text-success">Forest Department,</span>
      Melsiripura
    </a>
    <form class="d-flex mx-auto text-right" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="btn-group">
      <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/dashboardImg/face.jpg" alt="Profile Photo" class="rounded-circle" width="20" height="20">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">My Profile</a></li>
          <li><a class="dropdown-item" href="#">Log Out</a></li>
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

      <!-- Main Content -->
      <form action="{{ route('acceptance.handle', $data->id) }}" method="post">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("post")
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="p mb-2 bg-success text-white text-center"> 
            <h2>Users Information</h2>
        </div>

        <div>
        <table class="table table-bordered border-primary">
    <tr>
        <th>Field</th>
        <th>Info</th>
        
    </tr>

    @if(isset($data))
        <tr>
            <td>NIC</td>
            <td>{{ $data->idno }}</td>
         
        </tr>

        <tr>
            <td>Full name</td>
            <td>{{ $data->fname }}</td>
            
        </tr>

        <tr>
            <td>Adrdress</td>
            <td>{{ $data->address }}</td>
            
        </tr>

        <tr>
            <td>Front Image Of NIC</td>
            <td>{{ $data->fnic }}</td>
            
        </tr>

        <tr>
            <td>Back Image Of NIC</td>
            <td>{{ $data->bnic }}</td>
            
        </tr>

        <tr>
            <td>Contact Number</td>
            <td>{{ $data->contact }}</td>
           
        </tr>

        <tr>
            <td>Email</td>
            <td>{{ $data->Email }}</td>
           
        </tr>

        <tr class="table-warning" >
          <td><button type="button" class="btn btn-primary">Check</button></td>
          <td><div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Correct</label>
              </div>
          <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Incorrect</label>
              </div></td>
        </tr>

        <tr class="table-success">
            <td colspan="2" style="text-align: center;">Information of Mobile Timber Sawmill</td>
        </tr>



        <tr>
            <td>Registration No. of the hand tractor:</td>
            <td>{{ $data->RegNoT }}</td>
            
        </tr>

        <tr>
            <td>Registration No. of the trailer:</td>
            <td>{{ $data->RegNotrailer }}</td>
            
        </tr>

        <tr>
            <td>Copy of the Certificate of Registration and Revenue License should be Uploaded</td>
            <td>{{ $data->CopyReg }}</td>
           
        </tr>

        <tr>
            <td>The Divisional Secretary's Division where the mobile timber sawmill is to be used</td>
            <td>{{ $data->MTS }}</td>
            
        </tr>

        <tr>
            <td>The date on which the business was started or is to be started</td>
            <td>{{ $data->StDate }}</td>
            
        </tr>

        <tr>
            <td>Validity period of the Environmental Protection License</td>
            <td>{{ $data->Vtime }}</td>
            
        </tr>

        <tr>
            <td>Copy of the Environmental Protection License</td>
            <td>{{ $data->license }}</td>
            
        </tr>

        <tr>
            <td> Recommendation of Divisional Secretary</td>
            <td>{{ $data->recomd }}</td>
           
        </tr>

        <tr class="table-warning" >
          <td></td>
          <td><div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Correct</label>
              </div>
          <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="1" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Incorrect</label>
              </div></td>
        </tr>
        

        <tr class="table-success">
            <td colspan="2" style="text-align: center;">Information of Timber Sawmill</td>
        </tr>

        <tr>
            <td>The address where the wood shed is located</td>
            <td>{{ $data->wsadd }}</td>
           
        </tr>

        <tr>
            <td>Name of the land</td>
            <td>{{ $data->nland }}</td>
          
        </tr>

        <tr>
            <td>The owner of the land</td>
            <td>{{ $data->ownerofland }}</td>
           
        </tr>

        <tr>
            <td>Name of woodshed</td>
            <td>{{ $data->nameofwshed }}</td>
            
        </tr>

        <tr>
            <td>Copies of relevant land deed/tax deed</td>
            <td>{{ $data->deed }}</td>
           
        </tr>

        <tr>
            <td>Image of plan(පිඹුර)</td>
            <td>{{ $data->plan }}</td>
           
        </tr>

        <tr>
            <td>Affidavit taken to confirm authority if the land is not owned by you</td>
            <td>{{ $data->Confirm }}</td>
            
        </tr>

        

        <tr>
            <td>District</td>
            <td>{{ $data->district }}</td>
            
        </tr>

        <tr>
            <td>Divisional Secretary Section</td>
            <td>{{ $data->DSsection }}</td>
           
        </tr>

        <tr>
            <td>Grama Niladari Kottasa</td>
            <td>{{ $data->gnKottasaya }}</td>
            
        </tr>

        <tr>
            <td>Local Government</td>
            <td>{{ $data->Lgovernment }}</td>
            
        </tr>

        <tr>
            <td>Recommendation of Divisional Secretary</td>
            <td>{{ $data->recom }}</td>
            
        </tr>

        <tr>
            <td>Values</td>
            <td>{{ $data->nature_value }}</td>
            
        </tr>
        <!-- Add more rows as needed -->
    @else
        <tr>
            <td colspan="3">No user data available.</td>
        </tr>
    @endif

    <tr class="table-warning" >
          <td></td>
          <td><div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Correct</label>
              </div>
          <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="2" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Incorrect</label>
              </div></td>
        </tr>

        <tr class="table-dark">
          <td colspan="2">
          <div class="d-flex justify-content-center">
            <div class="card w-50 mx-auto">
                <div class="card-header">
                    <h5 class="card-title">Rejection Message</h5>
                </div>
                <div class="card-body">
                <form action="{{ route('reject.send') }}" method="POST">

                      @csrf
                      <div class="mb-3">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $data->Email }}" readonly>
                      </div>

                      <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                            <div class="form-text">Reasons for rejection</div>
                      </div>
                      <button type="submit" class="btn btn-primary">Send Message</button>

                     
                    </form>
                </div>
            </div>
        </div>


          </td>
        </tr>

    <tr>
      <td colspan="2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="#" class="btn btn-primary btn-lg me-md-2" onclick="confirmAction('{{ url('accept/' . $data['id']) }}')">Accept</a>
            <a href="#" class="btn btn-danger btn-lg" onclick="confirmAction('{{ url('reject/' . $data['id']) }}')">Reject</a>
        </div>
      </td>
    </tr>

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
