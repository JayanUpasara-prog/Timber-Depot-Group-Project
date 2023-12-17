<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  @include('livechat')
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

@include('userHeadNav')


<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container mt-3">
        
  <!--{{$errors}}-->

  <!--@if($errors->any())
    @foreach($errors->all() as $err)
      <li>{{$err}}</li>
    @endforeach
  @endif-->

  <form id="myForm" action="/CheckReg" method="POST" enctype="multipart/form-data" class="was-validated ">
  @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("post")


  <!-- {{csrf_field()}} -->
  <div id="reg1" class="row g-3">

  <div class="mb-2 bg-success text-white text-center "> <h2>Personal Details</h2>
    </div>
    
    <div class="col-md-6 ">
        <label for="fname">Full Name:</label>
        <input type="text" class="form-control" id="fname" name="fname" oninput="convertToUppercase()" required pattern="[A-Za-z\s]+" required title="Name should contain only alphabetic characters and spaces.">
        <span style="color:red">@error('fname'){{$message}}@enderror</span>
    </div>

    <div class="col-md-6">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" oninput="convertToUppercase()" required>
    </div>

    <div class="col-md-6">
        <label for="idno">National Id Number:</label>
        <input type="text" class="form-control" id="idno" name="idno" required>
        <span style="color:red">@error('idno'){{$message}}@enderror</span>
    </div><br>
          
    <div class="col-md-3">
        Front Image Of NIC<br>
        <input type="file" name="fnic" id="fnic" required>
        <span style="color:red">@error('fnic'){{$message}}@enderror</span>
    </div>
          <!--<input type="submit" value="Upload Front image File" >-->

    <div class="col-md-2">
        Back Image Of NIC<br>
        <input type="file" name="bnic" id="bnic" required>
        <span style="color:red">@error('bnic'){{$message}}@enderror</span>
    </div>
          <!--<input type="submit" value="Upload Back image File">-->
    

    <div class="col-md-6">
        <label for="address">Contact Number:</label>
        <input type="text" class="form-control" id="contact" name="contact" required>
        <span style="color:red">@error('contact'){{$message}}@enderror</span>
    </div>

    <div class="col-md-6">
        <label for="email">Email:</label>
        <input type="email" class="" id="Email"  value="{{ $user->email }}" name="Email" readonly required style="height: 40px; width: 100%;">
        <span style="color:red">@error('Email'){{$message}}@enderror</span>
      </div>


  
    
</div><br>

    <div id="reg2">
    <div class="mb-2 bg-success text-white text-center"> <h2>The Nature Of The Wood Shed</h2></div>

    <p><b>Choose the nature of your wood shed:</b></p>

    
    <table>
    <ol type="I">
      <tr>
        <td>1.Sawmill</td>
      </tr>

      <tr>    
        <td><li><label for="MTsawmill">Mobile Timber Sawmill (Only for sawing)</label></li></td>
        <td><input type="checkbox" id="MTsawmill" data-name="Mobile timber sawmill (Only for Sawing)" name="nature[]" value="5000" class="checkbox-group1" onchange="handleCheckboxChange(this)"></td>
      </tr>

      <tr>
        <td><span style="color:red">@error('CopyReg'){{$message}}@enderror</span><br><span style="color:red">@error('license'){{$message}}@enderror</span><br><span style="color:red">@error('recomd'){{$message}}@enderror</span></td>
      </tr>

      <tr>
        <td><li><label for="sawmill">Sawmill (Only for sawing)</label></li></td>
        <td><input type="checkbox" id="sawmill" data-name="Sawmill" name="nature[]" value="5000" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>

      <tr>
        <td><span style="color:red">@error('deed'){{$message}}@enderror</span><br>
        <span style="color:red">@error('plan'){{$message}}@enderror</span><br><span style="color:red">@error('Confirm'){{$message}}@enderror</span><br><span style="color:red">@error('recom'){{$message}}@enderror</span></td>
      </tr>
    </ol>
      
      <tr>
        <td><label for="vehicle3">2.Timber Sales Outlet(only for sale of timber and machines cannot be used)</label></td>
        <td><input type="checkbox" id="TSOutlet" data-name="Timber_sales_outlet" name="nature[]" value="3000" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>  

      <tr>
        <td> <label for="seasoning">3.Seasoning or Processing Factory(sawing of logs and sale of timber not permitted)</label></td>
        <td><input type="checkbox" id="seasoning" data-name="Seatimbersoning_or_processing_factory" name="nature[]" value="5000" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr> 

      <tr>
        <td><label for="Cshed">4.Carpentry Shed(storing of logs and sale of timber not permitted)</label></td>
        <td> <input type="checkbox" id="Cshed" data-name="Carpentry_shed" name="nature[]" value="750" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>  

      <tr>
        <td><label for="furniture">5.Timber Furniture Shop(only for the sale of finished furniture. Use of machines not permitted)</label></td>
        <td><input type="checkbox" id="furniture" data-name="Timber_furniture_shop" name="nature[]" value="500" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>

      <tr>
        <td> <label for="FWshed">6.Fire Wood Shed</label></td>
        <td> <input type="checkbox" id="FWshed" data-name="Fire_wood_shed" name="nature[]" value="150" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>
       
  </table>

