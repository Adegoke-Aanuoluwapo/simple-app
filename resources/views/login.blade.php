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
        <div class="bg-2-opacity-80">
          <div class="box-login">
            <div class="row">
              <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 login-left pl-0 d-none d-lg-flex"><img class="img-responsive" src="assets/imgs/page/login/img-1.png" alt="Agon"></div>
              <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 login-right pr-0">
                <div class="box-login-form">
                  <div class="box-signup mt-90">
                    <h1 class="text-heading-3 mb-40 text-center">Welcome back.</h1><a class="btn btn-login-google color-gray-500 text-heading-6 box-shadow-2" href="#"><img class="img-responsive img-middle mr-10" src="assets/imgs/template/icons/Icon-gg-login.svg" alt="Agon"> Sign in with Google</a>
                    <div class="text-center">
                      <div class="mt-40 box-line-throught mb-40"><span class="text-body-text color-gray-500">Or, sign in with your email</span></div>
                    </div>
                    <form action="{{route('log')}}" method="POST">
                     @csrf
                    <div class="box-form-signup">
                      <div class="form-group"><input class="form-control" placeholder="Your email *" name='email'>
                      @error('email')
                      <span class="text-danger">{{$message}}</span>
                     @enderror</div>
                      <div class="form-group">
                        <div class="form-field"><span class="text-body-small color-green-900 tag-top">Password</span><input class="form-control input-green-bd input-with-icon" placeholder="" name="password"><span class="icon-eye-right"></span>
                        
                         @error('password')
                         <span class="text-danger">{{$message}}</span>
                         @enderror</div>
                      </div>
                      <div class="form-group"><a class="text-body-text" href="page-reset.html">Forgot password?</a></div>
                      <div class="form-group"><button type="submit" class="btn btn-green-full text-heading-6">Continue</button></div>
                      <div><span class="text-body-text color-gray-500">Don&rsquo;t have an account?</span><a class="text-body-text color-green-900" href="page-signup.html">Sign up</a></div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
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