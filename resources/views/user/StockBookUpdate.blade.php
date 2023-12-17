<!DOCTYPE html>
<html lang="en">
<head>
  <title>StockBook Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style> -->
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  @include('livechat')
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
</head>
<body>

@include('userHeadNav')


<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      @include('userSideNav')

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
          <div class="p-3 mb-2 bg-success text-white">
            <h2>StockBook Update</h2>
          </div>
          </br>
        
          <!-- ====== logs of timber & sawn timber buttons ====== -->
          <div class="container mt-3">          
            <div class="d-flex justify-content-center">
              <div class="row">
                <div class="col">
                  <div class="card bg-light" style="width:300px;">
                    <img class="card-img-top" src="logs_of_timber.png" alt="Card image" style="width:75%; height:auto; padding-left:25%;">                            
                    <div class="card-body" style="text-align:center;">
                      <h4 class="card-title">Logs of Timber</h4>
                      <a href="SB_LogsTimber" class="btn btn-outline-success">View</a>
                      <!-- <a href="SB_LogsTimber" class="btn btn-outline-success">Update Status</a> -->
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light" style="width:300px;">
                    <img class="card-img-top" src="sawn_timber.png" alt="Card image" style="width:75%; height:auto; padding-left:25%;">                            
                    <div class="card-body" style="text-align:center;">
                      <h4 class="card-title">Sawn Timber</h4>
                      <a href="SB_SawnTimber" class="btn btn-outline-success">View</a>
                      <!-- <a href="SB_SawnTimber" class="btn btn-outline-success">Update Status</a> -->
                    </div>
                  </div>
                </div>              
              </div>            
            </div><!-- === === === end of button section === === ===  -->

          </div>
          <!-- ====== container logs of timber & sawn timber buttons ***END*** ====== -->

      </main>
  </div>
</div>




<!-- ======= Footer ======= -->
@include('footer')
<!-- End  Footer -->

</body>
</html>
