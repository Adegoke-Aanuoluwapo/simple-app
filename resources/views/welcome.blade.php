

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
         <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       

       <style>
        .bg{background: #fafafa;}
        .br5{
          border-radius: 5px;
        }
        .image{
          width:90px;
          height:110px
        }
        .content{
          width: calc(100% 900px)
        }
        .fw600{
            font-weight: 600;
        }
        .text-cl{
          color: #e03;
        }
        .f290{
          font-size:90%;
        }
       </style>
     
    </head>
<body class="bg">
<div class="row m-0 p-2">
  @foreach($builds as $build)
  <div class="col-12 shadow-sm bg-white p-2 d-flex mb-2 hr5">
    <div class="hr5" src="" width="100%" height="100%">
      <div class="px-2 content">
          <p class="mb-1 fw600">{{$build->name}}</p>
          <p class="mb-1 text-cli">{{$build->title}}</p>
          <p class="mb-1 fw600">{{$build->phone}}</p>

          <div >
            <p class="text-success mb-0 fw600 float-start">{{$build->location}}</p>
             <p class="text-cl mb-0 fw600 float-end">2023</p>
            
          </div>
          <div >
          
           
             <button type="submit" class="text-cl mb-0 fw600 float-end"></button>
          </div>
      </div>
    </div>
  </div>
</div>
@endforeach

    </body>
</html>
