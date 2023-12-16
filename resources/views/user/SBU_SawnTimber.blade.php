<!DOCTYPE html>
<html lang="en">
<head>
  <title>StockBook Update-SawnTimber</title>
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
</br>

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
        
          <!-- ====== sawn timber Update section ====== -->
            <div class="d-flex p-2 bg-light" style="height:85px;">  
                <div class="p-3"><img src="sawn_timber.png" alt="img" width="51" height="auto"></div>
                <div class="p-4"><h4 class="text-black-50">Update Sawn Timber : </h4></div>                
            </div>
            <br>

            <div class="table-responsive"> 
                <table class="table table-bordered" style="text-align:center; ">
                <thead class="table-success" style="border:1px solid white;">
                    <tr>
                        <th rowspan="3">Date</th>
                        <th rowspan="2" colspan="2">Opening Stock</th>
                        <th colspan="5">Sawn timber Received</th>
                        <th rowspan="2" colspan="2">Sawn timber sold</th>
                        <th rowspan="2" colspan="2">Balance stock</th>                        
                    </tr>
                    <tr>
                        <th colspan="2">From outside</th>
                        <th rowspan="2">The source of logs</th>
                        <th colspan="2">Conversion by sawing</th>                        
                    </tr>
                    <tr>
                        <th>Species</th>
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>
                        <th>Species</th>
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>
                        <th>Species</th>
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>
                        <th>Species</th>
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>
                        <th>Species</th>
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2022/12/10</td>
                        <td>Jack</td>
                        <td>188.5</td>
                        <td>08</td>
                        <td>Jack</td>
                        <td>188.5</td>
                        <td>08</td>
                        <td>permit No.112</td>
                        <td>Jack</td>
                        <td>188.5</td>
                        <td>08</td>
                        <td>Jack</td>                        
                    </tr>
                    <tr>
                        <td>2023/10/12</td>
                        <td>Kaluwara</td>
                        <td>314.75</td>
                        <td>11</td>
                        <td>Kaluwara</td>
                        <td>314.75</td>
                        <td>11</td>
                        <td>permit No.79</td>
                        <td>Kaluwara</td>
                        <td>314.75</td>
                        <td>11</td>
                        <td>Kaluwara</td>                        
                    </tr>
                </tbody>
                </table>
            </div>
          <!-- ====== sawn timber Update section ***END*** ====== -->

      </main>
  </div>
</div>




<!-- ======= Footer ======= -->
@include('footer')
<!-- End  Footer -->

</body>
</html>