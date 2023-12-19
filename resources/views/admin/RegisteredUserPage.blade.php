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
    <form class="d-flex mx-auto text-right" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
            <td>
                <a href="{{ Storage::url($data->fnic) }}" download>
                    <img src="{{ Storage::url($data->fnic) }}" alt="Front Image Of NIC" style="max-width: 100px;">
                </a>
            </td>
        </tr>

        <tr>
            <td>Back Image Of NIC</td>
            <td>
                <a href="{{ Storage::url($data->bnic) }}" download>
                    <img src="{{ Storage::url($data->bnic) }}" alt="Back Image Of NIC" style="max-width: 100px;">
                </a>
            </td>
        </tr>





        <tr>
            <td>Contact Number</td>
            <td>{{ $data->contact }}</td>
           
        </tr>

        <tr>
            <td>Email</td>
            <td>{{ $data->Email }}</td>
           
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
            <td>@if ($data->CopyReg)
                    <a href="{{ Storage::url($data->CopyReg) }}" target="_blank">View Document</a>
                @else
                    No uploaded file
                @endif
            </td>
            
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
            <td>@if ($data->license)
                    <a href="{{ Storage::url($data->license) }}" target="_blank">View Document</a>
                @else
                    No uploaded file
                @endif
            </td>
           
        </tr>

        <tr>
            <td> Recommendation of Divisional Secretary</td>
            <td>@if ($data->recomd)
                    <a href="{{ Storage::url($data->recomd) }}" target="_blank">View Document</a>
                @else
                    No uploaded file
                @endif
            </td>
           
           
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
            <td>@if ($data->deed)
                    <a href="{{ Storage::url($data->deed) }}" target="_blank">View Document</a>
                @else
                    No uploaded file
                @endif</td>
           
        </tr>

        <tr>
            <td>Image of plan(පිඹුර)</td>
            <td>@if ($data->plan)
                    <a href="{{ Storage::url($data->plan) }}" target="_blank">View Document</a>
                @else
                    No uploaded file
                @endif
            </td>
            
           
        </tr>

        <tr>
            <td>Affidavit taken to confirm authority if the land is not owned by you</td>
            
            <td>@if ($data->Confirm)
                    <a href="{{ Storage::url($data->Confirm) }}" target="_blank">View Document</a>
                @else
                    No uploaded file
                @endif
            </td>
            
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
            <td>@if ($data->recom)
                    <a href="{{ Storage::url($data->recom) }}" target="_blank">View Document</a>
                @else
                    No uploaded file
                @endif
            </td>
            
            
        </tr>

        <tr>
            <td>Total Value</td>
            <td>{{ $data->total }}</td>
            
        </tr>
        <tr>
            <td>Registered Date</td>
            <td>{{ $data->registration_date }}</td>
            
        </tr>
       
    @else
        <tr>
            <td colspan="3">No user data available.</td>
        </tr>
    @endif

    
</table>

        </div>
    </div>
</main>

      
  </div>
</div>



<!-- ======= Footer ======= -->

</body>
</html>
