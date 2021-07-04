
@extends('backend.layouts.master')
@section('title')
Cập nhật danh mục
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Cập nhật danh mục</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
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
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('backend.category.update', ['id' => $category->id]) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input name="name" value="{{ $category->name }}" type="text" class="form-control" id="" placeholder="Điền tên danh mục ">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Danh mục cha</label>
                            <select name="parent_id" class="form-control select2" style="width: 100%;">
                                <option value="0">Chọn danh mục</option>
                                @foreach($categories as $cate)
                                    <option value="{{ $cate->id }}"
                                    @if($cate->id == $category->parent_id)
                                        {{ 'selected' }}
                                        @endif
                                    >{{ $cate->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Thương hiệu liên quan</label>
                            @for($i=0;$i<count($trademarks);$i++)
                                <div class="form-check">
                                    <input name="trademark_id[]" value="{{$trademarks[$i]->id}}" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    @for($j=0;$j<count($category->trademarks);$j++)
                                        @if($category->trademarks[$j]->id == $trademarks[$i]->id)
                                            {{'checked'}}
                                            @endif
                                        @endfor
                                    >
                                    <label class="form-check-label" for="defaultCheck1">{{$trademarks[$i]->name}}</label>
                                </div>
                            @endfor
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('backend.category.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-sucess">Cập nhật</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
    @endsection
