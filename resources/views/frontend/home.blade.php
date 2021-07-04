@extends('frontend.layouts.master')

@section('title')
Trang chủ
@endsection

@section('css')
@endsection

@section('script')
@endsection

@section('banner')
<section class="bg-light">
  <div class="main-slider dots-style theme1">
    <div class="slider-item bg-img bg-img1">
        <style>
            .bg-img1{
                background-image: url("/frontend/images/slide1.jpg");
            }
        </style>
      <div class="container">
        <div class="row align-items-center slider-height">
          <div class="col-12">
            <div class="slider-content">
              <p class="text animated" data-animation-in="fadeInDown" data-delay-in=".300">
                Face Makeup Brush
              </p>
              <h2 class="title animated">
                <span class="animated d-block" data-animation-in="fadeInLeft" data-delay-in=".800">Skincare Brush Set</span>
                <span class="animated font-weight-bold" data-animation-in="fadeInRight" data-delay-in="1.5">Sale 30% Off</span>
              </h2>
              <a href="shop-grid-4-column.html" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25" data-animation-in="fadeInLeft" data-delay-in="1.9">Shop now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-item end -->
    <div class="slider-item bg-img bg-img2">
        <style>
            .bg-img1{
                background-image: url("/frontend/images/slide2.jpg");
            }
        </style>
      <div class="container">
        <div class="row align-items-center slider-height">
          <div class="col-12">
            <div class="slider-content">
              <p class="text animated" data-animation-in="fadeInLeft" data-delay-in=".300">
                Morneva Shampoo
              </p>

              <h2 class="title">
                <span class="animated d-block" data-animation-in="fadeInRight" data-delay-in=".800">scalpcare Shampoo</span>
                <span class="animated font-weight-bold" data-animation-in="fadeInUp" data-delay-in="1.5">Sale 40% Off</span>
              </h2>
              <a href="shop-grid-4-column.html" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25" data-animation-in="fadeInLeft" data-delay-in="1.9">Shop now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-item end -->
    <div class="slider-item bg-img bg-img3">
        <style>
            .bg-img1{
                background-image: url("/frontend/images/slide3.jpg");
            }
        </style>
      <div class="container">
        <div class="row align-items-center slider-height">
          <div class="col-12">
            <div class="slider-content">
              <p class="text animated" data-animation-in="fadeInLeft" data-delay-in=".300">
                Runway Lip Palette red
              </p>
              <h2 class="title">
                <span class="animated d-block" data-animation-in="fadeInRight" data-delay-in=".800">Lipscare Lipsticks</span>
                <span class="animated font-weight-bold" data-animation-in="fadeInUp" data-delay-in="1.5">Sale 60% Off</span>
              </h2>
              <a href="shop-grid-4-column.html" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25" data-animation-in="fadeInLeft" data-delay-in="1.9">Shop now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-item end -->
  </div>
</section>
<div style="margin-top: 20px" class="common-banner bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-30">
        <div class="banner-thumb">
          <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
            <img src="/frontend/images/1_2.jpg" alt="banner-thumb-naile">
          </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-30">
        <div class="banner-thumb">
          <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
            <img src="/frontend/images/2_1.jpg" alt="banner-thumb-naile">
          </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 mb-30">
        <div class="banner-thumb">
          <a href="shop-grid-4-column.html" class="zoom-in d-block overflow-hidden">
            <img src="/frontend/images/3_2.jpg" alt="banner-thumb-naile">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')

    <section class="bg-white theme1 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section-title start -->
                    <div class="section-title text-center">
                        <h2 class="title pb-3 mb-3">Sản phẩm bán chạy</h2>
                        <p class="text">

                        </p>
                    </div>
                    <!-- section-title end -->
                    <div class="product-slider-init theme1 slick-nav"">
                        @foreach($productSelling as $value)
                        <div class="slider-item">
                            <div class="card product-card">
                                <div class="card-body p-0">
                                    <div class="media flex-column">
                                        <div class="product-thumbnail position-relative">
                                            <a href="">
                                                @if(count($value->images) > 0)
                                                    <img src="{{$value->images[0]->image_url}}">
                                                @endif
                                            </a>
                                            <!-- product links -->
                                            <ul class="actions d-flex justify-content-center">
                                                <li>
                                                    <a class="action" href="#" data-toggle="modal" data-target="#quick-view">
                                                        <span data-toggle="tooltip" data-placement="bottom" title="Quick view" class="icon-magnifier"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <style>
                                                    .h1{
                                                        display: -webkit-box;
                                                        -webkit-line-clamp: 1;
                                                        -webkit-box-orient: vertical;
                                                        max-height: 25px;
                                                        height: auto;
                                                        min-height: 25px;
                                                        overflow: hidden;
                                                    }
                                                </style>
                                                <h3 class="title h1" >
                                                    <a href="">{{$value->name}}</a>
                                                </h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="product-price">{{number_format($value->sale_price)}}</span>
                                                    <button class="pro-btn" data-toggle="modal" data-target="#add-to-cart">
                                                        <i class="icon-basket"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- product tab end -->
