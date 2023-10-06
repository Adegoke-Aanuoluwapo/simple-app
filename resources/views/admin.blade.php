<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">sn</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Title</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach($builds as $build)
    <tr>
      <th scope="row">{{$build->id}}</th>
      <td>{{$build->name}}</td>
      <td>{{$build->email}}</td>
      <td>{{$build->title}}</td>
      <td>{{$build->phone}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>