
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permit Request Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://js.stripe.com/v3/"></script>


  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}

.contact{
    min-height: 100vh;
    background-color: #e8f0fe;
    padding: 50px;
    text-align: center;
}

.container2{
    max-width: 800px;
    margin: 0 auto;
}

.container2 h2{
    font-size: 36px;
    margin-bottom: 40px;
    color: #333;
}

.contact-wrapper{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 30px;
}

.contact-form{
    text-align: left;
}

.contact-form h3{
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.form-group{
    margin-bottom: 20px;
}

input,textarea{
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: none;
    background-color: #f8f9fa;
    color: #333;
}

input:focus,
textarea:focus{
    outline: none;
    box-shadow: 0 0 8px #bbb;
}

button{
    display: inline-block;
    padding: 10px 24px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
}

button:hover{
    background-color: #45a049;
}

.contact-info{
    text-align:left ;
}

.contact-info h3{
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.contact-info p{
    margin-bottom: 10px;
    color: #555;
}

.contact-info i{
    color: #4caf50;
    margin-right:10px;
}



@media screen and(max-width:768px){
    .container2{
        padding: 20px;
    }
    .contact-wrapper{
        grid-template-columns: 1fr;
    }
} 

.success {
    background-color: #9fd2a1;
    padding: 5px 10px;
    text-align: center;
    color: #326b07;
    border-radius: 3px;
    font-size: 14px; 
    margin-top: 10px;
}


        </style>
</head>
<body>

<br>
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


<section class="contact">
<div class="container2">

<div class="mb-2 bg-success text-white text-center"><h2>Permit Request Form</h2></div>
    <br>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/storepermit') }}" method="POST">
    @csrf


    <label for="national_id_number">National ID Number:</label>
    <input type="text" name="national_id_number"  required>
    <br>

<label for="contact_number">Contact Number:</label>
<input type="text" name="contact_number"  required>
<br>

<label for="email">Email:</label>
<input type="text" name="email"  required>

<br>

<label for="traveling_date">Traveling Date:</label>
<input type="date" name="traveling_date" required>
<br>

<label for="traveling_distance">Traveling Distance:</label>
<input type="text" name="traveling_distance">
<br>

<label for="receiver_address">Receiver Address:</label>
<input type="text" name="receiver_address">
<br>

<label for="vehicle_number">Vehicle Number:</label>
<input type="text" name="vehicle_number">
<br>

<label for="timber_type">Timber Type:</label>
<input type="text" name="timber_type">
<br>

<label for="length">Length:</label>
<input type="text" name="length">
<br>

<label for="width">Width:</label>
<input type="text" name="width">
<br>

<label for="thickness">Thickness:</label>
<input type="text" name="thickness">
<br>

<label for="count">Count:</label>
<input type="text" name="count">
<br>
<br><br>

<button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br><br>
    @if($errors->any())
    @foreach($errors->all() as $err)
        <li>{{$err}}</li>
    @endforeach
@endif
    
    @include('footer')
    

</body>

</html>