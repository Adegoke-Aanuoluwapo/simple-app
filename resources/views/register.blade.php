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
    <title>Agon - Multipurpose Agency HTML Template</title>
    <script defer="defer" src="assets/js/app.40ee121.bundle.js"></script>
    <link href="assets/css/app.2afad0c.bundle.css" rel="stylesheet">
  </head>

  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center">
            <div class="loader"></div>
          </div>
        </div>
      </div>
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
            <form  action="upload" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="box-form-signup mb-200">
                <div class="form-group"><input class="form-control" placeholder="Your name *" name="name" value="{{old('name')}}">
                 @error('name')
                <div class="form-error">
                   {{$message}}
                  </div>
                 @enderror
                </div>
                <div class="form-group"><input class="form-control" placeholder="Your email *"name="email" value="{{old('email')}}">
                 @error('name')
                <div class="form-error">
                   {{$message}}
                  </div>
                 @enderror
                </div>
                <div class="form-group"><input class="form-control" placeholder="Your phone  *"name="email" value="{{old('phone')}}">
                 @error('phone')
                <div class="form-error">
                   {{$message}}
                  </div>
                 @enderror
                </div>
                <div class="form-group">
                 <select class="form-control" placeholder="Your role *" name="title" value="{{old('title')}}" id="">
                  <option value="">Please Select Role</option>
                <option value="frontend">Frontend</option>
                 </select>
                 
                 @error('name')
                <div class="form-error">
                   {{$message}}
                  </div>
                 @enderror
                </div>
             
                <div class="form-group"><label class="text-body-small color-gray-500"><input class="chkbox" type="checkbox"> Agree to <a href="#">terms &amp; conditions</a></label></div>
                <div class="form-group"><button class="btn btn-green-full text-heading-6">Continue</button></div>
                <div><span class="text-body-text color-gray-500">Already have an account?</span><a class="text-body-text color-green-900" href="page-login.html">Sign in now</a></div>
              </div>
              </form>
            </div>
          </div>
         
        </div>
      </section>
    </main>
 
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