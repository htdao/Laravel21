<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content>
  <title>@yield('title')</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="/frontend/image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="/frontend/css/fontawesome.min.css">
  <link rel="stylesheet" href="/frontend/css/ionicons.min.css">
  <link rel="stylesheet" href="/frontend/css/simple-line-icons.css">
  <link rel="stylesheet" href="/frontend/css/jquery-ui.min.css">
  <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="/frontend/css/plugins.css">
  <link rel="stylesheet" href="/frontend/css/style.min.css">
  @yield('css')
</head>

<body>
  <!-- offcanvas-overlay start -->
  <div class="offcanvas-overlay"></div>
  <!-- offcanvas-overlay end -->

  @include('frontend.includes.header')


  <!-- main slider start -->
  @yield('banner')
  <!-- common banner  end -->

  <!-- product tab start -->
  @yield('content')
  <!-- brand slider end -->

  <!-- footer strat -->
  @include('frontend.includes.footer')

<div class="overlay">
  <div class="scale"></div>
  <form class="search-box" action="#">
    <input type="text" name="search" placeholder="Search products...">
    <button id="close" type="submit">
      <i class="ion-ios-search-strong"></i>
    </button>
  </form>
  <button class="close"><i class="ion-android-close"></i></button>
</div>

  <script src="/frontend/js/jquery-3.6.0.min.js"></script>
  <script src="/frontend/js/jquery-migrate-3.3.2.min.js"></script>
  <script src="/frontend/js/modernizr-3.7.1.min.js"></script>
  <script src="/frontend/js/popper.min.js"></script>
  <script src="/frontend/js/jquery-ui.min.js"></script>
  <script src="/frontend/js/bootstrap.min.js"></script>
  <script src="/frontend/js/plugins.js"></script>
  <script src="/frontend/js/ajax-contact.js"></script>
  <!-- <script src="assets/js/plugins/aos.js"></script> -->
  <script src="/frontend/js/main.js"></script>

  @yield('script')

</body>
</html>