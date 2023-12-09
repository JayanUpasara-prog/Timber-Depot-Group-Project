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

@include('userHeadNav')


</br>

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

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




<!-- ======= Footer ======= -->
@include('footer')
<!-- End  Footer -->

</body>
</html>
