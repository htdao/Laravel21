<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Revenue;
use App\Models\Statistic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('status', 'asc')->paginate(10);
        return view('backend.orders.index',[
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $products = $order->products()->get();
        $user = User::find($order->user_id);
//        dd($user);
        return view('backend.orders.show',[
            'order' => $order,
            'user' => $user,
            'products' => $products,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function status($id, Request $request)
    {

        $order = Order::find($id);
        if ($order->status == 0){
            $order->status = 2;
        } elseif ($order->status == 2){
            $order->status = 3;
            $order->updated_at = Carbon::now();

            //Cập nhật doanh thu
            $revenue = new Revenue();
            $revenue->order_id = $order->id;
            $revenue->total_price = $order->total_price;
            $revenue->created_at = Carbon::now();
            $revenue->updated_at = Carbon::now();
            $revenue->save();

            $qty = 0;
            $prc = $order->total_price;
            $tg = 0;
            $prf = 0;
            $pr = $order->products;
            foreach ($pr as $prt) {
                if ($prt->pivot->order_id == $order->id) {
                    $qty += $prt->pivot->quality;
                    $tg += $prt->pivot->quality * $prt->origin_price;
                }
            }
            $prf += $prc - $tg;
//            dd($prf);

            //Cập nhật bảng thống kê
            $date = Carbon::now()->toDateString();
            $check = 0;
            $statistics = Statistic::all();
            foreach ($statistics as $value){
                if ($date == $value->order_date){
                    $value->total_order +=1;
                    $value->order_date = $date;
                    $value->quantity += $qty;
                    $value->revenue += $prc;
                    $value->profit +=$prf;
                    $check=1;
                    $value->save();
                }
            }

                if($check == 0){
                        $statistic = new Statistic();
                        $statistic->order_date = $date;
                        $statistic->total_order = 1;
                        $statistic->quantity = $qty;
                        $statistic->revenue = $prc;
                        $statistic->profit = $prf;
                        $statistic->save();
                }

        }elseif ($order->status == 1){
            $order->status = 4;

            //Thay đổi số lượng và số Sản phẩm đã bán
            $products = $order->products;
            foreach ($products as $product){
                $product->amount += $product->pivot->quality;
                $product->quan_sold -= $product->pivot->quality;
                $product->save();
            }
        }
        $order->save();
        return redirect()->route('backend.order.index');
    }

    public function cancellationOrder($id){
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return redirect()->route('frontend.account', $order->user_id);
    }

    public function cancellation($id){
        $order = Order::find($id);
        $order->status = 4;
        $order->save();

        //Thay đổi số lượng và số Sản phẩm đã bán
        $products = $order->products;
        foreach ($products as $product){
            $product->amount += $product->pivot->quality;
            $product->quan_sold -= $product->pivot->quality;
            $product->save();
        }

        return redirect()->route('backend.order.show', $order->id);
    }


}
