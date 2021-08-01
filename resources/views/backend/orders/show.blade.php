@extends('backend.layouts.master')
@section('title')
    Chi tiết đơn hàng
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
                <h1 class="m-0 text-dark">Chi tiết đơn hàng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
                    <li class="breadcrumb-item active">Chi tiết</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col-6 float-left">
                <div class="card">
                    <div class="card-header" style="height: 50px">
                        <h3 class="card-title">Thông tin đơn hàng</h3>
                        <form action="{{route('backend.order.status', ['id' => $order->id])}}" method="post" class="d-inline-block float-left col-7">
                            @csrf
                            <div class="card-tools row float-right">
                                <div class="input-group input-group-sm" style="padding: 0">
                                    <button type="submit" style="border: none; width: 100px; height: 30px; border-radius: 4px; line-height: 100%"
                                            @if($order->status == 0)
                                            class="btn bg-warning"
                                            @elseif($order->status == 3)
                                            class="bg-info opacity-1" disabled
                                            @elseif($order->status == 2)
                                            class="bg-success"
                                            @elseif($order->status == 1)
                                            class="bg-danger"
                                            @else
                                            class="bg-dark opacity-1" disabled
                                        @endif
                                    >
                                        {{ $order->button_text }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        @if($order->status == 2 || $order->status == 0)
                            <form action="{{route('backend.order.cancellation', ['id' => $order->id])}}" method="post" class="d-inline-block float-left col-2">
                                @csrf
                                &nbsp;<button type="submit" style="border: none; width: 50px; height: 30px; border-radius: 4px; line-height: 100%" class="bg-danger" >Huỷ</button>
                            </form>
                        @endif
                    </div>
                    <div class="card-body">
                        <p>Mã đơn hàng: {{$order->id}}</p>
                        <p>Tổng tiền: {{number_format($order->total_price)}} đ</p>
                        <p>Ngày cập nhật: {{ date('d/m/Y', strtotime($order->updated_at)) }}</p>
                        <p>Tình trạng:
                            @if($order->status == 0)
                                <span class="badge bg-warning widspan">{{ $order->order_status }}</span>
                            @elseif($order->status == 3)
                                <span class="badge bg-info widspan">{{ $order->order_status }}</span>
                            @elseif($order->status == 2)
                                <span class="badge bg-success widspan">{{ $order->order_status }}</span>
                            @elseif($order->status == 1)
                                <span class="badge bg-danger widspan">{{ $order->order_status }}</span>
                            @else
                                <span class="badge bg-dark widspan">{{ $order->order_status }}</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 float-left">
                <div class="card">
                    <div class="card-header" style="height: 50px">
                        <h3 class="card-title">Thông tin khách hàng</h3>
                    </div>
                    <div class="card-body">
                        <p>Họ tên: {{$user->name}}</p>
                        <p>Địa chỉ: {{$user->address}}</p>
                        <p>Số điện thoại: {{$user->phone}}</p>
                        <p>Địa chỉ email: {{$user->email}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 float-right">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách sản phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($products as $value)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>
                                        @if(count($value->images) > 0)
                                            <img src="{{$value->images[0]->image_url}}" width="40px">
                                        @endif
                                    </td>
                                    <td><a href="{{ route('frontend.product.show', ['id' => $value->id]) }}">{{$value->name}}</a></td>
                                    <td>{{number_format($value->sale_price)}}</td>
                                    <td>{{$value->pivot->quality}}</td>
                                    <td>{{number_format($value->pivot->quality*$value->sale_price)}}</td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection
