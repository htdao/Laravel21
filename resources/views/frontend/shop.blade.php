@extends('frontend.layouts.master')

@section('title')
Cửa hàng
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
            Cửa hàng
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
      <div class="col-lg-9 mb-30">
        <div class="grid-nav-wraper bg-lighten2 mb-30">
          <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
              <nav class="shop-grid-nav">
                <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                      <i class="fa fa-th"></i>
                    </a>
                  </li>
                  <li class="nav-item mr-0">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-list"></i></a>
                  </li>
                  <li>
                    <span class="total-products text-capitalize">Tất cả sản phẩm</span>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="tab-content" id="pills-tabContent">
          <!-- first tab-pane -->
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
          <!-- second tab-pane -->

{{--            <div id="tabs_product">--}}

{{--            </div>--}}

          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row grid-view-list theme1">
                @foreach($products as $product)
              <div class="col-12 mb-30">
                <div class="card product-card">
                  <div class="card-body">
                    <div class="media flex-column flex-md-row">
                      <div class="product-thumbnail position-relative">
{{--                        <span class="badge badge-success top-left">-10%</span>--}}
{{--                        <span class="badge badge-danger top-right">onsale</span>--}}
                        <a href="{{route('frontend.product.show',['id' => $product->id])}}">
                            @if(count($product->images) > 0)
                                <img src="{{$product->images[0]->image_url}}">
                            @endif
                        </a>
                        <!-- product links -->
                        <!-- product links end-->
                      </div>
                      <div class="media-body pl-md-4">
                        <div class="product-desc py-0 px-0">
                          <h3 class="title h1">
                            <a href="shop-grid-4-column.html">{{$product->name}}</a>
                          </h3>
                          <div class="star-rating mb-10">
{{--                            <span class="ion-ios-star"></span>--}}
{{--                            <span class="ion-ios-star"></span>--}}
{{--                            <span class="ion-ios-star"></span>--}}
{{--                            <span class="ion-ios-star"></span>--}}
{{--                            <span class="ion-ios-star de-selected"></span>--}}
                              Đã bán: {{$product->quan_sold}}
                          </div>
                            <span class="product-price">
                                <del class="del">
{{--                                    @if($product->sale_price != $product->origin_price)--}}
{{--                                        {{number_format($product->origin_price,0,'.','.')}}--}}
{{--                                    @endif--}}
                                </del>
                                <span class="onsale">{{number_format($product->sale_price,0,'.','.')}}đ</span>
                            </span>
                        </div>

                        <ul class="product-list-des">
{{--                            @if(!empty($product->content_more))--}}
{{--                                @php $product->content_more = json_decode($product->content_more, true) @endphp--}}
{{--                                @foreach($product->content_more as $key => $value)--}}
{{--                                    <li><span>{{$key}}</span>{{$value}}</li>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
                        </ul>
                          <a href="{{route('frontend.product.add', $product->id)}}">
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
      <div class="col-lg-3 mb-30 order-lg-first">
        <aside class="left-sidebar theme1">
          <div class="search-filter">
              <div class="sidbar-widget mt-10" style="padding: 50px 0">
                  <h4 class="title">Sắp xếp</h4>
                  <div class="shop-grid-button d-flex align-items-center">
                      <form>
                          @csrf
                          <select name="sort" id="sort" class="form-select custom-select" aria-label="Default select example">
                              <option value="{{\Illuminate\Support\Facades\Request::url()}}?sort_by=none">Sắp xếp theo</option>
                              <option value="{{\Illuminate\Support\Facades\Request::url()}}?sort_by=tang_dan">Giá thấp đến cao</option>
                              <option value="{{\Illuminate\Support\Facades\Request::url()}}?sort_by=giam_dan">Giá cao đến thấp</option>
                              <option value="{{\Illuminate\Support\Facades\Request::url()}}?sort_by=kytu_az">Tên a-z</option>
                              <option value="{{\Illuminate\Support\Facades\Request::url()}}?sort_by=kytu_za">Tên z-a</option>
                          </select>
                      </form>
                  </div>
              </div>
              <div class="sidbar-widget mt-10">
                  <h4 class="title">Lọc giá</h4>
                  <div class="shop-grid-button d-flex align-items-center">
                      <form>
                          <div class="price-filter mt-10">
                              <div class="price-slider-amount">
                                  <input type="text" id="amount_start" name="amount_start" readonly placeholder="Chọn khoảng giá" style="border: none; color: black">
                                  <input type="text" id="amount_end" name="amount_end" readonly placeholder="Chọn khoảng giá" style="border: none; color: black; padding: 10px 0">

                                  <input type="hidden" id="start_price">
                                  <input type="hidden" id="end_price">

                              </div>
                              <div id="slider-range"></div>
                          </div>
                          <input type="submit" name="filter_price" value="Lọc" class="btn-primary" style="margin-top: 30px; width: 80px; border: none">

                      </form>
                  </div>
              </div>
          </div>
        </aside>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-9 offset-lg-3">

        <nav class="pagination-section mt-30 mb-30">
{{--          <ul class="pagination justify-content-center">--}}
{{--            <li class="page-item">--}}
{{--              <a class="page-link" href="#"><i class="ion-chevron-left"></i></a>--}}
{{--            </li>--}}
{{--            <li class="page-item active">--}}
{{--              <a class="page-link" href="#">1</a>--}}
{{--            </li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--            <li class="page-item">--}}
{{--              <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>--}}
{{--            </li>--}}
{{--          </ul>--}}
            <div class="pagination justify-content-center">
                {!! $products->links() !!}
            </div>
        </nav>

      </div>
    </div>
  </div>
</div>
<style>
    /*<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>*/
    /*<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">*/
    /*<link rel="stylesheet" href="/resources/demos/style.css">*/
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
{{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
<script>
    $(document).ready(function (){
        $('#sort').on('change', function (){
            var url = $(this).val();
            if(url){
                window.location = url;
            }
            return fales;
        });

        $( "#slider-range" ).slider({
            // orientation: "vertical",
            // range: true,

            min:{{$min_price}},
            max:{{$max_price}},
            step:10000,
            values: [ {{$min_price+50000}}, {{$max_price-100000}} ],
            slide: function( event, ui ) {
                $( "#amount_start" ).val(ui.values[0]);
                $( "#amount_end" ).val(ui.values[1]);


                $( "#start_price" ).val(ui.values[ 0 ]);
                $( "#end_price" ).val(ui.values[ 1 ]);

            }
        });
        // $( "#amount_start" ).val($("#silder-range").slider("values", 0)+'vnđ');
        // $( "#amount_end" ).val($("#silder-range").slider("values", 1)+'vnđ');
        $( "#amount_end" ).val( "đ" + $( "#slider-range" ).slider( "values", 0 ) +
            " - đ" + $( "#slider-range" ).slider( "values", 1 ) );
    });
</script>
@endsection
