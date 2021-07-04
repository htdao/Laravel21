@extends('backend.layouts.master')
@section('title')
Sản phẩm
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        $('.delete-confirm').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Bạn có muốn xóa không?`,
                text: "Nếu bạn xóa nó, bạn sẽ không thể khôi phục lại được",
                icon: "error",
                buttons: ["Không", "Xóa"],
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(Session::has('success'))
        <script>
            toastr.success("{!! Session::get('success') !!}");
        </script>
    @elseif(Session::has('error'))
        <script>
            toastr.error("{!! Session::get('error') !!}");
        </script>
    @endif
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
                                <th>STT</th>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Trạng thái</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>

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
                                <td><a href="{{ route('backend.product.show', ['id' => $value->id]) }}">{{$value->name}}</a></td>
                                <td>{{number_format($value->sale_price,3)}}</td>
                                <td>
                                    @if($value->status == 0)
                                        <span class="badge bg-warning widspan">{{ $value->status_text }}</span>
                                    @elseif($value->status == 1)
                                        <span class="badge bg-info widspan">{{ $value->status_text }}</span>
                                    @else
                                        <span class="badge bg-danger widspan">{{ $value->status_text }}</span>
                                    @endif
                                </td>
                                <td>{{ date('d/m/Y', strtotime($value->updated_at)) }}</td>
                                <td>
                                    <a href="{{route('backend.product.show', ['id' => $value->id])}}" class="badge btn btn-info"><i class="material-icons">remove_red_eye</i></a>
                                    <a href="{{route('backend.product.edit', ['product' => $value->id])}}" class=" badge btn btn-success"><i class="material-icons">edit</i></a>
                                        <form action="{{route('backend.product.destroy', ['product' => $value->id])}}" method="POST" class="d-inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="badge btn btn-danger delete-confirm"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
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
