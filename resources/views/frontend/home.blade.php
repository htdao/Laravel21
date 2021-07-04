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
<section class="static-media-section py-80 bg-white">
  <div class="container">
    <div class="static-media-wrap theme-bg">
      <div class="row">
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 mr-auto mr-sm-3" src="/frontend/images/2.png" alt="icon">
            <div class="media-body">
              <h4 class="title">Free Shipping</h4>
              <p class="text">On all orders over $75.00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 mr-auto mr-sm-3" src="/frontend/images/3.png" alt="icon">
            <div class="media-body">
              <h4 class="title">Free Returns</h4>
              <p class="text">Returns are free within 9 days</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 mr-auto mr-sm-3" src="/frontend/images/4_1.png" alt="icon">
            <div class="media-body">
              <h4 class="title">100% Payment Secure</h4>
              <p class="text">Your payment are safe with us.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 py-3">
          <div class="d-flex static-media2 flex-column flex-sm-row">
            <img class="align-self-center mb-2 mb-sm-0 mr-auto mr-sm-3" src="/frontend/images/5.png" alt="icon">
            <div class="media-body">
              <h4 class="title">Support 24/7</h4>
              <p class="text">Contact us 24 hours a day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="common-banner bg-white">
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
<section class="product-tab bg-white pt-50 pb-80">
  <div class="container">
    <div class="product-tab-nav mb-50">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title text-center">
            <h2 class="title pb-3 mb-3">Our products</h2>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Perspiciatis, culpa?
            </p>
          </div>
        </div>
        <div class="col-12">
          <nav class="product-tab-menu theme1">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">new products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">onsale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">upcoming products</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- product-tab-nav end -->
    <div class="row">
      <div class="col-12">
        <div class="tab-content" id="pills-tabContent">
          <!-- first tab-pane -->
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="product-slider-init theme1 slick-nav">
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="/frontend/images/1.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">All Natural Makeup Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="/frontend/images/2_3.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">On Trend Makeup and Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="/frontend/images/3_2.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">The Cosmetics and Beauty brand Shoppe</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$21.51</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="/frontend/images/4_2.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Age Defying Cosmetics Makeup</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/5_2.png" alt="thumbnail">
                          <img class="second-img" src="images/6_1.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Clear Water Cosmetics On Trend</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
            </div>
          </div>
          <!-- second tab-pane -->
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="product-slider-init theme1 slick-nav">
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/1.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">All Natural Makeup Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/2_3.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">On Trend Makeup and Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/3_2.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">The Cosmetics and Beauty brand Shoppe</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$21.51</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/4_2.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Age Defying Cosmetics Makeup</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/5_2.png" alt="thumbnail">
                          <img class="second-img" src="images/6_1.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Clear Water Cosmetics On Trend</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
            </div>
          </div>
          <!-- third tab-pane -->
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="product-slider-init theme1 slick-nav">
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/1.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">All Natural Makeup Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/2_3.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">On Trend Makeup and Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/3_2.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">The Cosmetics and Beauty brand Shoppe</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$21.51</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/4_2.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Age Defying Cosmetics Makeup</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/5_2.png" alt="thumbnail">
                          <img class="second-img" src="images/6_1.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Clear Water Cosmetics On Trend</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
            </div>
          </div>
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
          <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html"><img src="images/5.jpg" alt="banner-thumb-naile"></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="banner-thumb">
          <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
            <img src="images/6.jpg" alt="banner-thumb-naile"></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-30">
          <div class="banner-thumb">
            <a class="zoom-in d-block overflow-hidden position-relative" href="shop-grid-4-column.html">
              <img src="images/4_2.jpg" alt="banner-thumb-naile"></a>
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
              <h2 class="title pb-3 mb-3">New Arrival products</h2>
              <p class="text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Dignissimos, repellat.
              </p>
            </div>
            <!-- section-title end -->
            <div class="product-slider-init theme1 slick-nav">
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/8.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">All Natural Makeup Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/9.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">On Trend Makeup and Beauty Cosmetics</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/10.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">The Cosmetics and Beauty brand Shoppe</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$21.51</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/11.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Age Defying Cosmetics Makeup</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="card product-card">
                  <div class="card-body p-0">
                    <div class="media flex-column">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-danger top-right">New</span>
                        <a href="single-product.html">
                          <img class="first-img" src="images/12.png" alt="thumbnail">
                          <img class="second-img" src="images/13.png" alt="thumbnail">
                        </a>
                        <!-- product links -->
                        <ul class="actions d-flex justify-content-center">
                          <li>
                            <a class="action" href="wishlist.html">
                              <span data-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                              </span>
                            </a>
                          </li>
                          <li>
                            <a class="action" href="#" data-toggle="modal" data-target="#compare">
                              <span data-toggle="tooltip" data-placement="bottom" title="Add to compare" class="icon-shuffle"></span>
                            </a>
                          </li>
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
                          <h3 class="title">
                            <a href="shop-grid-4-column.html">orginal Clear Water Cosmetics On Trend</a>
                          </h3>
                          <div class="star-rating">
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <span class="product-price">$11.90</span>
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
              <!-- slider-item end -->
              <!-- New women's Fresh Faced Trendy cream -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- product tab repetation end -->

    <!-- blog-section start -->
    <section class="blog-section theme1 pb-65">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="title pb-3 mb-3">from our Latest Blogs</h2>
              <p class="text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="blog-init slick-nav">
              <div class="slider-item">
                <div class="single-blog">
                  <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden" href="blog-grid-left-sidebar.html">
                    <img src="images/1_3.png" alt="blog-thumb-naile">
                  </a>
                  <div class="blog-post-content">
                    <a class="blog-link theme-color d-inline-block mb-10 text-uppercase" href="https://themeforest.net/user/hastech">Fashion</a>
                    <h3 class="title mb-15">
                      <a href="single-blog.html">This is first Post For Blog</a>
                    </h3>
                    <p class="sub-title">
                      Posted by
                      <a class="theme-color d-inline-block mx-1" href="https://themeforest.net/user/hastech">HasTech</a>
                      12TH Nov 2020
                    </p>
                  </div>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-blog">
                  <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden" href="blog-grid-left-sidebar.html">
                    <img src="images/2_1.png" alt="blog-thumb-naile">
                  </a>
                  <div class="blog-post-content">
                    <a class="blog-link theme-color d-inline-block mb-10 text-uppercase" href="https://themeforest.net/user/hastech">Fashion</a>
                    <h3 class="title mb-15">
                      <a href="single-blog.html">This is Secound Post For Blog</a>
                    </h3>
                    <p class="sub-title">
                      Posted by
                      <a class="theme-color d-inline-block mx-1" href="https://themeforest.net/user/hastech">HasTech</a>
                      12TH Nov 2020
                    </p>
                  </div>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-blog">
                  <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden" href="blog-grid-left-sidebar.html">
                    <img src="images/3_3.png" alt="blog-thumb-naile">
                  </a>
                  <div class="blog-post-content">
                    <a class="blog-link theme-color d-inline-block mb-10 text-uppercase" href="https://themeforest.net/user/hastech">Fashion</a>
                    <h3 class="title mb-15">
                      <a href="single-blog.html">This is third Post For Blog</a>
                    </h3>
                    <p class="sub-title">
                      Posted by
                      <a class="theme-color d-inline-block mx-1" href="https://themeforest.net/user/hastech">HasTech</a>
                      12TH Nov 2020
                    </p>
                  </div>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-blog">
                  <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden" href="blog-grid-left-sidebar.html">
                    <img src="images/4_3.png" alt="blog-thumb-naile">
                  </a>
                  <div class="blog-post-content">
                    <a class="blog-link theme-color d-inline-block mb-10 text-uppercase" href="https://themeforest.net/user/hastech">Fashion</a>
                    <h3 class="title mb-15">
                      <a href="single-blog.html">This is fourth Post For Blog</a>
                    </h3>
                    <p class="sub-title">
                      Posted by
                      <a class="theme-color d-inline-block mx-1" href="https://themeforest.net/user/hastech">HasTech</a>
                      12TH Nov 2020
                    </p>
                  </div>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-blog">
                  <a class="blog-thumb mb-20 zoom-in d-block overflow-hidden" href="blog-grid-left-sidebar.html">
                    <img src="images/5_1.png" alt="blog-thumb-naile">
                  </a>
                  <div class="blog-post-content">
                    <a class="blog-link theme-color d-inline-block mb-10 text-uppercase" href="https://themeforest.net/user/hastech">Fashion</a>
                    <h3 class="title mb-15">
                      <a href="single-blog.html">This is fiveth Post For Blog</a>
                    </h3>
                    <h5 class="sub-title">
                      Posted by
                      <a class="theme-color d-inline-block mx-1" href="https://themeforest.net/user/hastech">HasTech
                      </a>
                      12TH Nov 2020
                    </h5>
                  </div>
                </div>
              </div>
              <!-- slider-item end -->
            </div>
          </div>
        </div>
      </div>
    </section>
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
                    <img src="images/1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="images/2.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="images/3_1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="images/4_1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="images/5_1.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="images/2.jpg" alt="brand-thumb-nail">
                  </a>
                </div>
              </div>
              <!-- slider-item end -->
              <div class="slider-item">
                <div class="single-brand">
                  <a href="https://themeforest.net/user/hastech" class="brand-thumb">
                    <img src="images/3_1.jpg" alt="brand-thumb-nail">
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
                      <img src="images/1_4.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                  <div class="single-product">
                    <div class="product-thumb">
                      <img src="images/2_2.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                  <div class="single-product">
                    <div class="product-thumb">
                      <img src="images/3.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                  <div class="single-product">
                    <div class="product-thumb">
                      <img src="images/4.jpg" alt="product-thumb">
                    </div>
                  </div>
                  <!-- single-product end -->
                </div>

                <div class="product-sync-nav">
                  <div class="single-product">
                    <div class="product-thumb">
                      <a href="javascript:void(0)">
                        <img src="images/1.1.jpg" alt="product-thumb"></a>
                      </div>
                    </div>
                    <!-- single-product end -->
                    <div class="single-product">
                      <div class="product-thumb">
                        <a href="javascript:void(0)">
                          <img src="images/2.1.jpg" alt="product-thumb"></a>
                        </div>
                      </div>
                      <!-- single-product end -->
                      <div class="single-product">
                        <div class="product-thumb">
                          <a href="javascript:void(0)"><img src="images/3.1.jpg" alt="product-thumb"></a>
                        </div>
                      </div>
                      <!-- single-product end -->
                      <div class="single-product">
                        <div class="product-thumb">
                          <a href="javascript:void(0)"><img src="images/4.1.jpg" alt="product-thumb"></a>
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

