
@extends('backend.layouts.master')
@section('title')
Tạo mới danh mục
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('script')
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Thêm danh mục</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                <li class="breadcrumb-item active">Thêm danh mục</li>
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
                    <h3 class="card-title">Thêm danh mục</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('backend.category.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="" placeholder="Điền tên danh mục ">
                            @error('name')
                            <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Danh mục cha</label>
                            <select name="parent_id" class="form-control select2" style="width: 100%;">
                                <option value="0">Danh mục cha</option>
                                @foreach($categories as $cate)
                                <option value="{{$cate->parent_id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Thương hiệu liên quan</label>
                            @foreach($trademarks as $trademark)
                                <div class="form-check">
                                    <input name="trademark_id[]" class="form-check-input" type="checkbox" value="{{$trademark->id}}"  id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{$trademark->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('backend.category.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-sucess">Tạo mới</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
    @endsection
