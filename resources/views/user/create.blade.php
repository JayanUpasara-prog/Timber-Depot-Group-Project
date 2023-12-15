<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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

</body>
</html>

