<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title') || Super Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('public/asset/')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('public/asset/')}}/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{asset('public/asset/')}}/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/')}}/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/')}}/fonts/flaticon/font/flaticon.css">
    @yield('style')
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('public/asset/')}}/css/style.css">
  </head>
  <body>
    

    <div class="wrap">
      @include('shared.user.header')
      
      <!-- END header -->
      @yield('content')
      
    
      @include('shared.user.footer')
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{asset('public/asset/')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('public/asset/')}}/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{asset('public/asset/')}}/js/popper.min.js"></script>
    <script src="{{asset('public/asset/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/asset/')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/asset/')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('public/asset/')}}/js/jquery.stellar.min.js"></script>

    
    <script src="{{asset('public/asset/')}}/js/main.js"></script>
  </body>
</html>