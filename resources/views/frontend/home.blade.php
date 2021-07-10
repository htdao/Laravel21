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
                                            <a href="{{route('frontend.product.show',['id' => $value->id])}}">
                                                @if(count($value->images) > 0)
                                                    <img src="{{$value->images[0]->image_url}}">
                                                @endif
                                            </a>
                                            <!-- product links -->
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
                                                    <span class="product-price">
                                                        <del class="del">
                                                            @if($value->sale_price != $value->origin_price)
                                                                {{number_format($value->origin_price,0,'.','.')}}
                                                            @endif
                                                        </del>
                                                        <span class="onsale">{{number_format($value->sale_price,0,'.','.')}}đ</span>
                                                    </span>
                                                    <a href="{{route('frontend.product.add', ['id' => $value->id])}}"><button class="pro-btn">
                                                        <i class="icon-basket"></i>
                                                        </button></a>
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
                                        <a href="{{route('frontend.product.show',['id' => $value->id])}}">
                                            @if(count($value->images) > 0)
                                                <img src="{{$value->images[0]->image_url}}">
                                            @endif
                                        </a>
                                        <!-- product links -->
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
                                                <span class="product-price">
                                                        <del class="del">
                                                            @if($value->sale_price != $value->origin_price)
                                                                {{number_format($value->origin_price,0,'.','.')}}
                                                            @endif
                                                        </del>
                                                        <span class="onsale">{{number_format($value->sale_price,0,'.','.')}}đ</span>
                                                    </span>
                                                <a href="{{route('frontend.product.add', ['id' => $value->id])}}"><button class="pro-btn">
                                                        <i class="icon-basket"></i>
                                                    </button></a>
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
                                            <a href="{{route('frontend.product.show',['id' => $value->id])}}">
                                                @if(count($value->images) > 0)
                                                    <img src="{{$value->images[0]->image_url}}">
                                                @endif
                                            </a>
                                            <!-- product links -->

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
                                                    <span class="product-price">
                                                        <del class="del">
                                                            @if($value->sale_price != $value->origin_price)
                                                                {{number_format($value->origin_price,0,'.','.')}}
                                                            @endif
                                                        </del>
                                                        <span class="onsale">{{number_format($value->sale_price,0,'.','.')}}đ</span>
                                                    </span>
                                                    <a href="{{route('frontend.product.add', ['id' => $value->id])}}"><button class="pro-btn">
                                                            <i class="icon-basket"></i>
                                                        </button></a>
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
        @endsection

