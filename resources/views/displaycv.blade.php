<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="manifest.json" crossorigin>
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <title>View CV</title>
    <script defer="defer" src="assets/js/app.40ee121.bundle.js"></script>
    <link href="assets/css/app.2afad0c.bundle.css" rel="stylesheet">
  </head>
  <body>
      {{$build->name}}
        {{$build->location}}

        <iframe height="800" width="800" src="/uploads/{{$build->cv}}"></iframe>


  </body>
  <html>