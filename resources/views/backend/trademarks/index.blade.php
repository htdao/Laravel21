@extends('backend.layouts.master')
@section('title')
Thương hiệu
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
                <h1 class="m-0 text-dark">Thương hiệu</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Thương hiệu</a></li>
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
                        <h3 class="card-title">Thương hiệu mới</h3>

                        <form action="{{route('backend.trademark.index')}}" method="get" class="d-inline-block float-right col-9">
                            <div class="card-tools row float-right">
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
                                <th>Tên thương hiệu</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach($trademarks as $trademark)
                            <tr>
                                <td>{{$i}}</td>
                                <td><a href="">{{$trademark->name}}</a></td>
                                <td>{{ date('d/m/Y', strtotime($trademark->created_at)) }}</td>
                                <td>
                                    <a href="{{route('backend.trademark.edit', ['id' => $trademark->id])}}" class=" badge btn btn-success"><i class="material-icons">edit</i></a>
                                    <form action="{{route('backend.trademark.destroy', ['id' => $trademark->id])}}" method="POST" class="d-inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="delete_confirm badge btn btn-danger"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3 float-right mr-5">
                            {!! $trademarks->links() !!}
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
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