<!-- common banner  start -->
<div class="common-banner bg-white pb-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="banner-thumb">
          <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
              <img src="/frontend/images/5.jpg" alt="banner-thumb-naile"></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="banner-thumb">
          <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
            <img src="/frontend/images/6.jpg" alt="banner-thumb-naile"></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-30">
          <div class="banner-thumb">
            <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
              <img src="/frontend/images/4_2.jpg" alt="banner-thumb-naile"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- common banner  end -->
    <!-- product tab repetation start -->
    <section class="bg-white theme1 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- section-title start -->
            <div class="section-title text-center">
              <h2 class="title pb-3 mb-3">Sản phẩm khuyến mại</h2>
              <p class="text">
              </p>
            </div>
            <!-- section-title end -->
            <div class="product-slider-init theme1 slick-nav">
                @foreach($productSelling as $value)
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <a href="">
                                            @if(count($value->images) > 0)
                                                <img src="{{$value->images[0]->image_url}}">
                                            @endif
                                        </a>
                                        <!-- product links -->
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a class="action" href="#" data-toggle="modal" data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom" title="Quick view" class="icon-magnifier"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title h1">
                                                <a href="">{{$value->name}}</a>
                                            </h3>
                                            <div class="star-rating">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="product-price">{{number_format($value->sale_price)}}</span>
                                                <button class="pro-btn" data-toggle="modal" data-target="#add-to-cart">
                                                    <i class="icon-basket"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="common-banner bg-white pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="banner-thumb">
                        <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
                            <img src="/frontend/images/5.jpg" alt="banner-thumb-naile"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="banner-thumb">
                        <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
                            <img src="/frontend/images/6.jpg" alt="banner-thumb-naile"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-30">
                    <div class="banner-thumb">
                        <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
                            <img src="/frontend/images/4_2.jpg" alt="banner-thumb-naile"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="bg-white theme1 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section-title start -->
                <div class="section-title text-center">
                    <h2 class="title pb-3 mb-3">Sản phẩm mới</h2>
                    <p class="text">
                    </p>
                </div>
                <!-- section-title end -->
                <div class="product-slider-init theme1 slick-nav">
                    @foreach($newProducts as $value)
                        <div class="slider-item">
                            <div class="card product-card">
                                <div class="card-body p-0">
                                    <div class="media flex-column">
                                        <div class="product-thumbnail position-relative">
                                            <a href="">
                                                @if(count($value->images) > 0)
                                                    <img src="{{$value->images[0]->image_url}}">
                                                @endif
                                            </a>
                                            <!-- product links -->
                                            <ul class="actions d-flex justify-content-center">
                                                <li>
                                                    <a class="action" href="#" data-toggle="modal" data-target="#quick-view">
                                                        <span data-toggle="tooltip" data-placement="bottom" title="Quick view" class="icon-magnifier"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <div class="media-body">
                                            <div class="product-desc">
                                                <h3 class="title h1">
                                                    <a href="">{{$value->name}}</a>
                                                </h3>
                                                <div class="star-rating">
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star"></span>
                                                    <span class="ion-ios-star de-selected"></span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="product-price">{{number_format($value->sale_price)}}</span>
                                                    <button class="pro-btn" data-toggle="modal" data-target="#add-to-cart">
                                                        <i class="icon-basket"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- product tab repetation end -->

    <!-- blog-section start -->

    <!-- blog-section end -->
    <!-- brand slider start -->
    <div class="brand-slider-section theme1 bg-white">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="brand-init border-top py-35 slick-nav-brand">
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="/frontend/images/1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="/frontend/images/2.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="/frontend/images/3_1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="/frontend/images/4_1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="/frontend/images/5_1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="/frontend/images/2.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="/frontend/images/3_1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade theme1 style1" id="quick-view" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                <div class="product-sync-init mb-20">
                  <div class="single-product">
                    <div class="product-thumb">
                      <img src="/frontend/images/1_4.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                  <div class="single-product">
                    <div class="product-thumb">
                      <img src="/frontend/images/2_2.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                  <div class="single-product">
                    <div class="product-thumb">
                      <img src="/frontend/images/3.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                  <div class="single-product">
                    <div class="product-thumb">
                      <img src="/frontend/images/4.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                </div>

                <div class="product-sync-nav">
                  <div class="single-product">
                    <div class="product-thumb">
                      <a href="javascript:void(0)">
                        <img src="/frontend/images/1.1.jpg" alt="product-thumb"></a>
                      </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                      <div class="product-thumb">
                        <a href="javascript:void(0)">
                          <img src="/frontend/images/2.1.jpg" alt="product-thumb"></a>
                        </div>
                      </div>
                      <!-- single-product end -->
                      <div class="single-product">
                        <div class="product-thumb">
                          <a href="javascript:void(0)"><img src="/frontend/images/3.1.jpg" alt="product-thumb"></a>
                        </div>
                      </div>
                      <!-- single-product end -->
                      <div class="single-product">
                        <div class="product-thumb">
                          <a href="javascript:void(0)"><img src="/frontend/images/4.1.jpg" alt="product-thumb"></a>
                        </div>
                      </div>
                      <!-- single-product end -->
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="modal-product-info">
                      <div class="product-head">
                        <h2 class="title">
                          New Balance Running Arishi trainers in triple
                        </h2>
                        <h4 class="sub-title">Reference: demo_5</h4>
                        <div class="star-content mb-20">
                          <span class="star-on"><i class="fas fa-star"></i> </span>
                          <span class="star-on"><i class="fas fa-star"></i> </span>
                          <span class="star-on"><i class="fas fa-star"></i> </span>
                          <span class="star-on"><i class="fas fa-star"></i> </span>
                          <span class="star-on de-selected"><i class="fas fa-star"></i>
                          </span>
                        </div>
                      </div>
                      <div class="product-body">
                        <span class="product-price text-center">
                          <span class="new-price">$29.00</span>
                        </span>
                        <p>
                          Break old records and make new goals in the New Balance®
                          Arishi Sport v1.
                        </p>
                        <ul>
                          <li>Predecessor: None.</li>
                          <li>Support Type: Neutral.</li>
                          <li>Cushioning: High energizing cushioning.</li>
                        </ul>
                      </div>
                      <div class="d-flex mt-30">
                        <div class="product-size">
                          <h3 class="title">Dimension</h3>
                          <select>
                            <option value="0">40x60cm</option>
                            <option value="1">60x90cm</option>
                            <option value="2">80x120cm</option>
                          </select>
                        </div>
                      </div>
                      <div class="product-footer">
                        <div class="product-count style d-flex flex-column flex-sm-row my-4">
                          <div class="count d-flex">
                            <input type="number" min="1" max="10" step="1" value="1">
                            <div class="button-group">
                              <button class="count-btn increment">
                                <i class="fas fa-chevron-up"></i>
                              </button>
                              <button class="count-btn decrement">
                                <i class="fas fa-chevron-down"></i>
                              </button>
                            </div>
                          </div>
                          <div>
                            <button class="btn btn-dark btn--xl mt-5 mt-sm-0">
                              <span class="mr-2"><i class="ion-android-add"></i></span>
                              Add to cart
                            </button>
                          </div>
                        </div>
                        <div class="addto-whish-list">
                          <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                          <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                        </div>
                        <div class="pro-social-links mt-10">
                          <ul class="d-flex align-items-center">
                            <li class="share">Share</li>
                            <li>
                              <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="ion-social-google"></i></a>
                            </li>
                            <li>
                              <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- second modal -->
        <div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h5 class="title">
                  <i class="fa fa-check"></i> Product added to compare.
                </h5>
              </div>
            </div>
          </div>
        </div>
        <!-- second modal -->
        <div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header justify-content-center bg-dark">
                <h5 class="modal-title" id="add-to-cartCenterTitle">
                  Product successfully added to your shopping cart
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-5 divide-right">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="images/1_3.jpg" alt="img">
                      </div>
                      <div class="col-md-6 mb-2 mb-md-0">
                        <h4 class="product-name">
                          New Balance Running Arishi trainers in triple
                        </h4>
                        <h5 class="price">$$29.00</h5>
                        <h6 class="color">
                          <strong>Dimension: </strong>: <span class="dmc">40x60cm</span>
                        </h6>
                        <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="modal-cart-content">
                      <p class="cart-products-count">There is 1 item in your cart.</p>
                      <p><strong>Total products:</strong>&nbsp;$123.72</p>
                      <p><strong>Total shipping:</strong>&nbsp;$7.00</p>
                      <p><strong>Taxes</strong>&nbsp;$0.00</p>
                      <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                      <div class="cart-content-btn">
                        <button type="button" class="btn btn-dark btn--md mt-4" data-dismiss="modal">
                          Continue shopping
                        </button>
                        <button class="btn btn-dark btn--md mt-4">
                          Proceed to checkout
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection

