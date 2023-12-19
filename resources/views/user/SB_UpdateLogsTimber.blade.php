<!DOCTYPE html>
<html lang="en">
<head>
  <title>StockBook Update-LogsOfTimber</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
 
  #dlabel{padding:5px;}
  #d1{border:2px solid white; border-radius:12px; padding:5px;}
  </style>

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
        
          <!-- ====== logs of timber Update section ====== -->
            <div class="d-flex justify-content-between p-2 bg-light" style="height:85px;">  
                <div class="p-3"><img src="logs_of_timber.png" alt="img" width="51" height="auto"></div>
                <div class="p-4"><h4 class="text-black-50">Update Logs Of Timber : </h4></div>
                <div class="btn btn-group-sm">
                  <a href="StockBookUpdate" class="btn btn-outline-success" data-bs-toggle="tooltip" title="Go Back!">&#129136;</a>
                  <a href="SB_LogsTimber" class="btn btn-outline-success" data-bs-toggle="tooltip" title="View Records">&#128065;</a>
                </div>
            </div>
            <br>

            <div class="container mt-3">
              
              <form action="{{route('logstimbers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                
                <div class="mb-3 mt-3">

                  <div class="row">
                    
                    <div class="col-sm-3 bg-light" id="d1">
                      <div class="row">
                        <div class="col">
                          <label for="date" id="dlabel">Date : </label>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" id="date" placeholder="yyyy/mm/dd" name="date" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 bg-light" id="d1">
                      <div class="row">
                        <div class="col">
                          <label for="species" id="dlabel">Species :</label>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" id="species1" placeholder="" name="species">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">

                    <div class="col bg-light" id="d1">
                      <p class="text-center"><b>Opening Stock (logs)</b></p>
                      <div class="row">                  
                        <div class="col">
                          <label for="no_of_logs" id="dlabel">No. of logs :</label>
                          <input type="text" class="form-control" id="numlogs1" placeholder="" name="numlogs1" required>                          
                        </div>
                        <div class="col">                          
                          <label for="volume" id="dlabel">Volume (dm<sup>3</sup>/ft<sup>3</sup>) :</label>
                          <input type="text" class="form-control" id="volume1" placeholder="" name="volume1" required>
                        </div>                        
                      </div>                      
                    </div>

                    <div class="col bg-light" id="d1">
                      <p class="text-center"><b>Volume of Logs Received</b></p>
                      <div class="row">
                        <div class="col">
                          <label for="no_of_logs" id="dlabel">No. of logs :</label>
                          <input type="text" class="form-control" id="numlogs2" placeholder="" name="numlogs2">
                        </div>
                        <div class="col">
                          <label for="volume" id="dlabel">Volume (dm<sup>3</sup>/ft<sup>3</sup>) :</label>
                          <input type="text" class="form-control" id="volume2" placeholder="" name="volume2">
                        </div>                        
                      </div>                      
                    </div>

                  </div>

                  <div class="row">
                    <div class="col bg-light" style="border:2px solid white; border-radius:12px; padding:5px;">
                      <div class="col">                        
                        <label for="date">The Source of logs : </label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" id="sourceoflogs" placeholder="" name="sourceoflogs" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col bg-light" id="d1">
                      <p class="text-center"><b>The Volume of Logs Sold</b></p>
                      <div class="row">
                        <div class="col">
                          <label for="no_of_logs" id="dlabel">No. of logs :</label>
                          <input type="text" class="form-control" id="numlogs3" placeholder="" name="numlogs3" required>
                        </div>
                        <div class="col">
                          <label for="volume" id="dlabel">Volume (dm<sup>3</sup>/ft<sup>3</sup>) :</label>
                          <input type="text" class="form-control" id="volume3" placeholder="" name="volume3" required>
                        </div>                        
                      </div>                      
                    </div>

                    <div class="col bg-light" id="d1">
                      <p class="text-center"><b>Closing Stock (logs)</b></p>
                      <div class="row">                        
                        <div class="col">
                          <label for="no_of_logs" id="dlabel">No. of logs :</label>
                          <input type="text" class="form-control" id="numlogs4" placeholder="" name="numlogs4" required>
                        </div>
                        <div class="col">
                          <label for="volume" id="dlabel">Volume (dm<sup>3</sup>/ft<sup>3</sup>) :</label>
                          <input type="text" class="form-control" id="volume4" placeholder="" name="volume4" required>
                        </div>                        
                      </div>                      
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-2" style="border:2px solid white; border-radius:12px; padding:5px;">
                      <div class="col">
                        <input type="submit" class="btn btn-outline-success" value="Save Record">
                      </div>
                    </div>
                  </div>
                  
                </div>
              </form>
            </div>          

            
      </main>
  </div>
</div>

<!-- ======= Footer ======= -->
@include('footer')
</footer><!-- End  Footer -->

</body>
</html>