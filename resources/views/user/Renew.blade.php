<!DOCTYPE html>
<html lang="en">
<head>
  <title>Renew</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Your custom script here -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initially hide both sections
      document.getElementById('woodenShedDetails').style.display = 'none';
      document.getElementById('mobileSawmillDetails').style.display = 'none';

      // Function to toggle visibility based on the user's choice
      function toggleDetails(selectedOption) {
        if (selectedOption === 'woodenShed') {
          document.getElementById('woodenShedDetails').style.display = 'block';
          document.getElementById('mobileSawmillDetails').style.display = 'none';
        } else if (selectedOption === 'mobileSawmill') {
          document.getElementById('woodenShedDetails').style.display = 'none';
          document.getElementById('mobileSawmillDetails').style.display = 'block';
        } else {
          // If no option is selected, hide both sections
          document.getElementById('woodenShedDetails').style.display = 'none';
          document.getElementById('mobileSawmillDetails').style.display = 'none';
        }
      }

      // Event listener for the select element
      document.getElementById('detailsSelector').addEventListener('change', function () {
        toggleDetails(this.value);
      });
    });
  </script>

  
  <!-- <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style> -->
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  @include('livechat')
</head>
<body>

<!-- <div class="p-2 bg-light text-black text-center">
  <img src="Srilanka.jpg" class="float-start img-fluid" alt="Srilanka" width="100" height="100">
  <h1 class="text-success text-start">Forest Department,</h1>
  <p class="text-dark text-start">Melsiripura</p> 
</div> -->

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage">
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

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
          <div class="position-sticky">
              <ul class="nav flex-column nav-pills nav-stacked">
                  <li class="nav-item">
                      <a class="nav-link" href="UserDashboard">
                          Dashboard/My Profile
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Registration">
                          Registration
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link bg-success active" href="Renew">
                          Renew
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="OwnershipChange">
                        Ownership Change
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="PermitRequest">
                        Permit Request
                    </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="StockBookUpdate">
                        StockBook Update
                     </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Help">
                        Help
                    </a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link" href="UserLogout">
                       Logout
                  </a>
               </li>
              </ul>
          </div>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container mt-3">
          <div class="p-3 mb-2 bg-success text-white"> <h2>Renew</h2>
        </div>
   
        <!--start from here main division of form-->
        <div id="main_div">
          <h4>Renewal the registration of a woodshed </h4>

          <div class="container mt-3">

            <form action="/renewal_script.php" class="was-validated" target="_blank" method="POST">
              <h5 class="text-black-50"></h5>		
		<h6>Owner Details:</h6>
                 <ol>

		<div class="mb-3 mt-3">
                <label for="fullname">Owner Full Name : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Enter Full Name" name="uname" required>
              </div>
		<div class="mb-3 mt-3">
                <label for="address">Permanent Address : </label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="House No." required>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Address Line 1,Address Line 2">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="City">
                  </div>
			<div class="mb-3 mt-3">
                <label for="nic_no.">National Identity Card No. : </label>          
                <input type="text" class="form-control" id="uname" placeholder="Enter National Identity Card No." name="uname" required>
              </div>
		<br>
                
                <p>If the applicant is a company,the registration certificate should be attached<p>
		<input type="file" name="deed" id="deed">
          	<input type="submit" value="Upload File"><br><br>
        	</div>
		</ol>



<div class="container mt-3">
  <label for="detailsSelector">wooden shed type:</label>
  <select class="form-select" id="detailsSelector">
