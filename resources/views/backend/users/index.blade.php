@extends('backend.layouts.master')
@section('title')
Người dùng
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
                <h1 class="m-0 text-dark">Danh sách người dùng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                    <li class="breadcrumb-item active">Danh sách</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
@section('content')
<div class="container-fluid">
        <!-- Main row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <h3 class="card-title col-8">Danh sách người dùng</h3>
                        <form action="{{route('backend.user.index')}}" method="get" class="d-inline-block float-right col-4">
                            <div class="input-group input-group-sm col-6 float-left">
                                <select name="role" class="col-8 form-control select2" style="width: 100%;padding: 0">
                                    <option selected value="">Chọn quyền</option>
                                    @foreach(\App\Models\User::$role_text as $key => $value)
                                        <option value="{{$key}}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append col-4" style="padding: 0">
                                    <button type="submit" class="btn btn-default">Lọc</button>
                                </div>
                            </div>
                            <div class="card-tools float-right col-6">
                                <div class="input-group input-group-sm" style="padding: 0">
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
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach($users as $value)
                                @if($value->id != \Illuminate\Support\Facades\Auth::user()->id)
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                    <img src="/storage/{{$value->avatar}}" width="40px">
{{--                                    <span >{{$value->avatar}}</span>--}}
                                </td>
                                <td><a href="{{route('backend.user.show', $value->id)}}">{{$value->name}}</a></td>
                                <td>{{$value->email}}</td>
                                <td>{{ $value->role_text }}</td>
                                <td>{{date('d/m/Y', strtotime($value->created_at))}}</td>
                                <td>
                                    <a href="{{route('backend.user.show', $value->id)}}" class="badge btn btn-info"><i class="material-icons">remove_red_eye</i></a>
                                    @if($value->role != 0)
                                    <a href="{{route('backend.user.edit', $value->id)}}" class=" badge btn btn-success"><i class="material-icons">edit</i></a>
                                    <form action="{{route('backend.user.destroy', $value->id)}}" method="POST" class="d-inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="badge btn btn-danger delete_confirm"><i class="material-icons">delete</i></button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                                @php
                                $i++;
                                @endphp
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        <div>{{ $users->links() }}</div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@if(Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>
@elseif(Session::has('error'))
    <script>
        toastr.success("{!! Session::get('error') !!}");
    </script>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $('.delete_confirm').click(function(event){
        var form = $(this).closest('form');
        var name = $(this).data('name');
        event.preventDefault();
        swal({
            title: 'Bạn có muốn xoá không?',
            text: 'Nếu bạn xoá nó, bạn sẽ không thể khoi phục lại được',
            icon: 'error',
            buttons: ['không', 'xoá'],
            dangerMode: true,
        })
            .then((willDelete)=>{
                if(willDelete){
                    form.submit();
                }
            });
    });
</script>
@endsection
