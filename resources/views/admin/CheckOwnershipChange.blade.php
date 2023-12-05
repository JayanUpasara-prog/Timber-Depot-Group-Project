<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check Ownership Change</title>
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
</head>
<body>

<!-- <div class="p-2 bg-light text-black text-center">
  <img src="Srilanka.jpg" class="float-start img-fluid" alt="Srilanka" width="100" height="100">
  <h1 class="text-success text-start">Forest Department,</h1>
  <p class="text-dark text-start">Melsiripura</p> 
</div> -->

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage">
      <img src="assets/images/dashboardImg/Srilanka.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <span class="text-success">Forest Department,</span>
      Melsiripura
    </a>
    <form class="d-flex mx-auto text-right" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="btn-group">
      <button type="button" class="btn btn-light dropdown-toggle btn-outline-success" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/dashboardImg/face.jpg" alt="Profile Photo" class="rounded-circle" width="20" height="20">
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">My Profile</a></li>
          <li><a class="dropdown-item" href="#">Log Out</a></li>
      </ul>
  </div>
</nav>

<!-- <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
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
  </div>
</nav> -->
</br>

<div class="container-fluid">
  <div class="row">
      <!-- Side Navigation Bar -->
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
          <div class="position-sticky">
              <ul class="nav flex-column nav-pills nav-stacked">
                  <li class="nav-item">
                      <a class="nav-link " href="AdminDashboard">
                          Dashboard/My Profile
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="CheckRegistration">
                          Check Registration
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="CheckRenew">
                          Check Renew
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bg-success active" href="CheckOwnershipChange">
                        Check Ownership Change
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="CheckPermitRequest">
                      Check Permit Request
                    </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="CheckStockBookUpdate">
                          Check StockBook Update
                     </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="CustomerSupport">
                         Customer Support
                    </a>
                 </li>
                 <li class="nav-item">
                  <a class="nav-link" href="Logout">
                       Logout
                  </a>
               </li>
              </ul>
          </div>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- <div class="container mt-3">
          <div class="p-3 mb-2 bg-primary text-white"> <h2>Registration</h2>
      </div>
   
    <form action="/action_page.php" enctype="multypart/form-data">
      <div id="reg1">
      <div class="mb-3 mt-3">
          <label for="fname">Full Name:</label>
          <input type="text" class="form-control" id="fname" name="fname">
      </div>
  
      <div class="mb-3 mt-3">
          <label for="address">Serial Address:</label>
          <input type="text" class="form-control" id="address" name="address">
      </div>
  
      <div class="mb-3 mt-3">
          <label for="idno">National Id Number:</label>
          <input type="text" class="form-control" id="idno" name="idno" >
  
          
            Image Of NIC<br>
            <input type="file" name="fnic" id="fnic">
            <input type="submit" value="Upload Front image File"><br><br>
          
            <input type="file" name="bnic" id="bnic">
            <input type="submit" value="Upload Back image File">
      </div>
  
      <div class="mb-3 mt-3">
          <label for="wsadd">The address where the wood shed is located:</label>
          <input type="text" class="form-control" id="wsadd" name="wsadd" >
      </div>
  
      <div class="mb-3 mt-3">
          <label for="nland">Name of the land:</label>
          <input type="text"  class="form-control" id="nland" name="nland" >
      </div>
  
      <div class="mb-3 mt-3">
          <label for="ownerofland">The owner of the land:</label>
          <input type="text" class="form-control" id="ownerofland" name="ownerofland" >
  
         
          Copies of relevant land deed/tax deed<br>
            <input type="file" name="deed" id="deed">
            <input type="submit" value="Upload File"><br><br>
  
          Image of plan(පිඹුර)<br>
            <input type="file" name="plan" id="plan">
            <input type="submit" value="Upload File"><br><br>
          
          Affidavit taken to confirm authority if the land is not owned by you<br>
            <input type="file" name="Confirm" id="Confirm">
            <input type="submit" value="Upload File">
          
      </div>
  
      <div class="mb-3 mt-3">
          <label for="nameofwshed">Name of woodshed:</label>
          <input type="text" class="form-control" id="nameofwshed" name="nameofwshed" >
      </div>
  
      <div>
        
        <button class="btn btn-primary me-md-2" type="button">Next</button>
  
      </div>
  </div><br>
  
      <div id="reg2">
      <div class="p-3 mb-2 bg-primary text-white"> <h2>Registration</h2></div>
  
      <p>The nature of the wood shed</p>
      <p><b>Choose the nature of your wood shed:</b></p>
  
      
      <table>
      <ol type="I">
        <tr>
          <td>1.sawmill</td>
        </tr>
        <tr>
          <td><li><label for="sawmill">Sawmill (Only for Sawing)</label></li></td>
          <td><input type="checkbox" id="sawmill" name="sawmill" value="sawmill"></td>
        </tr>
  
        <tr>    
          <td><li><label for="MTsawmill">Mobile timber sawmill (Only for Sawing)</label></li></td>
          <td><input type="checkbox" id="MTsawmill" name="MTsawmill" value="MTsawmill"></td>
        </tr> 
      </ol>
        
        <tr>
          <td><label for="vehicle3">2.Timber sales outlet(only for sale of timber and machines cannot be Used)</label></td>
          <td><input type="checkbox" id="TSOutlet" name="TSOutlet" value="TSOutlet"></td>
        </tr>  
  
        <tr>
          <td> <label for="seasoning">3. timber seasoning or processing factory(sawing of logs and sale of timber not permitted)</label></td>
          <td><input type="checkbox" id="seasoning" name="seasoning" value="seasoning"></td>
        </tr> 
  
        <tr>
          <td><label for="Cshed">4.carpentry shed(storing of logs and sale of timber not permitted)</label></td>
          <td> <input type="checkbox" id="Cshed" name="Cshed" value="Cshed"></td>
        </tr>  
  
        <tr>
          <td><label for="furniture">5.Timber furniture shop(only for the sale of finished furniture. Use of machines not permitted)</label></td>
          <td><input type="checkbox" id="furniture" name="furniture" value="furniture"></td>
        </tr>
  
        <tr>
          <td> <label for="FWshed">6.Fire wood shed</label></td>
          <td> <input type="checkbox" id="FWshed" name="FWshed" value="FWshed"></td>
        </tr>
         
    </table>
  
    <table>
      <tr>
          <td>
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      
      <button class="btn btn-primary me-md-2" type="button">Back</button>
  </div>
      </td>
      <td>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     
      <button class="btn btn-primary me-md-2" type="button">Next</button>
      </div>
      </td>
      </tr>
      </table>
  </div><br>
  
  <div id="reg3">
      <div class="p-3 mb-2 bg-primary text-white"> <h2>Registration</h2></div><br>
  
      <p>Details of the location of the woodshed</p><br>
  
      <div class="mb-3 mt-3">
          <label for="distric">District:</label>
          <input type="text" class="form-control" id="district" name="district">
      </div>
  
      <div class="mb-3 mt-3">
          <label for="DSsection">Divisional Secretary Section:</label>
          <input type="text" class="form-control" id="DSsection" name="DSsection">
      </div>
  
      <div class="mb-3 mt-3">
          <label for="gnKottasaya">Grama Niladari Kottasa:</label>
          <input type="text" class="form-control" id="gnKottasaya" name="gnKottasaya" >
      </div>
  
      <div class="mb-3 mt-3">
          <label for="wsadd">The address where the wood shed is located:</label>
          <input type="text" class="form-control" id="wsadd" name="wsadd" >
      </div>
  
      <div class="mb-3 mt-3">
          <label for="Lgovernment">Local Government:</label>
          <input type="text"  class="form-control" id="Lgovernment" name="Lgovernment" >
      </div>
  
      <table>
      <tr>
          <td>
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary me-md-2" type="button">Back</button>
  </div>
      </td>
      <td>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-primary me-md-2" type="button">Next</button>
  </div>
  </td>
  </tr>
  </table>
  
  </div><br>
  
  <div id="reg4">
      <div class="p-3 mb-2 bg-primary text-white"> <h2>Registration</h2></div><br>
  
      <p>In the case of a mobile timber sawmill;</p>
  
      <div class="mb-3 mt-3">
          <label for="RegNoT">Registration No. of the hand tractor:</label>
          <input type="text" class="form-control" id="RegNoT" name="RegNoT">
      </div>
  
      <div class="mb-3 mt-3">
          <label for="RegNot">Divisional Secretary Section:Registration No. of the trailer:<br>(Copy of the Certificate of Registration and Revenue License should be attached)</label>
          <input type="text" class="form-control" id="RegNot" name="RegNot">
      </div>
  
      <div class="mb-3 mt-3">
          <label for="MTS">The Divisional Secretary's Division where the mobile timber sawmill is to be used:</label>
          <input type="text" class="form-control" id="MTS" name="MTS" >
      </div>
  
      <div class="mb-3 mt-3">
          <label for="StDate">The date on which the business was started or is to be started :</label>
          <input type="text" class="form-control" id="StDate" name="StDate" >
      </div>
  
      <div class="mb-3 mt-3">
          <label for="Vtime">Validity period of the Environmental Protection License(Please attach a copy)</label>
          <input type="text"  class="form-control" id="Vtime" name="Vtime" >
      </div>
  
      <table>
      <tr>
          <td>
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="registeruserP3">
      <button class="btn btn-primary me-md-2" type="button">Back</button>
  </div>
      </td>
      <td>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="registeruserP5">
      <button class="btn btn-primary me-md-2" type="button">Next</button>
  </div>
  </td>
  </tr>
  </table>
  </div><br>
  
  <div id="reg5">
      <div class="p-3 mb-2 bg-primary text-white"> <h2>Registration</h2></div><br>
  
      Recommendation of Divisional Secretary<br>
          <input type="file" name="recom" id="recom">
          <input type="submit" value="Upload File"><br><br>
          Payment<br>
          <input type="file" name="recom" id="recom">
          <input type="submit" value="Upload File"><br><br>
  
          <table>
      <tr>
          <td>
  
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="registeruserP4">
              <button class="btn btn-primary me-md-2" type="button">Back</button>
              </div>
          </td>
      </tr>
  </table>
  </div>
  
    </form> -->
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
<footer class="footer mt-2">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-lg-4">
        <div class="footer-logo">

          <a class="navbar-brand" href="#">Forest Department,<br>Melsiripura.</a>
          <p> HF4C+JG4, Ibbagamuwa, <br> Melsiripura.<br>
              info@example.com<br>
              0372259591</p>
        </div>
      </div>


      <div class="col-md-12 col-lg-4">
        <div class="list-menu">

          <h4>About Us</h4>

       <p>In our island's forests, we enjoy nature's gifts: fresh air, pure water,diverse life, and vital ecosystem services. The Forest Department diligently safeguards these invaluable landscapes. It also serves the public at headquarters and in the field. Together, we nurture our natural treasures for all to cherish.</p>
        </div>
      
      </div>



      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Quick Links</h4>
      
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Sign in</a></li>
            <li><a href="#">My Account</a></li>
          </ul>

        </div>
      </div>

    
      
      <div class="col-sm-6 col-md-3 col-lg-2">
        <div class="list-menu">

          <h4>Follow Us</h4>
      
          <ul class="list-unstyled">
            <li><a href="" class="twitter"><i class="bi bi-twitter"></i></a></li>
            <li> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#" class="instagram"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#" class="gmail"><i class="bi bi-google"></i></a></li>
          </ul>

        </div>
      </div>


    </div>
  </div>

  

</footer><!-- End  Footer -->

</body>
</html>
