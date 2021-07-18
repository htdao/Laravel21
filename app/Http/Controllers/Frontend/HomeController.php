<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Home;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slides = Home::orderBy('created_at', 'desc')->limit(5)->get();
        $categories = Category::where('parent_id',0)->get();
        $trademarks = Trademark::all();
        $productSelling = Product::orderBy('quan_sold', 'desc')->limit(10)->get();
        $newProducts = Product::orderBy('created_at', 'desc')->limit(10)->get();
        return view('frontend.home', [
            'slides' => $slides,
            'categories' => $categories,
            'trademarks' => $trademarks,
            'productSelling' => $productSelling,
            'newProducts' => $newProducts,
        ]);
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function category($id){
        $products = Product::where('category_id', $id)->orderBy('quan_sold', 'DESC')->get();
        $category = Category::where('id', $id)->get();
        return view('frontend.categories', [
            'products' => $products,
            'category' => $category
        ]);
    }

    public function trademark($id){
        $products = Product::where('trademark_id', $id)->orderBy('quan_sold', 'DESC')->get();
        $trademark = Trademark::where('id',$id)->get();
//        dd($trademark);
        return view('frontend.trademarks', [
            'products' => $products,
            'trademark' => $trademark
        ]);
    }
}
