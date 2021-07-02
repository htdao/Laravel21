@extends('backend.layouts.master')
@section('title')
Sản phẩm
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('script')

@endsection
@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Danh sách</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
        <!-- Main row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sản phẩm mới nhập</h3>
{{--                        @if(session()->has('success'))--}}
{{--                            <div class="col-6 alert-success">Thêm mới thành công</div>--}}
{{--                        @elseif(session()->has('error'))--}}
{{--                            <div class="alert alert-danger">{{$re->session()->get('error')}}</div>--}}
{{--                        @endif--}}

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>
                                    @if(count($value->images) > 0)
                                        <img src="{{$value->images[0]->image_url}}" width="40px">
                                    @endif
                                </td>
                                <td><a href="{{ route('backend.product.edit', ['id' => $value->id]) }}">{{$value->name}}</a></td>
                                <td>{{number_format($value->sale_price)}}</td>
                                <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                <td>
                                    @foreach(\App\Models\Product::$status_text as $key => $v)
                                        @if($key == $value->status)
                                            <p>{{$v}}</p>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('backend.product.show', ['id' => $value->id])}}" class="badge btn btn-info"><i class="material-icons">remove_red_eye</i></a>
                                    <a href="{{route('backend.product.edit', ['id' => $value->id])}}" class=" badge btn btn-success"><i class="material-icons">edit</i></a>
                                    <form action="{{route('backend.product.destroy', ['id' => $value->id])}}" method="POST" class="d-inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="badge btn btn-danger"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div>{{ $products->links() }}</div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection
