<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://js.stripe.com/v3/"></script>


  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  @include('livechat')

  <style>
    #card-element {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;
    }

    #card-errors {
        color: #dc3545; /* Bootstrap's danger color */
        margin-top: 10px;
    }
</style>
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
        
  <!--{{$errors}}-->

  <!--@if($errors->any())
    @foreach($errors->all() as $err)
      <li>{{$err}}</li>
    @endforeach
  @endif-->

  <form id="myForm" action="/CheckReg" method="POST" enctype="multipart/form-data" class="was-validated ">
  {{csrf_field()}}
  <div id="reg1" class="row g-3">

  <div class="mb-2 bg-success text-white text-center "> <h2>Personal Details</h2>
    </div>
    
    <div class="col-md-6 ">
        <label for="fname">Full Name:</label>
        <input type="text" class="form-control" id="fname" name="fname" oninput="convertToUppercase()" required pattern="[A-Za-z\s]+" required title="Name should contain only alphabetic characters and spaces.">
        <!--<span style="color:red">@error('fname'){{$message}}@enderror</span>-->
    </div>

    <div class="col-md-6">
        <label for="address">Serial Address:</label>
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
        <input type="email" class="" id="Email" name="Email" required style="height: 40px; width: 100%;">
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
        <td><input type="checkbox" id="MTsawmill" data-name="Mobile timber sawmill (Only for Sawing)" name="nature[]" value="10" class="checkbox-group1" onchange="handleCheckboxChange(this)"></td>
      </tr>

      <tr>
        <td><span style="color:red">@error('CopyReg'){{$message}}@enderror</span><br><span style="color:red">@error('license'){{$message}}@enderror</span><br><span style="color:red">@error('recomd'){{$message}}@enderror</span></td>
      </tr>

      <tr>
        <td><li><label for="sawmill">Sawmill (Only for sawing)</label></li></td>
        <td><input type="checkbox" id="sawmill" data-name="Sawmill" name="nature[]" value="20" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>

      <tr>
        <td><span style="color:red">@error('deed'){{$message}}@enderror</span><br>
        <span style="color:red">@error('plan'){{$message}}@enderror</span><br><span style="color:red">@error('Confirm'){{$message}}@enderror</span><br><span style="color:red">@error('recom'){{$message}}@enderror</span></td>
      </tr>
    </ol>
      
      <tr>
        <td><label for="vehicle3">2.Timber Sales Outlet(only for sale of timber and machines cannot be used)</label></td>
        <td><input type="checkbox" id="TSOutlet" data-name="Timber_sales_outlet" name="nature[]" value="30" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>  

      <tr>
        <td> <label for="seasoning">3.Seasoning or Processing Factory(sawing of logs and sale of timber not permitted)</label></td>
        <td><input type="checkbox" id="seasoning" data-name="Seatimbersoning_or_processing_factory" name="nature[]" value="40" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr> 

      <tr>
        <td><label for="Cshed">4.Carpentry Shed(storing of logs and sale of timber not permitted)</label></td>
        <td> <input type="checkbox" id="Cshed" data-name="Carpentry_shed" name="nature[]" value="50" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>  

      <tr>
        <td><label for="furniture">5.Timber Furniture Shop(only for the sale of finished furniture. Use of machines not permitted)</label></td>
        <td><input type="checkbox" id="furniture" data-name="Timber_furniture_shop" name="nature[]" value="60" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
      </tr>

      <tr>
        <td> <label for="FWshed">6.Fire Wood Shed</label></td>
        <td> <input type="checkbox" id="FWshed" data-name="Fire_wood_shed" name="nature[]" value="70" class="checkbox-group" onchange="handleCheckboxChange(this)"></td>
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

  
    Uplord Bank Slip:<br><input type="file" name="payment" id="payment" >
    <!--<input type="submit" value="Upload File" >--><br><br>
  

    
      <table> 
      <tr>
        <td>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" onclick="showConfirmation()">Submit</button>
            </div>
        </td>
    </tr>
</table>
</div>

  </form>

  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Payment Form</div>

                <div class="card-body">
                    <form action="{{ route('process.payment') }}" method="POST" id="payment-form">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="amount">Amount ($)</label>
                            <input type="number" name="amount" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="card-element">Credit or debit card</label>
                            <div id="card-element"></div>
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Create a Stripe client.
    var stripe = Stripe('{{ config('services.stripe.key') }}');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Create an instance of the card Element.
    var card = elements.create('card');

    // Add an instance of the card Element into the `card-element` div.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        stripe.createToken(card).then(function (result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>


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
    function updateTotalAmount() {
      const totalAmount = calculateAmount();
      totalAmountElement.textContent = totalAmount;
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
