<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <style>
        body {

            background-image: url('bg3.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #f0f0f0;
            /* Fallback background color */
            min-height: 100vh;
            /* Ensure the background covers the full viewport height */
            display: flex;
            align-items: center;
            /* Center vertically */
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




    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-6">


                <div class="card" style="background-color: rgba(255, 255, 255, 0.9);">
                    <div class="card-header"
                        style="text-align: center; font-size: 20px; background-color: #2c9845; color: white;">
                        Reset Your Password
                    </div>

                    <div class="card-body">

                        <form id="loginForm" method="post" action="{{route('reset.password.post')}}">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            @method('post')

                            <input type="text" name="token" hidden value="{{$token}}">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="loginEmail" name="email" required>
                                    <span class="text-danger">@error('email') The selected email is not registered. @enderror</span>
                            </div>

                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Enter New Password</label>
                                <input type="password" class="form-control" id="loginPassword" name="password" required>
                                <span id="password-help" class="form-text text-muted">
        The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.
    </span><br>
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>

                            <div class="mb-3">
                                <label for="loginPasswordConfirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="loginPasswordConfirmation"
                                    name="password_confirmation" required>
                                    
                                <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                            </div>


                            <input type="submit" class="btn btn-success" value="Submit" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>