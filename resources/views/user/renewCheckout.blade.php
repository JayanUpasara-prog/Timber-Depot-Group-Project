<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Checkout</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
  body {
    
      background-image: url('assets/img/4907157.jpg');  
    
      background-size: cover; 
      
      
      background-color: #f0f0f0; 
      
    
      background-repeat: no-repeat;
      background-position: center center;
      
    }
    </style>
  
   
   
    
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://js.stripe.com/v3/"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .payment-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        #card-element {
            border: 1px solid #ced4da;
            padding: 10px;
            border-radius: 4px;
        }

        #card-errors {
            color: #dc3545;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        #card-element {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;
    }

    #card-errors {
        color: #dc3545; 
        margin-top: 10px;
    }
    </style>
</head>
<body>

<div class="payment-container">
    <h2 class="text-center mb-4">Payment Checkout</h2>

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
            <input type="number" name="amount" class="form-control"  required>
        </div>

        <div class="form-group">
            <label for="payment_method">Payment Method</label>
            <select name="payment_method" class="form-control" required>
                <option value="card">Credit Card</option>
             
            </select>
        </div>

        <div class="form-group">
    <label for="cardholder-name">Name on Card</label>
    <input type="text" name="cardholder_name" class="form-control" pattern="[A-Za-z\s]+" title="Only letters and spaces are allowed" required>
</div>



        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="card-element">Credit or debit card</label>
            <div id="card-element"></div>
            <div id="card-errors" role="alert"></div>
        </div>

    
        

        <button type="submit" class="col text-end btn btn-primary btn-block" onclick="confirmPayment()">Submit Payment</button>

    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
 
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
   
    var stripe = Stripe('{{ config('services.stripe.key') }}');

   
    var elements = stripe.elements();

  
    var card = elements.create('card');

   
    card.mount('#card-element');

   
    card.addEventListener('change', function (event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

   
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        stripe.createToken(card).then(function (result) {
            if (result.error) {
                
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
              
                stripeTokenHandler(result.token);
            }
        });
    });

   
    function stripeTokenHandler(token) {
      
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

       
        form.submit();
    }


    function confirmPayment() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to submit the payment.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, submit it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                submitPayment();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire('Cancelled', 'Your payment was not submitted.', 'error');
            }
        });
    }

    function submitPayment() {
        var form = document.getElementById('payment-form');
        stripe.createToken(card).then(function (result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
              
                Swal.fire('Payment Successful', 'Your Account is Renewed. Redirecting to User Dashboard...', 'success')
                    .then(() => {
                    
                        window.location.href = '{{ route("UserDashboard") }}';
                    });
            }
        });
    }
</script>

</body>
</html>
