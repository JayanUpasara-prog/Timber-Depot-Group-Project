<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>Wild Criminal Details</title>
</head>

<body class="bg-light">

    <div class="container mt-4">
        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

        <div class="mb-3">
            <a href="{{ route('admin.WildCriminals') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Wild Criminal Details</h5>
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Address</th>
                            <th>Delete</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($criminals as $criminal)
                        <tr>
                            <td>{{ $criminal->id }}</td>
                            <td>{{ $criminal->name }}</td>
                            <td>{{ $criminal->idnum }}</td>
                            <td>{{ $criminal->Address }}</td>
                            <td>
                            <form id="deleteForm"
                                    action="{{ route('admin.destroyCriminal', ['criminal' => $criminal->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete({{ $criminal->id }})">Delete</button>
                                </form>

                                <script>
                                    function confirmDelete(id) {
                                        var result = window.confirm("Are you sure you want to delete this record?");

                                        if (result) {
                                            // User clicked "OK", update the form action with the correct ID
                                            document.getElementById('deleteForm').action = "{{ url('destroyCriminal') }}" + '/' + id;
                                            document.getElementById('deleteForm').submit();
                                        } else {

                                        }
                                    }
                                </script>


                            </td>
                        

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>