
<!-- At the beginning of your blade file -->
@php
    $searchTerm = isset($searchTerm) ? $searchTerm : '';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Permit Request Information</title>
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
</head>
<body>



<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="text-success">Forest Department,</span>
      Melsiripura
    </a>
    <form class="d-flex mx-auto text-right" role="search" method="GET" action="{{ route('searchUsers') }}">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

    <div class="btn-group">
      <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/dashboardImg/face.jpg" alt="Profile Photo" class="rounded-circle" width="20" height="20">
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
            <h2>Permit Requests Information</h2>
        </div>

        <div>
        <table class="table table-bordered border-primary">
    <tr>
        <th>Field</th>
        <th>Info</th>
        
    </tr>

    @if(isset($data))
    <tr>
        <td>ID No</td>
        <td class="{{ stripos($data->id_number, $searchTerm) !== false ? 'highlight' : '' }}">{{ $data->id }}</td>
    </tr>

    <tr>
        <td>NIC No</td>
        <td class="{{ stripos($data->national_id_number, $searchTerm) !== false ? 'highlight' : '' }}">{{ $data->national_id_number }}</td>
    </tr>

    <tr>
        <td>Contact No</td>
        <td class="{{ stripos($data->contact_number, $searchTerm) !== false ? 'highlight' : '' }}">{{ $data->contact_number }}</td>
    </tr>     



        <tr>
            <td>Email</td>
            <td>{{ $data->email }}</td>
           
        </tr>

        <tr>
            <td>Traveling Date</td>
            <td>{{ $data->traveling_date }}</td>
           
        </tr>

        
        <tr>
            <td>Traveling Distance</td>
            <td>{{ $data->traveling_distance }}</td>
            
        </tr>

        <tr>
            <td>Receiver Address</td>
            <td>{{ $data->receiver_address }}</td>
            
        </tr>   


        <tr>
            <td>Vehicle No</td>
            <td>{{ $data->vehicle_number }}</td>
            
        </tr>

        <tr>
            <td>Timber Type</td>
            <td>{{ $data->timber_type }}</td>
            
        </tr>

        <tr>
            <td>Length</td>
            <td>{{ $data->length }}</td>
            
        </tr>       

       

        <tr>
            <td>Width</td>
            <td>{{ $data->width }}</td>
           
        </tr>

        <tr>
            <td>Thickness</td>
            <td>{{ $data->thickness }}</td>
          
        </tr>

        <tr>
            <td>Count</td>
            <td>{{ $data->count }}</td>
           
        </tr>        

       
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
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $data->email }}" readonly>
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
        <a href="#" class="btn btn-primary btn-lg me-md-2" onclick="confirmAction('{{ url('acceptPermit/' . $data['id']) }}')">Accept</a>
            <a href="#" class="btn btn-danger btn-lg" onclick="confirmAction('{{ url('reject/' . $data['id']) }}')">Reject</a>
        </div>
      </td>
    </tr>

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
