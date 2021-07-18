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

          <a href="#changeP" data-toggle="tab" class=""><i class="fa fa-user"></i>Đổi mật khẩu</a>

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
              <div class="myaccount-table table-responsive text-center" style="height: 600px; overflow: auto">
                  <style>
                      .notP{
                          position: static;
                      }
                  </style>
                  @php
                  $j=1;
                  @endphp
                  @foreach($orders as $od)
                      <p style="text-align: left; font-weight: bold">Đơn hàng: {{$j}}</p>
                      <p style="text-align: left">Trạng thái: &nbsp;
                      @if($od->status == 0)
                          <span class="notP badge bg-warning widspan">{{ $od->order_status }}</span>
                      @elseif($od->status == 3)
                          <span class="notP badge bg-info widspan">{{ $od->order_status }}</span>
                      @elseif($od->status == 2)
                          <span class="notP badge bg-success widspan">{{ $od->order_status }}</span>
                      @elseif($od->status == 1)
                          <span class="notP badge bg-danger widspan">{{ $od->order_status }}</span>
                      @else
                          <span class="notP badge bg-dark widspan">{{ $od->order_status }}</span>
                      @endif</p>
                      @if($od->status == 0 || $od->status == 2)
                          <form action="{{route('backend.order.cancellationOrder', ['id' => $od->id])}}" method="POST" class="d-inline-block float-left">
                              @csrf
                              <p style="text-align: left; display: inline-block; float: left">Không muốn mua nữa? </p>
                              <button type="submit" style="color: red" class="notP  widspan d-inline-block float-left">Huỷ đơn hàng</button>
                          </form>
                      @endif
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
{{--                            @if($od->status==3)--}}
{{--                                <td><a style="color: blue" href="{{route('frontend.rating.index', $product->id)}}">Đánh giá</a></td>--}}
{{--                            @endif--}}
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
                <form action="{{route('frontend.account.update', $user->id)}}" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col-lg-12 col-12 mb-30">
                        <label>Họ Tên</label>
                      <input id="name" name="name" value="{{$user->name}}" type="text">
                        @error('name')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12 col-12 mb-30">
                        <label>Số điện thoại</label>
                      <input id="last-name" name="phone" value="{{$user->phone}}" type="text">
                        @error('phone')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 mb-30">
                        <label>Địa chỉ</label>
                      <input id="display-name" name="address" value="{{$user->address}}" type="text">
                        @error('address')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 mb-30">
                        <label>Email</label>
                      <input id="email" name="email" value="{{$user->email}}" type="email">
                        @error('email')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                      <div class="form-group" style="margin-bottom: 20px">
                          <label>Ảnh đại diện</label>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar" multiple>
                                  <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                              </div>
                              <div class="input-group-append">
                                  <span class="input-group-text" id="">Upload</span>
                              </div>
                          </div>
                      </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark btn--md">Lưu thay đổi</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Single Tab Content End -->

            <div class="tab-pane fade" id="changeP" role="tabpanel">
                <div class="myaccount-content">
                    <h3>Thay đổi mật khẩu</h3>

                    <div class="account-details-form">
                        <form action="{{route('frontend.account.updateP', $user->id)}}" method="POST">
                            @csrf
                            <div class="row">
{{--                                <div class="col-12 mb-30">--}}
{{--                                    <input id="current-pwd" placeholder="Nhập mật khẩu cũ..." name="current_pwd" type="password">--}}
{{--                                    @error('current_pwd')--}}
{{--                                    <div style="color: red;">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

                                <div class="col-lg-6 col-12 mb-30">
                                    <input id="new-pwd" name="new_pwd" placeholder="Nhập mật khẩu mới..." type="password" value="">
                                    @error('new_pwd')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-12 mb-30">
                                    <input id="confirm-pwd" name="confirm_pwd" placeholder="Nhập lại mật khẩu..." type="password">
                                    @error('confirm_pwd')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark btn--md">Lưu thay đổi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
      </div>
      <!-- My Account Tab Content End -->
    </div>
  </div>
</div>
@endsection
