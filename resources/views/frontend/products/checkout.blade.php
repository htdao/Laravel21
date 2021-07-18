@extends('frontend.layouts.master')

@section('title')
Đặt hàng
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
          <h2 class="title pb-4 text-dark text-capitalize">Đặt hàng</h2>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- checkout area start -->
<div class="check-out-section pt-80 pb-80">
  <div class="container">
    <div class="row">
        <form class="personal-information" action="{{route('frontend.order.store')}}" method="post">
      @csrf
            <div class="col-lg-6 float-left">
        <div class="billing-info-wrap">
          <h3 class="title">Thông tin người nhận</h3>
{{--          <form class="personal-information" action="">--}}
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="billing-info mb-20px">
                  <label>Họ Tên</label>
                  <input name="name" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="billing-info mb-20px">
                  <label>Địa Chỉ</label>
                  <input name="address" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->address}}">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="billing-info mb-20px">
                  <label>Email</label>
                  <input name="email"  type="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                </div>
              </div>
                <div class="col-lg-12">
                    <div class="billing-info mb-20px">
                        <label>Số điện thoại</label>
                        <input name="phone" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}">
                    </div>
                </div>
            </div>
{{--          </form>--}}
        </div>
      </div>
      <div class="col-lg-5 mt-4 mt-lg-0 float-right">
        <div class="your-order-area">
          <h3 class="title">Đơn đặt hàng</h3>
          <div class="your-order-wrap gray-bg-4">
            <div class="your-order-product-info">
              <div class="your-order-top">
                <ul>
                  <li>Sản phẩm</li>
                  <li>Tổng tiền</li>
                </ul>
              </div>
              <div class="your-order-middle">
                <ul>
                    @foreach($items as $item)
                  <li>
                    <span class="order-middle-left">{{$item->name}} X {{$item->qty}}</span>
                    <span class="order-price">{{number_format($item->qty*$item->price,0,'.','.')}} </span>
                  </li>
                    @endforeach
                </ul>
              </div>
              <div class="your-order-bottom">
                <ul>
                  <li class="your-order-shipping">Hình thức thanh toán</li>
                  <li>Thanh toán khi nhận hàng</li>
                </ul>
              </div>
              <div class="your-order-total">
                <ul>
                  <li class="order-total">Tổng tiền</li>
                    <input name="total_price" value="{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}" hidden>
                  <li>{{number_format( \Gloudemans\Shoppingcart\Facades\Cart::total(),0,',','.')}}</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="Place-order mt-25">
              <button type="submit"><a class="btn btn--xl btn-block btn-primary">Đặt hàng</a></button>
          </div>
        </div>
      </div>
        </form>
    </div>
  </div>
</div>
@endsection
