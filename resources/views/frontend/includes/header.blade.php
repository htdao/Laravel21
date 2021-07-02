<header id="header">
  <div class="header-container">

    <div class="header-banner">
      <div class="container">
        <div class="inner"></div>
      </div>
    </div>

    <nav class="header-nav">
      <div class="topnav">
        <div class="container">
          <div class="inner"></div>
        </div>
      </div>

      <div class="bottomnav">
        <div class="container">
          <div class="inner">
            <div class="row ApRow  " style>
              <div class="col-xl-7 col-lg-6 col-md-6 col-sm-5 col-xs-3 col-sp-3 pullright ApColumn ">
                <div class="log-in">
                  <div class="sign-in">
                    <a class="signin" href="{{route('frontend.login')}}" title="Log in to your customer account" rel="nofollow">
                      <i class="fa fa-user"></i>
                      <span>Đăng nhập</span>
                    </a>
                  </div>
                </div>
                <div class="userinfo-selector links dropdown js-dropdown popup-over float-xs-left float-md-left">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="Account">
                    <i class="fa fa-user hidden-xl-up"></i>
                    <span class="hidden-xl-up">Tài khoản</span>
                  </a>
                  <ul class="popup-content dropdown-menu user-info">
                    <li>
                      <a class=" dropdown-item" href="https://apollotran.com/prestashop/leo_cosmetics/en/my-account" title="Log in to your customer account" rel="nofollow">
                        <span>Đăng suất</span>
                      </a>
                    </li>
                    <li>
                      <a class="myacount dropdown-item" href="https://apollotran.com/prestashop/leo_cosmetics/en/my-account" title="My account" rel="nofollow">
                        <span>Tài khoản của tôi</span>
                      </a>
                    </li>
                    <li>
                      <a class="checkout dropdown-item" href="{{route('frontend.home.contact')}}" title="Checkout" rel="nofollow">
                        <span>Liên hệ</span>
                      </a>
                    </li>
                  </ul>
                </div><!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->
                <!-- @file modules\appagebuilder\views\templates\hook\ApBlockLink -->
                <div class="block ApLink contact ApBlockLink">

                  <ul>
                    <li>
                      <a href="{{route('frontend.home.contact')}}" target="_self">Liên hệ</a>
                    </li>
                  </ul>
                </div>

              </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
              <div class="col-xl-5 col-lg-6 col-md-6 col-sm-7 col-xs-9 col-sp-9 pulleft ApColumn ">
                <div id="search_widget" class="search-widget js-dropdown popup-over" data-search-controller-url="//apollotran.com/prestashop/leo_cosmetics/en/search">
                  <a href="javascript:void(0)" data-toggle="dropdown" class="float-xs-right popup-title search-btn">
                    <i class="fa fa-search "></i>
                  </a>
                  <form method="get" action="//apollotran.com/prestashop/leo_cosmetics/en/search" class="popup-content dropdown-menu" id="search_form">
                    <input type="hidden" name="controller" value="search">
                    <input type="hidden" name="orderby" value="position">
                    <input type="hidden" name="orderway" value="desc">
                    <input type="text" name="s" id="search_query_top" value placeholder="Search" aria-label="Search">
                    <button type="submit" name="submit_search" class="btn btn-default button-search">
                      <span><i class="fa fa-search"></i></span>
                    </button>
                  </form>
                </div>
                <!-- /Block search module TOP -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="header-top">
      <div class="container">
        <div class="inner"><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="row ApRow  " style>
            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
            <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 top-left-header  ApColumn ">
              <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

              <div class="header_logo">
                <a href="https://apollotran.com/prestashop/leo_cosmetics/">
                  <img class="logo img-fluid" src="/frontend/images/leo-cosmestic-logo-1516035079.jpg" alt="Leo Cosmetics logo">
                </a>
              </div>

            </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
            <div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6 col-sp-6 top-header ApColumn ">
              <!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
              <div id="memgamenu-form_8397064537333739" class="ApMegamenu">
                <nav data-megamenu-id="8397064537333739" class="leo-megamenu cavas_menu navbar navbar-default disable-canvas " role="navigation">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggler hidden-lg-up" data-toggle="collapse" data-target=".megamenu-off-canvas-8397064537333739"><span class="sr-only">Toggle navigation</span>&#9776;</button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="leo-top-menu collapse navbar-toggleable-md megamenu-off-canvas megamenu-off-canvas-8397064537333739">
                    <ul class="nav navbar-nav megamenu horizontal">
                      <li class="nav-item   ">
                        <a href="{{route('frontend.home')}}" target="_self" class="nav-link has-category">
                          <span class="menu-title">Trang chủ </span>
                        </a>
                      </li>
                        @foreach($categories as $category)
                            <li class="nav-item   ">
                                <a href="{{route('frontend.product.index')}}" target="_self" class="nav-link has-category">
                                    <span class="menu-title">{{$category->name}}</span>
                                </a>
                            </li>
                        @endforeach
                  </ul>
                </div>
              </nav>
              <script type="text/javascript">
                list_menu_tmp.id = 8397064537333739;
                list_menu_tmp.type = 'horizontal';

              				// var show_cavas = 0;
              				list_menu_tmp.show_cavas =0;

                      list_menu_tmp.list_tab = list_tab;
                      list_menu.push(list_menu_tmp);
                      list_menu_tmp = {};
                      list_tab = {};
                    </script>
                  </div>

                </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-sp-6 top-right-header  ApColumn ">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
                  <div id="cart-block">
                    <div class="blockcart cart-preview inactive" data-refresh-url="//apollotran.com/prestashop/leo_cosmetics/en/module/ps_shoppingcart/ajax">
                      <div class="header">
                        <i class="shopping-cart fa fa-shopping-cart"></i>
                        <span class="cart-products-count">
                          <span class="zero">0</span>
                          <span class="cart-count-title">Sản Phẩm Trong Giỏ Hàng </span>
                          <span class="empty"> - 0 VND</span>
                        </span>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
