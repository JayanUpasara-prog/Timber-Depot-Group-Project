<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    
    <title>Document</title>
</head>
<body>
    <div>
        @if (session()-> has ('success'))
    <div>
        {{session('success')}}
        </div>
        @endif
        </div>


    

    <div class="table">
    <div>
        <a href="{{route('registration.register')}}">Create a new account</a>
    </div>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            @foreach($registrations as $registration)
            <tr>
                <td>{{$registration -> id }}</td>
                <td>{{$registration -> name }}</td>
                <td>{{$registration -> email }}</td>
                <td>{{$registration -> password }}</td>
                <td>
                    <a href="{{route('registration.edit', ['registration' => $registration])}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('registration.destroy', ['registration' => $registration])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>