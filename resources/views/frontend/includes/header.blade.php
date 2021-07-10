
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-right">
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex flex-wrap">
                    <li class="my-2 mx-2">
                        <a href="{{route('frontend.product.cart')}}">
                            <i class="icon-bag"></i> Giỏ hàng <span>({{\Gloudemans\Shoppingcart\Facades\Cart::count()}})</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li>
                    <a href="{{route('frontend.home')}}"><span class="menu-text">Trang chủ</span></a>
                </li>
                <li>
                    <a href="{{route('frontend.product.index')}}"><span class="menu-text">Cửa hàng</span></a>
                </li>
                <li>
                    <a href="#"><span class="menu-text">Thương hiệu</span></a>
                    <ul class="offcanvas-submenu">
                        @foreach($menuTrademarks as $trademark)
                        <li><a href="{{route('frontend.product.index')}}">{{$trademark->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href=""><span class="menu-text">Danh mục</span></a>
                    <ul class="offcanvas-submenu">
                        @foreach($menuCategories as $category)
                            <li><a href="">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="contact.html">Liên hệ</a></li>
            </ul>
        </nav>
        <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<header>
  <!-- header top start -->
  <div class="header-top theme1 bg-dark py-15">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-sm-6 order-last order-sm-first">
          <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
            <div class="social-network2">
              <ul class="d-flex">
                <li>
                  <a href="https://www.facebook.com/" target="_blank"><span class="icon-social-facebook"></span></a>
                </li>
              </ul>
            </div>
            <div class="media static-media ml-4 d-flex align-items-center">
              <div class="media-body">
                <div class="phone">
                  <a href="tel:(+123)4567890" class="text-white"><i class="icon-call-out mr-1"></i> (+123)4567890</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <nav class="navbar-top pb-2 pb-sm-0 position-relative">
            <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                @if(\Illuminate\Support\Facades\Auth::check())
                  <li>
                      <img style="height: 30px" src="/storage/{{ \Illuminate\Support\Facades\Auth::User()->avatar }}" alt="User Image">
                      <a style="padding: 0" href="{{route('frontend.account', ['id' => \Illuminate\Support\Facades\Auth::user()->id])}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                  </li>
                @else
                  <li><a href="{{route('user.login.form')}}">Đăng nhập</a></li>
                @endif
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- header top end -->
  <!-- header-middle satrt -->
    <div id="sticky" class="header-middle theme1 py-15 py-lg-0">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-lg-2 col-xl-2">
                    <div class="logo">
                        <a href="index.html"><img src="/frontend/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                    <ul class="main-menu d-flex justify-content-center">
                        <li class="active ml-0">
                            <a href="{{route('frontend.home')}}" class="pl-0">Trang chủ</a>
                        </li>
                        <li class="position-static">
                            <a href="{{route('frontend.product.index')}}">Cửa hàng</a>
                        </li>
                        <li>
                            <a href="#">Thương hiệu<i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu">
                                @foreach($menuTrademarks as $trademark)
                                    <li><a href="">{{$trademark->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="blog-grid-3-column.html">Danh mục<i class="ion-ios-arrow-down"></i></a>
                            <ul class="sub-menu">
                                @foreach($menuCategories as $category)
                                    <li><a href="">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.home.contact')}}">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 col-xl-2">
                    <!-- search-form end -->
                    <div class="d-flex align-items-center justify-content-end">
                        <!-- static-media end -->
                        <div class="cart-block-links theme1 d-none d-sm-block">
                            <ul class="d-flex">
                                <li>
                                    <a href="javascript:void(0)" class="search search-toggle">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="mr-xl-0 cart-block position-relative">
                                    <a class="" href="{{route('frontend.product.cart')}}">
                                            <i class="icon-bag"></i>
                                            <span class="badge cbdg1">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile-menu-toggle theme1 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 700 550">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"/>
                                    <path d="M300,320 L540,320" id="middle"/>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- header-middle end -->
</header>
