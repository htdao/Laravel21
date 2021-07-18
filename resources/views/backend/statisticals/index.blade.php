@extends('backend.layouts.master')
@section('title')
    Thống kê
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"
@endsection
@section('script')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                prevText:"Tháng trước",
                nextText:'Tháng sau',
                dateFormat:'yy-mm-dd',
                dayNamesMin:['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'],
                duration:'slow'
            });

            $( "#datepicker2" ).datepicker({
                prevText:"Tháng trước",
                nextText:'Tháng sau',
                dateFormat:'yy-mm-dd',
                dayNamesMin:['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'],
                duration:'slow'
            });
        } );
    </script>
    <script>
        $(document).ready(function (){

            chart30daysorder();

            function chart30daysorder(){
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{route('backend.statistical.dayOrder')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {_token: _token},

                    success:function (data){
                        chart.setData(data);
                    }
                });
            }

            $('.dashboard-filter').change(function (){
                var dashboard_value = $(this).val();
                // alert(dashboard_value);
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{route('backend.statistical.filterAll')}}",
                    method: "POST",
                    dataType: "JSON",
                    data: {dashboard_value:dashboard_value,_token: _token},

                    success:function (data){
                        chart.setData(data);
                    }
                });
            });

            $('#btn-dashboard-filter').click(function (){
               var _token = $('input[name="_token"]').val();

               var from_date = $('#datepicker').val();
               var to_date = $('#datepicker2').val();
               $.ajax({
                   url:"{{route('backend.statistical.filterByDate')}}",
                   method: "POST",
                   dataType: "JSON",
                   data:{from_date:from_date,to_date:to_date,_token:_token},

                   success:function (data){
                       chart.setData(data);
                   }
               });
               //  alert('ok');

            });

             var chart = new Morris.Area({
                element: 'chart',
                lineColors: ['#3399ff','#004d99','black','black'],
                pointFillColors: ['#ffffff'],
                pointStrokeColors: ['black'],
                fillOpacity:0.2,
                hideHover: 'auto',
                parseTime: false,
                xkey: 'period',
                ykeys: ['revenue', 'profit', 'order', 'quantity'],
                behaveLikeLine: true,
                labels: ['Doanh số', 'Lợi nhuận', 'Đơn hàng' , 'Sản phẩm']
            });

        });
    </script>
@endsection
@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Thống kê</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Thống kê</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
{{--     <div class="card">--}}
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thống kê doanh số</h3>
                    </div>
                    <div class="card-body">
                    <form autocomplete="off" style="" class="row">
                        @csrf
                        <div class="col-md-2">
                            <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>
                            <button type="button" id="btn-dashboard-filter" class="btn btn-primary" style="height: 35px;">Thống kê</button>

                        </div>
                        <div class="col-md-2">
                            <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-md-2">
                            <p>
                                Thống kê theo:
                                <select class="dashboard-filter form-control">
                                    <option>Chọn</option>
                                    <option value="week">7 ngày trước</option>
                                    <option value="month1">Tháng trước</option>
                                    <option value="month2">Tháng này</option>
                                    <option value="year">365 ngày trước</option>
                                </select>
                            </p>
                        </div>
                    </form>
                    <div class="col-md-12" style="width: 100%;">
                        <div id="chart" style="height: 400px;width: 100%"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}
    </div>
@endsection
