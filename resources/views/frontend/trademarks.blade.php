@extends('frontend.layouts.master')

@section('title')
    Thương hiệu
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
                            Thương hiệu {{$trademark[0]->name}}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- breadcrumb-section end -->
    <!-- product tab start -->
    <div class="product-tab bg-white pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-30">

                    <!-- product-tab-nav end -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row grid-view theme1">
                                @foreach($products as $product)
                                    <div class="col-sm-6 col-lg-4 mb-30">
                                        <div class="card product-card">
                                            <div class="card-body">
                                                <div class="product-thumbnail position-relative">
                                                    <a href="{{route('frontend.product.show',['id' => $product->id])}}">
                                                        @if(count($product->images) > 0)
                                                            <img src="{{$product->images[0]->image_url}}">
                                                        @endif
                                                    </a>
                                                    <!-- product links end-->
                                                </div>
                                                <div class="product-desc py-0 px-0">
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
                                                    <h3 class="title h1 ">
                                                        <a href="shop-grid-4-column.html">{{$product->name}}</a>
                                                    </h3>
                                                    <div class="star-rating">
                                                        {{--                        <span class="ion-ios-star"></span>--}}
                                                        {{--                        <span class="ion-ios-star"></span>--}}
                                                        {{--                        <span class="ion-ios-star"></span>--}}
                                                        {{--                        <span class="ion-ios-star"></span>--}}
                                                        {{--                        <span class="ion-ios-star de-selected"></span>--}}
                                                        Đã bán: {{$product->quan_sold}}
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                        <span class="product-price">
{{--                            <del class="del">{{number_format($product->origin_price)}}</del>--}}
                            <span class="onsale">{{number_format($product->sale_price)}}</span>
                        </span>
                                                        <a href="{{route('frontend.product.add', ['id' => $product->id])}}">
                                                            <button type="button" class="pro-btn" data-toggle="modal" data-target="#add-to-cart">
                                                                <i class="icon-basket"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-list End -->
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
