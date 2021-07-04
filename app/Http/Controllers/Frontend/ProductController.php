<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('frontend.shop');
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
