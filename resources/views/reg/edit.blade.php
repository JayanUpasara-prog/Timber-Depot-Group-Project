<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color:black;
            //background-image: url('bg3.jpg');
            background-size:cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
            min-height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: center; 



        
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="">

 

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header bg-success" style="text-align: center; font-size: 20px;  color: white;">
                    Edit Your Information
                </div>
                <div class="card-body">
                    <form id="registrationForm" method="post" action="{{route('reg.update', ['registration' => $registration])}}">
                        @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    @method("put")

                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name" value="{{$registration -> name}}" placeholder="Enter your name" required>
                            <span class="text-danger">@error('name') <span class="text-danger">The name may only contain letters, spaces, and dots.</span> @enderror</span>
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
                            <span id="password-help" class="form-text text-muted">
        The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.
    </span><br>
                            <span class="text-danger">@error('password') {{$message}} @enderror</span><br>
                                
                            <input type="checkbox" id="showPasswordToggle" onclick="togglePasswordVisibility()">
                            <label for="showPasswordToggle">Show Password</label>
                        </div>
                        <div class="row">
    <div class="col-6">
        <input type="submit" class="btn btn-success" value="Update">
    </div>
    <div class="col-6 text-end">
        <button type="button" class="btn btn-success">
            <a href="{{ route('reg.index') }}" style="color: white; text-decoration: none;">Back</a>
        </button>
    </div>
</div>

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
            passwordInput.type = 'text'; 
        } else {
            passwordInput.type = 'password'; 
        }
    }
</script>



</body>
</html>
