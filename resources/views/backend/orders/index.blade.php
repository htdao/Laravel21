@extends('backend.layouts.master')
@section('title')
    Đơn hàng
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
                <h1 class="m-0 text-dark">Danh sách đơn hàng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
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
                        <h3 class="card-title">Danh sách đơn hàng</h3>
                        <form action="{{route('backend.product.index')}}" method="get" class="d-inline-block float-right col-9">
                            <div class="card-tools row float-right">
                                <div class="input-group input-group-sm col-6">
                                    <select name="trademark" class="col-8 form-control select2" style="width: 100%; padding: 0" >
                                        <option value="0">Chọn trạng thái</option>
{{--                                        @foreach($trademarks as $trademark)--}}
{{--                                            <option value="{{$trademark->id}}">{{$trademark->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <div class="input-group-append col-4" style="padding: 0">
                                        <button type="submit" class="btn btn-default">Lọc</button>
                                    </div>
                                </div>
                                <div class="input-group input-group-sm col-6" style="padding: 0">
                                    <input type="text" name="search" class="col-8 form-control float-left" placeholder="Tìm kiếm">
                                    <div class="input-group-append col-4" style="padding: 0">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Người mua</th>
                                <th>Tổng tiền</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($orders as $value)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$value->customer_name}}</td>
                                    <td>{{number_format($value->total_price)}}</td>
                                    <td>{{ date('d/m/Y', strtotime($value->updated_at)) }}</td>
                                    <td>
                                        @if($value->status == 0)
                                            <span class="badge bg-warning widspan">{{ $value->order_status }}</span>
                                        @elseif($value->status == 3)
                                            <span class="badge bg-info widspan">{{ $value->order_status }}</span>
                                        @elseif($value->status == 2)
                                            <span class="badge bg-success widspan">{{ $value->order_status }}</span>
                                        @elseif($value->status == 1)
                                            <span class="badge bg-danger widspan">{{ $value->order_status }}</span>
                                        @else
                                            <span class="badge bg-dark widspan">{{ $value->order_status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{route('backend.order.status', ['id' => $value->id])}}" method="POST" class="d-inline-block">
                                            <style>
                                                .table td, th{
                                                    text-align: center;
                                                    vertical-align: middle;
                                                }
                                            </style>
                                            {{ csrf_field() }}
                                            <button type="submit" style="border: none; width: 100px; height: 35px; border-radius: 4px; line-height: 100%"
                                            @if($value->status == 0)
                                                class="btn bg-warning"
                                            @elseif($value->status == 3)
                                                class="bg-info opacity-1" disabled
                                            @elseif($value->status == 2)
                                                class="bg-success"
                                            @elseif($value->status == 1)
                                                class="bg-danger"
                                            @else
                                                class="bg-dark opacity-1" disabled
                                            @endif
                                            >
                                                {{ $value->button_text }}
                                            </button>
                                        </form>
                                        <a href="{{route('backend.order.show', ['id' => $value->id])}}" class="badge btn btn-info" style="float: right"><i class="material-icons">remove_red_eye</i></a>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div>{{ $orders->links() }}</div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection
