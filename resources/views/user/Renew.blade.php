<!DOCTYPE html>
<html lang="en">
<head>
  <title>Renew</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  
  
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('woodenShedDetails').style.display = 'none';
      document.getElementById('mobileSawmillDetails').style.display = 'none';
      function toggleDetails(selectedOption) {
        if (selectedOption === 'woodenShed') {
          document.getElementById('woodenShedDetails').style.display = 'block';
          document.getElementById('mobileSawmillDetails').style.display = 'none';
        } else if (selectedOption === 'mobileSawmill') {
          document.getElementById('woodenShedDetails').style.display = 'none';
          document.getElementById('mobileSawmillDetails').style.display = 'block';
        } else {
          document.getElementById('woodenShedDetails').style.display = 'none';
          document.getElementById('mobileSawmillDetails').style.display = 'none';
        }
      }

      document.getElementById('detailsSelector').addEventListener('change', function () {
        toggleDetails(this.value);
      });
    });
  </script>

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




<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

      <!-- Main Content -->


      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container mt-3">
          <div class="p-3 mb-2 bg-success text-white"> <h2>Renew</h2>
        </div>
   
        <form action="{{ route('renew.submit') }}" method="POST" id="renew-form">
    @csrf
        <div id="main_div">
          <h4>Renewal the registration of a woodshed </h4>

          <div class="container mt-3">

            <form action="/" class="was-validated" target="_blank" method="POST">
              <h5 class="text-black-50"></h5>		
		<h6>Owner Details:</h6>
                 <ol>
<li>
		<div class="mb-3 mt-3">
                <label for="fullname">Full Name : {{ $RegisteredUser->fname }}</label>                
              </div></li>

              <li><div class="mb-3 mt-3">
                <label for="address">Email : {{ $RegisteredUser->Email }}</label>
                <div class="row">
                  <div class="col">
                   
                  </div></li>

              <li><div class="mb-3 mt-3">
                <label for="address">Permanent Address : {{ $RegisteredUser->address }}</label>
                <div class="row">
                  <div class="col">
                   
                  </div></li>
                  
                  <li><div class="mb-3 mt-3">
                <label for="nic_no.">National Identity Card No. : {{ $RegisteredUser->idno }}</label>          
              </div></li>
              <li><div class="mb-3 mt-3">
                <label for="amount">Renewal Amount :  {{ $RegisteredUser->total }}</label>          
              </div></li>
              

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
<div class="col-6">
        <input type="submit" class="btn btn-success" value="Renew">
    </div>

      </main>
  </div>
</div>




<!-- ======= Footer ======= -->
@include('footer')
<!-- End  Footer -->

</body>
</html>
