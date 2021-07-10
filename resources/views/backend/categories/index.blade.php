@extends('backend.layouts.master')
@section('title')
Danh mục
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
                <h1 class="m-0 text-dark">Danh mục sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
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
                        <h3 class="card-title">Danh mục mới</h3>

                        <form action="{{route('backend.category.index')}}" method="get" class="d-inline-block float-right col-9">
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
                                <th>Tên danh mục</th>
                                <th>Danh mục cha</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach($categories as $cate)
                            <tr>
                                <td>{{$i}}</td>
                                <td><a href="">{{$cate->name}}</a></td>
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
                                <td>
                                    <a href="{{route('backend.category.show', ['id' => $cate->id])}}" class="badge btn btn-info"><i class="material-icons">remove_red_eye</i></a>
                                    <a href="{{route('backend.category.edit', ['id' => $cate->id])}}" class=" badge btn btn-success"><i class="material-icons">edit</i></a>
                                    <form action="{{route('backend.category.destroy', ['id' => $cate->id])}}" method="POST" class="d-inline-block">
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
                        <div class="mt-3 float-right mr-5">
                            {!! $categories->links() !!}
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
