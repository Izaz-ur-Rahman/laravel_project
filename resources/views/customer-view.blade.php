<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <!-- Optional JavaScript -->
<table class="table">
    <pre>

    </pre>
 <!-- #region -->
  <a href="{{ route('customer.create') }}">
  <button class="btn btn-success">Add Customer</button>

  </a>
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>password</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
            @foreach ($customers as $data )


        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->password }}</td>
            <td>
                <button class="btn btn-primary">Edit</button>
                <a href="{{ uri('/customer/delete/') }}/{{ $data->id }}">
                <button class="btn btn-danger">Delete</button>

                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  </body>
</html>