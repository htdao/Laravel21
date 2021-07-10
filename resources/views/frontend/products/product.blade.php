@extends('frontend.layouts.master')

@section('title')
Chi tiết
@endsection

@section('css')
@endsection

@section('script')
@endsection

@section('banner')
@endsection

@section('content')
<nav class="breadcrumb-section theme1 bg-lighten2 pt-50 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
            Chi tiết sản phẩm
          </h2>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product-single start -->
<section class="product-single theme1 pt-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div>
          <div class="product-sync-init mb-20">
            @for($i=0;$i<count($product->images);$i++)
            <div class="single-product">
              <div class="product-thumb">
                <img src="{{$product->images[$i]->image_url}}" alt="product-thumb">
              </div>
            </div>
            @endfor
          </div>
        </div>
        <div class="product-sync-nav single-product">
            @for($i=0;$i<count($product->images);$i++)
          <div class="single-product">
            <div class="product-thumb">
              <a href="javascript:void(0)">
                  <img src="{{$product->images[$i]->image_url}}" alt="product-thumb"></a>
            </div>
          </div>
            @endfor
        </div>
      </div>
      <div class="col-lg-6">
        <div class="single-product-info">
          <div class="single-product-head">
            <h2 class="title mb-20">{{$product->name}}</h2>
            <div class="star-content mb-20">
              <span class="star-on"><i class="ion-ios-star"></i> </span>
              <span class="star-on"><i class="ion-ios-star"></i> </span>
              <span class="star-on"><i class="ion-ios-star"></i> </span>
              <span class="star-on"><i class="ion-ios-star"></i> </span>
              <span class="star-on"><i class="ion-ios-star"></i> </span>
              <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                Đánh giá <span>(24)</span></a>
            </div>
          </div>
          <div class="product-body mb-40">
            <div class="d-flex align-items-center mb-30">
              <span class="product-price mr-20"><del class="del">
                      @if($product->sale_price != $product->origin_price)
                          {{number_format($product->origin_price,0,'.','.')}}
                      @endif</del>
                <span class="onsale">
                    {{number_format($product->sale_price,0,'.','.')}}đ
                </span>
              </span>
            </div>
              <div class="product-anotherinfo-wrapper">
                  <ul>
                     @if(!empty($product->content_more))
                        @foreach($product->content_more as $key => $value)
                          <li><span>{{$key}}</span>{{$value}}</li>
                        @endforeach
                      @endif
                  </ul>
              </div>
          </div>
          <div class="product-footer">
            <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                <form action="{{route('frontend.product.add', ['id' => $product->id])}}" method="get">
              <div class="count d-flex" style="margin-bottom: 20px">
                    <input name="qty" type="number" min="1" max="10" step="1" value="1">
                    <div class="button-group">
                      <button type="button" class="count-btn increment">
                        <i class="fas fa-chevron-up"></i>
                      </button>
                      <button type="button" class="count-btn decrement">
                        <i class="fas fa-chevron-down"></i>
                      </button>
                    </div>
              </div>
              <div>
                    <button type="submit" class="btn btn-dark btn--xl mt-5 mt-sm-0">
                      <span class="mr-2"><i class="ion-android-add"></i></span>
                     Thêm vào giỏ hàng
                    </button>
              </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<div class="product-tab theme1 bg-white pt-60 pb-80">
  <div class="container">
    <div class="product-tab-nav">
      <div class="row align-items-center">
        <div class="col-12">
          <nav class="product-tab-menu single-product">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mô tả sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Chi tiết sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Đánh giá</a>
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
          <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="single-product-desc">
              {!! $product->content !!}
              </div>
          </div>
          <!-- second tab-pane -->
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="single-product-desc">
              <div class="product-anotherinfo-wrapper">
                <ul>
                    @if(!empty($product->content_more))
                    @foreach($product->content_more as $key => $value)
                  <li><span>{{$key}}</span>{{$value}}</li>
                    @endforeach
                    @endif
                </ul>
              </div>
            </div>
          </div>
          <!-- third tab-pane -->
          <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="single-product-desc">
              <div class="row">
                <div class="col-lg-7">
                  <div class="review-wrapper">
                    <div class="single-review">
                      <div class="review-img">
                        <img src="images/1_1.png" alt>
                      </div>
                      <div class="review-content">
                        <div class="review-top-wrap">
                          <div class="review-left">
                            <div class="review-name">
                              <h4>White Lewis</h4>
                            </div>
                            <div class="rating-product">
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                            </div>
                          </div>
                          <div class="review-left">
                            <a href="#">Reply</a>
                          </div>
                        </div>
                        <div class="review-bottom">
                          <p>
                            Vestibulum ante ipsum primis aucibus orci
                            luctustrices posuere cubilia Curae Suspendisse
                            viverra ed viverra. Mauris ullarper euismod
                            vehicula. Phasellus quam nisi, congue id nulla.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="single-review child-review">
                      <div class="review-img">
                        <img src="images/2_1.png" alt>
                      </div>
                      <div class="review-content">
                        <div class="review-top-wrap">
                          <div class="review-left">
                            <div class="review-name">
                              <h4>White Lewis</h4>
                            </div>
                            <div class="rating-product">
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                              <i class="ion-android-star"></i>
                            </div>
                          </div>
                          <div class="review-left">
                            <a href="#">Reply</a>
                          </div>
                        </div>
                        <div class="review-bottom">
                          <p>
                            Vestibulum ante ipsum primis aucibus orci
                            luctustrices posuere cubilia Curae Sus pen disse
                            viverra ed viverra. Mauris ullarper euismod
                            vehicula.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="ratting-form-wrapper">
                    <h3>Add a Review</h3>
                    <div class="ratting-form">
                      <form action="#">
                        <div class="star-box">
                          <span>Your rating:</span>
                          <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="rating-form-style mb-10">
                              <input placeholder="Name" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="rating-form-style mb-10">
                              <input placeholder="Email" type="email">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="rating-form-style form-submit">
                              <textarea name="Your Review" placeholder="Message"></textarea>
                              <input type="submit" value="Submit">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- product tab end -->
<!-- new arrival section start -->
<section class="theme1 bg-white pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-3 mb-3">Có thể bạn thích</h2>
        </div>
      </div>
      <div class="col-12">
        <div class="product-slider-init theme1 slick-nav">
          <div class="slider-item">
            <div class="card product-card">
              <div class="card-body p-0">
                <div class="media flex-column">
                  <div class="product-thumbnail position-relative">
                    <span class="badge badge-danger top-right">New</span>
                    <a href="single-product.html">
                      <img class="first-img" src="/frontend/images/1_2.png" alt="thumbnail">
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
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
