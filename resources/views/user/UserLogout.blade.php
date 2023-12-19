<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Logout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
 
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  @include('livechat')
  <style>
  body {
    
      background-image: url('assets/img/4907157.jpg');       
     
      background-size: cover; 
      
     
      background-color: #f0f0f0; 
      
     
      background-repeat: no-repeat;
      background-position: center center;
      
    }
    </style>
</head>
<body>

@include('userHeadNav')


<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       
      </main>
  </div>
</div>



<!-- ======= Footer ======= -->
@include('footer')
<!-- End  Footer -->

</body>
</html>
