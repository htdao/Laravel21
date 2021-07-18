
@extends('backend.layouts.master')
@section('title')
    Chi tiết slide
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Chi tiết slide</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Slide</a></li>
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
                                <label>Tiêu đề</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{$slide->title}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Mô tả</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{$slide->description}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Nội dung</label>
                            </div>

                            <div class="col-md-10 form-group">
                                <p>{{$slide->content}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày tạo</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{date('d-m-Y', strtotime($slide->created_at))}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày cập nhật</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <p>{{date('d-m-Y', strtotime($slide->update_at))}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Hình ảnh</label>
                            </div>
                            <div class="col-md-10 form-group">
                                <img src="/storage/{{$slide->image}}" width="600px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
@endsection
