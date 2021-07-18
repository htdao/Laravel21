<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index($id){
//        $rating = Rating::where('product_id', $id)->avg('rating');
//        $rating = round($rating);
        $product = Product::find($id);
        return view('frontend.rating', [
            'product' => $product,
        ]);
    }

    public function store(Request $request, $id){
        $product = Product::find($id);
        return view('frontend.rating');
    }
}
