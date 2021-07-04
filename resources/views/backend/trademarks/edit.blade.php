
@extends('backend.layouts.master')
@section('title')
Cập nhật thương hiệu
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cập nhật thương hiệu</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Thương hiệu</a></li>
                <li class="breadcrumb-item active">Cập nhật</li>
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
                    <h3 class="card-title">Cập nhật</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('backend.trademark.update', ['id' => $trademark->id]) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input name="name" value="{{ $trademark->name }}" type="text" class="form-control" id="" placeholder="Điền tên thương hiệu ">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{ route('backend.trademark.index') }}" class="btn btn-default">Huỷ bỏ</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
    @endsection
