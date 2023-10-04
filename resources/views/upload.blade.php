<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Register</h1>
    <div class="card " style="width: 18rem;">
    
<form class="form bg-white px-6 border-1" action="upload" method="POST" enctype="multipart/form-data">
 @csrf
  <div>
   <label class="text-sm" for="guitar-name"> Name</label>
   <input class="text-lg border-1" type="text" id="guitar-name" name="name" value="{{old('name')}}">
   @error('name')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
  <br />
  <div>
   <label class="text-sm" for="brand">Email</label>
   <input class="text-lg border-1" type="text" id="brand" name="email" value="{{old('email')}}">
    @error('email')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
    <br />
  <div>
   <label class="text-sm" for="year">Phone number</label>
   <input class="text-lg border-1" type="number" id="year" name="phone" value="{{old('phone')}}">
    @error('phone')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
    <br />
  <div>
    <label class="text-sm" for="year">Select Role</label>
   <select class="text-lg border-1" type="text" id="title" name="title" value="{{old('title')}}">
   <option>Select role</option>
  <option value="Web Developer">Frontend Developer</option>
   <option value="Software Developer">Software Developer</option>
    <option value="Project Manager">Product designer</option>
  </select>
  </div>
  <br />
   <div>
   <label class="text-sm" for="year">Location</label>
   <input class="text-lg border-1" type="text" id="year" name="location" value="{{old('location')}}">
    @error('location')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
    <br />
  <div>
   <label class="text-sm" for="year">CV</label>
   <input class="text-lg border-1" type="file" id="year" name="cv" value="{{old('file')}}">
    @error('year')
    <div class="form-error">
      {{$message}}
    </div>
   @enderror
  </div>
    <br />
  <div>
  </div>
 
  <div>
  <div>

   <button class="border-1" type="submit">Submit</button>
  </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>




