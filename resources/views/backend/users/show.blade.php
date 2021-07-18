
@extends('backend.layouts.master')
@section('title')
    Thông tin người dùng
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Thông tin người dùng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                    <li class="breadcrumb-item active">Chi tiết</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Chi tiết</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label>ID</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{$user->id}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ Tên</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{$user->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Số điện thoại</label>
                            </div>

                            <div class="col-md-10 form-group">
                                <p>{{$user->phone}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>

                            <div class="col-md-10 form-group">
                                <p>{{$user->email}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Địa chỉ</label>
                            </div>

                            <div class="col-md-10 form-group">
                                <p>{{$user->address}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Quyền</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{$user->role_text}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày tạo</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{date('d-m-Y', strtotime($user->created_at))}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày cập nhật</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{date('d-m-Y', strtotime($user->update_at))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
@endsection
