@extends('frontend.layouts.master')

@section('title')
Đăng nhập
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
          <h2 class="title pb-4 text-dark text-capitalize">Đăng nhập</h2>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- login area start -->
<div class="login-register-area pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12 ml-auto mr-auto">
        <div class="login-register-wrapper">
          <div class="login-register-tab-list nav">
            <a class="active" data-toggle="tab" href="#lg1">
              <h4>Đăng nhập</h4>
            </a>
            <a data-toggle="tab" href="#lg2">
              <h4>Đăng ký</h4>
            </a>
          </div>
          <div class="tab-content">
            <div id="lg1" class="tab-pane active">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="assets/php/contact.php" method="post">
                    <input type="email" name="user-name" placeholder="Email">
                    <input type="password" name="user-password" placeholder="Mật khẩu">
                    <div class="button-box">
                      <div class="login-toggle-btn">
                        <input id="remember" type="checkbox">
                        <label for="remember">Nhớ tài khoản</label>
                        <a href="#">Quên mật khẩu?</a>
                      </div>
                      <button type="submit" class="btn btn-dark btn--md">
                        <span>Đang nhập</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div id="lg2" class="tab-pane">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="assets/php/contact.php" method="post">
                    <input type="text" name="user-name" placeholder="Họ tên">
                    <input type="text" name="user-name" placeholder="Số điện thoại">
                    <input type="text" name="user-name" placeholder="Địa chỉ">
                    <input name="user-email" placeholder="Email đăng ký" type="email">
                    <input type="password" name="user-password" placeholder="Mật khẩu">
                    <div class="button-box">
                      <button type="submit" class="btn btn-dark btn--md">
                        <span>Đăng ký</span>
                      </button>
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
@endsection
