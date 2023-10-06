<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  </head>
  <body>
    <h1>Registered People</h1>
    <table class="table table-striped" id="mytable">
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
      <td>{{$build->location}}</td>
      <td><a href="">{{$build->cv}}</a></td>
     
    </tr>
    @endforeach
  </tbody>
</table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>let table = new DataTable('#myTable');</script>
  </body>
</html>