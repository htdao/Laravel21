@extends('frontend.layouts.master')

@section('title')
Giỏ hàng
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
          <h2 class="title pb-4 text-dark text-capitalize">Giỏ hàng</h2>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title mb-30 pb-25 text-capitalize">Sản phẩm</h3>
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center" scope="col">Hình ảnh</th>
                <th class="text-center" scope="col">Tên Sản phẩm</th>
                <th class="text-center" scope="col">Giá</th>
                <th class="text-center" scope="col">Số lượng</th>
                <th class="text-center" scope="col">Tổng tiền</th>
                <th class="text-center" scope="col">Xoá</th>
                <th class="text-center" scope="col">Chọn</th>
              </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
              <tr>
                <th class="text-center" scope="row">
                  <img src="{{url(\Illuminate\Support\Facades\Storage::url($item->options->image))}}" alt="img">
                </th>
                <td class="text-center">
                  <span class="whish-title">{{$item->name}}</span>
                </td>
                <td class="text-center">
                  {{$item->price}}
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="10" step="1" value="{{$item->qty}}">
                      <div class="button-group">
                          <form action="{{route('frontend.product.increment', ['id' => $item->rowId])}}" method="get">
                        <button id="increment" class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                          </form>
                          <form type="submit" action="{{route('frontend.product.decrement', ['id' => $item->rowId])}}" method="get">
                        <button id="decrement" class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                          </form>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> {{$item->price*$item->qty}} </span>
                </td>

                <td class="text-center">
                  <a href="{{route('frontend.product.remove', ['id' => $item->rowId])}}">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span>
                  </a>
                </td>
                <td class="text-center">
                    <input type="checkbox" id="20820">
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- product tab end -->
<div class="check-out-section pb-80">
  <div class="container">
    <div class="row">
        <h3 class="title mb-30 pb-25 text-capitalize font-weight-bold" style="border-bottom: 1px solid #ebebeb; padding-left: 0px; margin-left: 10px">Sản phẩm đã chọn</h3>
      <div class="col-lg-5 mt-4 mt-lg-0 float">
        <div class="your-order-area">
          <div class="your-order-wrap gray-bg-4">
            <div class="your-order-product-info">
              <div class="your-order-top">
                <ul>
                  <li>Số sản phẩm</li>
                  <li>{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</li>
                </ul>
              </div>

              <div class="your-order-total mb-0">
                <ul>
                  <li class="order-total">Tổng tiền</li>
                  <li>{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}đ</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="Place-order mt-25">
            <a class="btn btn--lg btn-primary my-2 my-sm-0" href="{{route('frontend.product.checkout')}}">Đặt hàng</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
