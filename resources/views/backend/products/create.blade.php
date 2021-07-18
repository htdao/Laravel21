
@extends('backend.layouts.master')
@section('title')
Thêm sản phẩm mới
@endsection
@section('css')

@endsection
@section('script')
    <script>
        function previewImages() {
            var preview = document.querySelector('.gallery');

            if (this.files) {
                [].forEach.call(this.files, readAndPreview);
            }

            function readAndPreview(file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    return alert(file.name + " is not an image");
                }

                var reader = new FileReader();

                reader.addEventListener("load", function () {
                    var image = new Image();
                    // image.width = 150;
                    // image.height = 150;
                    image.title = file.name;
                    image.src = this.result;

                    preview.appendChild(image);
                });

                reader.readAsDataURL(file);

            }
        }

        document.querySelector('#listImg').addEventListener("change", previewImages);
    </script>

    <script>
        $(document).ready(function () {
            var i = 1;
            $("#tes").click(function () {
                i++;
                $('#clone').append('<div class="row" id="row' + i + '">' +
                    '<div class="col-4 col-lg-2"><div class="form-group">' +
                    '<input type="text" class="form-control" id="" name="key[]" value="">' +
                    '</div></div><div class="col-8 col-lg-10">' +
                    '<div class="form-group" style="position: relative;">' +
                    '<input type="text" class="form-control" id="" name="val[]" value="">' +
                    '<span class="btn btn-sm btn-danger closee d-flex align-items-center justify-content-center" id="' + i + '" style="position: absolute; right: 0; top: 0; height: 100%; cursor: pointer;">Xoá</span>' +
                    '</div></div></div>')
            });

            $(document).on('click', '.closee', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });
        });
    </script>
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tạo sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Tạo sản phẩm</li>
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
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('backend.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="" placeholder="Điền tên sản phẩm ">
                            @error('name')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input name="amount" value="{{ old('amount') }}" type="text" class="form-control" id="" placeholder="Điền số lượng">
                            @error('amount')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Danh mục sản phẩm</label>
                                    <select name="category_id" class="form-control select2" style="width: 100%;">
                                        <option value="0">Chọn danh mục</option>
                                        <option value="0">Danh mục cha</option>
                                        @foreach($categories as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Thương hiệu sản phẩm</label>
                                    <select name="trademark_id" class="form-control select2" style="width: 100%;">
                                        <option value="0">Chọn thương hiệu</option>
                                        @foreach($trademarks as $trademark)
                                            <option value="{{$trademark->id}}">{{$trademark->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá gốc</label>
                                        <input value="{{ old('origin_price') }}" name="origin_price" type="text" class="form-control" placeholder="Điền giá gốc">
                                        @error('origin_price')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá bán</label>
                                        <input value="{{ old('sale_price') }}" type="text" name="sale_price" class="form-control" placeholder="Điền giá bán">
                                        @error('sale_price')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                <textarea class="textarea" value="{{ old('content') }}" name="content" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                @error('content')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <style>
                                    .gallery > img {
                                        width: 150px;
                                        margin-right: 10px;
                                    }
                                </style>
                                <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                                <div class="input-group">
                                    <div class="form-file">
                                        <input type="file" class="custom-file-input" id="listImg" accept="image/*"
                                               name="image[]" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                        <div class="gallery d-flex flex-wrap" style="margin-top: 20px;"></div>
                                    </div>
                                </div>
                                @error('image')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Trạng thái sản phẩm</label>
                                <select name="status" class="form-control select2" style="width: 100%;">
                                    <option value="0">Chọn trạng thái</option>
                                    @foreach(\App\Models\Product::$status_text as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thông số sản phẩm</label>
                            <p><label id="tes" class="btn btn-sm btn-success">Thêm</label></p>
                            <div class="col-md-10">
                                <div id="clone">
                                </div>
                            </div>
                            @error('content_more')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Tạo mới</button>
                            <a href="{{ route('backend.product.index') }}" class="btn btn-default">Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
    @endsection
