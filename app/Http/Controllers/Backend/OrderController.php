<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
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
            if ($request->session()->has('revenue')) {
                $s = session('revenue');
                $s = $s + $order->total_price;
//                dd($s);
                session(['revenue' => $s]);
            }else{
                session(['revenue' => $order->total_price]);
//                $s = session('revenue');
//                dd($s);
            }

        }elseif ($order->status == 1){
            $order->status = 4;
        }
        $order->save();
        return redirect()->route('backend.order.index');
    }


}
