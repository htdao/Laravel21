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
          <div class="tab-content">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="{{route('user.login.store')}}" method="post">
                      @csrf
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Mật khẩu">
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
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