<option value="default">Select an option</option>
    <option value="woodenShed">Wooden Shed</option>
    <option value="mobileSawmill">Mobile Sawmill</option>
  </select>

  <div id="woodenShedDetails" class="mt-3">

		<h6>Wooden Shed's Details:</h6>
		
		<ol>

		<div class="mb-3 mt-3">
                <label for="fullname">Name : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Enter Wooden Shed's Name" name="uname" >
              </div>
		<div class="mb-3 mt-3">
                <label for="address">Address : </label>
                <div class="row">
                  
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Address Line 1,Address Line 2 ,city" >
                  </div>
		
		<div class="mb-3 mt-3">
                <label for="Registration Number">Registration Number : </label>                
                <input type="text" class="form-control" id="Registration Number" placeholder="Enter Registration Number" name="Registration 			Number" >
              </div>
            	
		<div class="mb-3 mt-3">
                <label for="First Registered Date">First Registered Date : </label>                
                <input type="date" class="form-control" id="First Registered Date" placeholder="First Registered Date" name="First Registered 			Date" >
		<br>
              
		<form>
               	        <label for="comment"> Details about Wooden Shed : </label>   
			<textarea id="comment" name="comment" rows="5" cols="152" maxlength="1000"></textarea>	
							          
                </form>
              
		<div class="mb-3 mt-3">
                <label for="nic_no.">Validity period of license last obtained : </label>          
                <input type="text" class="form-control" id="uname" placeholder="month/date" name="uname" >
              </div>
		
                
                <p>(Attach a copy of the last license obtained)<p>
		<input type="file" name="deed" id="deed">
          	<input type="submit" value="Upload File"><br>
        	</div>
		
		<div class="mb-3 mt-3">
                <label for="nic_no.">Time to apply for new license : </label>          
                <input type="text" class="form-control" id="uname" placeholder="years/month/date" name="uname" >
              </div>
		</ol>



</div>




<div id="mobileSawmillDetails" class="mt-3">
    



    
		<h6>At the time of the mobile sawmill:</h6>
		<ol>
		<div class="mb-3 mt-3">
                <label for="Landmaster Registration number ">Landmaster Registration number : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Landmaster Registration number " name="Landmaster Registration 			number" >
              </div>

		<div class="mb-3 mt-3">
                <label for="Trolly Registration number">Trolly Registration number : </label>                
                <input type="text" class="form-control" id="uname" placeholder="Trolly Registration number" name="Trolly Registration number"  			>
              </div>
		
	     
		<div class="mb-3 mt-3">
                <label for="Validity period of income permit">Validity period of income permit : </label>          
                <input type="text" class="form-control" id="uname" placeholder="Validity period of income permit" name="uname" required>
                </div>
		<p>(Attach a copy of the income certificate)<p>
		<input type="file" name="deed" id="deed">
          	<input type="submit" value="Upload File"><br><br>
        	
		
		<div class="mb-3 mt-3">
                <label for="Divisional Secretariat">Divisional Secretariat intended to use the mobile sawmill : </label>          
                <input type="text" class="form-control" id="uname" placeholder="Divisional Secretariat" name="uname" required>
                </div>
		</ol>
		<br>


 </div>
</div>




		
		<form>
               	        <label for="comment"> Details of faults related to timber sheds(if any) : </label>   
			<textarea id="comment" name="comment" rows="5" cols="156" maxlength="1000"></textarea>	
							          
                </form>
		<div class="mb-3 mt-3">
                <label for="Month/date">Validity of Environmental Protection permit(Attach a coppy) : </label>          
                <input type="text" class="form-control" id="uname" placeholder="Month/date" name="uname" required><br>
		<input type="file" name="deed" id="deed">
          	<input type="submit" value="Upload File"><br><br>
                </div>
                </div>
              </div>
              <br>

      </main>
  </div>
</div>


<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
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
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div> -->

<!-- ======= Footer ======= -->
<footer class="footer mt-2">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-4">
        <div class="footer-logo">

          <a class="navbar-brand" href="#">Forest Department,<br>Melsiripura.</a>
          <p> HF4C+JG4, Ibbagamuwa, <br> Melsiripura.<br>
              info@example.com<br>
              0372259591</p>
        </div>
      </div>


      <div class="col-md-12 col-lg-4">
        <div class="list-menu">

          <h4>About Us</h4>

       <p>In our island's forests, we enjoy nature's gifts: fresh air, pure water,diverse life, and vital ecosystem services. The Forest Department diligently safeguards these invaluable landscapes. It also serves the public at headquarters and in the field. Together, we nurture our natural treasures for all to cherish.</p>
        </div>
      
      </div>



      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Quick Links</h4>
      
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Sign in</a></li>
            <li><a href="#">My Account</a></li>
          </ul>

        </div>
      </div>

    
      
      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Follow Us</h4>
      
          <ul class="list-unstyled">
            <li><a href="" class="twitter"><i class="bi bi-twitter"></i></a></li>
            <li> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#" class="instagram"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#" class="gmail"><i class="bi bi-google"></i></a></li>
          </ul>

        </div>
      </div>


    </div>
  </div>

  

</footer><!-- End  Footer -->

</body>
</html>
