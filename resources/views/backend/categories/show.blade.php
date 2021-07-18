
@extends('backend.layouts.master')
@section('title')
    Chi tiết danh mục
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Chi tiết danh mục</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
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
                                    <p>{{$category->id}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Tên danh mục</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <p>{{$category->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Danh mục cha</label>
                                </div>

                                @if($category->parent_id==0)
                                    <div class="col-md-10">
                                        <p>Là danh mục cha</p>
                                    </div>
                                @else
                                    <div class="col-md-10">
                                        <p>{{$parent[0]->name}}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Thương hiệu liên quan</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    @foreach($category->trademarks as $trademark)
                                        <span class="badge bg-warning  text-dark">{{$trademark->name}}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Ngày tạo</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <p>{{date('d-m-Y', strtotime($category->created_at))}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Ngày cập nhật</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <p>{{date('d-m-Y', strtotime($category->update_at))}}</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
@endsection
