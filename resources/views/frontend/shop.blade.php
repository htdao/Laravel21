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
            <div class="col-12 col-md-6 position-relative">
              <div class="shop-grid-button d-flex align-items-center">
                <span class="sort-by">Sắp xếp:</span>
                <select class="form-select custom-select" aria-label="Default select example">
                  <option selected>Mới đến cũ</option>
                  <option value="1">Giá thấp đến cao</option>
                  <option value="2">Giá cao đến thấp</option>
                </select>
              </div>
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
                        <span class="badge badge-success top-left">-10%</span>
                        <span class="badge badge-danger top-right">onsale</span>
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
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star de-selected"></span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between">
                        <span class="product-price">
                            <del class="del">{{number_format($product->origin_price)}}</del>
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
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row grid-view-list theme1">
                @foreach($products as $product)
              <div class="col-12 mb-30">
                <div class="card product-card">
                  <div class="card-body">
                    <div class="media flex-column flex-md-row">
                      <div class="product-thumbnail position-relative">
                        <span class="badge badge-success top-left">-10%</span>
                        <span class="badge badge-danger top-right">onsale</span>
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
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star de-selected"></span>
                          </div>
                            <span class="product-price">
                                <del class="del">
                                    @if($product->sale_price != $product->origin_price)
                                        {{number_format($product->origin_price,0,'.','.')}}
                                    @endif
                                </del>
                                <span class="onsale">{{number_format($product->sale_price,0,'.','.')}}đ</span>
                            </span>
                        </div>

                        <ul class="product-list-des">
                          <li>
                            Block out the haters with the fresh adidas®
                            Originals Kaval Windbreaker Face Cream.
                          </li>
                          <li>Part of the Kaval Collection.</li>
                          <li>
                            Regular fit is eased, but not sloppy, and perfect
                            for any activity.
                          </li>
                          <li>
                            Plain-woven Face Cream specifically constructed for
                            freedom of movement.
                          </li>
                        </ul>
                        <div class="availability-list mb-20">
                          <p>Availability: <span>1200 In Stock</span></p>
                        </div>
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
      <div class="col-lg-3 mb-30 order-lg-first">
        <aside class="left-sidebar theme1">
          <div class="search-filter">
            <form action="#">
                <style>
                    .ofl{
                        height: 150px;
                        overflow: auto;
                    }
                </style>
              <div class="sidbar-widget mt-10">
                <h4 class="title">Bộ lọc</h4>
                <h4 class="sub-title pt-10">Thương hiệu</h4>
                  <div class="ofl">
                  @foreach($trademarks as $trademark)
                <div class="widget-check-box">
                  <input type="checkbox" id="20820">
                  <label for="20820">{{$trademark->name}}</label>
                </div>
                  @endforeach
                  </div>
              </div>
              <!-- sidbar-widget -->
              <div class="sidbar-widget mt-10">
                <h4 class="sub-title">Giá</h4>
                <div class="price-filter mt-10 ofl">
                    <div class="widget-check-box">
                        <input type="checkbox" id="20820">
                        <label for="20820">Giá dưới 100.000đ</label>
                    </div>
                    <div class="widget-check-box">
                        <input type="checkbox" id="20820">
                        <label for="20820">100.000đ-300.000đ</label>
                    </div>
                    <div class="widget-check-box">
                        <input type="checkbox" id="20820">
                        <label for="20820">300.000đ-500.000đ</label>
                    </div>
                    <div class="widget-check-box">
                        <input type="checkbox" id="20820">
                        <label for="20820">500.000đ-1.000.000đ</label>
                    </div>
                    <div class="widget-check-box">
                        <input type="checkbox" id="20820">
                        <label for="20820">Giá trên 1.000.000đ</label>
                    </div>
                </div>
              </div>
              <!-- sidbar-widget -->
            </form>
          </div>
            <div class="search-filter" style="margin-top: 20px">
                <div class="sidbar-widget pt-0">
                    <h4 class="title">Danh mục</h4>
                </div>
            </div>

            <ul id="offcanvas-menu2" class="blog-ctry-menu">
                @foreach($menuCategories as $category)
                    <li>
                        <a href="javascript:void(0)">{{$category->name}}</a>
                        <ul class="category-sub-menu">
                            <li><a href="#">{{$category->name}}</a></li>
                        </ul>
                    </li>
                @endforeach
            </ul>

            <div class="search-filter" style="margin-top: 20px">
                <div class="sidbar-widget pt-0">
                    <h4 class="title">Thẻ</h4>
                </div>
            </div>
            <div class="product-widget mb-60 mt-30">
                <ul class="product-tag d-flex flex-wrap">
                    <li><a href="#">Giảm giá</a></li>
                    <li><a href="#">Sản phẩm mới</a></li>
                    <li><a href="#">Phổ biến</a></li>
                    <li><a href="#">Bán chạy</a></li>
                </ul>
            </div>
        </aside>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-9 offset-lg-3">
        <nav class="pagination-section mt-30 mb-30">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#"><i class="ion-chevron-left"></i></a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection
