@extends('backend.layouts.master')
@section('title')
    Trang chủ
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trang chủ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng điêu khiển</li>
                    </ol>
                </div><!-- /.col -->
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{count(\App\Models\Order::all())}}</h3>

                            <p>Đơn hàng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{count(\App\Models\Trademark::all())}}</h3>

                                <p>Thương hiệu</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    @endif
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ count($products) }}</h3>

                            <p>Sản phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    @if(\Illuminate\Support\Facades\Auth::user()->role ==0)
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ count($users) }}</h3>

                            <p>Người dùng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->role ==1)
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ count(\App\Models\Category::all()) }}</h3>

                                <p>Danh mục</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    @endif
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{number_format($sumR,0,'.','.')}}đ</h3>

                            <p>Doanh thu</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{count(\App\Models\Order::all())}}</h3>

                                <p>Đơn hàng</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    @endif
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sản phẩm mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Thương hiệu</th>
                                    <th>Ngày tạo</th>
                                    <th>Tình trạng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $j=0;
                                @endphp
                                @foreach($products as $product)
                                    @php
                                        $j++;
                                    @endphp
                                    @if($j==6)
                                        @break
                                    @endif
                                    <tr>
                                        <td>{{$j}}</td>
                                        <td>
                                            @if(count($product->images) > 0)
                                                <img src="{{$product->images[0]->image_url}}" width="40px">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('frontend.product.show', ['id' => $product->id])}}">{{ $product->name }}</a>
                                        </td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>
                                            @for($i=0;$i<count($trademarks);$i++)
                                                @if($product->trademark_id == $trademarks[$i]->id){{$trademarks[$i]->name}}
                                                @endif
                                            @endfor
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($product->created_at)) }}</td>
                                        <td>
                                            @if($product->status == -1)
                                                <span
                                                    class="badge bg-warning widspan">{{ $product->status_text }}</span>
                                            @elseif($product->status == 1)
                                                <span class="badge bg-info widspan">{{ $product->status_text }}</span>
                                            @else
                                                <span class="badge bg-danger widspan">{{ $product->status_text }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh mục mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên danh mục</th>
                                    <th>Danh mục cha</th>
                                    <th>Thời gian</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach($categories as $cate)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td><a href="{{route('backend.category.show', $cate->id)}}">{{$cate->name}}</a></td>
                                        <td>
                                            @if($cate->parent_id==0)
                                                <div class="col-md-10">
                                                    <p>Danh mục cha</p>
                                                </div>
                                            @else
                                                <div class="col-md-10">
                                                    @for($i=0;$i<count($parents);$i++)
                                                        @if($cate->parent_id==$parents[$i]->id)
                                                            <p>{{$parents[$i]->name}}</p>
                                                        @endif
                                                    @endfor
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($cate->updated_at)) }}</td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                    @if($i==6)
                                        @break
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </div>
    </section>
@endsection
