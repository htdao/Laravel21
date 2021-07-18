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
      @php
      $k =1;
      @endphp
      @foreach($slides as $slide)
    <div class="slider-item bg-img bg-img{{$k}}">
        <style>
            .bg-img{{$k}}{
                background-image: url("/storage/{{$slide->image}}");
            }
        </style>
      <div class="container">
        <div class="row align-items-center slider-height">
          <div class="col-12">
            <div class="slider-content">
              <p class="text animated" data-animation-in="fadeInDown" data-delay-in=".300">
                {{$slide->description}}
              </p>
              <h2 class="title animated">
                <span class="animated d-block" data-animation-in="fadeInLeft" data-delay-in=".800">{{$slide->title}}</span>
                <span class="animated font-weight-bold" data-animation-in="fadeInRight" data-delay-in="1.5">{{$slide->content}}</span>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
      @php
          $k++;
      @endphp
  @endforeach
    <!-- slider-item end -->

    <!-- slider-item end -->
  </div>
</section>
@endsection

@section('content')

    <section class="bg-white theme1 pb-80" style="margin-top: 50px">
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
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star de-selected"></span>--}}
                                                    Đã bán: {{$value->quan_sold}}
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="product-price">
                                                        <del class="del">
{{--                                                            @if($value->sale_price != $value->origin_price)--}}
{{--                                                                {{number_format($value->origin_price,0,'.','.')}}--}}
{{--                                                            @endif--}}
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
{{--                                                <span class="ion-ios-star"></span>--}}
{{--                                                <span class="ion-ios-star"></span>--}}
{{--                                                <span class="ion-ios-star"></span>--}}
{{--                                                <span class="ion-ios-star"></span>--}}
{{--                                                <span class="ion-ios-star de-selected"></span>--}}
                                                Đã bán: {{$value->quan_sold}}
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="product-price">
                                                        <del class="del">
{{--                                                            @if($value->sale_price != $value->origin_price)--}}
{{--                                                                {{number_format($value->origin_price,0,'.','.')}}--}}
{{--                                                            @endif--}}
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
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star"></span>--}}
{{--                                                    <span class="ion-ios-star de-selected"></span>--}}
                                                    Đã bán: {{$value->quan_sold}}
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="product-price">
                                                        <del class="del">
{{--                                                            @if($value->sale_price != $value->origin_price)--}}
{{--                                                                {{number_format($value->origin_price,0,'.','.')}}--}}
{{--                                                            @endif--}}
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
        @endsection

