<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact Form Submission</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong>{{ $data['subject'] }}</p>
    <h2>Message:</h2> {{ $data['message'] }}
</body>
</html>