</div><br>


<div id="reg3" class="div3 hidden ">
    <div class="mb-2 bg-success text-white text-center"> <h2>To Register New Timber Businesses</h2></div><br>

    <p><b>Details of the location of the woodshed</b></p>

      <div class="row g-3">
        <div class="col-md-6">
            <label for="wsadd">The address where the wood shed is located:</label>
            <input type="text" class="form-control" id="wsadd" name="wsadd" oninput="convertToUppercase()">
        </div>

        <div class="col-md-6">
            <label for="nland">Name of the land:</label>
            <input type="text"  class="form-control" id="nland" name="nland" oninput="convertToUppercase()" >
        </div>

        <div class="col-md-6">
            <label for="ownerofland">The owner of the land:</label>
            <input type="text" class="form-control" id="ownerofland" name="ownerofland" oninput="convertToUppercase()">
        </div>

        <div class="col-md-6">
            <label for="nameofwshed">Name of woodshed:</label>
            <input type="text" class="form-control" id="nameofwshed" name="nameofwshed" oninput="convertToUppercase()" >
        </div>

        <div class="col-md-4">   
            Copies of relevant land deed/tax deed<b>(Allowed type:pdf)</b><br>
              <input type="file" name="deed" id="deed" >
              <span style="color:red">@error('deed'){{$message}}@enderror</span>
        </div>
              <!--<input type="submit" value="Upload File" >-->

        <div class="col-md-3">   
            Image of plan(පිඹුර)<b>(Allowed type:pdf)</b><br>
              <input type="file" name="plan" id="plan" >
              <span style="color:red">@error('plan'){{$message}}@enderror</span>
        </div>
              <!--<input type="submit" value="Upload File" >-->

        <div class="col-md-5">    
            Affidavit taken to confirm authority if the land is not owned by you<b>(Allowed type:pdf)</b><br>
              <input type="file" name="Confirm" id="Confirm" >
              <span style="color:red">@error('Confirm'){{$message}}@enderror</span>
              <!--<input type="submit" value="Upload File" >-->
        </div>

        <div class="col-md-4">
            <label for="distric">District:</label>
            <input type="text" class="form-control" id="district" name="district" oninput="convertToUppercase()" >
        </div>

        <div class="col-md-4">
            <label for="DSsection">Divisional Secretary Section:</label>
            <input type="text" class="form-control" id="DSsection" name="DSsection" oninput="convertToUppercase()"  >
        </div>

        <div class="col-md-4">
            <label for="gnKottasaya">Grama Niladari Kottasa:</label>
            <input type="text" class="form-control" id="gnKottasaya" name="gnKottasaya" oninput="convertToUppercase()" >
        </div>

        <div class="col-md-6">
            <label for="Lgovernment">Local Government:</label><br><br>
            <input type="text"  class="form-control" id="Lgovernment" name="Lgovernment" oninput="convertToUppercase()" >
        </div>

        <div class="col-md-4">
            Recommendation of Divisional Secretary<b>(Allowed type:pdf)</b><br>
            <input type="file" name="recom" id="recom" >
            <span style="color:red">@error('recom'){{$message}}@enderror</span>
            <!--<input type="submit" value="Upload File" >--><br><br>
        </div>  
      </div>
</div>   
       

