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
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

            min-height: 100vh;
            /* Ensure the background covers the full viewport height */
            display: flex;
            align-items: center;
            justify-content: center;


        }

        /* Style for the login card */
        .card {
            background-color: rgba(255, 255, 255, 0.8);
            /* Add a semi-transparent white background to the card */
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="mt-5">



            <div class="container mt-5">

                <div class="row justify-content-center align-items-center">

                    <div class="col-md-6">

                        <!-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                 @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->




                        <div class="card" style="background-color: rgba(255, 255, 255, 0.9);">
                            <div class="card-header"
                                style="text-align: center; font-size: 30px; background-color: #2c9845; color: white;">
                                Register
                            </div>
                            <div class="card-body">
                                <form id="registrationForm" method="post" action="{{route('reg.store')}}">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("post")


                                    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" pattern="[A-Za-z\s]+" required title="Name should contain only alphabetic characters and spaces.">
        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" required>
                                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                        <br>
                                        <input type="checkbox" id="showPasswordToggle"
                                            onclick="togglePasswordVisibility()">
                                        <label for="showPasswordToggle">Show Password</label>
                                    </div>
                                    <div class="row">
    <div class="col-6">
    <input type="submit" class="btn btn-success" value="Register">
    </div>
    <div class="col-6 text-end">
        <button type="button" class="btn btn-success">
            <a href="{{ url('/####') }}" style="color: white; text-decoration: none;">Home</a>
        </button>
    </div>
</div>

                                    
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