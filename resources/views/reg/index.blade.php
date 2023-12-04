<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <title>User Registrations</title>
</head>

<body class="bg-light">

    <div class="container mt-4">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('reg.register') }}" class="btn btn-primary">Create a new account</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Registrations</h5>
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->name }}</td>
                            <td>{{ $registration->email }}</td>
                            <td>
                                <a href="{{ route('reg.edit', ['registration' => $registration]) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                            </td>
                            <td>


                                <form id="deleteForm"
                                    action="{{ route('reg.destroy', ['registration' => $registration->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete({{ $registration->id }})">Delete</button>
                                </form>

                                <script>
                                    function confirmDelete(id) {
                                        var result = window.confirm("Are you sure you want to delete this record?");

                                        if (result) {
                                            // User clicked "OK", update the form action with the correct ID
                                            document.getElementById('deleteForm').action = "{{ url('destroy') }}" + '/' + id;
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