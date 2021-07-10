<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index(){
        $items = Cart::content();
        return view('frontend.products.cart')->with(['items' => $items]);
    }

    public function add(Request $request, $id){

        $qty = $request->get('qty');
        if(empty($qty)) {
            $qty = 1;
        }
        $product = Product::find($id);
        Cart::add($product->id, $product->name, $qty, $product->sale_price, 0,[
            'image' => $product->images[0]->path,
        ]);
//        return redirect()->route('frontend.product.cart');
        return redirect()->back();
    }

    public function remove($cart_id){
        Cart::remove($cart_id);
        return redirect()->route('frontend.product.cart');
    }

    public function destroy(){
        Cart::destroy();
        return redirect()->route('frontend.product.cart');
    }

    public function increment($rowId){
        $cart = Cart::get($rowId);
        Cart::update($rowId, $cart->qty+1);
        return redirect()->route('frontend.product.cart');
    }

    public function decrement($rowId){
        $cart = Cart::get($rowId);
        Cart::update($rowId, $cart->qty-1);
        return redirect()->route('frontend.product.cart');
    }

    public function store(Request $request){
        $data = $request->except("_token");
        $data['user_id'] = Auth::user()->id;
        $data['customer_name'] = $request->name;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['total_price'] = Cart::total();
        $data['status'] = 0;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();

        $order = Order::create($data);

        $items = Cart::content();
        foreach ($items as $item){
            $order->products()->attach($item->id,[
                'price' => $item->price,
                'quality' => $item->qty,
                'total_price' => $item->price*$item->qty,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
        }
        Cart::destroy();
        if($order){
            return redirect()->route('frontend.account',['id' => Auth::user()->id])->with("success", "Đặt hàng thành công!");
        }
        return redirect()->route('frontend.product.cart')->with("error", "Đặt hàng thất bại!");
    }
}
