@extends('frontend.layouts.master')

@section('title')
Tài khoản
@endsection

@section('css')
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(Session::has('success'))
        <script>
            toastr.success("{!! Session::get('success') !!}");
        </script>
    @elseif(Session::has('error'))
        <script>
            toastr.success("{!! Session::get('error') !!}");
        </script>
    @endif
@endsection

@section('banner')
@endsection

@section('content')
<nav class="breadcrumb-section theme1 bg-lighten2 pt-50 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">Tài khoản</h2>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->

<div class="my-account pt-80 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title text-capitalize mb-30 pb-25">Tài khoản của tôi</h3>
      </div>
      <!-- My Account Tab Menu Start -->
      <div class="col-lg-3 col-12 mb-30">
        <div class="myaccount-tab-menu nav" role="tablist">
          <a href="#orders" data-toggle="tab" class="active"><i class="fa fa-cart-arrow-down active"></i> Đơn hàng</a>

          <a href="#account-info" data-toggle="tab" class=""><i class="fa fa-user"></i> Chỉnh sửa thông tin</a>

          <a href="{{route('user.logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
        </div>
      </div>
      <!-- My Account Tab Menu End -->

      <!-- My Account Tab Content Start -->
      <div class="col-lg-9 col-12 mb-30">
        <div class="tab-content" id="myaccountContent">
          <!-- Single Tab Content Start -->
          <div class="tab-pane fade active show" id="orders" role="tabpanel">
            <div class="myaccount-content">
              <h3>Danh sách đơn hàng</h3>
              <div class="myaccount-table table-responsive text-center">
{{--                  @dd($orders)--}}
                  @php
                  $j=1;
                  @endphp
                  @foreach($orders as $od)
{{--                      @dd($od->products);--}}
                      <p style="text-align: left; font-weight: bold">Đơn hàng: {{$j}}</p>
                      <p style="text-align: left">Trạng thái: &nbsp;
                      @if($od->status == 0)
                          <span class="badge bg-warning widspan">{{ $od->order_status }}</span>
                      @elseif($od->status == 3)
                          <span class="badge bg-info widspan">{{ $od->order_status }}</span>
                      @elseif($od->status == 2)
                          <span class="badge bg-success widspan">{{ $od->order_status }}</span>
                      @elseif($od->status == 1)
                          <span class="badge bg-danger widspan">{{ $od->order_status }}</span>
                      @else
                          <span class="badge bg-dark widspan">{{ $od->order_status }}</span>
                      @endif</p>
                    <table class="table table-bordered">
                        @php
                            $i=1;
                        @endphp
                    @foreach($od->products as $product)
                        <tr>
                          <td>{{$i}}</td>
                          <td>
                              <img src="{{$product->images[0]->image_url}}" style="height: 40px">
                          </td>
                          <td>{{$product->name}} x {{$product->pivot->quality}}</td>
                          <td>{{number_format($product->sale_price*$product->pivot->quality,0,'.','.')}}đ</td>
                        </tr>
                            @php
                                $i++;
                            @endphp
                    @endforeach
                        <tr>
                            <td colspan="3">Tổng tiền</td>
                            <td colspan="">{{number_format($od->total_price,0,'.','.')}}đ</td>
                        </tr>
                    </table>
                      @php
                      $j++;
                      @endphp
                  @endforeach
              </div>
            </div>
          </div>
          <!-- Single Tab Content End -->

          <!-- Single Tab Content Start -->
          <div class="tab-pane fade" id="account-info" role="tabpanel">
            <div class="myaccount-content">
              <h3>Thông tin chi tiết</h3>

              <div class="account-details-form">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-12 col-12 mb-30">
                        <label>Họ Tên</label>
                      <input id="name" name="name" value="{{$user->name}}" type="text">
                    </div>

                    <div class="col-lg-12 col-12 mb-30">
                        <label>Số điện thoại</label>
                      <input id="last-name" name="phone" value="{{$user->phone}}" type="text">
                    </div>

                    <div class="col-12 mb-30">
                        <label>Địa chỉ</label>
                      <input id="display-name" name="address" value="{{$user->address}}" type="text">
                    </div>

                    <div class="col-12 mb-30">
                        <label>Email</label>
                      <input id="email" name="email" value="{{$user->email}}" type="email">
                    </div>

                    <div class="col-12 mb-30">
                      <h4>Đổi mật khẩu</h4>
                    </div>

                    <div class="col-12 mb-30">
                      <input id="current-pwd" placeholder="Nhập mật khẩu cũ..." name="current-pwd" type="password">
                    </div>

                    <div class="col-lg-6 col-12 mb-30">
                      <input id="new-pwd" name="new-pwd" placeholder="Nhập mật khẩu mới..." type="password">
                    </div>

                    <div class="col-lg-6 col-12 mb-30">
                      <input id="confirm-pwd" name="confirm-pwd" placeholder="Nhập lại mật khẩu..." type="password">
                    </div>

                    <div class="col-12">
                      <button class="btn btn-dark btn--md">Save Changes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Single Tab Content End -->
        </div>
      </div>
      <!-- My Account Tab Content End -->
    </div>
  </div>
</div>
@endsection
