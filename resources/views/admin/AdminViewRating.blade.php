<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta name="csrf-token" content="{{ csrf_token() }}">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reveiws</title>
    <link rel="stylesheet" href="{{ asset('css/AdminReviewStyles.css') }}">
    <script src="{{ asset('js/main.js') }}" ></script>
</head>
<body>

    <h1>User Reveiws</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Date & Time</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($ratings as $rating)
                <tr>
                    <td>{{ $rating->id }}</td>
                    <td>{{ $rating->user_id }}</td>
                    <td>{{ $rating->user_name }}</td>
                    <td>@for ($i=1; $i<=5; $i++)
                            @if($i<=$rating->rating)
                                <span class="star">&#9733;</span>
                            @else
                            <span class="star">&#9734;</span>
                            @endif
                         @endfor
                    
                       <!--{{ $rating->rating }} /5--></td>
                    <td>{{ $rating->comment ?? 'N/A' }}</td>
                    <td>{{ $rating->created_at }}</td>
                    <td>
                    <form action="{{ route('admin.deleteRating', $rating->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this rating?')">Delete</button>
</form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
