@extends('backend.layouts.master')
@section('title')
    Giao diện
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
                <h1 class="m-0 text-dark">Slide trang chủ</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Giao diện</a></li>
                    <li class="breadcrumb-item active">Slide</li>
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
                        <h3 class="card-title col-8">Danh sách slide</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($slides as $slide)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>
                                            <img src="/storage/{{$slide->image}}" width="100px">
                                        </td>
                                        <td>{{$slide->title}}</td>
                                        <td>{{$slide->description}}</td>
                                        <td>{{date('d/m/Y', strtotime($slide->created_at))}}</td>
                                        <td>
                                                <a href="{{route('backend.home.show', $slide->id)}}" class="badge btn btn-info"><i class="material-icons">remove_red_eye</i></a>
                                                <a href="{{route('backend.home.edit', $slide->id)}}" class=" badge btn btn-success"><i class="material-icons">edit</i></a>
                                                <form action="{{route('backend.home.destroy', $slide->id)}}" method="POST" class="d-inline-block">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="badge btn btn-danger delete_confirm"><i class="material-icons">delete</i></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                            @endforeach
                            </tbody>
                        </table>
                        <div></div>
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
