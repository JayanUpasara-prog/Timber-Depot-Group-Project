<!DOCTYPE html>
<html lang="en">
<head>
  <title>StockBook Update-SawnTimber</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
 
  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  <!-- include add live chat part -->
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
        <div class="container">
          <div class="p-3 mb-2 bg-success text-white">
            <h2>StockBook Update</h2>
          </div>
          </br>
        
          <!-- ====== sawn timber Update section ====== -->
            <div class="d-flex justify-content-between p-2 bg-light" style="height:85px;">  
                <div class="p-3"><img src="sawn_timber.png" alt="img" width="51" height="auto"></div>
                <div class="p-4"><h4 class="text-black-50">Sawn Timber : </h4></div>                
                <div class="btn btn-group-sm">
                  <a href="StockBookUpdate" class="btn btn-outline-success" data-bs-toggle="tooltip" title="Go Back!">&#129136;</a>
                  <a href="SB_UpdateSawnTimber" class="btn btn-outline-success" data-bs-toggle="tooltip" title="Add New Record">&#10010;</a>
                  <button type="button" class="btn btn-outline-success" data-bs-toggle="tooltip" title="Edit/Update Record">&#9998;</button>
                  <button type="button" class="btn btn-outline-success" data-bs-toggle="tooltip" title="Delete Record">&#10060;</button>
                </div>
            </div>
            <br>

            <div class="table-responsive"> 
                <table class="table table-bordered" style="text-align:center; ">
                <thead class="table-success" style="border:1px solid white;">
                    <tr>
                        <th rowspan="3">Date</th>
                        <th rowspan="3">Species</th>
                        <th rowspan="2">Opening Stock</th>
                        <th colspan="3">Sawn timber Received</th>
                        <th rowspan="2">Sawn timber sold</th>
                        <th rowspan="2">Balance stock</th>                        
                    </tr>
                    <tr>
                        <th colspan="1">From outside</th>
                        <th rowspan="2">The source of logs</th>
                        <th colspan="1">Conversion by sawing</th>                        
                    </tr>
                    <tr>                        
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>                        
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>                        
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>                        
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>                      
                        <th>Volume dm<sup>3</sup>/ft<sup>3</sup></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2022/12/10</td>
                        <td>Jack</td>
                        <td>188.5</td>
                        <td>188.5</td>
                        <td>By permit No.123</td>
                        <td>155</td>
                        <td>150</td>
                        <td>149</td> 
                    </tr>
                    <tr>
                        <td>2023/10/12</td>
                        <td>Kaluwara</td>
                        <td>188.5</td>
                        <td>188.5</td>
                        <td>By permit No.123</td>
                        <td>155</td>
                        <td>150</td>
                        <td>149</td>
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
</footer><!-- End  Footer -->

</body>
</html>