<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::where('parent_id',0)->get();
        $trademarks = Trademark::all();
        $productSelling = Product::all();
        $newProducts = Product::orderBy('created_at', 'desc','10')->get();
        return view('frontend.home', [
            'categories' => $categories,
            'trademarks' => $trademarks,
            'productSelling' => $productSelling,
            'newProducts' => $newProducts,
        ]);
    }

    public function contact(){
        return view('frontend.contact');
    }
}
