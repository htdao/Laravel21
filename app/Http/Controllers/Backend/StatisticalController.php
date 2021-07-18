<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Revenue;
use App\Models\Statistic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticalController extends Controller
{
    public function index(){
        return view('backend.statisticals.index');
    }

    public function filterByDate(Request $request){
        $data = $request->all();
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $get = Statistic::whereBetween('order_date', [$from_date,$to_date])->orderBy('created_at', 'ASC')->get();

        foreach ($get as $key => $value){
            $chart_data[] = array(
                'period' => $value->order_date,
                'order' => $value->total_order,
                'revenue' => $value->revenue,
                'quantity' => $value->quantity,
                'profit' => $value->profit,
            );
        }
        echo $data = json_encode($chart_data);
    }

    public function dayOrder(){
//        $order_date = $_GET['date'];
//        $order = Order::where('created_at', $order_date)->orderBy('created_at', 'DESC')->get();
//        return view('backend.statisticals.index')->with(compact('order'));

        $month = Carbon::now()->subDays(30)->toDateString();
//        dd($month);
        $now = Carbon::now()->toDateString();

        $get = Statistic::whereBetween('order_date', [$month,$now])->orderBy('order_date', 'ASC')->get();

        foreach ($get as $key => $value){
            $chart_data[] = array(
                'period' => $value->order_date,
                'order' => $value->total_order,
                'revenue' => $value->revenue,
                'quantity' => $value->quantity,
                'profit' => $value->profit,
            );
        }

        echo $data = json_encode($chart_data);
    }

    public function filterAll(Request $request){
        $data = $request->all();

        $nsmonth = Carbon::now()->startOfMonth()->toDateString();
        $lsmonth = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $llmonth = Carbon::now()->subMonth()->endOfMonth()->toDateString();
        $week = Carbon::now()->subDays(7)->toDateString();
        $year = Carbon::now()->subDays(365)->toDateString();
        $now = Carbon::now()->toDateString();

        if ($data['dashboard_value'] == 'week'){
            $get = Statistic::whereBetween('order_date', [$week, $now])->orderBy('order_date','ASC')->get();
        }elseif ($data['dashboard_value'] == 'month1'){
            $get = Statistic::whereBetween('order_date', [$lsmonth, $llmonth])->orderBy('order_date','ASC')->get();
        }elseif ($data['dashboard_value'] == 'month2'){
            $get = Statistic::whereBetween('order_date', [$nsmonth, $now])->orderBy('order_date','ASC')->get();
        }else{
            $get = Statistic::whereBetween('order_date', [$year, $now])->orderBy('order_date','ASC')->get();
        }

        foreach ($get as $key => $value){
            $chart_data[] = array(
                'period' => $value->order_date,
                'order' => $value->total_order,
                'revenue' => $value->revenue,
                'quantity' => $value->quantity,
                'profit' => $value->profit,
            );
        }

        echo $data = json_encode($chart_data);
    }
}
