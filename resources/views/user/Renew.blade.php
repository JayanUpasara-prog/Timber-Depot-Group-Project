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
    
      background-image: url('assets/img/4907157.jpg');       
      
      background-size: cover; 
      
     
      background-color: #f0f0f0; 
      
     
      background-repeat: no-repeat;
      background-position: center center;
      
    }
    </style>
  
  
  
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  @include('livechat')
</head>
<body>

@include('userHeadNav')




<div class="container-fluid">
  <div class="row">
     
      @include('userSideNav')

    


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

             
<li>
    <div class="mb-3 mt-3">
        @php
            $renewalDate = \Carbon\Carbon::parse($RegisteredUser->registration_date)->addYear();
        @endphp
        <label for="amount">Renewal Date: {{ $renewalDate->format('Y-m-d') }}</label>
    </div>
</li>

              <li><div class="mb-3 mt-3">
                <label for="amount">Renewal Amount :  {{ $RegisteredUser->total }}</label>          
              </div></li>

              
              

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


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
