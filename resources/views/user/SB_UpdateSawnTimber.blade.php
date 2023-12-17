<!DOCTYPE html>
<html lang="en">
<head>
  <title>StockBook Update-SawnTimber</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
  /* .fakeimg {
    height: 200px;
    background: #aaa;
  } */
  #dlabel{padding:5px;}
  #d1{border:2px solid white; border-radius:12px; padding:5px;}
  </style>

  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
  <!-- include add live chat part -->
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
        
          <!-- ====== sawn timber Update section ====== -->
            <div class="d-flex justify-content-between p-2 bg-light" style="height:85px;">  
                <div class="p-3"><img src="sawn_timber.png" alt="img" width="51" height="auto"></div>
                <div class="p-4"><h4 class="text-black-50">Update Sawn Timber : </h4></div>
                <div class="btn btn-group-sm">                  
                  <a href="StockBookUpdate" class="btn btn-outline-success" data-bs-toggle="tooltip" title="Go Back!">&#129136;</a>
                  <a href="SB_SawnTimber" class="btn btn-outline-success" data-bs-toggle="tooltip" title="View Records">&#128065;</a>                
                </div>                  
            </div>
            <br>

            <div class="container mt-3">
              
              <form action="/action_page.php" target="" method="POST">
                
                <div class="mb-3 mt-3">

                  <div class="row">
                    <div class="col bg-light" id="d1">
                      <div class="row">
                        <div class="col">
                          <label for="date" id="dlabel">Date : </label>
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" id="date" placeholder="yyyy/mm/dd" name="date" required>
                        </div>
                      </div>                      
                    </div>
                    <div class="col" id="d1">
                      <div class="row"></div>             
                    </div>
                    <div class="col" id="d1">
                      <div class="row"></div>                      
                    </div>
                    <div class="col" id="d1">
                      <div class="row"></div>
                    </div>                

                    <!-- <div class="col" id="d1">
                      <div class="row"></div>
                    </div> -->
                    <!-- <div class="col" id="d1">
                      <div class="row"></div>
                    </div> -->
                  </div>
                  
                  <div class="row">

                    <div class="col bg-light" id="d1">
                      <p class="text-center"><b>Opening Stock (logs)</b></p>
                      <div class="row">
                        <div class="col">
                          <label for="species" id="dlabel">Species :</label>
                          <input type="text" class="form-control" id="species1" placeholder="" name="species1" required>
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
                          <label for="species" id="dlabel">Species :</label>
                          <input type="text" class="form-control" id="species2" placeholder="" name="species2" required>
                        </div>
                        <div class="col">
                          <label for="volume" id="dlabel">Volume (dm<sup>3</sup>/ft<sup>3</sup>) :</label>
                          <input type="text" class="form-control" id="volume2" placeholder="" name="volume2" required>
                        </div>
                        <div class="col">
                          <label for="no_of_logs" id="dlabel">No. of logs :</label>
                          <input type="text" class="form-control" id="numlogs2" placeholder="" name="numlogs2" required>
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
                          <label for="species" id="dlabel">Species :</label>
                          <input type="text" class="form-control" id="species3" placeholder="" name="species3" required>
                        </div>
                        <div class="col">
                          <label for="volume" id="dlabel">Volume (dm<sup>3</sup>/ft<sup>3</sup>) :</label>
                          <input type="text" class="form-control" id="volume3" placeholder="" name="volume3" required>
                        </div>
                        <div class="col">
                          <label for="no_of_logs" id="dlabel">No. of logs :</label>
                          <input type="text" class="form-control" id="numlogs3" placeholder="" name="numlogs3" required>
                        </div>
                      </div>                      
                    </div>

                    <div class="col bg-light" id="d1">
                      <p class="text-center"><b>Closing Stock (logs)</b></p>
                      <div class="row">
                        <div class="col">
                          <label for="species" id="dlabel">Species :</label>
                          <input type="text" class="form-control" id="species4" placeholder="" name="species4" required>
                        </div>
                        <div class="col">
                          <label for="volume" id="dlabel">Volume (dm<sup>3</sup>/ft<sup>3</sup>) :</label>
                          <input type="text" class="form-control" id="volume4" placeholder="" name="volume4" required>
                        </div>
                        <div class="col">
                          <label for="no_of_logs" id="dlabel">No. of logs :</label>
                          <input type="text" class="form-control" id="numlogs4" placeholder="" name="numlogs4" required>
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
            

            <!-- <div class="table-responsive"> 
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
                
                </table>
            </div> -->
          <!-- ====== sawn timber Update section ***END*** ====== -->

      </main>
  </div>
</div>


<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div> -->

<!-- ======= Footer ======= -->
@include('footer')
</footer><!-- End  Footer -->

</body>
</html>