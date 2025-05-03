<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <form method="post" action="{{url('/')}}/register">
          @csrf
            <x-input type="text" name="name" label="Enter your Name"/>
            <x-input type="email" name="email" label="Enter your email"/>
            <x-input type="password" name="password" label="Enter your Password"/>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</body>
</html>