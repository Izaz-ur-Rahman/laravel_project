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
<table class="table mx-5">

 <!-- #region -->
  <form action="">
    <div class="form-group  ">
      <input type="search" name="search" placeholder="Search here by name or email" id="" class="form-control mx-5 col-4" value="{{ $search}}" >
      <button  class="btn btn-primary m-5">search</button>
      <a href="{{ route('customer.data') }}">
  <button type="button" class="btn btn-success">Reset</button>
  </a>
    </div>
  </form>
  <a href="{{ route('customer.create') }}">
  <button class="btn btn-success mx-5">Add Customer</button>
  </a>
  <a href="{{ route('customer.trash') }}">
  <button class="btn btn-secondary ">Go To Trash</button>

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

              <a href="{{ route('customer.edit', ['id'=> $data->id] )}}">  <button class="btn btn-primary">Edit</button>
            </a>
                <!-- this url metthod used and perform the delete operation
                 <a href="{{ url('/customer/delete/') }}/{{ $data->id }}">
                <button class="btn btn-danger">Delete</button>

                </a> -->
                <!---    this is route name method for delete operation                  --->
                <a href="{{ route('customer.delete', ['id'=> $data->id]) }}">
                <button class="btn btn-danger">Move to Trash</button>

                </a>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>

  </body>
</html>