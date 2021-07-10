<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Trademark;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->paginate(24);
        $trademarks = Trademark::all();
        return view('frontend.shop',[
            'products' => $products,
            'trademarks' => $trademarks,
        ]);
    }

    public function show($id){
        $product = Product::find($id);
        $product->content_more = json_decode($product->content_more, true);
        return view('frontend.products.product',[
            'product' => $product,
        ]);
    }

    public function cart(){
        return view('frontend.products.cart');
    }

    public function checkout(){
        $items = Cart::content();
        return view('frontend.products.checkout')->with(['items' => $items]);
    }
}
