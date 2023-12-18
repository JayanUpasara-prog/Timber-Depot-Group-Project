<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Forest Department, Melsiripura.</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
         /* body {
            padding-top: 50px; /* Add space for fixed navbar */
        } */

        .faq-container {
            max-width: 600px;
            margin: auto;
        }

        .search-bar {
  /* Remove background color */
  padding: 10px 0; /* Reduce padding for a smaller bar */
}

.search-container {
  display: flex;
  align-items: center;
}

.search-container form {
  display: flex;
  flex-grow: 1;
}

.search-container input {
  padding: 8px; /* Reduce padding for a smaller input */
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 40%; /* Adjust the width as needed */
}

.search-container button {
  background-color: #4285f4;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 8px 12px; /* Reduce padding for a smaller button */
  margin-left: 8px;
  cursor: pointer;
}

.search-container button:hover {
  background-color: #357ae8;
}


.center-button {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px; /* Adjust the margin as needed */
}

/* Optional: Center the button in the header */
#header .center-button {
  margin-top: 0;
}


        .highlight {
            background-color: yellow;
            font-weight: bold;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Swiper JS -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- GLightbox JS -->
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Your main.js file -->
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function () {
            $('form').submit(function (e) {
                e.preventDefault();
                var searchText = $('#searchInput').val().toLowerCase();

                // Loop through all FAQ items
                $('.card').each(function () {
                    var questionText = $(this).find('.btn-link');
                    var answerText = $(this).find('.card-body');

                    // Reset previous highlighting
                    questionText.html(questionText.text());
                    answerText.html(answerText.text());

                    // Check if the search text is present in either the question or the answer
                    if (questionText.text().toLowerCase().includes(searchText)) {
                        highlightText(questionText, searchText);
                    }
                    if (answerText.text().toLowerCase().includes(searchText)) {
                        highlightText(answerText, searchText);
                    }
                });
            });

            function highlightText(element, searchText) {
                var html = element.html();
                var regex = new RegExp('(' + searchText + ')', 'ig');
                var highlightedText = html.replace(regex, '<span class="highlight">$1</span>');
                element.html(highlightedText);
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            $('form').submit(function (e) {
                e.preventDefault();
                var searchText = $('#searchInput').val().toLowerCase();

                // Loop through all FAQ items
                $('.card').each(function () {
                    var questionText = $(this).find('.btn-link').text().toLowerCase();
                    var answerText = $(this).find('.card-body').text().toLowerCase();

                    // Check if the search text is present in either the question or the answer
                    if (questionText.includes(searchText) || answerText.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

</head>

<body>

    <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo" class="logo-container" >
        <a href="{{ url('/#####') }}"><img src="assets/img/favicon.jpg" alt="" title="" class="image-size"  /></a>

        <h1><a href="{{ url('/#####') }}"><span>Forest Department,</span> Melsiripura.</a></h1>
  
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Services</a></li>
          <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">English</a></li>
              <li><a href="#">සිංහල</a></li>
              <li><a href="#">தமிழ்</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="login">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <main id="main">

        <!-- ======= Search Bar ======= -->
        <div class="search-bar">
           <div class="container">
  <div class="search-container">
    <form action="/search" method="GET">
        <input type="text" placeholder="Search..." name="q" id="searchInput" />
        <button type="submit"><i class="material-icons">search</i></button>
    </form>
</div>
  </div>
        </div>
        <!-- End Search Bar -->

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="padd-section text-center">
            <div class="container faq-container mt-4">
<h2 class="center-button mb-4">Frequently Asked Questions</h2>


    <div id="accordion">
        <!-- FAQ Item 1 -->
        <div class="card" id="faqItem1">
            <div class="card-header" id="heading1">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    How can I register a new timber depot with the Forest Department?
                    </button>
                </h5>
            </div>

            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                <div class="card-body">
                To register a new timber depot, you need to fill out the registration form available on our website and provide necessary documents such as proof of ownership, location details, and other required information.
                </div>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="card" id="faqItem2">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    What are the requirements for registration renewal of a timber depot?
                    </button>
                </h5>
            </div>

            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                To renew your timber depot registration, ensure all required documents are up to date. This may include proof of continued ownership, updated contact information, and compliance with environmental regulations.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem3">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse2">
                    How can I change ownership details for a registered timber depot?
                    </button>
                </h5>
            </div>

            <div id="collapse3" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                Ownership changes require submission of a request form along with legal documents confirming the change. The new owner must also meet the eligibility criteria for timber depot ownership.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem4">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse2">
                    What steps should I follow to apply for a timber permit?
                    </button>
                </h5>
            </div>

            <div id="collapse4" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                To apply for a timber permit, submit an application through our online portal or visit the nearest Forest Department office. Include necessary details such as the type and quantity of timber required, purpose of use, and location.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem5">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse2">
                    What documents are needed to support a timber permit application?
                    </button>
                </h5>
            </div>

            <div id="collapse5" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                Required documents for a timber permit application may include proof of identity, project details, environmental impact assessment (if applicable), and any other documents specified in the application guidelines.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem6">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse2">
                    How can I seek help or support regarding the Timber Depot Management System?
                    </button>
                </h5>
            </div>

            <div id="collapse6" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                For assistance, you can contact our support team through the helpline provided on our website or send an email to support@forestdepartment.gov. Our team is available to guide you through any issues or queries.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem7">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse2">
                    What contact information is available for the Forest Department?
                    </button>
                </h5>
            </div>

            <div id="collapse7" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                You can reach out to the Forest Department through our contact page on the website. For general inquiries, you can also call our main office at 0372259591 or visit our headquarters at HF4C+JG4, Ibbagamuwa, Melsiripura.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem8">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse2">
                    Can I find information about forests around a specific area on your website?
                    </button>
                </h5>
            </div>

            <div id="collapse8" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                Yes, our website provides information about forests in different regions. You can use the "Forest Around Area" feature to explore details about nearby forests, their biodiversity, and any ongoing conservation efforts.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem9">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse2">
                    What are the key requirements for registering a timber depot with the Forest Department?
                    </button>
                </h5>
            </div>

            <div id="collapse9" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                Key requirements for timber depot registration include proof of ownership, a valid business license, compliance with environmental regulations, and adherence to sustainable logging practices. Detailed criteria are available in the registration guidelines.
                </div>
            </div>
        </div>

        <div class="card" id="faqItem10">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse2">
                    How can I get more information about environmental regulations related to timber depots?


                    </button>
                </h5>
            </div>

            <div id="collapse10" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                For detailed information on environmental regulations governing timber depots, you can refer to the environmental compliance section on our website or contact our environmental affairs department. They can provide guidance on ensuring your timber operations meet the required standards.
                </div>
            </div>
        </div>

        <!-- Add more FAQ items following the same structure -->

    </div>
</div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer">
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
              <li><a href="{{ url('/#####') }}">Home</a></li>
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
              <li><a href="#" class="twitter"><i class="bi bi-twitter"></i></a></li>
              <li> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></li>
              <li><a href="#" class="instagram"><i class="bi bi-instagram"></i></a></li>
              <li><a href="#" class="gmail"><i class="bi bi-google"></i></a></li>
            </ul>

          </div>
        </div>


      </div>
    </div>

    </footer><!-- End  Footer -->

    @include('backtotop')

    <script>
       $(document).ready(function () {
  $('form').submit(function (e) {
    e.preventDefault();
    var searchText = $('#searchInput').val().toLowerCase();

    // Loop through all FAQ items
    $('.card').each(function () {
        var questionText = $(this).find('.btn-link').text().toLowerCase();
        var answerText = $(this).find('.card-body').text().toLowerCase();

        // Check if the search text is present in either the question or the answer
        if (questionText.includes(searchText) || answerText.includes(searchText)) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
  });
});
    </script>

</body>

</html>
