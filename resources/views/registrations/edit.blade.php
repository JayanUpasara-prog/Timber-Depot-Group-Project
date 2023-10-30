<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <style>
        body {
       background-image: url('bg3.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #f0f0f0; /* Fallback background color */
            min-height: 100vh; /* Ensure the background covers the full viewport height */
            display: flex;
            align-items: center; /* Center vertically */
            justify-content: center; 

        
        }
        /* Style for the login card */
        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the card */
        }
    </style>
</head>
<body>

 <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div> 

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size: 20px; background-color: #2c9845; color: white;">
                    Register
                </div>
                <div class="card-body">
                    <form id="registrationForm" method="post" action="{{route('registration.update', ['registration' => $registration])}}">
                        @csrf
                        @method("put")

                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name" value="{{$registration -> name}}" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control"  name="email" value="{{$registration -> email}}" aria-describedby="emailHelp" placeholder="Enter email" required pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="8" pattern=".{8,}" title="Password should contain at least 8 characters" required>
                            <input type="checkbox" id="showPasswordToggle" onclick="togglePasswordVisibility()">
                            <label for="showPasswordToggle">Show Password</label>
                        </div>
                        <input type="submit" class="btn btn-success" value="Update">
                        <p class="mt-3">Already have an account? <a href="login">Login here</a></p>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const showPasswordToggle = document.getElementById('showPasswordToggle');

        if (showPasswordToggle.checked) {
            passwordInput.type = 'text'; // Change to text to reveal the password
        } else {
            passwordInput.type = 'password'; // Change back to password to mask the password
        }
    }
</script>



</body>
</html>
