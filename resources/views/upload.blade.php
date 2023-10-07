<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <title>Agon - Multipurpose Agency HTML Template</title>
    <script defer="defer" src="assets/js/app.40ee121.bundle.js"></script>
    <link href="assets/css/app.2afad0c.bundle.css" rel="stylesheet">
  </head>
  <body>
   
    <div class="card " style="width: 18rem;margin-left:300px" >
     <h1>Register</h1>
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
 <main class="main">
      <section class="section-box">
        <div class="bg-6-opacity-30 pt-90">
          <div class="container">
            <div class="box-signup">
              <h1 class="text-heading-3 mb-50 text-center">Let&rsquo;s join us</h1><a class="btn btn-login-google color-gray-500 text-heading-6 box-shadow-2" href="#"><img class="img-responsive img-middle mr-10" src="assets/imgs/template/icons/Icon-gg-login.svg" alt="Agon"> Sign up with Google</a>
              <div class="text-center">
                <div class="mt-40 box-line-throught mb-40"><span class="text-body-text color-gray-500">Or, sign up with your email</span></div>
              </div>
              <div class="box-form-signup mb-200">
                <div class="form-group"><input class="form-control" placeholder="Your name *"><a class="link-edit text-body-text" href="#">Edit</a></div>
                <div class="form-group"><input class="form-control" placeholder="Your email *"></div>
                <div class="form-group">
                  <div class="form-field"><span class="text-body-small color-green-900 tag-top">Password</span><input class="form-control input-green-bd input-with-icon" placeholder=""><span class="icon-eye-right"></span></div>
                </div>
                <div class="form-group">
                  <div class="form-field"><span class="text-body-small color-green-900 tag-top">Re-type Password</span><input class="form-control input-green-bd input-with-icon" placeholder=""><span class="icon-eye-right"></span></div>
                </div>
                <div class="form-group"><label class="text-body-small color-gray-500"><input class="chkbox" type="checkbox"> Agree to <a href="#">terms &amp; conditions</a></label></div>
                <div class="form-group"><button class="btn btn-green-full text-heading-6">Continue</button></div>
                <div><span class="text-body-text color-gray-500">Already have an account?</span><a class="text-body-text color-green-900" href="page-login.html">Sign in now</a></div>
              </div>
            </div>
          </div>
          <div class="images-lists">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-6 pl-0"><img class="img-responsive img-full img-1" src="assets/imgs/page/signup/img-1.png" alt="Agon"></div>
              <div class="col-lg-2 col-md-2 col-sm-6"><img class="img-responsive img-full img-2" src="assets/imgs/page/signup/img-2.png" alt="Agon"></div>
              <div class="col-lg-4 col-md-4 col-sm-12"><img class="img-responsive img-full img-3" src="assets/imgs/page/signup/img-3.png" alt="Agon"></div>
              <div class="col-lg-2 col-md-2 col-sm-6"><img class="img-responsive img-full img-4" src="assets/imgs/page/signup/img-4.png" alt="Agon"></div>
              <div class="col-lg-2 col-md-2 col-sm-6 pr-0"><img class="img-responsive img-full img-5" src="assets/imgs/page/signup/img-5.png" alt="Agon"></div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/waypoints.js"></script>
    <script src="assets/js/vendors/wow.js"></script>
    <script src="assets/js/vendors/magnific-popup.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/isotope.js"></script>
    <script src="assets/js/vendors/scrollup.js"></script>
    <script src="assets/js/vendors/counterup.js"></script>
    <script src="assets/js/vendors/slick.js"></script>
    <script src="assets/js/vendors/jquery.elevatezoom.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/noUISlider.js"></script>
    <script src="assets/js/vendors/slider.js"></script>
    <script src="assets/js/main.js?v=1.0"></script>
  </body>
</html>




