
@extends('backend.layouts.master')
@section('title')
Cập nhật sản phẩm
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content-header')
<div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Cập nhật sản phẩm</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Cập nhật sản phẩm</li>
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
                        <h3 class="card-title">Cập nhật sản phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('backend.product.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="">
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input name="amount" value="{{ $product->amount }}" type="text" class="form-control" id="" placeholder="Điền số lượng">
                                @error('amount')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Danh mục sản phẩm</label>
                                        <select name="category_id" class="form-control select2" style="width: 100%;">
                                            <option>Chọn danh mục</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                @if($category->id == $product->category_id)
                                                    {{ 'selected' }}
                                                    @endif
                                                >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Thương hiệu sản phẩm</label>
                                        <select name="trademark_id" class="form-control select2" style="width: 100%;">
                                            <option>Chọn thương hiệu</option>
                                            @foreach($trademarks as $trademark)
                                                <option value="{{ $trademark->id }}"
                                                @if($trademark->id == $product->trademark_id)
                                                    {{ 'selected' }}
                                                    @endif
                                                >{{ $trademark->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá gốc</label>
                                        <input value="{{ $product->origin_price }}" name="origin_price" type="text" class="form-control" placeholder="Điền giá gốc">
                                        @error('origin_price')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá khuyến mại</label>
                                        <input value="{{ $product->sale_price }}"  type="text" name="sale_price" class="form-control" placeholder="Điền giá khuyến mại">
                                        @error('sale_price')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                <textarea class="textarea" name="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product->content }}</textarea>
                                @error('content')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh sẳn phẩm</label>
                                <div class="input-group">
                                    <div class="form-file">
                                        <input type="file" class="custom-file-input" id="listImg" accept="image/*"
                                               name="image[]" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        <div class="gallery d-flex flex-wrap" style="margin-top: 20px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái sản phẩm</label>
                                <select name="status" class="form-control select2" style="width: 100%;">
                                    <!-- <option value="{{ $product->status }}"></option> -->
                                    @foreach(\App\Models\Product::$status_text as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thông số sản phẩm</label>
                                <p><label id="tes" class="btn btn-sm btn-success">Thêm</label></p>
                                <div class="col-md-10" id="clone">
                                    @if(!empty($product->content_more_json))
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach($product->content_more_json as $key => $value)
                                            @php
                                                $i++;
                                            @endphp
                                            <div class="row" id="row{{ $i }}">
                                                <div class="col-4 col-lg-2">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="" name="key[]"
                                                               value="{{ $key }}">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-lg-10">
                                                    <div class="form-group" style="position: relative;">
                                                        <input type="text" class="form-control" id="" name="val[]"
                                                               value="{{ $value }}">
                                                        <span
                                                            class="btn btn-sm btn-danger closee d-flex align-items-center justify-content-center"
                                                            id="{{ $i }}"
                                                            style="position: absolute; right: 0; top: 0; height: 100%; cursor: pointer;">Close</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{ route('backend.product.index') }}" class="btn btn-default">Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
<style>
    .gallery > img {
        width: 200px;
        margin-right: 20px;
    }
    #buu {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
    }
    #buu > img {
        width: 250px;
        height: 200px;
        margin-right: 20px;
    }
    #boxImg {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
    }
    .gallery > img {
        width: 250px;
        margin-right: 20px;
    }
</style>

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
        @if(!empty($product->content_more_json))
        var i = {{ count($product->content_more_json) }};
        @else
        var i = 0;
        @endif

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