<div id="reg4" class="div4 hidden">
    <div class="mb-2 bg-success text-white text-center"> <h2>To Register The Mobile Sawmill</h2></div>
    <p><b>In the case of a Mobile Timber Sawmill;</b></p>

  <div class="row g-3">
    <div class="col-md-6">
        <label for="RegNoT">Registration No. of the hand tractor:</label>
        <input type="text" class="form-control" id="RegNoT" name="RegNoT">
    </div>

    <div class="col-md-6">
        <label for="RegNot">Registration No. of the trailer:</label>
        <input type="text" class="form-control" id="RegNotrailer" name="RegNotrailer" >
    </div>

    <div class="col-md-6">
    <label for="CopyReg">Copy of the Certificate of Registration and Revenue License should be Uploaded<b>(Allowed type:pdf)</b>:</label><br><br>
        <input type="file" name="CopyReg" id="CopyReg" >
        <span style="color:red">@error('CopyReg'){{$message}}@enderror</span>
        <!--<input type="submit" value="Upload image File" >-->
    </div>

    <div class="col-md-6">
        <label for="MTS">The Divisional Secretary's Division where the mobile timber sawmill is to be used:</label>
        <input type="text" class="form-control" id="MTS" name="MTS" oninput="convertToUppercase()" >
    </div>

    <div class="col-md-3">
        <label for="StDate">The date on which the business was started or is to be started:</label><br>
        <input type="date" class="form-control" id="StDate" name="StDate" >
    </div>

    <div class="col-md-3">
        <label for="Vtime">Validity period of the Environmental Protection License:</label>
        <input type="text"  class="form-control" id="Vtime" name="Vtime" >
    </div>

    <div class="col-md-3">
        Please Upload a copy of Protection License<b>(Allowed type:pdf)</b>:<br>
        <input type="file" name="license" id="license" >
        <span style="color:red">@error('license'){{$message}}@enderror</span>
        <!--<input type="submit" value="Upload image File" >-->
    </div>

    <div class="col-md-3">
        Recommendation of Divisional Secretary<b>(Allowed type:pdf)</b>:<br>
        <input type="file" name="recomd" id="recomd" >
        <span style="color:red">@error('recomd'){{$message}}@enderror</span>
        <!--<input type="submit" value="Upload File" >-->
    </div>
  </div>
</div><br> 

  <div id="reg5" class="div5 hidden">
  <div class="mb-2 bg-success text-white text-center"> <h2>Payment</h2></div>

  <table id="selectedItemsTable">
    <thead>
      <tr class="a1">
        <th class="a2">Choosed the Nature of Your Wood Shed</th>
        <th class="a2">Amount</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <div style="background-color: aqua;text-align: center;">Total Amount: Rs.<span id="totalAmount">0</span></div><br>
  

  <div class="col-md-3">
        <b>Total Amount : Rs.</b>
        <input type="text" id="totalAmountInput" name="totalAmount" readonly>
    </div>

  
   
  
    <label for="date">Date:</label>
        <input type="date" id="registration_date" name="registration_date" required>

        <script>
            // Auto-fill the date field with the current date
            document.getElementById('registration_date').valueAsDate = new Date();
        </script>
    
      <table> 
      <tr>
        <td>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" onclick="showConfirmation()">Submit And Payment</button>
            </div>
        </td>
    </tr>
</table>
</div>

  </form>

  



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>



      </main>

      
  </div>
</div>





<!-- ======= Footer ======= -->
@include('footer')
<!-- End  Footer -->

