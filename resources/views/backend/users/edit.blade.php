
@extends('backend.layouts.master')
@section('title')
Cập nhật người dùng
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Cập nhật người dùng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
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
                        <h3 class="card-title">Cập nhật người dùng</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ route('backend.user.update',$user->id) }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input name="name" type="text" class="form-control" id="" value="{{$user->name}}">
                                @error('name')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label  for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="" value="{{$user->email}}">
                                @error('email')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input name="password" type="password" class="form-control" id="" value="$user->password">
                                @error('password')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" id="" value="{{$user->address}}">
                                @error('address')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Điện thoại</label>
                                <input type="text" name="phone" class="form-control" id="" value="{{$user->phone}}">
                                @error('phone')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
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
                            <div class="form-group">
                                <label>Quyền</label>
                                <select name="role" class="form-control select2" style="width: 100%;">
                                    <option>Chọn quyền</option>
                                    @foreach(\App\Models\User::$role_text as $key => $value)
                                        <option value="{{ $key }}"
                                                @if($user->role == $key)
                                                selected
                                            @endif
                                        >{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{ route('backend.user.index') }}" class="btn btn-default">Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
@endsection
