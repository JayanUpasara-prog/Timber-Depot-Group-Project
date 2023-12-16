

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rating</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <link href="assets/css/DashboardStyle.css" rel="stylesheet">
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

  <script>
        function validateRatingInput(input) {
            var min = parseInt(input.min);
            var max = parseInt(input.max);

            if (input.value < min || input.value > max) {
                input.setCustomValidity('Please enter a number between ' + min + ' and ' + max + '.');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
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

<h1>Rate Us</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" required>
        </div>

        <div class="form-group mt-3">
            <label for="user_name">User Name:</label>
            <input type="text" name="user_name" required>
        </div>

        <div class="form-group mt-3">
            <label for="rating">Rating:</label>
            <input type="number" name="rating" required min="1" max="5" step="1" oninput="validateRatingInput(this)">
        </div>

        <div class="form-group mt-3">
            <label for="comment">Comment:</label>
            <textarea name="comment" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit">Submit Rating</button>
        </div>
    </form>
</div>
      </main>
  </div>
</div>




<!-- ======= Footer ======= -->
@include('footer')

<!-- End  Footer -->

</body>
</html>


