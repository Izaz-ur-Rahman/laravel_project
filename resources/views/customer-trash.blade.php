<!doctype html>
<html lang="en">
  <head>
    <title>Customer-Trash</title>
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
    <h3 class="text-center text-uppercase bg-success">Trash Date are Here</h3>
 <!-- #region -->
  <a href="{{ route('customer.create') }}">
  <button class="btn btn-success">Add Customer</button>

  </a>
  <a href="{{url('customer/view') }}">
    <button class="btn btn-secondary border-r-cyan-100">Customer View</button>

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

              <a href="{{ route('customer.restore', ['id'=> $data->id] )}}">  <button class="btn btn-primary">Restore</button>
            </a>
                <!-- this url metthod used and perform the delete operation
                 <a href="{{ url('/customer/delete/') }}/{{ $data->id }}">
                <button class="btn btn-danger">Delete</button>

                </a> -->
                <!---    this is route name method for delete operation                  --->
                <a href="{{ route('customer.delete', ['id'=> $data->id]) }}">
                <button class="btn btn-danger">Delete</button>

                </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  </body>
</html>