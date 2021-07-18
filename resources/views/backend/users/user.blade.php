
@extends('backend.layouts.master')
@section('title')
    Quản lý tài khoản
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Quản lý tài khoản</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Tài khoản</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 10px">
                <!-- general form elements -->
                <div class="col-3 float-left">
                    <ul id="aa" class="list-group">
                        <style>
                            aa>li:hover{
                                background-color: #007bff;
                            }
                        </style>
                        <div class="list-group-item">
                            <div style="width: 100%; height: 260px; background-color: white">
                                <img src="/storage/{{$user->avatar}}" width="200px"style="border-radius: 50%; margin-left: 17%; margin-top: 5px">
                                <h3 class="text-center font-weight-bold">{{$user->name}}</h3>
                            </div>
                        </div>
                        <li id="ud" class="list-group-item" style="background-color: #007bff">Cập nhật thông tin</li>
                        <li id="pd" class="list-group-item">Danh sách sản phẩm</li>
                        <li id="pf" class="list-group-item">Đổi mật khẩu</li>
                        <li  class="list-group-item"><a href="{{route('logout')}}" style="color: black">Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="col-9 float-right" style="background-color: white; border: 1px solid lightgrey; border-radius: 4px">
                    <form style="display: block" id="update" role="form" method="post" action="{{ route('backend.user.updateAcc', $user->id) }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input name="name" type="text" class="form-control" id="" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label  for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" id="" value="{{$user->address}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Điện thoại</label>
                                <input type="text" name="phone" class="form-control" id="" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh đại diện</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                    <div style="display: none" id="product" class="col-12 float-right">
                        <div class="">
                            <div class="card-header">
                                <h3 class="card-title">Danh sách sản phẩm</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>SL</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @for($j=0;$j<count($products);$j++)
                                        @if($products[$j]->user_id == $user->id)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>
                                                            <img src="{{$products[$j]->images[0]->image_url}}" width="40px">
                                                    </td>
                                                    <td><a href="{{ route('frontend.product.show', ['id' => $products[$j]->id]) }}">{{$products[$j]->name}}</a></td>
                                                    <td>{{number_format($products[$j]->sale_price)}}</td>
                                                    <td>{{$products[$j]->amount}}</td>
                                                    <td>
                                                        @if($products[$j]->status == 0)
                                                            <span class="badge bg-warning widspan">{{ $products[$j]->status_text }}</span>
                                                        @elseif($products[$j]->status == 1)
                                                            <span class="badge bg-info widspan">{{ $products[$j]->status_text }}</span>
                                                        @else
                                                            <span class="badge bg-danger widspan">{{ $products[$j]->status_text }}</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ date('d/m/Y', strtotime($products[$j]->updated_at)) }}</td>
                                                </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endif
                                    @endfor
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <form style="display: none" id="profile" role="form" method="post" action="{{ route('backend.user.updatePass', $user->id) }}" enctype="multipart/form-data" >
                    @csrf
                        <div class="col-12" >
                        <div class="left col-12 float-left" style="padding: 20px 0">
                            <label>Thay đổi mật khẩu</label>
                            <div class="card-body" style="">
                                <div class=" col-6 float-left">
                                    <input name="new_pwd" type="password" class="form-control" placeholder="Nhập mật khẩu mới" id="">
                                    @error('new_pwd')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-6 float-right">
                                    <input name="confirm_pwd" type="password" class="form-control" placeholder="Nhập lại mật khẩu"  id="">
                                    @error('confirm_pwd')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <script src="/backend/js/user.js"></script>

            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
@endsection
