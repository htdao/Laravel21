<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Trademark;
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

    public function detail(){
        return view('frontend.products.product');
    }

    public function cart(){
        return view('frontend.products.cart');
    }

    public function checkout(){
        return view('frontend.products.checkout');
    }
}