<script>
  
  const checkboxes1 = document.querySelectorAll('.checkbox-group, .checkbox-group1');
  const totalAmountElement = document.getElementById('totalAmount');
  const selectedItemsTableBody = document.querySelector('#selectedItemsTable tbody');

    // function handleCheckboxChange(checkbox) {
    //   // Check which checkboxes are selected
    //   const checkbox1 = document.querySelector('.checkbox-group1');
    //   const otherCheckboxes = document.querySelectorAll('.checkbox-group:checked');

    //   // Hide all divs initially
    //   document.querySelector('.div3').style.display = 'none';
    //   document.querySelector('.div4').style.display = 'none';
    //   document.querySelector('.div5').style.display = 'none';

    //   // Check the conditions and show the corresponding divs
    //   if (checkbox1.checked && otherCheckboxes.length > 0) {
    //     // 1st checkbox and any other checkbox are checked
    //     document.querySelector('.div4').style.display = 'block';
    //     document.querySelector('.div3').style.display = 'block';
    //   } else if (checkbox1.checked) {
    //     // 1st checkbox is checked
    //     document.querySelector('.div4').style.display = 'block';
    //   } else if (otherCheckboxes.length > 0) {
    //     // Any other checkbox is checked
    //     document.querySelector('.div3').style.display = 'block';
    //   }

    //   // Show Div 3 if any checkbox is checked
    //   if (checkbox1.checked || otherCheckboxes.length > 0) {
    //     document.querySelector('.div5').style.display = 'block';
    //   }
    // }



    document.addEventListener('DOMContentLoaded', function () {
  // Add event listeners to checkboxes
  const checkboxes1 = document.querySelectorAll('.checkbox-group, .checkbox-group1');
  checkboxes1.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
      handleCheckboxChange(checkbox);
      updateTotalAmount();
    });
  });

  // Call the function to check the initial state on page load
  checkboxes1.forEach(function (checkbox) {
    handleCheckboxChange(checkbox);
  });
});

function handleCheckboxChange(checkbox) {
  // Check which checkboxes are selected
  const checkbox1 = document.querySelector('.checkbox-group1');
  const otherCheckboxes = document.querySelectorAll('.checkbox-group:checked');

  // Hide all divs initially
  document.querySelector('.div3').style.display = 'none';
  document.querySelector('.div4').style.display = 'none';
  document.querySelector('.div5').style.display = 'none';

  // Check the conditions and show the corresponding divs
  if (checkbox1.checked && otherCheckboxes.length > 0) {
    // 1st checkbox and any other checkbox are checked
    document.querySelector('.div4').style.display = 'block';
    document.querySelector('.div3').style.display = 'block';
  } else if (checkbox1.checked) {
    // 1st checkbox is checked
    document.querySelector('.div4').style.display = 'block';
  } else if (otherCheckboxes.length > 0) {
    // Any other checkbox is checked
    document.querySelector('.div3').style.display = 'block';
  }

  // Show Div 3 if any checkbox is checked
  if (checkbox1.checked || otherCheckboxes.length > 0) {
    document.querySelector('.div5').style.display = 'block';
  }
}






    // Function to calculate individual amounts based on checked checkboxes
    function calculateAmount() {
      let amount = 0;
      selectedItemsTableBody.innerHTML = '';

      checkboxes1.forEach(function(checkbox) {
        if (checkbox.checked) {
          const itemName = checkbox.getAttribute('data-name');
          const itemAmount = parseInt(checkbox.value);
          amount += itemAmount;

          // Add the selected item to the table
          const newRow = selectedItemsTableBody.insertRow();
          const cell1 = newRow.insertCell(0);
          const cell2 = newRow.insertCell(1);
          cell1.textContent = itemName;
          cell2.textContent = `Rs.${itemAmount}`;
        }
      });

      return amount;
    }

    // Function to update the total amount element
    // Function to update the total amount element
function updateTotalAmount() {
  const totalAmount = calculateAmount();
  totalAmountElement.textContent = totalAmount;

  // Set the value of the input field with id 'totalAmountInput'
  const totalAmountInput = document.getElementById('totalAmountInput');
  if (totalAmountInput) {
    totalAmountInput.value = totalAmount;
  }
}


    // Add event listeners to checkboxes
    checkboxes1.forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        updateTotalAmount();
      });
    });

    //relavant field must be only block letters
    function convertToUppercase() {
            var inputFields = document.querySelectorAll(".form-control");
            inputFields.forEach(function(input) {
                input.value = input.value.toUpperCase();
            });
        }   
        

        
        function showConfirmation() {
    // Show a confirmation message using SweetAlert
    Swal.fire({
        title: "Are you sure to submit this?",
        text: "You won't be able to revert this submission",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, submit it!"
    }).then((result) => {
        // If the user clicks "Yes," proceed with form submission
        if (result.isConfirmed) {
            // Trigger your form submission logic here
            document.getElementById('myForm').submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // Handle the case where the user clicks "Cancel" or closes the dialog
            Swal.fire("Submission Cancelled", "Your form submission has been cancelled.", "info");
        } else {
            // If the user neither clicked "Yes" nor "Cancel," show the confirmation again
            showConfirmation();
        }
    });
}







</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</html>
