<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Checkout</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

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
        color: #dc3545; /* Bootstrap's danger color */
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
            <input type="number" name="amount" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="payment_method">Payment Method</label>
            <select name="payment_method" class="form-control" required>
                <option value="card">Credit Card</option>
                <!-- Add other payment methods if needed -->
            </select>
        </div>

        <div class="form-group">
            <label for="cardholder-name">Name on Card</label>
            <input type="text" name="cardholder_name" class="form-control" required>
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

        <button type="submit" class="btn btn-primary btn-block">Submit Payment</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Stripe integration script here...
</script>


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

</body>
</html>
