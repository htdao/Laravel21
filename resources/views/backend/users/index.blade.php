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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    <div class="card-header">
                        <h3 class="card-title">Danh sách người dùng</h3>

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
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                    <img src="/storage/{{$value->avatar}}" width="40px">
{{--                                    <span >{{$value->avatar}}</span>--}}
                                </td>
                                <td><a href="">{{$value->name}}</a></td>
                                <td>{{$value->email}}</td>
                                <td>{{ $value->role_text }}</td>
                                <td>{{date('d/m/Y', strtotime($value->created_at))}}</td>
                                <td>
                                    <a href="{{route('backend.user.show', ['id' => $value->id])}}" class="badge btn btn-info"><i class="material-icons">remove_red_eye</i></a>
                                    <a href="{{route('backend.user.edit', ['user' => $value->id])}}" class=" badge btn btn-success"><i class="material-icons">edit</i></a>
                                    <form action="{{route('backend.user.destroy', ['user' => $value->id])}}" method="POST" class="d-inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="badge btn btn-danger"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                                @php
                                $i++;
                                @endphp
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
