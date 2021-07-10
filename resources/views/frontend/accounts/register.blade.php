@extends('frontend.layouts.master')

@section('title')
    Đăng ký
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
                        <h2 class="title pb-4 text-dark text-capitalize">Đăng ký</h2>
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
                                        <form action="{{route('register.store')}}" method="post">
                                            @csrf
                                            <input type="text" name="name" placeholder="Họ tên">
                                            <input type="text" name="phone" placeholder="Số điện thoại">
                                            <input type="text" name="address" placeholder="Địa chỉ">
                                            <input type="email" name="email" placeholder="Email đăng ký" type="email">
                                            <input type="password" name="password" placeholder="Mật khẩu">
{{--                                            <input type="text" name="avatar" value="images/auto.jpg" hidden>--}}
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
@endsection
